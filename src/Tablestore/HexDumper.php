<?php

declare(strict_types=1);

namespace Dew\Acs\Tablestore;

/**
 * @internal
 */
final class HexDumper
{
    /**
     * The code point indicates a space.
     *
     * @var int
     */
    private const FIRST_PRINTABLE_ASCII_CHARACTER_CODEPOINT = 32;

    /**
     * The code point indicates a ~ character.
     *
     * @var int
     */
    private const LAST_PRINTABLE_ASCII_CHARACTER_CODEPOINT = 126;

    /**
     * The size of the ASCII table.
     *
     * @var int
     */
    private const ASCII_TABLE_SIZE = 256;

    /**
     * The ASCII table of original and printable character pairs.
     *
     * @var array<string, string>
     */
    private array $replacementPairs = [];

    /**
     * The number of bytes to dipslay per line.
     *
     * @var positive-int
     */
    public int $width = 16;

    /**
     * Placeholder for a non-visible character in the display.
     */
    public string $nonVisible = '.';

    /**
     * Create a hex dumper instance.
     */
    public function __construct(
        private readonly string $buffer
    ) {
        //
    }

    /**
     * Set the number of bytes to display per line.
     *
     * @param  positive-int  $width
     */
    public function width(int $width): self
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Set a character to display a non-visible character.
     */
    public function nonVisibleUsing(string $character): self
    {
        if ($this->nonVisible !== $character) {
            $this->replacementPairs = [];
        }

        $this->nonVisible = $character;

        return $this;
    }

    /**
     * Get the buffer in hexadecimal.
     */
    public function toHex(): string
    {
        return bin2hex($this->buffer);
    }

    /**
     * Dump the buffer.
     */
    public function dump(): void
    {
        $lines = str_split($this->toHex(), $this->width * 2);
        $display = str_split($this->toHumanReadableDisplay(), $this->width);

        $offset = 0;

        foreach ($lines as $i => $line) {
            // Split the line into 2-digit chunks for readability.
            $hex = implode(' ', str_split($line, 2));

            printf("%6X : %-{$this->reservedForHex()}s[%s]\n",
                $offset, $hex, $display[$i]
            );

            $offset += $this->width;
        }
    }

    /**
     * The reserved space for displaying a hex column.
     */
    private function reservedForHex(): int
    {
        [$hex, $space] = [2, 1];

        // 00 00 00 00 00 <- ending with a space
        // ~~~^^^~~~^^^~~~
        // We need 3 spaces to represent a hex value.
        return $this->width * ($hex + $space);
    }

    /**
     * Create a human-readable representation of the buffer.
     */
    private function toHumanReadableDisplay(): string
    {
        return strtr($this->buffer, $this->replacementPairs());
    }

    /**
     * The ASCII table of original and printable character pairs.
     *
     * @return array<string, string>
     */
    private function replacementPairs(): array
    {
        if ($this->replacementPairs !== []) {
            return $this->replacementPairs;
        }

        $pairs = [];

        for ($i = 0; $i < self::ASCII_TABLE_SIZE; $i++) {
            $char = chr($i);

            $pairs[$char] = $this->isPrintableCharacter($char) ? $char : $this->nonVisible;
        }

        return $this->replacementPairs = $pairs;
    }

    /**
     * Determine if the character is printable.
     */
    protected function isPrintableCharacter(string $char): bool
    {
        $codepoint = ord($char);

        return $codepoint >= self::FIRST_PRINTABLE_ASCII_CHARACTER_CODEPOINT
            && $codepoint <= self::LAST_PRINTABLE_ASCII_CHARACTER_CODEPOINT;
    }
}
