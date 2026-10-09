<?php

declare(strict_types=1);

namespace Dew\Acs\Tests;

final class DataProviderHelper
{
    /**
     * @param  mixed[][]  $providers
     * @return mixed[][]
     */
    public static function cartesian(iterable ...$providers): array
    {
        $data = array_map('iterator_to_array', $providers);

        $result = [[]];

        foreach ($data as $i => $provider) {
            $temp = [];

            foreach ($result as $name => $item) {
                foreach ($provider as $providerName => $values) {
                    foreach ($values as $value) {
                        $item[$i] = $value;
                        $update = $name === 0 ? $providerName : $name.' / '.$providerName;
                        $temp[$update] = $item;
                    }
                }
            }

            $result = $temp;
        }

        return $result;
    }
}
