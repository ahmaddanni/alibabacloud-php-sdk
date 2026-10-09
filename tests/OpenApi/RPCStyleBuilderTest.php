<?php

declare(strict_types=1);

namespace Dew\Acs\Tests\OpenApi;

use Dew\Acs\OpenApi\Api;
use Dew\Acs\OpenApi\ApiDocs;
use Dew\Acs\OpenApi\RPCStyleBuilder;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\TestWith;
use PHPUnit\Framework\TestCase;

/**
 * @phpstan-import-type TApi from \Dew\Acs\OpenApi\Api
 */
#[CoversClass(RPCStyleBuilder::class)]
final class RPCStyleBuilderTest extends TestCase
{
    public function test_host_resolution(): void
    {
        $docs = $this->makeApiDocs();
        $api = $this->makeApi();
        $builder = new RPCStyleBuilder($docs, $api);
        $data = $builder->build([]);
        $this->assertNull($data->host);
    }

    public function test_scheme(): void
    {
        $docs = $this->makeApiDocs();
        $api = $this->makeApi(['schemes' => ['http']]);
        $builder = new RPCStyleBuilder($docs, $api);
        $data = $builder->build([]);
        $this->assertSame('http', $data->scheme);
    }

    public function test_scheme_precedence_https(): void
    {
        $docs = $this->makeApiDocs();
        $api = $this->makeApi(['schemes' => ['http', 'https']]);
        $builder = new RPCStyleBuilder($docs, $api);
        $data = $builder->build([]);
        $this->assertSame('https', $data->scheme);
    }

    public function test_method_resolution(): void
    {
        $docs = $this->makeApiDocs();
        $api = $this->makeApi(['methods' => ['get', 'post']]);
        $builder = new RPCStyleBuilder($docs, $api);
        $data = $builder->build([]);
        $this->assertSame('GET', $data->method);
    }

    public function test_path_resolution(): void
    {
        $docs = $this->makeApiDocs();
        $api = $this->makeApi();
        $builder = new RPCStyleBuilder($docs, $api);
        $data = $builder->build([]);
        $this->assertSame('/', $data->path);
    }

    public function test_headers_resolution(): void
    {
        $docs = $this->makeApiDocs();
        $api = $this->makeApi();
        $builder = new RPCStyleBuilder($docs, $api);
        $data = $builder->build([]);
        $this->assertSame([], $data->headers);
    }

    public function test_query_resolution(): void
    {
        $docs = $this->makeApiDocs();
        $api = $this->makeApi([
            'parameters' => [[
                'name' => 'page',
                'in' => 'query',
                'schema' => [
                    'type' => 'integer',
                    'format' => 'int32',
                ],
            ]],
        ]);
        $builder = new RPCStyleBuilder($docs, $api);
        $argument = $builder->build(['page' => 1]);
        $this->assertSame('page=1', $argument->query);
    }

    #[TestWith(['repeatList'], 'repeat list')]
    #[TestWith(['flat'], 'flat')]
    public function test_query_resolution_style(string $style): void
    {
        $docs = $this->makeApiDocs();
        $api = $this->makeApi([
            'parameters' => [[
                'name' => 'tag',
                'in' => 'query',
                'style' => $style,
                'schema' => [
                    'type' => 'array',
                    'items' => [
                        'type' => 'object',
                        'properties' => [
                            'key' => ['type' => 'string'],
                            'value' => ['type' => 'string'],
                        ],
                    ],
                ],
            ]],
        ]);
        $builder = new RPCStyleBuilder($docs, $api);
        $argument = $builder->build([
            'tag' => [
                ['key' => 'key1', 'value' => 'value1'],
                ['key' => 'key2', 'value' => 'value2'],
            ],
        ]);
        $this->assertSame(
            'tag.1.key=key1&tag.1.value=value1&tag.2.key=key2&tag.2.value=value2',
            $argument->query
        );
    }

    public function test_query_resolution_simple_style(): void
    {
        $docs = $this->makeApiDocs();
        $api = $this->makeApi([
            'parameters' => [[
                'name' => 'values',
                'in' => 'query',
                'style' => 'simple',
                'schema' => [
                    'type' => 'array',
                    'items' => [
                        'type' => 'string',
                    ],
                ],
            ]],
        ]);
        $builder = new RPCStyleBuilder($docs, $api);
        $argument = $builder->build(['values' => ['foo', 'bar']]);
        $this->assertSame('values=foo%2Cbar', $argument->query);
    }

    /**
     * @param  mixed[]  $arguments
     */
    #[TestWith([['value' => true], 'value=true'])]
    #[TestWith([['value' => false], 'value=false'])]
    public function test_query_resolution_boolean(array $arguments, string $expected): void
    {
        $docs = $this->makeApiDocs();
        $api = $this->makeApi([
            'parameters' => [[
                'name' => 'value',
                'in' => 'query',
                'schema' => ['type' => 'boolean'],
            ]],
        ]);
        $builder = new RPCStyleBuilder($docs, $api);
        $argument = $builder->build($arguments);
        $this->assertSame($expected, $argument->query);
    }

    public function test_form_data_parameter(): void
    {
        $docs = $this->makeApiDocs();
        $api = $this->makeApi([
            'parameters' => [[
                'name' => 'value',
                'in' => 'formData',
                'schema' => ['type' => 'string'],
            ]],
        ]);
        $builder = new RPCStyleBuilder($docs, $api);
        $data = $builder->build(['value' => 'foo']);
        $this->assertSame('value=foo', $data->body);
        $this->assertSame('POST', $data->method);
        $this->assertSame(['Content-Type' => 'application/x-www-form-urlencoded'], $data->headers);
    }

    public function test_form_data_parameter_json_style(): void
    {
        $docs = $this->makeApiDocs();
        $api = $this->makeApi([
            'parameters' => [[
                'name' => 'value',
                'in' => 'formData',
                'style' => 'json',
                'schema' => [
                    'type' => 'object',
                    'properties' => [
                        'name' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ]],
        ]);
        $builder = new RPCStyleBuilder($docs, $api);
        $data = $builder->build(['value' => ['name' => 'Li Zhineng']]);
        $this->assertSame('value=%7B%22name%22%3A%22Li+Zhineng%22%7D', $data->body);
    }

    public function test_parameter_required(): void
    {
        $docs = $this->makeApiDocs();
        $api = $this->makeApi([
            'parameters' => [[
                'name' => 'page',
                'in' => 'query',
                'schema' => [
                    'type' => 'integer',
                    'format' => 'int32',
                    'required' => true,
                ],
            ]],
        ]);
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('The page is required.');
        $builder = new RPCStyleBuilder($docs, $api);
        $builder->build([]);
    }

    public function makeApiDocs(): ApiDocs
    {
        return ApiDocs::make([
            'info' => [
                'style' => 'RPC',
                'product' => 'Foo',
                'version' => '2024-01-01',
            ],
            'directories' => [],
            'components' => [],
            'apis' => [],
            'endpoints' => [],
        ]);
    }

    /**
     * @param  TApi  $api
     */
    public function makeApi(array $api = []): Api
    {
        return Api::make(array_merge([
            'methods' => ['get', 'post'],
            'schemes' => ['http', 'https'],
            'security' => [['AK' => []]],
            'deprecated' => false,
            'parameters' => [],
            'responses' => [],
        ], $api));
    }
}
