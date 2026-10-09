<?php

declare(strict_types=1);

namespace Dew\Acs\Tests\OpenApi;

use Dew\Acs\DataEncoder;
use Dew\Acs\OpenApi\StyleEncoder;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\TestWith;
use PHPUnit\Framework\TestCase;

#[CoversClass(StyleEncoder::class)]
final class StyleEncoderTest extends TestCase
{
    public function test_encode_json(): void
    {
        $mock = \Mockery::mock(DataEncoder::class);
        $mock->shouldReceive('encode')->once()->andReturn('{"foo":"bar"}');
        $encoder = new StyleEncoder(jsonEncoder: $mock);
        $result = $encoder->encodeJson(['foo' => 'bar']);
        $this->assertSame('{"foo":"bar"}', $result);
    }

    public function test_encode_xml(): void
    {
        $mock = \Mockery::mock(DataEncoder::class);
        $mock->shouldReceive('encode')->once()->andReturn('<root />');
        $encoder = new StyleEncoder(xmlEncoder: $mock);
        $result = $encoder->encodeXml(['root' => []]);
        $this->assertSame('<root />', $result);
    }

    /**
     * @param  array<string, mixed>  $data
     * @param  array<string, mixed>  $expected
     */
    #[TestWith([['value' => [['name' => 'foo'], ['name' => 'bar']]], ['value.1.name' => 'foo', 'value.2.name' => 'bar']])]
    #[TestWith([['value' => ['foo', 2, 3.14]], ['value.1' => 'foo', 'value.2' => 2, 'value.3' => 3.14]])]
    #[TestWith([['foo', 2, 3.14], [1 => 'foo', 2 => 2, 3 => 3.14]])]
    #[TestWith([['value' => ['foo' => 'bar']], ['value.foo' => 'bar']])]
    #[TestWith([['value' => 'foo'], ['value' => 'foo']])]
    public function test_encode_repeat_list(array $data, array $expected): void
    {
        $encoder = new StyleEncoder();
        $result = $encoder->encodeRepeatList($data);
        $this->assertSame($expected, $result);
    }

    public function test_encode_simple(): void
    {
        $encoder = new StyleEncoder();
        $result = $encoder->encodeSimple(['foo', 2, 3.14]);
        $this->assertSame('foo,2,3.14', $result);
    }
}
