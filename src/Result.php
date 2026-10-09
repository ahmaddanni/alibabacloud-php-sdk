<?php

declare(strict_types=1);

namespace Dew\Acs;

use Psr\Http\Message\ResponseInterface;

/**
 * @template TData of array
 * @implements \ArrayAccess<key-of<TData>, value-of<TData>>
 */
final class Result implements \ArrayAccess
{
    private ?ResponseInterface $response = null;

    /**
     * @param  TData  $data
     */
    public function __construct(
        private readonly array $data = []
    ) {
        //
    }

    /**
     * @param  key-of<TData>|string  $name
     */
    public function has($name): bool
    {
        return Arr::has($this->data, $name);
    }

    /**
     * @template TDefault
     * @param  key-of<TData>|string  $name
     * @param  TDefault  $default
     * @return value-of<TData>|TDefault
     */
    public function get($name, mixed $default = null): mixed
    {
        return Arr::get($this->data, $name, $default);
    }

    #[\Override]
    public function offsetExists($offset): bool
    {
        return $this->has($offset);
    }

    #[\Override]
    public function offsetGet($offset): mixed
    {
        return $this->get($offset);
    }

    #[\Override]
    public function offsetSet($offset, $value): void
    {
        throw new \RuntimeException('Could not mutate the result.');
    }

    #[\Override]
    public function offsetUnset($offset): void
    {
        throw new \RuntimeException('Could not mutate the result.');
    }

    /**
     * @return mixed[]
     */
    public function getDecodedData(): array
    {
        return $this->data;
    }

    /**
     * @return self<TData>
     */
    public function setResponse(?ResponseInterface $response): self
    {
        $this->response = $response;

        return $this;
    }

    public function getResponse(): ?ResponseInterface
    {
        return $this->response;
    }

    public function __isset(string $name): bool
    {
        return $this->has($name);
    }

    public function __get(string $name): mixed
    {
        $value = $this->get($name);

        if ($value === null) {
            return null;
        }

        if (is_array($value) && ! array_is_list($value)) {
            return (object) $value;
        }

        return $value;
    }
}
