<?php

declare(strict_types=1);

namespace Dew\Acs\Tests\OpenApi;

use Dew\Acs\OpenApi\Api;
use Dew\Acs\OpenApi\ApiDocs;
use Dew\Acs\OpenApi\ROAStyleBuilder;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\TestWith;
use PHPUnit\Framework\TestCase;

/**
 * @phpstan-import-type TApiDocs from \Dew\Acs\OpenApi\ApiDocs
 * @phpstan-import-type TApi from \Dew\Acs\OpenApi\Api
 */
#[CoversClass(ROAStyleBuilder::class)]
final class ROAStyleBuilderTest extends TestCase
{
    public function test_host_resolution(): void
    {
        $docs = $this->makeApiDocs();
        $api = $this->makeApi([
            'parameters' => [[
                'name' => 'host',
                'in' => 'host',
                'schema' => [
                    'type' => 'string',
                ],
            ]],
        ]);
        $builder = new ROAStyleBuilder($docs, $api);
        $data = $builder->build(['host' => 'foo']);
        $this->assertSame('foo', $data->host);
    }

    public function test_scheme_resolution(): void
    {
        $docs = $this->makeApiDocs();
        $api = $this->makeApi(['schemes' => ['http']]);
        $builder = new ROAStyleBuilder($docs, $api);
        $data = $builder->build([]);
        $this->assertSame('http', $data->scheme);
    }

    public function test_scheme_resolution_https_precedence(): void
    {
        $docs = $this->makeApiDocs();
        $api = $this->makeApi(['schemes' => ['http', 'https']]);
        $builder = new ROAStyleBuilder($docs, $api);
        $data = $builder->build([]);
        $this->assertSame('https', $data->scheme);
    }

    public function test_method_resolution(): void
    {
        $docs = $this->makeApiDocs();
        $api = $this->makeApi(['methods' => ['get', 'post']]);
        $builder = new ROAStyleBuilder($docs, $api);
        $data = $builder->build([]);
        $this->assertSame('GET', $data->method);
    }

    public function test_path_resolution(): void
    {
        $docs = $this->makeApiDocs();
        $api = $this->makeApi(['path' => '/api/users']);
        $builder = new ROAStyleBuilder($docs, $api);
        $data = $builder->build([]);
        $this->assertSame('/api/users', $data->path);
    }

    public function test_path_resolution_placeholder(): void
    {
        $docs = $this->makeApiDocs();
        $api = $this->makeApi([
            'path' => '/api/users/{user}',
            'parameters' => [[
                'name' => 'user',
                'in' => 'path',
                'schema' => [
                    'type' => 'string',
                ],
            ]],
        ]);
        $builder = new ROAStyleBuilder($docs, $api);
        $data = $builder->build(['user' => 'lizhineng']);
        $this->assertSame('/api/users/lizhineng', $data->path);
    }

    public function test_path_resolution_missing(): void
    {
        $docs = $this->makeApiDocs();
        $api = $this->makeApi(['path' => null]);
        $builder = new ROAStyleBuilder($docs, $api);
        $data = $builder->build([]);
        $this->assertSame('/', $data->path);
    }

    #[TestWith(['string', 'bar', 'bar'])]
    #[TestWith(['integer', 10, '10'])]
    #[TestWith(['number', 3.14, '3.14'])]
    #[TestWith(['boolean', true, '?1'])]
    #[TestWith(['boolean', false, '?0'])]
    public function test_headers_resolution(string $type, mixed $value, string $expected): void
    {
        $docs = $this->makeApiDocs();
        $api = $this->makeApi([
            'parameters' => [[
                'name' => 'x-foo',
                'in' => 'header',
                'schema' => [
                    'type' => $type,
                ],
            ]],
        ]);
        $builder = new ROAStyleBuilder($docs, $api);
        $data = $builder->build(['x-foo' => $value]);
        $this->assertSame(['x-foo' => $expected], $data->headers);
    }

    /**
     * @param  array<string, mixed>  $arguments
     * @param  array<string, mixed>  $expected
     */
    #[TestWith([['x-test-*' => ['x-test-foo' => 'bar']], ['x-test-foo' => 'bar']])]
    #[TestWith([['x-test-*' => ['foo' => 'bar']], ['x-test-foo' => 'bar']])]
    public function test_headers_resolution_wildcard(array $arguments, array $expected): void
    {
        $docs = $this->makeApiDocs();
        $api = $this->makeApi([
            'parameters' => [[
                'name' => 'x-test-*',
                'in' => 'header',
                'schema' => [
                    'type' => 'object',
                    'additionalProperties' => [
                        'type' => 'string',
                    ],
                ],
            ]],
        ]);
        $builder = new ROAStyleBuilder($docs, $api);
        $data = $builder->build($arguments);
        $this->assertSame($expected, $data->headers);
    }

