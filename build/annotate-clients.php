<?php

declare(strict_types=1);

require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/AnnotationBuilder.php';

/**
 * @return array{code: string, versions: string[]}[]
 */
function getProducts(): array
{
    $filename = __DIR__.'/../data/products.php';

    if (! file_exists($filename)) {
        throw new RuntimeException('Could not find product data.');
    }

    return require $filename;
}

/**
 * @param  array{code: string, versions: string[]}  $product
 * @return string[]
 */
function getDocsPaths(array $product): array
{
    $paths = [];

    // Sort the versions in the format of "YYYY-MM-DD" so that the initial
    // version of the product appears at the top of the list. This helps
    // determine if APIs were introduced in later versions.
    $versions = $product['versions'];

    if (AnnotationBuilder::isVersionIncrementable($versions[0])) {
        sort($versions);
    }

    foreach ($versions as $version) {
        $filename = sprintf(__DIR__.'/../data/%s/%s/api-docs.php',
            strtolower($product['code']), $version
        );

        if (! file_exists($filename)) {
            throw new RuntimeException(sprintf(
                'Could not find the %s API docs with version %s.',
                $product['code'], $version
            ));
        }

        $paths[] = $filename;
    }

    return $paths;
}

/**
 * @param  array{code: string, versions: string[]}  $product
 */
function annoate(array $product): void
{
    printf('=> Annonate %s'.PHP_EOL, $product['code']);

    $docs = getDocsPaths($product);

    $annotationBuilder = new AnnotationBuilder($product, $docs);
    $annotationBuilder->annotate();
}

function main(): int
{
    $products = getProducts();

    foreach ($products as $product) {
        annoate($product);
    }

    annoate(['code' => 'Tablestore', 'versions' => ['2020-12-09']]);
    annoate(['code' => 'Ots', 'versions' => ['2016-06-20']]);

    echo '== Annotated successfully.'.PHP_EOL;

    return 0;
}

/**
 * Main entry.
 */
main();
