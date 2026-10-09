<?php

declare(strict_types=1);

namespace Dew\Acs\Tests\OpenApi;

use Dew\Acs\OpenApi\Schema;
use Dew\Acs\OpenApi\SchemaReader;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\IgnoreDeprecations;
use PHPUnit\Framework\Attributes\TestWith;
use PHPUnit\Framework\TestCase;

/**
 * @phpstan-import-type TSchema from \Dew\Acs\OpenApi\Schema
 */
#[CoversClass(SchemaReader::class)]
final class SchemaReaderTest extends TestCase
{
    public function test_get_string_property(): void
    {
        $reader = new SchemaReader();
        $value = $reader->getStringProperty(Schema::make([]), 'foo', 'value');
        $this->assertSame('foo', $value);
    }

    public function test_get_string_property_min_length(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('The value must be at least 3 characters.');
        $reader = new SchemaReader();
        $reader->getStringProperty(Schema::make(['minLength' => 3]), 'ab', 'value');
    }

    public function test_get_string_property_max_length(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('The value must be a maximum of 3 characters.');
        $reader = new SchemaReader();
        $reader->getStringProperty(Schema::make(['maxLength' => 3]), 'abcd', 'value');
    }

    public function test_get_string_property_enum(): void
    {
        $reader = new SchemaReader();
        $schema = Schema::make(['enum' => ['foo', 'bar']]);
        $this->assertSame('foo', $reader->getStringProperty($schema, 'foo', 'value'));
        $this->assertSame('bar', $reader->getStringProperty($schema, 'bar', 'value'));
    }

    public function test_get_string_property_enum_zero_value(): void
    {
        $reader = new SchemaReader();
        $schema = Schema::make(['enum' => []]);
        $this->assertSame('foo', $reader->getStringProperty($schema, 'foo', 'value'));
    }

    public function test_get_string_property_enum_one_value(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('The value must be "foo".');
        $schema = Schema::make(['enum' => ['foo']]);
        $reader = new SchemaReader();
        $reader->getStringProperty($schema, 'bar', 'value');
    }

    public function test_get_string_property_enum_two_values(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('The value must be either "foo" or "bar".');
        $schema = Schema::make(['enum' => ['foo', 'bar']]);
        $reader = new SchemaReader();
        $reader->getStringProperty($schema, 'baz', 'value');
    }

    public function test_get_string_property_enum_many_values(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('The value must be either "foo", "bar", or "baz".');
        $schema = Schema::make(['enum' => ['foo', 'bar', 'baz']]);
        $reader = new SchemaReader();
        $reader->getStringProperty($schema, 'invalid', 'value');
    }

    public function test_get_string_property_pattern(): void
    {
        $schema = Schema::make(['pattern' => '^\\d{4}$']);
        $reader = new SchemaReader();
        $this->assertSame('2024', $reader->getStringProperty($schema, '2024', 'value'));
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('The value must match the pattern "^\\d{4}$"');
        $reader->getStringProperty($schema, '202412', 'value');
    }

    public function test_get_integer_property_int32(): void
    {
        $reader = new SchemaReader();
        $schema = Schema::make(['format' => 'int32']);
        $value = $reader->getIntegerProperty($schema, 1024, 'value');
        $this->assertSame(1024, $value);
    }

    public function test_get_integer_property_int64(): void
    {
        $reader = new SchemaReader();
        $schema = Schema::make(['format' => 'int64']);
        $value = $reader->getIntegerProperty($schema, 1024, 'value');
        $this->assertSame(1024, $value);
    }

    public function test_get_integer_property_minimum(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('The value must be at least 10.');
        $schema = Schema::make(['format' => 'int32', 'minimum' => '10']);
        $reader = new SchemaReader();
        $reader->getIntegerProperty($schema, 9, 'value');
    }

    public function test_get_integer_property_maximum(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('The value must not exceed 10.');
        $schema = Schema::make(['format' => 'int32', 'maximum' => '10']);
        $reader = new SchemaReader();
        $reader->getIntegerProperty($schema, 11, 'value');
    }

