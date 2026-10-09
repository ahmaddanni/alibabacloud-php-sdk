<?php

declare(strict_types=1);

namespace Dew\Acs\Tablestore;

final class Plainbuf
{
    public static function encoder(): PlainBufferEncoder
    {
        return (new PlainBufferEncoder(
            new PlainBufferWriter(), new Crc8()
        ))->writeHeader();
    }

    /**
     * @return mixed[]
     */
    public static function decode(string $buffer): array
    {
        $decoder = new PlainBufferDecoder(
            new PlainBufferReader($buffer), new Crc8()
        );

        return $decoder->toArray();
    }
}
