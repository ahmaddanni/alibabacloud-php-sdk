<?php

declare(strict_types=1);

namespace Dew\Acs\Tests\Tablestore;

use Dew\Acs\Tablestore\Cells\IntegerPrimaryKey;
use Dew\Acs\Tablestore\Cells\StringPrimaryKey;
use Dew\Acs\Tablestore\PrimaryKey;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\TestWith;
use PHPUnit\Framework\TestCase;

#[CoversClass(PrimaryKey::class)]
final class PrimaryKeyTest extends TestCase
{
    /**
     * @param  class-string<\Dew\Acs\Tablestore\Cells\PrimaryKey>  $expected
     */
    #[TestWith([10, IntegerPrimaryKey::class], 'integer')]
    #[TestWith(['foo', StringPrimaryKey::class], 'string')]
    public function test_create_from_value(mixed $value, string $expected): void
    {
        $pk = PrimaryKey::createFromValue('value', $value);
        $this->assertInstanceOf($expected, $pk);
    }

    public function test_create_from_value_unsupported(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Could not build a primary key from the [NULL] type.');
        PrimaryKey::createFromValue('value', null);
    }
}