    public function test_get_number_property_double(): void
    {
        $reader = new SchemaReader();
        $schema = Schema::make(['format' => 'double']);
        $this->assertSame(3.14, $reader->getNumberProperty($schema, 3.14, 'value'));
        $this->assertSame(10.0, $reader->getNumberProperty($schema, 10, 'value'));
    }

    public function test_get_boolean_property(): void
    {
        $reader = new SchemaReader();
        $schema = Schema::make([]);
        $this->assertTrue($reader->getBooleanProperty($schema, true, 'value'));
        $this->assertFalse($reader->getBooleanProperty($schema, false, 'value'));
    }

    public function test_get_object_property_properties(): void
    {
        $reader = new SchemaReader();
        $schema = Schema::make([
            'properties' => [
                'value' => [
                    'type' => 'string',
                ],
            ],
        ]);
        $value = $reader->getObjectProperty($schema, ['value' => 'foo'], 'value');
        $this->assertSame(['value' => 'foo'], $value);
    }

    public function test_get_object_property_additional_properties(): void
    {
        $reader = new SchemaReader();
        $schema = Schema::make([
            'additionalProperties' => [
                'type' => 'string',
            ],
        ]);
        $value = $reader->getObjectProperty($schema, ['key1' => 'value1', 'key2' => 'value2'], 'value');
        $this->assertSame(['key1' => 'value1', 'key2' => 'value2'], $value);
    }

    public function test_get_object_property_undefined(): void
    {
        $reader = new SchemaReader();
        $schema = Schema::make([
            'properties' => [
                'value' => [
                    'type' => 'string',
                ],
            ],
        ]);
        $value = $reader->getObjectProperty($schema, ['undefined' => 'foo'], 'value');
        $this->assertSame([], $value);
    }

    public function test_get_object_property_mixed(): void
    {
        $reader = new SchemaReader();
        $schema = Schema::make([
            'properties' => [
                'array' => [
                    'type' => 'array',
                    'items' => [
                        'type' => 'string',
                    ],
                ],
            ],
        ]);
        $value = $reader->getObjectProperty($schema, ['array' => ['foo', 'bar']], 'value');
        $this->assertSame(['array' => ['foo', 'bar']], $value);
    }

    public function test_get_object_property_required(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('The value.name is required.');
        $reader = new SchemaReader();
        $schema = Schema::make([
            'properties' => [
                'name' => [
                    'type' => 'string',
                    'required' => true,
                ],
            ],
        ]);
        $reader->getObjectProperty($schema, [], 'value');
    }

    public function test_get_object_property_required_nested_message(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('The person.name is required.');
        $schema = Schema::make([
            'type' => 'object',
            'properties' => [
                'name' => [
                    'type' => 'string',
                    'required' => true,
                ],
            ],
        ]);
        $reader = new SchemaReader();
        $reader->getObjectProperty($schema, [], 'person');
    }

    public function test_get_object_property_ref(): void
    {
        $reader = new SchemaReader();
        $reader->findSchemaUsing(function (string $path): Schema {
            $this->assertSame('#/components/schemas/foo', $path);

            return Schema::make([
                'type' => 'object',
                'properties' => [
                    'value' => [
                        'type' => 'string',
                    ],
                ],
            ]);
        });
        $schema = Schema::make([
            '$ref' => '#/components/schemas/foo',
        ]);
        $this->assertSame(['value' => 'foo'], $reader->getObjectProperty($schema, ['value' => 'foo'], 'value'));
    }

    public function test_get_object_without_definition(): void
    {
        $reader = new SchemaReader();
        $schema = Schema::make([]);
        $value = $reader->getObjectProperty($schema, ['value' => 'foo'], 'value');
        $this->assertSame(['value' => 'foo'], $value);
    }

    public function test_get_array_property(): void
    {
        $reader = new SchemaReader();
        $schema = Schema::make([
            'items' => [
                'type' => 'string',
            ],
        ]);
        $value = $reader->getArrayProperty($schema, ['foo', 'bar'], 'value');
        $this->assertSame(['foo', 'bar'], $value);
    }

    public function test_get_array_property_required(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('The value is required.');
        $reader = new SchemaReader();
        $schema = Schema::make([
            'items' => [
                'type' => 'string',
                'required' => true,
            ],
        ]);
        $reader->getArrayProperty($schema, [], 'value');
    }

