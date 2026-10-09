<?php

declare(strict_types=1);

namespace Dew\Acs\Tests;

use Dew\Acs\ApiDocsResolver;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\TestWith;
use PHPUnit\Framework\TestCase;

#[CoversClass(ApiDocsResolver::class)]
final class ApiDocsResolverTest extends TestCase
{
    #[TestWith(['foo', 'Foo'])]
    #[TestWith(['Foo', 'Foo'])]
    #[TestWith(['FOO', 'Foo'])]
    #[TestWith(['foo-bar', 'FooBar'])]
    #[TestWith(['Foo-bar', 'FooBar'])]
    #[TestWith(['FOO-BAR', 'FooBar'])]
    #[TestWith(['FooBar', 'FooBar'])]
    #[TestWith(['FooBAR', 'FooBAR'])]
    #[TestWith(['FOOBar', 'FOOBar'])]
    public function test_get_normalized_product_name(string $name, string $expected): void
    {
        $this->assertSame($expected, ApiDocsResolver::getNormalizedProductName($name));
    }
}