    public function test_headers_resolution_name_contains_asterisk(): void
    {
        $docs = $this->makeApiDocs();
        $api = $this->makeApi([
            'parameters' => [[
                'name' => 'x-test-*',
                'in' => 'header',
                'schema' => [
                    'type' => 'string',
                ],
            ]],
        ]);
        $builder = new ROAStyleBuilder($docs, $api);
        $data = $builder->build(['x-test-*' => 'foo']);
        $this->assertSame(['x-test-*' => 'foo'], $data->headers);
    }

    public function test_headers_resolution_body_json_style(): void
    {
        $docs = $this->makeApiDocs();
        $api = $this->makeApi([
            'parameters' => [[
                'name' => 'body',
                'in' => 'body',
                'style' => 'json',
                'schema' => [
                    'type' => 'object',
                    'properties' => [],
                ],
            ]],
        ]);
        $builder = new ROAStyleBuilder($docs, $api);
        $data = $builder->build(['body' => []]);
        $this->assertArrayHasKey('Content-Type', $data->headers);
        $this->assertSame('application/json', $data->headers['Content-Type']);
    }

    public function test_headers_resolution_default_content_type(): void
    {
        $docs = $this->makeApiDocs();
        $api = $this->makeApi([
            'parameters' => [[
                'name' => 'body',
                'in' => 'body',
                'schema' => [
                    'type' => 'string',
                    'format' => 'binary',
                ],
            ]],
        ]);
        $builder = new ROAStyleBuilder($docs, $api);
        $data = $builder->build(['body' => 'foo']);
        $this->assertArrayHasKey('Content-Type', $data->headers);
        $this->assertSame('application/octet-stream', $data->headers['Content-Type']);
    }

    public function test_headers_resolution_content_type_if_body_empty(): void
    {
        $docs = $this->makeApiDocs();
        $api = $this->makeApi([
            'parameters' => [[
                'name' => 'body',
                'in' => 'body',
                'style' => 'json',
                'schema' => [
                    'type' => 'object',
                    'properties' => [],
                ],
            ]],
        ]);
        $builder = new ROAStyleBuilder($docs, $api);
        $data = $builder->build([]);
        $this->assertArrayNotHasKey('Content-Type', $data->headers);
        $this->assertSame('', $data->body);
    }