    public function test_get_array_property_min_items(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('The value must have at least 3 elements.');
        $reader = new SchemaReader();
        $schema = Schema::make([
            'items' => [
                'type' => 'string',
            ],
            'minItems' => 3,
        ]);
        $reader->getArrayProperty($schema, ['foo', 'bar'], 'value');
    }

    public function test_get_array_property_max_items(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('The value must have a maximum of 2 elements.');
        $reader = new SchemaReader();
        $schema = Schema::make([
            'items' => [
                'type' => 'string',
            ],
            'maxItems' => 2,
        ]);
        $reader->getArrayProperty($schema, ['foo', 'bar', 'baz'], 'value');
    }

    public function test_get_array_property_mixed(): void
    {
        $reader = new SchemaReader();
        $schema = Schema::make([
            'items' => [
                'type' => 'object',
                'properties' => [
                    'title' => ['type' => 'string'],
                ],
            ],
        ]);
        $value = $reader->getArrayProperty($schema, [['title' => 'Hello world!'], ['title' => 'Awesome Post']], 'value');
        $this->assertSame([['title' => 'Hello world!'], ['title' => 'Awesome Post']], $value);
    }

    public function test_get_array_property_ref(): void
    {
        $reader = new SchemaReader();
        $reader->findSchemaUsing(function (string $path): Schema {
            $this->assertSame('#/components/schemas/foo', $path);

            return Schema::make([
                'type' => 'object',
                'properties' => [
                    'title' => [
                        'type' => 'string',
                    ],
                ],
            ]);
        });
        $schema = Schema::make(['items' => ['$ref' => '#/components/schemas/foo']]);
        $this->assertSame(
            [['title' => 'Hello world!'], ['title' => 'Awesome']],
            $reader->getArrayProperty($schema, [['title' => 'Hello world!'], ['title' => 'Awesome']], 'value')
        );
    }

    public function test_get_any_property(): void
    {
        $reader = new SchemaReader();
        $schema = Schema::make([]);
        $this->assertSame('foo', $reader->getAnyProperty($schema, 'foo', 'value'));
        $this->assertSame(1024, $reader->getAnyProperty($schema, 1024, 'value'));
    }

    public function test_missing_schema_finder(): void
    {
        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage('Missing schema finder.');
        $reader = new SchemaReader();
        $schema = Schema::make(['items' => ['$ref' => '#/components/schemas/foo']]);
        $reader->getArrayProperty($schema, [], 'value');
    }

    public function test_get_property(): void
    {
        $reader = new SchemaReader();
        $this->assertSame('foo', $reader->getProperty(Schema::make(['type' => 'string']), 'foo', 'value'));
        $this->assertSame(1024, $reader->getProperty(Schema::make(['type' => 'integer']), 1024, 'value'));
        $this->assertSame(3.14, $reader->getProperty(Schema::make(['type' => 'number']), 3.14, 'value'));
        $this->assertTrue($reader->getProperty(Schema::make(['type' => 'boolean']), true, 'value'));
        $this->assertFalse($reader->getProperty(Schema::make(['type' => 'boolean']), false, 'value'));

        $schema = Schema::make(['type' => 'array', 'items' => ['type' => 'string']]);
        $this->assertSame(['foo', 'bar'], $reader->getProperty($schema, ['foo', 'bar'], 'value'));

        $schema = Schema::make(['type' => 'object', 'properties' => ['value' => ['type' => 'string']]]);
        $this->assertSame(['value' => 'foo'], $reader->getProperty($schema, ['value' => 'foo'], 'value'));
    }

    public function test_get_property_any_type(): void
    {
        $reader = new SchemaReader();
        $schema = Schema::make(['type' => 'any']);
        $this->assertSame('foo', $reader->getProperty($schema, 'foo', 'value'));
        $this->assertSame(1024, $reader->getProperty($schema, 1024, 'value'));

        $schema = Schema::make(['type' => 'array', 'items' => ['type' => 'any']]);
        $this->assertSame(['foo', 1024], $reader->getProperty($schema, ['foo', 1024], 'value'));

        $schema = Schema::make(['type' => 'object', 'properties' => ['value' => ['type' => 'any']]]);
        $this->assertSame(['value' => 'foo'], $reader->getProperty($schema, ['value' => 'foo'], 'value'));
        $this->assertSame(['value' => 1024], $reader->getProperty($schema, ['value' => 1024], 'value'));
    }

