<?php

declare(strict_types=1);

namespace Dew\Acs\Tests\OpenApi;

use Dew\Acs\OpenApi\ApiDocs;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\TestWith;
use PHPUnit\Framework\TestCase;

#[CoversClass(ApiDocs::class)]
final class ApiDocsTest extends TestCase
{
    #[TestWith(['foo', 'Foo'])]
    #[TestWith(['foo-open', 'FooOpen'])]
    #[TestWith(['Foo', 'Foo'])]
    #[TestWith(['FooBar', 'FooBar'])]
    #[TestWith(['FOO', 'FOO'])]
    #[TestWith(['fooBar', 'FooBar'])]
    public function test_get_namespace(string $code, string $expected): void
    {
        $doc = ApiDocs::make([
            'info' => [
                'style' => 'RPC',
                'product' => $code,
                'version' => '2024-01-01',
            ],
            'directories' => [],
            'components' => [],
            'apis' => [],
            'endpoints' => [],
        ]);
        $this->assertSame($expected, $doc->getNamespace());
    }

    public function test_get_endpoint_resolves_the_endpoint_from_region(): void
    {
        $docs = ApiDocs::make([
            'info' => [
                'style' => 'RPC',
                'product' => 'Testing',
                'version' => '2024-01-01',
            ],
            'directories' => [],
            'components' => [],
            'apis' => [],
            'endpoints' => [
                ['regionId' => 'cn-somewhere', 'endpoint' => 'example.com'],
            ],
        ]);
        $this->assertSame('example.com', $docs->getEndpoint('cn-somewhere'));
    }

    #[TestWith(['example.com '])]
    #[TestWith([' example.com'])]
    #[TestWith([' example.com '])]
    #[TestWith(["example.com\t"])]
    public function test_get_endpoint_trims_the_endpoint(string $endpoint): void
    {
        $docs = ApiDocs::make([
            'info' => [
                'style' => 'RPC',
                'product' => 'Testing',
                'version' => '2024-01-01',
            ],
            'directories' => [],
            'components' => [],
            'apis' => [],
            'endpoints' => [
                ['regionId' => 'cn-somewhere', 'endpoint' => $endpoint],
            ],
        ]);
        $this->assertSame('example.com', $docs->getEndpoint('cn-somewhere'));
    }

    public function test_get_endpoint_endpoint_does_not_exist(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Could not find the endpoint for region cn-somewhere.');
        ApiDocs::make([
            'info' => [
                'style' => 'RPC',
                'product' => 'Testing',
                'version' => '2024-01-01',
            ],
            'directories' => [],
            'components' => [],
            'apis' => [],
            'endpoints' => [],
        ])->getEndpoint('cn-somewhere');
    }
}
