<?php

declare(strict_types=1);

namespace Dew\Acs\OpenApi;

use Dew\Acs\DataEncoder;
use Dew\Acs\JsonEncoder;
use Dew\Acs\XmlEncoder;

final readonly class StyleEncoder
{
    /**
     * Create a new style encoder instance.
     */
    public function __construct(
        private DataEncoder $jsonEncoder = new JsonEncoder(),
        private DataEncoder $xmlEncoder = new XmlEncoder()
    ) {
        //
    }

    /**
     * Encode data into a JSON string.
     *
     * @param  array<mixed>  $data
     */
    public function encodeJson(array $data): string
    {
        return $this->jsonEncoder->encode($data);
    }

    /**
     * Encode data into an XML document.
     *
     * @param  array<mixed>  $data
     */
    public function encodeXml(array $data): string
    {
        return $this->xmlEncoder->encode($data);
    }

    /**
     * Encode data with "dot" notation.
     *
     * @param  array<mixed>  $data
     * @return array<mixed>
     */
    public function encodeRepeatList(array $data, string $prefix = ''): array
    {
        $result = [];

        foreach ($data as $key => $value) {
            $slug = $prefix !== '' ? $prefix.'.' : '';
            $slug .= is_int($key) ? $key + 1 : $key;

            if (is_array($value)) {
                $result = [...$result, ...$this->encodeRepeatList($value, $slug)];
            } else {
                $result[$slug] = $value;
            }
        }

        return $result;
    }

    /**
     * Encode a list of items with a comma character.
     *
     * @param  array<int, mixed>  $data
     */
    public function encodeSimple(array $data): string
    {
        return implode(',', $data);
    }
}
