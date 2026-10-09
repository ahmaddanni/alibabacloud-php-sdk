<?php

declare(strict_types=1);

namespace Dew\Acs\Tablestore;

use Dew\Acs\Tablestore\Messages\DeleteRowResponse;
use Dew\Acs\Tablestore\Messages\GetRowResponse;
use Dew\Acs\Tablestore\Messages\PutRowResponse;
use Dew\Acs\Tablestore\Messages\UpdateRowResponse;

final class Builder
{
    use HasConditions;

    /**
     * The table name.
     */
    private string $table;

    /**
     * The buffer encoder.
     */
    private PlainBufferEncoder $buffer;

    /**
     * The data handler.
     */
    private DataHandler $handler;

    /**
     * Insert the rows into the table.
     *
     * @param  \Dew\Acs\Tablestore\Cells\Cell[]  $rows
     */
    public function insert(array $rows): PutRowResponse
    {
        $this->buffer = $this->newBuffer()->addRow($rows);

        return $this->handler->putRow($this);
    }

    /**
     * Modify the existing attributes in the table.
     *
     * @param  \Dew\Acs\Tablestore\Cells\Cell[]  $attributes
     */
    public function update(array $attributes): UpdateRowResponse
    {
        $this->buffer = $this->newBuffer()->addRow([
            ...$this->whereKeys,
            ...$attributes,
        ]);

        return $this->handler->updateRow($this);
    }

    /**
     * Remove the row from the table.
     */
    public function delete(): DeleteRowResponse
    {
        $this->buffer = $this->newBuffer()->deleteRow($this->whereKeys);

        return $this->handler->deleteRow($this);
    }

    /**
     * Query rows from the table.
     */
    public function get(): GetRowResponse
    {
        $this->buffer = $this->newBuffer()->addRow($this->whereKeys);

        return $this->handler->getRow($this);
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
     * Initialize a new buffer.
     */
    private function newBuffer(): PlainBufferEncoder
    {
        $buffer = new PlainBufferEncoder(new PlainBufferWriter(), new Crc8());

        return $buffer->writeHeader();
    }

    /**
     * Get the buffer.
     */
    public function getBuffer(): string
    {
        return $this->buffer->getBuffer();
    }

    /**
     * Get the data handler.
     */
    public function getHandler(): DataHandler
    {
        return $this->handler;
    }

    /**
     * Configure the data handler for the builder.
     */
    public function setHandler(DataHandler $handler): self
    {
        $this->handler = $handler;

        return $this;
    }
}
