<?php

declare(strict_types=1);

namespace Dew\Acs\Tests;

use Dew\Acs\Str;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\TestWith;
use PHPUnit\Framework\TestCase;

#[CoversClass(Str::class)]
final class StrTest extends TestCase
{
    #[TestWith(['foo', 'foo'])]
    #[TestWith(['foo bar', 'foo-bar'])]
    #[TestWith(['foo-bar', 'foo-bar'])]
    #[TestWith(['foo_bar', 'foo-bar'])]
    #[TestWith([' foo ', 'foo'])]
    #[TestWith([' foo', 'foo'])]
    #[TestWith(['foo ', 'foo'])]
    #[TestWith([' foo bar ', 'foo-bar'])]
    #[TestWith(['foo!bar', 'foo-bar'])]
    #[TestWith(['foo--bar', 'foo-bar'])]
    #[TestWith(['-foo-bar', 'foo-bar'])]
    #[TestWith(['--foo-bar', 'foo-bar'])]
    #[TestWith(['foo-bar-', 'foo-bar'])]
    #[TestWith(['foo-bar--', 'foo-bar'])]
    #[TestWith(['--foo-bar--', 'foo-bar'])]
    #[TestWith(['foo_bar baz', 'foo-bar-baz'])]
    #[TestWith(['foo_bar-baz', 'foo-bar-baz'])]
    #[TestWith(['fooBar', 'foo-bar'])]
    #[TestWith(['FooBar', 'foo-bar'])]
    #[TestWith(['Foo123Bar', 'foo123-bar'])]
    #[TestWith(['123Foo', '123-foo'])]
    #[TestWith(['123foo', '123foo'])]
    #[TestWith(['1-23foo', '1-23foo'])]
    public function test_kebab(string $str, string $expected): void
    {
        $this->assertSame($expected, Str::kebab($str));
    }

    #[TestWith(['Foo', 'Foo'])]
    #[TestWith(['foo', 'Foo'])]
    #[TestWith(['FooBar', 'FooBar'])]
    #[TestWith(['foo-bar', 'FooBar'])]
    #[TestWith(['foo!bar', 'FooBar'])]
    #[TestWith([' foo', 'Foo'])]
    #[TestWith(['foo ', 'Foo'])]
    #[TestWith([' foo ', 'Foo'])]
    #[TestWith(['-foo', 'Foo'])]
    #[TestWith(['foo-', 'Foo'])]
    #[TestWith(['-foo-', 'Foo'])]
    #[TestWith(['--foo--', 'Foo'])]
    #[TestWith(['foo123bar', 'Foo123Bar'])]
    #[TestWith(['foo123Bar', 'Foo123Bar'])]
    #[TestWith(['123fooBar', '123FooBar'])]
    public function test_studly(string $str, string $expected): void
    {
        $this->assertSame($expected, Str::studly($str));
    }

    #[TestWith(['foo*', 'foobar', true])]
    #[TestWith(['foo*', 'foo', true])]
    #[TestWith(['foo*', 'bar', false])]
    #[TestWith(['foo*', 'fo', false])]
    #[TestWith(['*bar', 'bar', true])]
    #[TestWith(['*bar', 'foobar', true])]
    #[TestWith(['foo*baz', 'foobaz', true])]
    #[TestWith(['foo*baz', 'foobarbaz', true])]
    #[TestWith(['foo*baz', 'foobar', false])]
    #[TestWith(['foo', 'foo', true])]
    #[TestWith(['foo', 'bar', false])]
    #[TestWith(['foo', 'fo', false])]
    #[TestWith(['bar*', 'foobar', false])]
    #[TestWith(['bar', 'foobarbaz', false])]
    #[TestWith(['foo?', 'foo?', true])]
    #[TestWith(['foo?', 'foo', false])]
    #[TestWith(['*', 'bar', true])]
    #[TestWith(['*', '', true])]
    #[TestWith(['**', '', true])]
    #[TestWith(['foo**baz', 'foobaz', true])]
    #[TestWith(['foo**baz', 'foobarbaz', true])]
    public function test_is(string $mask, string $str, bool $expected): void
    {
        $this->assertSame($expected, Str::is($mask, $str));
    }

    /**
     * @param  string[]  $values
     */
    #[TestWith(['foo*', ['bar'], 'foobar'])]
    #[TestWith(['*bar', ['foo'], 'foobar'])]
    #[TestWith(['f*o', ['o'], 'foo'])]
    #[TestWith(['*, *!', ['Hello', 'World'], 'Hello, World!'])]
    #[TestWith(['*', [], '*'])]
    #[TestWith(['*', ['foo'], 'foo'])]
    #[TestWith(['*', ['foo', 'bar'], 'foo'])]
    #[TestWith(['**', [], '**'])]
    public function test_fill(string $mask, array $values, string $expected): void
    {
        $this->assertSame($expected, Str::fill($mask, ...$values));
    }
}
