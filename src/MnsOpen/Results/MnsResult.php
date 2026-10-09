<?php

declare(strict_types=1);

namespace Dew\Acs\MnsOpen\Results;

use Dew\Acs\Result;

/**
 * @mixin \Dew\Acs\Result
 */
class MnsResult
{
    /**
     * Create a new result instance.
     *
     * @param  \Dew\Acs\Result<array<mixed>>  $result
     */
    public function __construct(
        protected Result $result
    ) {
        //
    }

    /**
     * The request ID.
     */
    public function requestId(): ?string
    {
        $requestId = $this->getResponse()?->getHeaderLine('x-mns-request-id');

        if ($requestId === null || $requestId === '') {
            return null;
        }

        return $requestId;
    }

    /**
     * The API version.
     */
    public function version(): ?string
    {
        $version = $this->getResponse()?->getHeaderLine('x-mns-version');

        if ($version === null || $version === '') {
            return null;
        }

        return $version;
    }

    /**
     * Retrieve and cast data to a list array.
     *
     * @return array<int, mixed>|null
     */
    public function list(string $name): ?array
    {
        $result = $this->get($name);

        if ($result === null) {
            return null;
        }

        if (! is_array($result)) {
            return [$result];
        }

        return array_is_list($result) ? $result : [$result];
    }

    /**
     * Cast a list of items to the given class.
     *
     * @template T
     * @param  class-string<T>  $classString
     * @return T[]
     */
    public function castInto(string $name, string $classString): array
    {
        $array = $this->list($name) ?? [];

        $result = [];

        foreach ($array as $item) {
            $result[] = $classString::make($item);
        }

        return $result;
    }

    /**
     * Redirect the call to the underlying result instance.
     *
     * @param  array<int, mixed>  $arguments
     */
    public function __call(string $method, array $arguments): mixed
    {
        return $this->result->$method(...$arguments);
    }
}
