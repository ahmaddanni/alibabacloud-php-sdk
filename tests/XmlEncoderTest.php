<?php

declare(strict_types=1);

namespace Dew\Acs\Tests;

use Dew\Acs\XmlEncoder;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\TestWith;
use PHPUnit\Framework\TestCase;

#[CoversClass(XmlEncoder::class)]
final class XmlEncoderTest extends TestCase
{
    #[TestWith(['foo', 'foo'], 'string')]
    #[TestWith([1024, '1024'], 'integer')]
    #[TestWith([3.14, '3.14'], 'float')]
    #[TestWith([true, 'true'], 'boolean true')]
    #[TestWith([false, 'false'], 'boolean false')]
    public function test_encode_scalar(mixed $data, string $expected): void
    {
        $encoder = new XmlEncoder();
        $this->assertSame(<<<XML
        <?xml version="1.0" encoding="UTF-8"?>
        <root>$expected</root>

        XML, $encoder->encode(['root' => $data]));
    }

    public function test_encode_nested(): void
    {
        $encoder = new XmlEncoder();
        $this->assertSame(<<<XML
        <?xml version="1.0" encoding="UTF-8"?>
        <root><person><name>Li Zhineng</name></person></root>

        XML, $encoder->encode(['root' => ['person' => ['name' => 'Li Zhineng']]]));
    }

    public function test_encode_list(): void
    {
        $encoder = new XmlEncoder();
        $this->assertSame(<<<XML
        <?xml version="1.0" encoding="UTF-8"?>
        <root><post><title>Hello world!</title></post><post><title>Awesome</title></post></root>

        XML, $encoder->encode(['root' => ['post' => [
            ['title' => 'Hello world!'],
            ['title' => 'Awesome'],
        ]]]));
    }

    public function test_encode_list_item_tag(): void
    {
        $encoder = new XmlEncoder();
        $this->assertSame(<<<XML
        <?xml version="1.0" encoding="UTF-8"?>
        <root><item1>foo</item1><item2>bar</item2><item3>baz</item3></root>

        XML, $encoder->encode([
            'root' => ['foo', 'bar', 'baz'],
        ]));
    }

    public function test_encode_empty(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('The data is empty.');
        $encoder = new XmlEncoder();
        $encoder->encode([]);
    }

    public function test_encode_without_outmost_element(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('The data should have an outermost element.');
        $encoder = new XmlEncoder();
        $encoder->encode(['foo', 'bar']);
    }

    public function test_encode_outmost_element_list_array(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('The outermost element should be a string.');
        $encoder = new XmlEncoder();
        $encoder->encode([[]]);
    }

    public function test_decode_scalar(): void
    {
        $xml = <<<'XML'
        <?xml version="1.0" encoding="UTF-8"?>
        <root>Li Zhineng</root>

        XML;
        $encoder = new XmlEncoder();
        $this->assertSame(['root' => 'Li Zhineng'], $encoder->decode($xml));
    }

    public function test_decode_nested(): void
    {
        $xml = <<<'XML'
        <?xml version="1.0" encoding="UTF-8"?>
        <root>
            <person>
                <name>Li Zhineng</name>
            </person>
        </root>
        XML;
        $encoder = new XmlEncoder();
        $this->assertSame([
            'root' => [
                'person' => [
                    'name' => 'Li Zhineng',
                ],
            ],
        ], $encoder->decode($xml));
    }

    public function test_decode_list(): void
    {
        $xml = <<<'XML'
        <?xml version="1.0" encoding="UTF-8"?>
        <root>
            <entry>
                <title>Hello world!</title>
            </entry>
            <entry>
                <title>Awesome Post</title>
            </entry>
        </root>
        XML;
        $encoder = new XmlEncoder();
        $this->assertSame(['root' => ['entry' => [
            ['title' => 'Hello world!'],
            ['title' => 'Awesome Post'],
        ]]], $encoder->decode($xml));
    }

    public function test_decode_cdata(): void
    {
        $xml = <<<'XML'
        <?xml version="1.0" encoding="UTF-8"?>
        <root><![CDATA[<h1>Hello world!</h1>]]></root>
        XML;
        $encoder = new XmlEncoder();
        $this->assertSame(['root' => '<h1>Hello world!</h1>'], $encoder->decode($xml));
    }

    public function test_decode_empty(): void
    {
        $encoder = new XmlEncoder();
        $this->assertSame([], $encoder->decode(''));
    }
}
