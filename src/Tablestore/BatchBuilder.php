<?php

declare(strict_types=1);

namespace Dew\Acs\Tablestore;

use Dew\Acs\Tablestore\Messages\OperationType;

final class BatchBuilder
{
    use HasConditions;

    /**
     * The table name.
     */
    private string $table;

    /**
     * The raw buffer.
     */
    private PlainBufferEncoder $buffer;

    /**
     * The operation type.
     */
    public ?int $operation = null;

    /**
     * Query rows from the table.
     */
    public function get(): void
    {
        $this->operation = null;
        $this->buffer = $this->newBuffer()->addRow($this->whereKeys);
    }

    /**
     * Insert a row into the table.
     *
     * @param  \Dew\Acs\Tablestore\Cells\Cell[]  $cells
     */
    public function insert(array $cells): void
    {
        $this->operation = OperationType::PUT;
        $this->buffer = $this->newBuffer()->addRow($cells);
    }

    /**
     * Modify existing attributes in the table.
     *
     * @param  \Dew\Acs\Tablestore\Cells\Cell[]  $attributes
     */
    public function update(array $attributes): void
    {
        $this->operation = OperationType::UPDATE;
        $this->buffer = $this->newBuffer()->addRow([
            ...$this->whereKeys,
            ...$attributes,
        ]);
    }

    /**
     * Remove a row from the table.
     */
    public function delete(): void
    {
        $this->operation = OperationType::DELETE;
        $this->buffer = $this->newBuffer()->deleteRow($this->whereKeys);
    }

    /**
     * Create a new buffer.
     */
    private function newBuffer(): PlainBufferEncoder
    {
        $buffer = new PlainBufferEncoder(new PlainBufferWriter(), new Crc8());

        return $buffer->writeHeader();
    }

    /**
     * Set the table name.
     */
    public function setTable(string $table): self
    {
        $this->table = $table;

        return $this;
    }

    /**
     * Get the table name.
     */
    public function getTable(): string
    {
        return $this->table;
    }

    /**
     * Determine if the builder is a read operation.
     */
    public function isRead(): bool
    {
        return $this->operation === null;
    }

    /**
     * Determine if the builder is a write operation.
     */
    public function isWrite(): bool
    {
        return ! $this->isRead();
    }

    /**
     * Get the raw buffer.
     */
    public function getBuffer(): string
    {
        if (! isset($this->buffer)) {
            return '';
        }

        return $this->buffer->getBuffer();
    }
}
