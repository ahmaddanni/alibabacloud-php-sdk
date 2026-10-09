<?php

declare(strict_types=1);

namespace Dew\Acs\Tests\Tablestore;

use Dew\Acs\Tablestore\Attribute;
use Dew\Acs\Tablestore\BasicHandler;
use Dew\Acs\Tablestore\BatchBag;
use Dew\Acs\Tablestore\Builder;
use Dew\Acs\Tablestore\HandlerException;
use Dew\Acs\Tablestore\HandlesDataOperation;
use Dew\Acs\Tablestore\InteractsWithTablestore;
use Dew\Acs\Tablestore\Messages\Filter;
use Dew\Acs\Tablestore\Messages\FilterType;
use Dew\Acs\Tablestore\Messages\GetRowRequest;
use Dew\Acs\Tablestore\Messages\ReturnType;
use Dew\Acs\Tablestore\Messages\RowExistenceExpectation;
use Dew\Acs\Tablestore\Messages\UpdateRowRequest;
use Dew\Acs\Tablestore\PrimaryKey;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use Mockery as m;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\CoversTrait;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

#[CoversClass(BasicHandler::class)]
#[CoversTrait(HandlesDataOperation::class)]
final class BasicHandlerTest extends TestCase
{
    use MockeryPHPUnitIntegration;
    use TestsDataOperation;

    public function test_should_build_filter_primary_key(): void
    {
        $mock = m::mock(InteractsWithTablestore::class);
        $handler = new BasicHandler($mock);
        $builder = new Builder();
        $builder->where(PrimaryKey::string('key', 'foo'));
        $this->assertFalse($handler->shouldBuildFilter($builder));
    }

    public function test_should_build_filter_attribute(): void
    {
        $mock = m::mock(InteractsWithTablestore::class);
        $handler = new BasicHandler($mock);
        $builder = new Builder();
        $builder->where(Attribute::string('attr1', 'foo'));
        $this->assertTrue($handler->shouldBuildFilter($builder));
    }

    public function test_should_build_filter_pagination(): void
    {
        $mock = m::mock(InteractsWithTablestore::class);
        $handler = new BasicHandler($mock);
        $builder = new Builder();
        $builder->where(PrimaryKey::string('attr1', 'foo'))->offset(1, 1);
        $this->assertTrue($handler->shouldBuildFilter($builder));
    }

    public function test_should_build_filter_filter_message(): void
    {
        $mock = m::mock(InteractsWithTablestore::class);
        $handler = new BasicHandler($mock);
        $builder = new Builder();
        $builder->where(new Filter());
        $this->assertTrue($handler->shouldBuildFilter($builder));
    }

    public function test_build_filter_condition_filter(): void
    {
        $mock = m::mock(InteractsWithTablestore::class);
        $handler = new BasicHandler($mock);
        $builder = new Builder();
        $builder->where('attr1', 'foo')->where('attr2', 'bar');
        $this->assertIsCompositeValueFilter($handler->buildFilter($builder));
    }

    public function test_build_filter_pagination_filter(): void
    {
        $mock = m::mock(InteractsWithTablestore::class);
        $handler = new BasicHandler($mock);
        $builder = new Builder();
        $builder->whereKey('key', 'foo')->offset(1, 1);
        $this->assertIsPaginationFilter($handler->buildFilter($builder));
    }

    public function test_build_filter_column_condition_has_higher_precedence_than_pagination_filter(): void
    {
        $mock = m::mock(InteractsWithTablestore::class);
        $handler = new BasicHandler($mock);
        $builder = new Builder();
        $builder->whereKey('key', 'foo')
            ->whereColumn('value', 'bar')
            ->offset(1, 1);
        $this->assertIsSingleValueFilter($handler->buildFilter($builder));
    }

