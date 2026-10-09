<?php

declare(strict_types=1);

namespace Dew\Acs\Tests\MnsOpen\Results;

use Dew\Acs\MnsOpen\Results\MnsResult;
use Dew\Acs\Result;
use Dew\Acs\Tests\MnsOpen\Fixtures\StubModel;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(MnsResult::class)]
final class MnsResultTest extends TestCase
{
    public function test_list_retrieves_list_array(): void
    {
        $result = new MnsResult(new Result(['value' => [1, 2, 3]]));
        $this->assertSame([1, 2, 3], $result->list('value'));
    }

    public function test_list_casts_non_array_to_list(): void
    {
        $result = new MnsResult(new Result(['value' => 1]));
        $this->assertSame([1], $result->list('value'));
    }

    public function test_list_casts_associative_to_list(): void
    {
        $result = new MnsResult(new Result(['value' => ['foo' => 'bar']]));
        $this->assertSame([['foo' => 'bar']], $result->list('value'));
    }

    public function test_list_returns_null_if_could_not_retrieve_data(): void
    {
        $result = new MnsResult(new Result());
        $this->assertNull($result->list('value'));
    }

    public function test_cast_into_casts_items_into_class_through_make_method(): void
    {
        $result = new MnsResult(new Result(['data' => ['value' => 'foo']]));
        $casted = $result->castInto('data', StubModel::class);
        $this->assertInstanceOf(StubModel::class, $casted[0]);
        $this->assertSame('foo', $casted[0]->value);
    }

    public function test_request_id_resolution(): void
    {
        $result = new MnsResult((new Result())->setResponse(new Response(200, ['x-mns-request-id' => '512B2A634403E52B1956****'])));
        $this->assertSame('512B2A634403E52B1956****', $result->requestId());
    }

    public function test_request_id_returns_null_if_response_is_missing(): void
    {
        $result = new MnsResult((new Result())->setResponse(new Response(200)));
        $this->assertNull($result->requestId());
    }

    public function test_request_id_returns_null_if_header_is_missing(): void
    {
        $result = new MnsResult(new Result());
        $this->assertNull($result->requestId());
    }

    public function test_version_resolution(): void
    {
        $result = new MnsResult((new Result())->setResponse(new Response(200, ['x-mns-version' => '2015-06-06'])));
        $this->assertSame('2015-06-06', $result->version());
    }

    public function test_version_returns_null_if_header_is_missing(): void
    {
        $result = new MnsResult((new Result())->setResponse(new Response(200)));
        $this->assertNull($result->version());
    }

    public function test_version_returns_null_if_response_is_missing(): void
    {
        $result = new MnsResult(new Result());
        $this->assertNull($result->version());
    }
}
