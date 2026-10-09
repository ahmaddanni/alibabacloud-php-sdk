<?php

declare(strict_types=1);

use Dew\Acs\Arr;

final class ProductStripper
{
    /**
     * @param  array<int, array<string, mixed>>  $products
     * @return array<int, array<string, mixed>>
     */
    public static function strip(array $products): array
    {
        $result = [];

        foreach ($products as $product) {
            $result[] = Arr::only($product, [
                'code',
                'style',
                'versions',
                'defaultVersion',
            ]);
        }

        return $result;
    }
}