    public function test_condition_update(): void
    {
        $mock = m::mock(InteractsWithTablestore::class);
        $handler = new BasicHandler($mock);
        $builder = new Builder();
        $builder->setTable('testing')
            ->whereKey(PrimaryKey::string('key', 'foo'))
            ->whereFilter(new Filter());
        $this->assertTrue($handler->toCondition($builder)->hasColumnCondition());
    }

    public function test_get_row_max_versions(): void
    {
        $mock = m::mock(InteractsWithTablestore::class);
        $mock->expects()->send('/GetRow', m::on(fn (GetRowRequest $request): bool => $request->getMaxVersions() === 2));
        $handler = new BasicHandler($mock);
        $builder = (new Builder())->setTable('testing')->setHandler($handler);
        $builder->whereKey('key', 'foo')->maxVersions(2)->get();
    }

    public function test_get_row_default_max_versions(): void
    {
        $mock = m::mock(InteractsWithTablestore::class);
        $mock->expects()->send('/GetRow', m::on(fn (GetRowRequest $request): bool => $request->getMaxVersions() === 1));
        $handler = new BasicHandler($mock);
        $builder = (new Builder())->setTable('testing')->setHandler($handler);
        $builder->whereKey('key', 'foo')->get();
    }

    public function test_get_row_time_range(): void
    {
        $mock = m::mock(InteractsWithTablestore::class);
        $mock->expects()->send('/GetRow', m::on(fn (GetRowRequest $request): bool => $request->hasTimeRange()));
        $handler = new BasicHandler($mock);
        $builder = (new Builder())->setTable('testing')->setHandler($handler);
        $builder->whereKey('key', 'foo')->whereVersion(1234567891011)->get();
    }

    public function test_get_row_time_range_drops_default_max_versions(): void
    {
        $mock = m::mock(InteractsWithTablestore::class);
        $mock->expects()->send('/GetRow', m::on(fn (GetRowRequest $request): bool => $request->hasTimeRange() && ! $request->hasMaxVersions()));
        $handler = new BasicHandler($mock);
        $builder = (new Builder())->setTable('testing')->setHandler($handler);
        $builder->whereKey('key', 'foo')->whereVersion(1234567891011)->get();
    }

    public function test_get_row_time_range_and_max_versions(): void
    {
        $mock = m::mock(InteractsWithTablestore::class);
        $mock->expects()->send('/GetRow', m::on(fn (GetRowRequest $request): bool => $request->hasTimeRange() && $request->hasMaxVersions()));
        $handler = new BasicHandler($mock);
        $builder = (new Builder())->setTable('testing')->setHandler($handler);
        $builder->whereKey('key', 'foo')->whereVersion(1234567891011)->maxVersions(2)->get();
    }

    public function test_update_row(): void
    {
        $mock = m::mock(InteractsWithTablestore::class);
        $mock->expects()->send('/UpdateRow', m::on(fn (UpdateRowRequest $request): bool => $request->getTableName() === 'testing'
            && $request->hasRowChange()
            && $request->hasCondition()
            && $request->hasReturnContent()));
        $handler = new BasicHandler($mock);
        (new Builder())
            ->setHandler($handler)
            ->setTable('testing')
            ->returnModified()
            ->select(['counter'])
            ->update([
                PrimaryKey::string('key', 'foo'),
                Attribute::string('value', 'bar'),
                Attribute::increment('counter'),
            ]);
    }

    public function test_to_read_tables_retrieves_all_tables_by_default(): void
    {
        $bag = new BatchBag();
        $bag->table('testing')->whereKey('key', 'foo')->get();
        $bag->table('testing')->whereKey('key', 'bar')->get();
        $mock = m::mock(InteractsWithTablestore::class);
        $handler = new BasicHandler($mock);
        $tables = $handler->toReadTables($bag);
        $this->assertEmpty($tables[0]->getColumnsToGet());
    }

