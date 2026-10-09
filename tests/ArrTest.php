<?php

declare(strict_types=1);

namespace Dew\Acs\Tests;

use Dew\Acs\Arr;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\TestWith;
use PHPUnit\Framework\TestCase;

#[CoversClass(Arr::class)]
final class ArrTest extends TestCase
{
    /**
     * @param  mixed[]  $array
     */
    #[TestWith([true, ['value' => 'foo'], 'value'])]
    #[TestWith([true, ['value' => ['nested' => 'foo']], 'value.nested'])]
    #[TestWith([true, ['value.nested' => 'foo', 'value' => ['nested' => 'bar']], 'value.nested'])]
    #[TestWith([true, ['value' => ['nested' => 'foo']], 'value'])]
    #[TestWith([true, ['value' => ['foo', 'bar']], 'value.0'])]
    #[TestWith([true, ['foo'], 0])]
    #[TestWith([true, ['foo'], '0'])]
    #[TestWith([false, ['foo'], '1'])]
    #[TestWith([false, ['foo'], 1])]
    #[TestWith([false, [], 'value'])]
    #[TestWith([false, [], 'value.not.exists'])]
    public function test_has(bool $expected, array $array, int|string $key): void
    {
        $this->assertSame($expected, Arr::has($array, $key));
    }

    /**
     * @param  mixed[]  $array
     */
    #[TestWith(['foo', ['value' => 'foo'], 'value'])]
    #[TestWith(['foo', ['value' => ['nested' => 'foo']], 'value.nested'])]
    #[TestWith(['foo', ['value.nested' => 'foo', 'value' => ['nested' => 'bar']], 'value.nested'])]
    #[TestWith([['nested' => 'foo'], ['value' => ['nested' => 'foo']], 'value'])]
    #[TestWith(['foo', ['value' => ['foo', 'bar']], 'value.0'])]
    #[TestWith(['foo', ['foo'], 0])]
    #[TestWith(['foo', ['foo'], '0'])]
    #[TestWith(['foo', ['foo'], '0', 'bar'])]
    #[TestWith([null, ['foo'], 1])]
    #[TestWith([null, ['foo'], '1'])]
    #[TestWith(['bar', ['foo'], '1', 'bar'])]
    #[TestWith(['foo', [], 'value', 'foo'])]
    #[TestWith([null, [], 'value'])]
    #[TestWith([null, [], 'value.not.exists'])]
    public function test_get(mixed $expected, array $array, int|string $key, mixed $default = null): void
    {
        $this->assertSame($expected, Arr::get($array, $key, $default));
    }
}
