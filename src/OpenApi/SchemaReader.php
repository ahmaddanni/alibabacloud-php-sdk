<?php

declare(strict_types=1);

namespace Dew\Acs\OpenApi;

final class SchemaReader
{
    /**
     * @var \Closure(string): \Dew\Acs\OpenApi\Schema
     */
    private ?\Closure $finder = null;

    public function getProperty(Schema $schema, mixed $value, string $attribute): mixed
    {
        if ($schema->ref !== null) {
            return $this->getPropertyByRef($schema->ref, $value, $attribute);
        }

        $type = $schema->type ?? throw new \RuntimeException('Missing schema type.');

        $method = 'get'.ucfirst($schema->type).'Property';

        if (! method_exists($this, $method)) {
            throw new \RuntimeException("Unsupported data type {$schema->type}.");
        }

        if ($value instanceof \BackedEnum) {
            $value = $value->value;
        }

        $this->validateValueType($schema->type, $value, $attribute);

        return $this->{$method}($schema, $value, $attribute);
    }

    private function validateValueType(string $type, mixed $value, string $attribute): void
    {
        $message = match ($type) {
            'string' => ! is_string($value) ? "The $attribute must be a string." : null,
            'integer' => ! is_int($value) ? "The $attribute must be an integer." : null,
            'number' => ! is_int($value) && ! is_float($value) ? "The $attribute must be a number." : null,
            'boolean' => ! is_bool($value) ? "The $attribute must be a boolean." : null,
            'object' => ! is_array($value) || ($value !== [] && array_is_list($value))
                ? "The $attribute must be an associative array."
                : null,
            'array' => ! is_array($value) || ! array_is_list($value)
                ? "The $attribute must be a list array."
                : null,
            default => null,
        };

        if (is_string($message)) {
            throw new \InvalidArgumentException($message);
        }
    }

    public function getPropertyByRef(string $path, mixed $value, string $attribute): mixed
    {
        $schema = $this->findSchema($path);

        return $this->getProperty($schema, $value, $attribute);
    }

    public function getStringProperty(Schema $schema, string $value, string $attribute): string
    {
        $this->checkIfDeprecated($schema, $attribute);

        if ($schema->minLength !== null && strlen($value) < $schema->minLength) {
            throw new \InvalidArgumentException(
                "The $attribute must be at least {$schema->minLength} characters."
            );
        }

        if ($schema->maxLength !== null && strlen($value) > $schema->maxLength) {
            throw new \InvalidArgumentException(
                "The $attribute must be a maximum of {$schema->maxLength} characters."
            );
        }

        if ($schema->enum !== null &&
            $schema->enum !== [] &&
            ! in_array($value, $schema->enum, strict: true)) {
            throw new \InvalidArgumentException(
                $this->buildEnumErrorMessage($schema->enum, $attribute)
            );
        }

        if ($schema->pattern && ! preg_match("/{$schema->pattern}/", $value)) {
            throw new \InvalidArgumentException(sprintf(
                'The value must match the pattern "%s"', $schema->pattern
            ));
        }

        return $value;
    }

    /**
     * @param  array<int, mixed>  $enum
     */
    private function buildEnumErrorMessage(array $enum, string $attribute): string
    {
        $wrapped = array_map(function (mixed $value): string {
            if (is_scalar($value) || $value instanceof \Stringable) {
                return sprintf('"%s"', (string) $value);
            }

            throw new \InvalidArgumentException('Could not cast enum to string.');
        }, $enum);

        $message = match ($count = count($enum)) {
            1 => sprintf('The %s must be %s.', $attribute, $wrapped[0]),
            2 => sprintf('The %s must be either %s or %s.', $attribute, ...$wrapped),
            default => sprintf('The %s must be either %s, or %s.', $attribute,
                implode(', ', array_slice($wrapped, 0, $count - 1)),
                $wrapped[$count - 1]
            ),
        };

        return $message;
    }

    public function getIntegerProperty(Schema $schema, int $value, string $attribute): int
    {
        $this->checkIfDeprecated($schema, $attribute);

        if ($schema->minimum !== null && $value < (int) $schema->minimum) {
            throw new \InvalidArgumentException(
                "The $attribute must be at least {$schema->minimum}."
            );
        }

        if ($schema->maximum !== null && $value > (int) $schema->maximum) {
            throw new \InvalidArgumentException(
                "The $attribute must not exceed {$schema->maximum}."
            );
        }

        return $value;
    }