    public function test_to_read_tables_merges_selected_columns(): void
    {
        $bag = new BatchBag();
        $bag->table('testing')->whereKey('key', 'foo')->select(['key'])->get();
        $bag->table('testing')->whereKey('key', 'bar')->select(['value'])->get();
        $mock = m::mock(InteractsWithTablestore::class);
        $handler = new BasicHandler($mock);
        $tables = $handler->toReadTables($bag);
        $this->assertCount(2, $tables[0]->getColumnsToGet());
        $this->assertSame('key', $tables[0]->getColumnsToGet()[0]);
        $this->assertSame('value', $tables[0]->getColumnsToGet()[1]);
    }

    public function test_to_read_tables_resolves_the_last_occurrence_of_start_column(): void
    {
        $bag = new BatchBag();
        $bag->table('testing')->whereKey('key', 'foo')->selectUntil('attr2')->get();
        $bag->table('testing')->whereKey('key', 'bar')->get();
        $mock = m::mock(InteractsWithTablestore::class);
        $handler = new BasicHandler($mock);
        $tables = $handler->toReadTables($bag);
        $this->assertSame('attr2', $tables[0]->getStartColumn());
    }

    public function test_to_read_tables_resolves_the_last_occurrence_of_end_column(): void
    {
        $bag = new BatchBag();
        $bag->table('testing')->whereKey('key', 'foo')->selectBefore('attr2')->get();
        $bag->table('testing')->whereKey('key', 'bar')->get();
        $mock = m::mock(InteractsWithTablestore::class);
        $handler = new BasicHandler($mock);
        $tables = $handler->toReadTables($bag);
        $this->assertSame('attr2', $tables[0]->getEndColumn());
    }

    public function test_to_read_tables_resolves_the_last_occurrence_of_time_range(): void
    {
        $bag = new BatchBag();
        $bag->table('testing')->whereKey('key', 'foo')->whereVersion(1234567891011)->get();
        $bag->table('testing')->whereKey('key', 'bar')->get();
        $mock = m::mock(InteractsWithTablestore::class);
        $handler = new BasicHandler($mock);
        $tables = $handler->toReadTables($bag);
        $this->assertSame(1234567891011, $tables[0]->getTimeRange()?->getSpecificTime());
    }

    public function test_to_read_tables_default_max_versions(): void
    {
        $bag = new BatchBag();
        $bag->table('testing')->whereKey('key', 'foo')->get();
        $bag->table('testing')->whereKey('key', 'bar')->get();
        $mock = m::mock(InteractsWithTablestore::class);
        $handler = new BasicHandler($mock);
        $tables = $handler->toReadTables($bag);
        $this->assertSame(1, $tables[0]->getMaxVersions());
    }

    public function test_to_read_tables_calculates_the_max_value_of_version(): void
    {
        $bag = new BatchBag();
        $bag->table('testing')->whereKey('key', 'foo')->maxVersions(3)->get();
        $bag->table('testing')->whereKey('key', 'bar')->maxVersions(2)->get();
        $mock = m::mock(InteractsWithTablestore::class);
        $handler = new BasicHandler($mock);
        $tables = $handler->toReadTables($bag);
        $this->assertSame(3, $tables[0]->getMaxVersions());
    }

    public function test_to_read_tables_time_range_drops_default_max_versions(): void
    {
        $bag = new BatchBag();
        $bag->table('testing')->whereKey('key', 'foo')->whereVersion(1234567891011)->get();
        $bag->table('testing')->whereKey('key', 'bar')->get();
        $mock = m::mock(InteractsWithTablestore::class);
        $handler = new BasicHandler($mock);
        $tables = $handler->toReadTables($bag);
        $this->assertTrue($tables[0]->hasTimeRange());
        $this->assertFalse($tables[0]->hasMaxVersions());
    }

    public function test_to_read_tables_has_no_filter_by_default(): void
    {
        $bag = new BatchBag();
        $bag->table('testing')->whereKey('key', 'foo')->get();
        $bag->table('testing')->whereKey('key', 'bar')->get();
        $mock = m::mock(InteractsWithTablestore::class);
        $handler = new BasicHandler($mock);
        $tables = $handler->toReadTables($bag);
        $this->assertFalse($tables[0]->hasFilter());
    }

