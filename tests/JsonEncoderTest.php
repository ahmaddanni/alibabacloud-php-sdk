<?php

namespace Dew\Acs\Tests;

use Dew\Acs\JsonEncoder;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\TestWith;
use PHPUnit\Framework\TestCase;

#[CoversClass(JsonEncoder::class)]
final class JsonEncoderTest extends TestCase
{
    /**
     * @param  mixed[]  $value
     */
    #[TestWith([['value' => 'foo']], 'string')]
    #[TestWith([['value' => true]], 'boolean true')]
    #[TestWith([['value' => false]], 'boolean false')]
    #[TestWith([['value' => 10]], 'integer')]
    #[TestWith([['value' => 3.14]], 'float')]
    #[TestWith([['value' => ['nested' => 'foo']]], 'nested')]
    #[TestWith([['value' => [1, 2, 3]]], 'array')]
    public function test_encode_and_decode(array $value): void
    {
        $encoder = new JsonEncoder();
        $this->assertSame($value, $encoder->decode($encoder->encode($value)));
    }

    public function test_decode_array_expectation(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Could not decode the data.');
        $encoder = new JsonEncoder();
        $encoder->decode('"value"');
    }
}