    public function getNumberProperty(Schema $schema, int|float $value, string $attribute): float
    {
        $this->checkIfDeprecated($schema, $attribute);

        return (float) $value;
    }

    public function getBooleanProperty(Schema $schema, bool $value, string $attribute): bool
    {
        $this->checkIfDeprecated($schema, $attribute);

        return $value;
    }

    /**
     * @param  array<string, mixed>  $value
     * @return array<string, mixed>
     */
    public function getObjectProperty(Schema $schema, array $value, string $attribute): array
    {
        $this->checkIfDeprecated($schema, $attribute);

        if ($schema->ref !== null) {
            /** @var array<string, mixed> */
            return $this->getPropertyByRef($schema->ref, $value, $attribute);
        }

        if ($schema->additionalProperties !== null) {
            return $this->getObjectAdditionalProperties(
                $schema->additionalProperties, $value, $attribute
            );
        }

        if ($schema->properties !== null) {
            return $this->getObjectProperties(
                $schema->properties, $value, $attribute
            );
        }

        // If the object definition is missing from the parameter to fulfill
        // the API request, we let the user take full control of the data
        // that's sent over the wire instead of throwing the exception.
        return $value;
    }

    /**
     * @param  array<string, mixed>  $values
     * @return array<string, mixed>
     */
    private function getObjectAdditionalProperties(Schema $schema, array $values, string $attribute): array
    {
        $result = [];

        foreach ($values as $key => $value) {
            $result[$key] = $this->getProperty($schema, $value, $attribute.'.'.$key);
        }

        return $result;
    }

    /**
     * @param  array<string, Schema>  $properties
     * @param  array<string, mixed>  $values
     * @return array<string, mixed>
     */
    private function getObjectProperties(array $properties, array $values, string $attribute): array
    {
        $result = [];

        foreach ($properties as $property => $propSchema) {
            $value = $values[$property] ?? null;

            if ($propSchema->required === true && $value === null) {
                throw new \InvalidArgumentException("The {$attribute}.{$property} is required.");
            }

            if ($value === null) {
                continue;
            }

            $result[$property] = $this->getProperty($propSchema, $value, $attribute.'.'.$property);
        }

        return $result;
    }

    /**
     * @param  array<int, mixed>  $values
     * @return array<int, mixed>
     */
    public function getArrayProperty(Schema $schema, array $values, string $attribute): array
    {
        $this->checkIfDeprecated($schema, $attribute);

        if ($schema->minItems !== null && count($values) < $schema->minItems) {
            throw new \InvalidArgumentException(
                "The $attribute must have at least {$schema->minItems} elements."
            );
        }

        if ($schema->maxItems !== null && count($values) > $schema->maxItems) {
            throw new \InvalidArgumentException(
                "The $attribute must have a maximum of {$schema->maxItems} elements."
            );
        }

        if ($schema->items === null) {
            throw new \InvalidArgumentException('Missing items in the schema.');
        }

        $schema = $schema->items->ref !== null
            ? $this->findSchema($schema->items->ref)
            : $schema->items;

        if ($schema->required === true && $values === []) {
            throw new \InvalidArgumentException("The $attribute is required.");
        }

        return $this->getArrayItems($schema, $values, $attribute);
    }

    /**
     * @param  array<int, mixed>  $values
     * @return array<int, mixed>
     */
    private function getArrayItems(Schema $schema, array $values, string $attribute): array
    {
        $result = [];

        foreach ($values as $key => $value) {
            $result[] = $this->getProperty($schema, $value, $attribute.'.'.$key);
        }

        return $result;
    }

    public function getAnyProperty(Schema $schema, mixed $value, string $attribute): mixed
    {
        return $value;
    }

    private function checkIfDeprecated(Schema $schema, string $attribute): void
    {
        if ($schema->deprecated === true) {
            trigger_error("The $attribute is marked as deprecated.", E_USER_DEPRECATED);
        }
    }

    private function findSchema(string $path): Schema
    {
        if ($this->finder === null) {
            throw new \RuntimeException('Missing schema finder.');
        }

        return call_user_func($this->finder, $path);
    }

    /**
     * @param  \Closure(string): \Dew\Acs\OpenApi\Schema  $callback
     */
    public function findSchemaUsing(callable $callback): void
    {
        $this->finder = $callback;
    }
}
