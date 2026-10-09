<?php

declare(strict_types=1);

namespace Dew\Acs;

use Dew\Acs\OpenApi\ApiDocs;

/**
 * @phpstan-import-type TApiDocs from \Dew\Acs\OpenApi\ApiDocs
 * @phpstan-type TProductInfo array{
 *   code: string,
 *   name: string,
 *   shortName: string,
 *   description: string,
 *   style: ?string,
 *   group: string,
 *   defaultVersion: string,
 *   versions: string[]
 * }
 *
 * @see https://api.aliyun.com/openmeta/api/GetProductList
 */
final class ApiDocsResolver
{
    /**
     * @var TProductInfo[]
     */
    private static array $products;

    public static function make(): static
    {
        return new static();
    }

    /**
     * @param  array<string, mixed>  $config
     */
    public function resolve(string $clientClass, array $config): ApiDocs
    {
        if (! str_ends_with($clientClass, 'Client')) {
            throw new \RuntimeException('The client class name is invalid.');
        }

        $name = substr($clientClass, 0, -6);
        $product = $this->getProductFromNormalizedName($name);
        $version = $config['version'] ?? $product['defaultVersion'];

        if (! is_string($version)) {
            throw new \InvalidArgumentException('The version should be a string.');
        }

        if (! in_array($version, $product['versions'])) {
            throw new \InvalidArgumentException(sprintf(
                'Could not find version %s on product %s.',
                $version, $product['code']
            ));
        }

        return ApiDocs::make(
            $this->getProductDefinition($product['code'], $version)
        );
    }

    public static function getNormalizedProductName(string $name): string
    {
        if ($name === strtoupper($name)) {
            $name = strtolower($name);
        }

        return Str::studly($name);
    }

    /**
     * @return TProductInfo
     */
    public function getProductFromNormalizedName(string $name): array
    {
        if (! isset(static::$products)) {
            $filename = __DIR__.'/../data/products.php';

            if (! file_exists($filename)) {
                throw new \RuntimeException('Missing product data.');
            }

            $products = require $filename;

            if (! is_array($products)) {
                throw new \RuntimeException('The product data is invalid.');
            }

            foreach ($products as $product) {
                if (! isset($product['code']) || ! is_string($product['code'])) {
                    throw new \RuntimeException('Missing product code.');
                }

                $key = static::getNormalizedProductName($product['code']);

                static::$products[$key] = $product;
            }
        }

        if (! isset(static::$products[$name])) {
            throw new \InvalidArgumentException("Could not find product $name.");
        }

        return static::$products[$name];
    }

    /**
     * @return TApiDocs
     */
    public function getProductDefinition(string $product, string $version): array
    {
        $filename = sprintf(__DIR__.'/../data/%s/%s/api-docs.php',
            strtolower($product), $version
        );

        if (! file_exists($filename)) {
            throw new \RuntimeException(sprintf(
                'Could not find APIs for product %s with version %s.',
                $product, $version
            ));
        }

        return require $filename;
    }
}
