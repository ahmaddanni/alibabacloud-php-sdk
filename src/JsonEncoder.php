<?php

declare(strict_types=1);

namespace Dew\Acs;

final class JsonEncoder implements DataEncoder
{
    /**
     * @param  mixed[]  $data
     */
    #[\Override]
    public function encode(array $data): string
    {
        return json_encode($data, JSON_THROW_ON_ERROR);
    }

    /**
     * @return mixed[]
     */
    #[\Override]
    public function decode(string $data): array
    {
        $decoded = json_decode($data, associative: true);

        if (! is_array($decoded)) {
            throw new \InvalidArgumentException('Could not decode the data.');
        }

        return $decoded;
    }
}
