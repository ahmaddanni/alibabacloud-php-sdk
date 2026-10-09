<?php

declare(strict_types=1);

require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/ProductBuilder.php';

use Dew\Acs\ApiDocsResolver;

/**
 * Build the product client and exception.
 *
 * @param  class-string  $traits  The traits for the client.
 * @param  class-string  $exceptionTraits  The traits for the exception.
 */
function buildClient(string $product, array $traits = [], array $exceptionTraits = []): void
{
    $builder = new ProductBuilder(
        basePath: __DIR__.'/../src',
        namespace: 'Dew\\Acs',
        product: ApiDocsResolver::getNormalizedProductName($product)
    );

    $builder->buildClient($traits);
    $builder->buildException($exceptionTraits);
}

/**
 * @param  array<string, class-string>  $traits
 */
function buildFromProducts(string $filename, array $traits = []): void
{
    if (! file_exists($filename)) {
        throw new InvalidArgumentException('The file does not exist.');
    }

    $products = require $filename;

    if (! is_array($products)) {
        throw new RuntimeException('The product data is invalid.');
    }

    foreach ($products as $product) {
        if (! isset($product['code']) || ! is_string($product['code'])) {
            throw new RuntimeException('Missing product code.');
        }

        buildProduct(
            $product['code'],
            $traits[$product['code']] ?? [],
            $traits[$product['code'].'Exception'] ?? [],
        );
    }
}

/**
 * Build the product.
 *
 * @param  class-string  $traits  The traits for the client.
 * @param  class-string  $exceptionTraits  The traits for the exception.
 */
function buildProduct(string $product, array $traits = [], array $exceptionTraits = []): void
{
    printf('=> Build %s'.PHP_EOL, strtolower($product));
    buildClient($product, $traits, $exceptionTraits);
}

/**
 * Delete the generated client and exception files.
 */
function cleanProducts(): void
{
    $iterator = new \FilesystemIterator(__DIR__.'/../src');

    foreach ($iterator as $file) {
        if (! $file->isDir()) {
            continue;
        }

        if ($file->isLink()) {
            continue;
        }

        $clientPathname = implode(DIRECTORY_SEPARATOR, [
            $file->getPathname(),
            $file->getFilename().'Client.php',
        ]);

        $exceptionPathname = implode(DIRECTORY_SEPARATOR, [
            $file->getPathname(),
            $file->getFilename().'Exception.php',
        ]);

        if (file_exists($clientPathname) && file_exists($exceptionPathname)) {
            unlink($clientPathname);
            unlink($exceptionPathname);
        }
    }
}

function main(): void
{
    cleanProducts();

    buildFromProducts(__DIR__.'/../data/products.php', [
        'Oss' => [
            'Dew\\Acs\\Oss\\DeletesMultipleObjects',
            'Dew\\Acs\\Oss\\OssStack',
            'Dew\\Acs\\Oss\\SignsUrl',
        ],
        'OssException' => [
            'Dew\\Acs\\Oss\\CustomErrorCode',
        ],
        'Sls' => [
            'Dew\\Acs\\Sls\\ManagesLogs',
        ],
        'SlsException' => [
            'Dew\\Acs\\Sls\\CustomErrorCode',
        ],
    ]);

    buildProduct('Tablestore');

    buildProduct('Ots', ['Dew\\Acs\\Ots\\ResolvesOtsEndpoint']);

    print '== Build completed.'.PHP_EOL;
}

/**
 * Main entry.
 */
main();
