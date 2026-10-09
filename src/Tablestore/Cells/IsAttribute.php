<?php

declare(strict_types=1);

namespace Dew\Acs\Tablestore\Cells;

use Dew\Acs\Tablestore\Crc;

trait IsAttribute
{
    /**
     * The timestamp of the cell.
     */
    protected ?int $timestamp = null;

    /**
     * The operation applied to the cell.
     */
    protected ?Operation $operation = null;

    /**
     * {@inheritDoc}
     */
    #[\Override]
    public function setTimestamp(\DateTimeInterface|int $timestamp): self
    {
        // U: seconds since the Unix Epoch
        // v: milliseconds
        $this->timestamp = $timestamp instanceof \DateTimeInterface
            ? (int) $timestamp->format('Uv')
            : $timestamp;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    #[\Override]
    public function getTimestamp(): ?int
    {
        return $this->timestamp;
    }

    /**
     * Set operation to the cell.
     */
    protected function setOperation(Operation $type): self
    {
        $this->operation = $type;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    #[\Override]
    public function getOperation(): ?Operation
    {
        return $this->operation;
    }

    /**
     * {@inheritDoc}
     */
    #[\Override]
    public function getChecksumBy(Crc $crc): int
    {
        $checksum = parent::getChecksumBy($crc);

        if ($this->getTimestamp() !== null) {
            $checksum = $crc->int64($this->getTimestamp(), $checksum);
        }

        if ($this->getOperation() !== null) {
            return $crc->char($this->getOperation()->value, $checksum);
        }

        return $checksum;
    }
}