    public function test_to_read_tables_resolves_the_last_occurrence_of_filter(): void
    {
        $filter1 = (new Filter())->setType(FilterType::FT_COLUMN_PAGINATION);
        $filter2 = (new Filter())->setType(FilterType::FT_COMPOSITE_COLUMN_VALUE);
        $bag = new BatchBag();
        $bag->table('testing')->whereKey('key', 'foo')->whereFilter($filter1)->get();
        $bag->table('testing')->whereKey('key', 'bar')->whereFilter($filter2)->get();
        $bag->table('testing')->whereKey('key', 'baz')->get();
        $mock = m::mock(InteractsWithTablestore::class);
        $handler = new BasicHandler($mock);
        $tables = $handler->toReadTables($bag);
        $this->assertNotSame($filter1->serializeToString(), $filter2->serializeToString());
        $this->assertSame($filter2->serializeToString(), $tables[0]->getFilter());
    }

    public function test_to_read_tables_builds_condition_filter(): void
    {
        $bag = new BatchBag();
        $bag->table('testing')->whereKey('key', 'foo')->whereColumn('value', 'bar')->get();
        $mock = m::mock(InteractsWithTablestore::class);
        $handler = new BasicHandler($mock);
        $tables = $handler->toReadTables($bag);
        $this->assertNotEmpty($tables[0]->getFilter());
    }

    public function test_to_read_tables_central_configuration(): void
    {
        $filter = (new Filter())->setType(FilterType::FT_SINGLE_COLUMN_VALUE);
        $bag = new BatchBag();
        $bag->table('testing')
            ->select(['key', 'attr1'])
            ->selectBetween('attr1', 'attr2')
            ->whereFilter($filter)
            ->whereVersion(1234567891011)
            ->maxVersions(2);
        $bag->table('testing')->whereKey('key', 'foo')->get();
        $bag->table('testing')->whereKey('key', 'bar')->get();
        $mock = m::mock(InteractsWithTablestore::class);
        $handler = new BasicHandler($mock);
        $tables = $handler->toReadTables($bag);
        $this->assertSame('key', $tables[0]->getColumnsToGet()[0]);
        $this->assertSame('attr1', $tables[0]->getColumnsToGet()[1]);
        $this->assertSame($filter->serializeToString(), $tables[0]->getFilter());
        $this->assertSame(1234567891011, $tables[0]->getTimeRange()?->getSpecificTime());
        $this->assertSame(2, $tables[0]->getMaxVersions());
        $this->assertSame('attr1', $tables[0]->getStartColumn());
        $this->assertSame('attr2', $tables[0]->getEndColumn());
        $this->assertCount(2, $tables[0]->getPrimaryKey());
    }

    public function test_to_write_tables_row_expectation(): void
    {
        $bag = new BatchBag();
        $bag->table('testing')
            ->whereKey('key', 'foo')
            ->expectExists()
            ->update([Attribute::string('value', 'bar')]);
        $mock = m::mock(InteractsWithTablestore::class);
        $handler = new BasicHandler($mock);
        $tables = $handler->toWriteTables($bag);
        $this->assertSame(
            RowExistenceExpectation::EXPECT_EXIST,
            $tables[0]->getRows()[0]->getCondition()->getRowExistence() // @phpstan-ignore method.nonObject
        );
    }

    public function test_to_write_tables_return_customization(): void
    {
        $bag = new BatchBag();
        $bag->table('testing')
            ->whereKey('key', 'foo')
            ->returnModified()
            ->update([Attribute::string('value', 'bar')]);
        $mock = m::mock(InteractsWithTablestore::class);
        $handler = new BasicHandler($mock);
        $tables = $handler->toWriteTables($bag);
        $this->assertSame(
            ReturnType::RT_AFTER_MODIFY,
            $tables[0]->getRows()[0]->getReturnContent()->getReturnType() // @phpstan-ignore method.nonObject
        );
    }

