<?php

declare(strict_types=1);

namespace Dew\Acs\Tests;

use Dew\Acs\OpenApi\Schema;
use Dew\Acs\XmlFormatter;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(XmlFormatter::class)]
final class XmlFormatterTest extends TestCase
{
    public function test_format_integer_property(): void
    {
        $formatter = new XmlFormatter();
        $schema = Schema::make([]);
        $this->assertSame(100, $formatter->formatIntegerProperty('100', $schema));
        $this->assertSame(3, $formatter->formatIntegerProperty('3.14', $schema));
    }

    public function test_format_number_property(): void
    {
        $formatter = new XmlFormatter();
        $schema = Schema::make([]);
        $this->assertSame(3.14, $formatter->formatNumberProperty('3.14', $schema));
    }

    public function test_format_boolean_property(): void
    {
        $formatter = new XmlFormatter();
        $schema = Schema::make([]);
        $this->assertTrue($formatter->formatBooleanProperty('true', $schema));
        $this->assertTrue($formatter->formatBooleanProperty('TRUE', $schema));
        $this->assertTrue($formatter->formatBooleanProperty('True', $schema));
        $this->assertFalse($formatter->formatBooleanProperty('false', $schema));
        $this->assertFalse($formatter->formatBooleanProperty('FALSE', $schema));
        $this->assertFalse($formatter->formatBooleanProperty('False', $schema));
    }

    public function test_format_string_property(): void
    {
        $formatter = new XmlFormatter();
        $schema = Schema::make([]);
        $this->assertSame('foo', $formatter->formatStringProperty('foo', $schema));
    }

    public function test_format_string_property_empty_array(): void
    {
        $formatter = new XmlFormatter();
        $schema = Schema::make([]);
        $this->assertSame('', $formatter->formatStringProperty([], $schema));
    }

    public function test_format_array_property(): void
    {
        $formatter = new XmlFormatter();
        $schema = Schema::make([
            'type' => 'array',
            'items' => [
                'type' => 'string',
            ],
        ]);
        $this->assertSame(['foo', 'bar'], $formatter->formatArrayProperty(['foo', 'bar'], $schema));
    }

    public function test_format_array_property_casting(): void
    {
        $formatter = new XmlFormatter();
        $schema = Schema::make([
            'type' => 'array',
            'items' => [
                'type' => 'boolean',
            ],
        ]);
        $this->assertSame([true, false], $formatter->formatArrayProperty(['true', 'false'], $schema));
    }

    public function test_format_array_property_wrapping(): void
    {
        $formatter = new XmlFormatter();
        $schema = Schema::make([]);
        $this->assertSame(['foo'], $formatter->formatArrayProperty('foo', $schema));
    }

    public function test_format_object_property(): void
    {
        $formatter = new XmlFormatter();
        $schema = Schema::make([
            'type' => 'object',
            'properties' => [
                'value' => [
                    'type' => 'string',
                ],
            ],
        ]);
        $this->assertSame(
            ['value' => 'foo'],
            $formatter->formatObjectProperty(['value' => 'foo'], $schema)
        );
    }

    public function test_format_object_property_undefined(): void
    {
        $formatter = new XmlFormatter();
        $schema = Schema::make([
            'type' => 'object',
            'properties' => [
                'value' => [
                    'type' => 'string',
                ],
            ],
        ]);
        $this->assertSame(
            ['value' => 'foo', 'undefined' => 'bar'],
            $formatter->formatObjectProperty(['value' => 'foo', 'undefined' => 'bar'], $schema)
        );
    }

    public function test_format_property_ref(): void
    {
        $formatter = new XmlFormatter();
        $formatter->findSchemaUsing(function (string $path): Schema {
            $this->assertSame('#/components/schemas/item', $path);

            return Schema::make(['type' => 'boolean']);
        });
        $schema = Schema::make([
            '$ref' => '#/components/schemas/item',
        ]);
        $this->assertSame(true, $formatter->format('true', $schema));
    }

    public function test_format_property_ref_null(): void
    {
        $formatter = new XmlFormatter();
        $formatter->findSchemaUsing(function (string $path): null {
            $this->assertSame('#/components/schemas/item', $path);

            return null;
        });
        $schema = Schema::make([
            '$ref' => '#/components/schemas/item',
        ]);
        $this->assertSame('true', $formatter->format('true', $schema));
    }

    public function test_format_property_ref_missing(): void
    {
        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage('Missing schema finder.');
        $formatter = new XmlFormatter();
        $schema = Schema::make([
            '$ref' => '#/components/schemas/item',
        ]);
        $formatter->format('true', $schema);
    }

    public function test_format_property_formatter_not_exists(): void
    {
        $formatter = new XmlFormatter();
        $schema = Schema::make([
            'type' => 'foo',
        ]);
        $this->assertSame('foo', $formatter->formatProperty('foo', $schema));
    }
}
