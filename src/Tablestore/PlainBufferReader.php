<?php

declare(strict_types=1);

namespace Dew\Acs\Tablestore;

/**
 * @see https://www.alibabacloud.com/help/en/tablestore/developer-reference/plainbuffer
 */
final class PlainBufferReader
{
    /**
     * The current position.
     */
    private int $cursor = 0;

    /**
     * The end position.
     */
    private readonly int $end;

    /**
     * Create a reader instance.
     */
    public function __construct(
        private readonly string $buffer
    ) {
        $this->end = $this->size();
    }

    /**
     * Read unsigned long.
     */
    public function readLittleEndian32(): int
    {
        // V: unsigned long (always 32 bit, little endian byte order)
        $unpacked = unpack('V', $this->read(4));

        if ($unpacked === false) {
            throw new PlainBufferException(
                'Failed to read an unsigned long with little endian byte order.'
            );
        }

        return $unpacked[1];
    }

    /**
     * Read unsigned long long in 64 bits with little endian byte order.
     */
    public function readLittleEndian64(): int
    {
        $low = $this->readLittleEndian32();
        $high = $this->readLittleEndian32();

        return ($high << 32) | $low;
    }

    /**
     * Read a double.
     */
    public function readDouble(): float
    {
        // d: double (machine dependent size and representation)
        $unpacked = unpack('d', $this->read(8));

        if ($unpacked === false) {
            throw new PlainBufferException('Failed to read a double.');
        }

        return $unpacked[1];
    }

    /**
     * Read a char.
     */
    public function readChar(): int
    {
        return ord($this->read(1));
    }

    /**
     * Read the buffer with given length.
     */
    public function read(int $length): string
    {
        $current = $this->cursor;

        $this->advance($length);

        return substr($this->buffer, $current, $length);
    }

    /**
     * The size of the buffer.
     */
    public function size(): int
    {
        return strlen($this->buffer);
    }

    /**
     * Determine if the cursur is at the end of the buffer.
     */
    public function eof(): bool
    {
        return $this->cursor === $this->end;
    }

    /**
     * Advance the cursur position.
     */
    protected function advance(int $length): void
    {
        if ($this->cursor + $length > $this->end) {
            throw new PlainBufferException('Buffer overflow.');
        }

        $this->cursor += $length;
    }

    /**
     * The raw buffer.
     */
    public function getBuffer(): string
    {
        return $this->buffer;
    }
}
