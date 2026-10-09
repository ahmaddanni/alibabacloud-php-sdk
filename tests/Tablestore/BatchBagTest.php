<?php

declare(strict_types=1);

namespace Dew\Acs\Tests\Tablestore;

use Dew\Acs\Tablestore\BatchBag;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(BatchBag::class)]
final class BatchBagTest extends TestCase
{
    public function test_table_makes_new_builder(): void
    {
        $bag = new BatchBag();
        $this->assertEmpty($bag->getTables());
        $bag->table('testing');
        $this->assertCount(1, $bag->getTables());
        $this->assertCount(1, $bag->getTables()['testing']); // @phpstan-ignore offsetAccess.notFound
        $bag->table('testing');
        $this->assertCount(1, $bag->getTables());
        $this->assertCount(2, $bag->getTables()['testing']); // @phpstan-ignore offsetAccess.notFound
    }
}
