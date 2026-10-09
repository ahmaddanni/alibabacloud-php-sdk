<?php

declare(strict_types=1);

namespace Dew\Acs\Tests;

use Dew\Acs\OpenApi\Api;
use Dew\Acs\OpenApi\ApiDocs;
use Dew\Acs\ResultProvider;
use Dew\Acs\Tests\Fixtures\StubException;
use Nyholm\Psr7\Response;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

/**
 * @phpstan-import-type TApi from \Dew\Acs\OpenApi\Api
 */
#[CoversClass(ResultProvider::class)]
final class ResultProviderTest extends TestCase
{
    public function test_make_json_result(): void
    {
        $docs = $this->makeApiDocs();
        $api = $this->makeApi();
        $response = new Response(200, ['Content-Type' => 'application/json'], '{"value":"foo"}');
        $provider = new ResultProvider($this->makeApiDocs());
        $result = $provider->make($response, $api);
        $this->assertSame(['value' => 'foo'], $result->getDecodedData());
        $this->assertSame($response, $result->getResponse());
    }

    public function test_make_xml_result(): void
    {
        $docs = $this->makeApiDocs();
        $api = $this->makeApi();
        $body = <<<'XML'
        <?xml version="1.0" encoding="UTF-8"?>
        <value>foo</value>

        XML;
        $response = new Response(200, ['Content-Type' => 'application/xml'], $body);
        $provider = new ResultProvider($this->makeApiDocs());
        $result = $provider->make($response, $api);
        $this->assertSame(['value' => 'foo'], $result->getDecodedData());
        $this->assertSame($response, $result->getResponse());
    }

    public function test_make_xml_result_casting(): void
    {
        $docs = $this->makeApiDocs();
        $api = $this->makeApi([
            'responses' => [
                '200' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'value' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ]
        ]);
        $body = <<<'XML'
        <?xml version="1.0" encoding="UTF-8"?>
        <value>10</value>

        XML;
        $response = new Response(200, ['Content-Type' => 'application/xml'], $body);
        $provider = new ResultProvider($this->makeApiDocs());
        $result = $provider->make($response, $api);
        $this->assertSame(['value' => 10], $result->getDecodedData());
    }

    public function test_make_exception(): void
    {
        $this->expectException(StubException::class);
        $this->expectExceptionMessage('Something went wrong!');
        $docs = $this->makeApiDocs();
        $api = $this->makeApi();
        $error = ['Code' => 'InternalError', 'Message' => 'Something went wrong!'];
        $response = new Response(500, ['Content-Type' => 'application/json'], json_encode($error));
        $provider = new ResultProvider($this->makeApiDocs(), StubException::class);
        $provider->make($response, $api);
    }

    private function makeApiDocs(): ApiDocs
    {
        return ApiDocs::make([
            'info' => [
                'style' => 'ROA',
                'product' => 'Test',
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
    private function makeApi(array $api = []): Api
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
