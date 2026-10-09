<?php

declare(strict_types=1);

namespace Dew\Acs;

/**
 * @internal
 */
final class Arr
{
    /**
     * @template T of array
     * @param  T  $array
     * @param  key-of<T>  $key
     */
    public static function has(array $array, int|string $key): bool
    {
        if (array_key_exists($key, $array)) {
            return true;
        }

        $result = $array;
        $segments = explode('.', (string) $key);

        foreach ($segments as $segment) {
            if (is_array($result) && array_key_exists($segment, $result)) {
                $result = $result[$segment];
            } else {
                return false;
            }
        }

        return true;
    }

    /**
     * @template TKey of int|string
     * @template TValue
     * @template TDefault
     * @param  array<TKey, TValue>  $array
     * @param  TKey  $key
     * @param  TDefault  $default
     * @return TValue|TDefault
     */
    public static function get(array $array, int|string $key, mixed $default = null): mixed
    {
        if (array_key_exists($key, $array)) {
            return $array[$key];
        }

        $result = $array;
        $segments = explode('.', (string) $key);

        foreach ($segments as $segment) {
            if (is_array($result) && array_key_exists($segment, $result)) {
                $result = $result[$segment];
            } else {
                return $default;
            }
        }

        return $result;
    }

    /**
     * @template T of array
     * @param  T  $array
     * @param  key-of<T>[]  $keys
     * @return T
     */
    public static function only(array $array, array $keys): array
    {
        $result = [];

        foreach ($keys as $key) {
            if (isset($array[$key])) {
                $result[$key] = $array[$key];
            }
        }

        return $result;
    }
}