    public function test_to_write_tables_condition_update(): void
    {
        $filter = (new Filter())->setType(FilterType::FT_SINGLE_COLUMN_VALUE);
        $bag = new BatchBag();
        $bag->table('testing')
            ->whereKey('key', 'foo')
            ->whereFilter($filter)
            ->update([Attribute::string('value', 'bar')]);
        $mock = m::mock(InteractsWithTablestore::class);
        $handler = new BasicHandler($mock);
        $tables = $handler->toWriteTables($bag);
        // @phpstan-ignore-next-line method.nonObject
        $this->assertTrue($tables[0]->getRows()[0]->getCondition()->hasColumnCondition());
    }

    public function test_could_not_mix_read_and_write_in_a_batch_read_batch(): void
    {
        $this->expectException(HandlerException::class);
        $this->expectExceptionMessage('Could not mix read and write operations in a batch.');
        $bag = new BatchBag();
        $bag->table('testing')->whereKey('key', 'foo')->get();
        $bag->table('testing')->insert([
            PrimaryKey::string('key', 'foo'),
            Attribute::string('value', 'bar'),
        ]);
        $mock = m::mock(InteractsWithTablestore::class);
        $handler = new BasicHandler($mock);
        $handler->batch($bag);
    }

    public function test_could_not_mix_read_and_write_in_a_batch_write_batch(): void
    {
        $this->expectException(HandlerException::class);
        $this->expectExceptionMessage('Could not mix read and write operations in a batch.');
        $bag = new BatchBag();
        $bag->table('testing')->insert([
            PrimaryKey::string('key', 'foo'),
            Attribute::string('value', 'bar'),
        ]);
        $bag->table('testing')->whereKey('key', 'foo')->get();
        $mock = m::mock(InteractsWithTablestore::class);
        $handler = new BasicHandler($mock);
        $handler->batch($bag);
    }

    public function test_batch_bag_could_not_be_empty(): void
    {
        $this->expectException(HandlerException::class);
        $this->expectExceptionMessage('Requires something in a batch.');
        $mock = m::mock(InteractsWithTablestore::class);
        $handler = new BasicHandler($mock);
        $handler->batch(new BatchBag());
    }

    #[DataProvider('provide_incomplete_batch_bags')]
    public function test_incomplete_batch_bag(BatchBag $bag, string $message): void
    {
        $this->expectException(HandlerException::class);
        $this->expectExceptionMessage($message);
        $mock = m::mock(InteractsWithTablestore::class);
        $handler = new BasicHandler($mock);
        $handler->batch($bag);
    }

    /**
     * @return \Generator<string, array{0: \Dew\Acs\Tablestore\BatchBag, 1?: string}>
     */
    public static function provide_incomplete_batch_bags(): \Generator
    {
        yield 'empty bag' => [
            new BatchBag(), 'Requires something in a batch.',
        ];

        yield 'read missing primary keys' => [
            call_user_func(function (): BatchBag {
                $bag = new BatchBag();
                $bag->table('testing');

                return $bag;
            }),
            'Primary keys are required to retrieve rows from a table.',
        ];

        yield 'read contains broken builder' => [
            call_user_func(function (): BatchBag {
                $bag = new BatchBag();
                $bag->table('testing')->whereKey('key', 'foo');
                $bag->table('testing');

                return $bag;
            }),
            'Primary keys are required to retrieve rows from a table.',
        ];

        yield 'write contains broken builder' => [
            call_user_func(function (): BatchBag {
                $bag = new BatchBag();
                $bag->table('testing')->insert([
                    PrimaryKey::string('key', 'foo'),
                    Attribute::string('value', 'bar'),
                ]);
                $bag->table('testing');

                return $bag;
            }),
            'The statement is incomplete.',
        ];
    }
}
