<?php

declare(strict_types=1);

namespace Dew\Acs\Tests\Tablestore\Schema;

use Dew\Acs\Tablestore\InteractsWithTablestore;
use Dew\Acs\Tablestore\Messages\CreateTableRequest;
use Dew\Acs\Tablestore\Schema\Blueprint;
use Dew\Acs\Tablestore\Schema\SchemaHandler;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use Mockery as m;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(SchemaHandler::class)]
final class SchemaHandlerTest extends TestCase
{
    use MockeryPHPUnitIntegration;

    public function test_create_table_table_meta(): void
    {
        $mock = m::mock(InteractsWithTablestore::class);
        $mock->shouldReceive('send')->with('/CreateTable', m::on(function (CreateTableRequest $request): bool {
            $pks = $request->getTableMeta()->getPrimaryKey();
            $cols = $request->getTableMeta()->getDefinedColumn();

            return $pks->count() === 2
                && $cols->count() === 1
                && $pks[0]->getName() === 'email'
                && $pks[1]->getName() === 'id'
                && $cols[0]->getName() === 'is_admin';
        }))->once();
        $blueprint = new Blueprint();
        $blueprint->string('email')->primary();
        $blueprint->autoIncrement('id');
        $blueprint->boolean('is_admin');
        $handler = new SchemaHandler($mock);
        $handler->createTable('users', $blueprint);
    }
}
