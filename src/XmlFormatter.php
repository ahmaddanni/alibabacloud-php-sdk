<?php

declare(strict_types=1);

namespace Dew\Acs;

use Dew\Acs\OpenApi\Schema;

final class XmlFormatter
{
    /**
     * @var (\Closure(string): ?\Dew\Acs\OpenApi\Schema)|null
     */
    private ?\Closure $schemaFinder = null;

    /**
     * @template T
     * @param  T  $data
     * @return T
     */
    public function format(mixed $data, Schema $schema): mixed
    {
        return $this->formatProperty($data, $schema);
    }

    public function formatProperty(mixed $data, Schema $schema): mixed
    {
        if (is_string($schema->ref)) {
            return $this->formatPropertyByRef($schema->ref, $data);
        }

        if ($schema->type === null) {
            return $data;
        }

        $method = 'format'.ucfirst($schema->type).'Property';

        if (method_exists($this, $method)) {
            return $this->{$method}($data, $schema);
        }

        return $data;
    }

    public function formatPropertyByRef(string $path, mixed $data): mixed
    {
        if ($this->schemaFinder === null) {
            throw new \RuntimeException('Missing schema finder.');
        }

        $schema = call_user_func($this->schemaFinder, $path);

        if (! $schema instanceof Schema) {
            return $data;
        }

        return $this->formatProperty($data, $schema);
    }

    public function formatIntegerProperty(mixed $data, Schema $schema): mixed
    {
        if (is_numeric($data)) {
            return (int) $data;
        }

        return $data;
    }

    public function formatNumberProperty(mixed $data, Schema $schema): mixed
    {
        if (is_numeric($data)) {
            return (float) $data;
        }

        return $data;
    }

    public function formatStringProperty(mixed $data, Schema $schema): mixed
    {
        if ($data === []) {
            return '';
        }

        if (is_scalar($data)) {
            return (string) $data;
        }

        return $data;
    }

    public function formatBooleanProperty(mixed $data, Schema $schema): bool
    {
        if (is_string($data)) {
            return strtolower($data) === 'true';
        }

        return (bool) $data;
    }

    /**
     * @param  mixed[]  $data
     * @return mixed[]
     */
    public function formatObjectProperty(array $data, Schema $schema): array
    {
        $result = $data;

        if (is_array($schema->properties)) {
            foreach ($schema->properties as $property => $propSchema) {
                $value = $result[$property] ?? null;

                if ($value !== null) {
                    $result[$property] = $this->formatProperty($value, $propSchema);
                }
            }
        }

        return $result;
    }

    /**
     * @return mixed[]
     */
    public function formatArrayProperty(mixed $data, Schema $schema): array
    {
        if (is_array($data) && $schema->items instanceof Schema) {
            $result = array_is_list($data) ? $data : [$data];

            foreach ($result as $key => $value) {
                $result[$key] = $this->format($value, $schema->items);
            }

            return $result;
        }

        return is_array($data) && array_is_list($data) ? $data : [$data];
    }

    /**
     * @param  \Closure(string): ?\Dew\Acs\OpenApi\Schema  $callback
     */
    public function findSchemaUsing(\Closure $callback): void
    {
        $this->schemaFinder = $callback;
    }
}
