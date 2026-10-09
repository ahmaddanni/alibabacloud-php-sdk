<?php

declare(strict_types=1);

namespace Dew\Acs\Tablestore;

use Dew\Acs\Tablestore\Cells\Attribute;
use Dew\Acs\Tablestore\Cells\Cell;
use Dew\Acs\Tablestore\Cells\HasValue;
use Dew\Acs\Tablestore\Cells\PrimaryKey;
use Dew\Acs\Tablestore\Cells\Tag;

final class PlainBufferEncoder
{
    use Conditionable;

    /**
     * The row checksum.
     */
    private int $rowChecksum = 0;

    /**
     * Create a row writer instance.
     */
    public function __construct(
        protected PlainBufferWriter $buffer,
        protected Crc $crc
    ) {
        //
    }

    /**
     * Encode a buffer header.
     */
    public function writeHeader(): self
    {
        $this->buffer->writeLittleEndian32(Tag::HEADER->value);

        return $this;
    }

    /**
     * Encode the row.
     *
     * @param  \Dew\Acs\Tablestore\Cells\Cell[]  $cells
     */
    public function addRow(array $cells): self
    {
        $pks = array_filter($cells, fn ($cell): bool => $cell instanceof PrimaryKey);
        $attrs = array_filter($cells, fn ($cell): bool => $cell instanceof Attribute);

        return $this->newRow()
            ->addPk($pks)
            ->when($attrs !== [], fn (): self => $this->addAttr($attrs))
            ->addDeleteMarker(false)
            ->addRowChecksum($this->rowChecksum);
    }

    /**
     * Encode the row for deletion.
     *
     * @param  \Dew\Acs\Tablestore\Cells\Cell[]  $pks
     */
    public function deleteRow(array $pks): self
    {
        return $this->newRow()
            ->addPk($pks)
            ->addDeleteMarker(true)
            ->addRowChecksum($this->rowChecksum);
    }

    /**
     * Start a new row.
     */
    private function newRow(): self
    {
        $this->rowChecksum = 0;

        return $this;
    }

    /**
     * Encode the primary keys.
     *
     * pk = tag_pk cell_1 [cell_2] [cell_3]
     *
     * @param  \Dew\Acs\Tablestore\Cells\Cell[]  $cells
     */
    public function addPk(array $cells): self
    {
        // tag_pk
        $this->buffer->writeChar(Tag::PK->value);

        foreach ($cells as $cell) {
            $this->addCell($cell);
        }

        return $this;
    }

    /**
     * Encode the attributes.
     *
     * attr = tag_attr cell1 [cell_2] [cell_3]
     *
     * @param  \Dew\Acs\Tablestore\Cells\Cell[]  $cells
     */
    public function addAttr(array $cells): self
    {
        // tag_attr
        $this->buffer->writeChar(Tag::ATTR->value);

        foreach ($cells as $cell) {
            $this->addCell($cell);
        }

        return $this;
    }

    /**
     * Encode the cell.
     *
     * cell = tag_cell cell_name [cell_value] [cell_op] [cell_ts] cell_checksum
     */
    public function addCell(Cell $cell): self
    {
        // tag_cell
        $this->buffer->writeChar(Tag::CELL->value);

        $this->rowChecksum = $this->crc->char(
            $checksum = $cell->getChecksumBy($this->crc),
            $this->rowChecksum
        );

        $this->addCellName($cell);

        if ($cell instanceof HasValue) {
            $this->addCellValue($cell);
        }

        if ($cell instanceof Attribute && $cell->getOperation() !== null) {
            $this->addCellOp($cell->getOperation()->value);
        }

        if ($cell instanceof Attribute && $cell->getTimestamp() !== null) {
            $this->addCellTs($cell->getTimestamp());
        }

        return $this->addCellChecksum($checksum);
    }

    /**
     * Encode the cell name.
     *
     * cell_name = tag_cell_name formatted_value
     * formatted_value = value_len value_data
     * value_len = int32
     */
    public function addCellName(Cell $cell): self
    {
        // tag_cell_name
        $this->buffer->writeChar(Tag::CELL_NAME->value);

        // value_len
        $this->buffer->writeLittleEndian32(strlen($cell->name()));

        // value_data
        $this->buffer->write($cell->name());

        return $this;
    }

    /**
     * Encode the cell value.
     *
     * cell_value = tag_cell_value formatted_value
     */
    public function addCellValue(HasValue $cell): self
    {
        // tag_cell_value
        $this->buffer->writeChar(Tag::CELL_VALUE->value);
        $this->buffer->writeLittleEndian32($cell->valueSize());
        $cell->toFormattedValue($this->buffer);

        return $this;
    }

    /**
     * Encode the cell timestamp.
     *
     * cell_ts = tag_cell_ts cell_ts_value
     * cell_ts_value = int64
     */
    public function addCellTs(int $timestamp): self
    {
        // tag_cell_ts
        $this->buffer->writeChar(Tag::CELL_TS->value);
        $this->buffer->writeLittleEndian64($timestamp);

        return $this;
    }

    /**
     * Encode the cell operation.
     *
     * cell_op = tag_cell_op cell_op_value
     * cell_op_value = delete_all_version | delete_one_version | increment
     * delete_all_version = 0x01 (1byte)
     * delete_one_version = 0x03 (1byte)
     * increment = 0x04 (1byte)
     */
    public function addCellOp(int $operation): self
    {
        // tag_cell_op
        $this->buffer->writeChar(Tag::CELL_OP->value);
        $this->buffer->writeChar($operation);

        return $this;
    }

    /**
     * Encode the cell checksum.
     *
     * cell_checksum = tag_cell_checksum row_crc8
     */
    public function addCellChecksum(int $checksum): self
    {
        // tag_cell_checksum
        $this->buffer->writeChar(Tag::CELL_CHECKSUM->value);
        $this->buffer->writeChar($checksum);

        return $this;
    }

    /**
     * Encode the delete marker.
     */
    public function addDeleteMarker(bool $isDeleteRow): self
    {
        if ($isDeleteRow) {
            $this->buffer->writeChar(Tag::DELETE_MARKER->value);
        }

        $this->rowChecksum = $this->crc->char((int) $isDeleteRow, $this->rowChecksum);

        return $this;
    }

    /**
     * Encode the row checksum.
     *
     * row_checksum = tag_row_checksum row_crc8
     */
    public function addRowChecksum(int $checksum): self
    {
        // tag_row_checksum
        $this->buffer->writeChar(Tag::ROW_CHECKSUM->value);
        $this->buffer->writeChar($checksum);

        return $this;
    }

    /**
     * Dump the buffer for debugging.
     */
    public function dump(): void
    {
        $this->buffer->dump();
    }

    /**
     * Get the row buffer.
     */
    public function getBuffer(): string
    {
        return $this->buffer->getBuffer();
    }
}