    public function test_headers_resolution_body_xml_style(): void
    {
        $docs = $this->makeApiDocs();
        $api = $this->makeApi([
            'parameters' => [[
                'name' => 'body',
                'in' => 'body',
                'style' => 'xml',
                'schema' => [
                    'type' => 'object',
                    'properties' => [
                        'value' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ]],
        ]);
        $builder = new ROAStyleBuilder($docs, $api);
        $data = $builder->build(['body' => ['value' => 'foo']]);
        $this->assertArrayHasKey('Content-Type', $data->headers);
        $this->assertSame('application/xml', $data->headers['Content-Type']);
    }

    public function test_headers_resolution_produces(): void
    {
        $docs = $this->makeApiDocs();
        $api = $this->makeApi(['produces' => ['application/json']]);
        $builder = new ROAStyleBuilder($docs, $api);
        $data = $builder->build([]);
        $this->assertSame(['Accept' => 'application/json'], $data->headers);
    }

    public function test_query_resolution(): void
    {
        $docs = $this->makeApiDocs();
        $api = $this->makeApi([
            'parameters' => [[
                'name' => 'foo',
                'in' => 'query',
                'schema' => [
                    'type' => 'string',
                ],
            ]],
        ]);
        $builder = new ROAStyleBuilder($docs, $api);
        $data = $builder->build(['foo' => 'bar']);
        $this->assertSame('foo=bar', $data->query);
    }

    public function test_query_resolution_predefined(): void
    {
        $docs = $this->makeApiDocs();
        $api = $this->makeApi(['path' => '/?foo']);
        $builder = new ROAStyleBuilder($docs, $api);
        $data = $builder->build([]);
        $this->assertSame('foo', $data->query);
    }

    public function test_query_resolution_nullable(): void
    {
        $docs = $this->makeApiDocs();
        $api = $this->makeApi([
            'parameters' => [[
                'name' => 'foo',
                'in' => 'query',
                'schema' => [
                    'type' => 'string',
                ],
            ]],
        ]);
        $builder = new ROAStyleBuilder($docs, $api);
        $data = $builder->build([]);
        $this->assertSame('', $data->query);
    }

    public function test_body_resolution(): void
    {
        $docs = $this->makeApiDocs();
        $api = $this->makeApi([
            'parameters' => [[
                'name' => 'body',
                'in' => 'body',
                'schema' => [
                    'type' => 'string',
                    'format' => 'binary',
                ],
            ]],
        ]);
        $builder = new ROAStyleBuilder($docs, $api);
        $data = $builder->build(['body' => 'foo']);
        $this->assertSame('foo', $data->body);
    }

    public function test_parameter_simple_style(): void
    {
        $docs = $this->makeApiDocs();
        $api = $this->makeApi([
            'parameters' => [[
                'name' => 'array',
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
        $builder = new ROAStyleBuilder($docs, $api);
        $data = $builder->build(['array' => ['foo', 'bar']]);
        $this->assertSame('array=foo%2Cbar', $data->query);
    }

    public function test_parameter_json_style(): void
    {
        $docs = $this->makeApiDocs();
        $api = $this->makeApi([
            'parameters' => [[
                'name' => 'array',
                'in' => 'query',
                'style' => 'json',
                'schema' => [
                    'type' => 'array',
                    'items' => [
                        'type' => 'string',
                    ],
                ],
            ]],
        ]);
        $builder = new ROAStyleBuilder($docs, $api);
        $data = $builder->build(['array' => ['foo', 'bar']]);
        $this->assertSame('array=%5B%22foo%22%2C%22bar%22%5D', $data->query);
    }

    public function test_parameter_xml_style(): void
    {
        $docs = $this->makeApiDocs();
        $api = $this->makeApi([
            'parameters' => [[
                'name' => 'body',
                'in' => 'body',
                'style' => 'xml',
                'schema' => [
                    'type' => 'object',
                    'properties' => [
                        'value' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ]],
        ]);
        $builder = new ROAStyleBuilder($docs, $api);
        $data = $builder->build(['body' => ['value' => 'foo']]);
        $this->assertSame(<<<'XML'
        <?xml version="1.0" encoding="UTF-8"?>
        <value>foo</value>

        XML, $data->body);
    }

    public function test_parameter_missing_style_array_should_encode_to_json_string(): void
    {
        $docs = $this->makeApiDocs();
        $api = $this->makeApi([
            'parameters' => [[
                'name' => 'body',
                'in' => 'body',
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
        $builder = new ROAStyleBuilder($docs, $api);
        $data = $builder->build(['body' => ['name' => 'Li Zhineng']]);
        $this->assertSame(json_encode(['name' => 'Li Zhineng']), $data->body);
    }

    public function test_parameter_required(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('The path is required.');
        $docs = $this->makeApiDocs();
        $api = $this->makeApi([
            'parameters' => [[
                'name' => 'path',
                'in' => 'path',
                'schema' => [
                    'type' => 'string',
                    'required' => true,
                ],
            ]],
        ]);
        $builder = new ROAStyleBuilder($docs, $api);
        $builder->build([]);
    }

    public function test_parameter_allow_empty_value_true_empty_string(): void
    {
        $docs = $this->makeApiDocs();
        $api = $this->makeApi([
            'parameters' => [[
                'name' => 'value',
                'in' => 'query',
                'allowEmptyValue' => true,
                'schema' => [
                    'type' => 'string',
                ],
            ]],
        ]);
        $builder = new ROAStyleBuilder($docs, $api);
        $data = $builder->build(['value' => '']);
        $this->assertSame('value=', $data->query);
    }

    public function test_parameter_allow_empty_value_true_empty_array(): void
    {
        $docs = $this->makeApiDocs();
        $api = $this->makeApi([
            'parameters' => [[
                'name' => 'value',
                'in' => 'query',
                'style' => 'json',
                'allowEmptyValue' => true,
                'schema' => [
                    'type' => 'object',
                    'properties' => [
                        'page' => [
                            'type' => 'integer',
                            'format' => 'int32',
                        ],
                    ],
                ],
            ]],
        ]);
        $builder = new ROAStyleBuilder($docs, $api);
        $data = $builder->build(['value' => []]);
        $this->assertSame('value=%5B%5D', $data->query);
    }

    /**
     * @param  array<string, mixed>  $schema
     */
    #[TestWith([['type' => 'string'], ''])]
    #[TestWith([['type' => 'array'], []])]
    #[TestWith([['type' => 'object'], []])]
    public function test_parameter_allow_empty_value_false_empty_value(array $schema, mixed $value): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('The value must not be empty.');
        $docs = $this->makeApiDocs();
        $api = $this->makeApi([
            'parameters' => [[
                'name' => 'value',
                'in' => 'query',
                'allowEmptyValue' => false,
                'schema' => $schema,
            ]],
        ]);
        $builder = new ROAStyleBuilder($docs, $api);
        $builder->build(['value' => $value]);
    }

    /**
     * @param  TApiDocs  $docs
     */
    private function makeApiDocs(array $docs = []): ApiDocs
    {
        return ApiDocs::make(array_merge([
            'info' => [
                'style' => 'ROA',
                'product' => 'Test',
                'version' => '2024-01-01',
            ],
            'directories' => [],
            'components' => [],
            'apis' => [],
            'endpoints' => [],
        ], $docs));
    }

    /**
     * @param  TApi  $api
     */
    private function makeApi(array $api): Api
    {
        return Api::make(array_merge([
            'path' => '/api',
            'methods' => ['get', 'post'],
            'schemes' => ['http', 'https'],
            'security' => [['AK' => []]],
            'deprecated' => false,
            'consumes' => null,
            'parameters' => [],
            'responses' => [],
        ], $api));
    }
}