    public function test_get_property_enum(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('The value must be a string.');
        $reader = new SchemaReader();
        $schema = Schema::make(['type' => 'string']);
        $reader->getProperty($schema, StubEnum::Foo, 'value');
    }

    public function test_get_property_backed_enum(): void
    {
        $reader = new SchemaReader();
        $schema = Schema::make(['type' => 'string']);
        $this->assertSame('bar', $reader->getProperty($schema, StubStringEnum::Foo, 'value'));

        $schema = Schema::make(['type' => 'integer']);
        $this->assertSame(0, $reader->getProperty($schema, StubIntEnum::Zero, 'value'));
    }

    /**
     * @param  TSchema  $schema
     */
    #[TestWith([['type' => 'string'], [], 'The value must be a string.'], 'string')]
    #[TestWith([['type' => 'integer'], '100', 'The value must be an integer.'], 'integer')]
    #[TestWith([['type' => 'number'], '3.14', 'The value must be a number.'], 'number')]
    #[TestWith([['type' => 'boolean'], 'true', 'The value must be a boolean.'], 'boolean')]
    #[TestWith([['type' => 'object'], '', 'The value must be an associative array.'], 'object')]
    #[TestWith([['type' => 'array'], '', 'The value must be a list array.'], 'array')]
    public function test_get_property_type_validation(array $schema, mixed $value, string $message): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage($message);
        $reader = new SchemaReader();
        $reader->getProperty(Schema::make($schema), $value, 'value');
    }

    public function test_get_property_type_validation_object_nested_message(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('The person.name must be a string.');
        $schema = Schema::make([
            'type' => 'object',
            'properties' => [
                'name' => [
                    'type' => 'string',
                ],
            ],
        ]);
        $reader = new SchemaReader();
        $reader->getProperty($schema, ['name' => true], 'person');
    }

    public function test_get_property_required_nested_message(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('The person.name is required.');
        $schema = Schema::make([
            'type' => 'object',
            'properties' => [
                'name' => [
                    'type' => 'string',
                    'required' => true,
                ],
            ],
        ]);
        $reader = new SchemaReader();
        $reader->getProperty($schema, [], 'person');
    }

    /**
     * @param  TSchema  $schema
     * @param  mixed[]  $value
     */
    #[TestWith([
        ['type' => 'array', 'items' => ['type' => 'string']],
        [true],
        'The value.0 must be a string.',
    ])]
    #[TestWith([
        ['type' => 'array', 'items' => ['type' => 'object', 'properties' => ['foo' => ['type' => 'string']]]],
        [['foo' => 3.14]],
        'The value.0.foo must be a string.',
    ])]
    public function test_get_property_type_validation_array_nested_message(array $schema, array $value, string $message): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage($message);
        $schema = Schema::make($schema);
        $reader = new SchemaReader();
        $reader->getProperty($schema, $value, 'value');
    }

    /**
     * @param  TSchema  $schema
     */
    #[IgnoreDeprecations]
    #[TestWith(['getStringProperty', 'foo'], 'string')]
    #[TestWith(['getIntegerProperty', 1024], 'integer')]
    #[TestWith(['getNumberProperty', 3.14], 'number')]
    #[TestWith(['getBooleanProperty', true], 'boolean')]
    #[TestWith(['getObjectProperty', [], ['properties' => []]], 'object')]
    #[TestWith(['getArrayProperty', [], ['items' => ['type' => 'string']]], 'array')]
    public function test_check_if_deprecated(string $method, mixed $value, array $schema = []): void
    {
        $this->expectUserDeprecationMessage('The value is marked as deprecated.');
        $schema = Schema::make(array_merge(['deprecated' => true], $schema));
        $reader = new SchemaReader();
        $reader->{$method}($schema, $value, 'value');
    }
}

enum StubEnum
{
    case Foo;
}

enum StubStringEnum: string
{
    case Foo = 'bar';
}

enum StubIntEnum: int
{
    case Zero = 0;
}
