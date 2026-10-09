<?php

declare(strict_types=1);

namespace Dew\Acs\Tests\Tablestore;

use Dew\Acs\Tablestore\Attribute;
use Dew\Acs\Tablestore\Builder;
use Dew\Acs\Tablestore\Cells\StringAttribute;
use Dew\Acs\Tablestore\Cells\StringPrimaryKey;
use Dew\Acs\Tablestore\HasConditions;
use Dew\Acs\Tablestore\Messages\Filter;
use Dew\Acs\Tablestore\Messages\ReturnType;
use Dew\Acs\Tablestore\Messages\TimeRange;
use Dew\Acs\Tablestore\PrimaryKey;
use Dew\Acs\Tests\DataProviderHelper;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\CoversTrait;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\TestWith;
use PHPUnit\Framework\TestCase;

/**
 * @phpstan-import-type TColumnName from \Dew\Acs\Tablestore\HasConditions
 */
#[CoversClass(Builder::class)]
#[CoversTrait(HasConditions::class)]
final class BuilderTest extends TestCase
{
    public function test_return_type_primary_key(): void
    {
        $builder = new Builder();
        $builder->returnPrimaryKey();
        $this->assertSame(ReturnType::RT_PK, $builder->returned);
        $builder->returnKey();
        $this->assertSame(ReturnType::RT_PK, $builder->returned);
    }

    public function test_return_type_modified(): void
    {
        $builder = new Builder();
        $builder->returnModified();
        $this->assertSame(ReturnType::RT_AFTER_MODIFY, $builder->returned);
        $this->assertSame([], $builder->selects);
    }

    public function test_return_type_modified_cells(): void
    {
        $builder = new Builder();
        $builder->returnModified(['counter']);
        $this->assertSame(ReturnType::RT_AFTER_MODIFY, $builder->returned);
        $this->assertSame(['counter'], $builder->selects);
    }

    public function test_return_type_without_return(): void
    {
        $builder = new Builder();
        $builder->withoutReturn();
        $this->assertSame(ReturnType::RT_NONE, $builder->returned);
    }

    public function test_where_key_filters_primary_keys(): void
    {
        $builder = new Builder();
        $builder->whereKey($key = PrimaryKey::string('key', 'foo'));
        $this->assertSame($builder->whereKeys, [$key]);
    }

    public function test_where_key_accepts_multiple_keys(): void
    {
        $builder = new Builder();
        $builder->whereKey([
            $key1 = PrimaryKey::string('key1', 'foo'),
            $key2 = PrimaryKey::string('key2', 'bar'),
        ]);
        $this->assertSame($builder->whereKeys, [$key1, $key2]);
    }

    public function test_where_key_builds_primary_key(): void
    {
        $builder = new Builder();
        $builder->whereKey('key', 'foo');
        $this->assertCount(1, $builder->whereKeys);
        $this->assertInstanceOf(StringPrimaryKey::class, $builder->whereKeys[0]);
    }

    public function test_where_key_builds_multiple_keys(): void
    {
        $builder = new Builder();
        $builder->whereKey(['key1' => 'foo', 'key2' => 'bar']);
        $this->assertCount(2, $builder->whereKeys);
        $this->assertInstanceOf(StringPrimaryKey::class, $builder->whereKeys[0]);
        $this->assertInstanceOf(StringPrimaryKey::class, $builder->whereKeys[1]);
    }

    public function test_where_column_constructs_condition(): void
    {
        $builder = new Builder();
        $builder->whereColumn('name', 'Zhineng');
        $this->assertCount(1, $builder->wheres);
        $this->assertSame($builder->wheres[0]['comparison'], '=');
        $this->assertInstanceOf(StringAttribute::class, $builder->wheres[0]['column']);
        $this->assertSame($builder->wheres[0]['column']->name(), 'name');
        $this->assertSame($builder->wheres[0]['column']->value(), 'Zhineng');
        $this->assertSame($builder->wheres[0]['logical'], 'and');
    }

    public function test_where_column_constructs_condition_with_comparison_operator(): void
    {
        $builder = new Builder();
        $builder->whereColumn('name', '!=', 'Zhineng');
        $this->assertCount(1, $builder->wheres);
        $this->assertSame($builder->wheres[0]['comparison'], '!=');
        $this->assertInstanceOf(StringAttribute::class, $builder->wheres[0]['column']);
        $this->assertSame($builder->wheres[0]['column']->name(), 'name');
        $this->assertSame($builder->wheres[0]['column']->value(), 'Zhineng');
        $this->assertSame($builder->wheres[0]['logical'], 'and');
    }

    public function test_where_column_constructs_condition_with_logical_operator(): void
    {
        $builder = new Builder();
        $builder->whereColumn('name', '!=', 'Zhineng', 'or');
        $this->assertCount(1, $builder->wheres);
        $this->assertSame($builder->wheres[0]['comparison'], '!=');
        $this->assertInstanceOf(StringAttribute::class, $builder->wheres[0]['column']);
        $this->assertSame($builder->wheres[0]['column']->name(), 'name');
        $this->assertSame($builder->wheres[0]['column']->value(), 'Zhineng');
        $this->assertSame($builder->wheres[0]['logical'], 'or');
    }

    public function test_where_column_constructs_condition_with_attribute(): void
    {
        $attribute = Attribute::string('name', 'Zhineng');
        $builder = new Builder();
        $builder->whereColumn($attribute);
        $this->assertCount(1, $builder->wheres);
        $this->assertSame($builder->wheres[0]['comparison'], '=');
        $this->assertInstanceOf($attribute::class, $builder->wheres[0]['column']);
        $this->assertSame($builder->wheres[0]['column']->name(), $attribute->name());
        $this->assertSame($builder->wheres[0]['column']->value(), $attribute->value());
        $this->assertSame($builder->wheres[0]['logical'], 'and');
    }

    /**
     * @param  TColumnName  $attributes
     */
    #[DataProvider('provide_multiple_attributes')]
    public function test_where_column_constructs_multiple_conditions($attributes): void
    {
        $builder = new Builder();
        $builder->whereColumn($attributes);
        $this->assertCount(2, $builder->wheres);
        $this->assertSame($builder->wheres[0]['comparison'], '=');
        $this->assertSame($builder->wheres[0]['logical'], 'and');
        $this->assertSame($builder->wheres[1]['comparison'], '=');
        $this->assertSame($builder->wheres[1]['logical'], 'and');
    }

    public function test_where_invalid_comparison_operator(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Comparison operator accepts =, !=, <>, >, >=, <, or <=.');
        $builder = new Builder();
        $builder->where('name', null, 'Zhineng');
    }

    public function test_where_column_could_not_build_with_unsupported_value_type(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Could not build an attribute from the [NULL] type.');
        $builder = new Builder();
        $builder->whereColumn('name', null);
    }

    public function test_where_not_column_constructs_negation_statement(): void
    {
        $builder = new Builder();
        $builder->whereNotColumn('name', 'Zhineng');
        $this->assertCount(1, $builder->wheres);
        $this->assertSame($builder->wheres[0]['comparison'], '=');
        $this->assertInstanceOf(StringAttribute::class, $builder->wheres[0]['column']);
        $this->assertSame($builder->wheres[0]['column']->name(), 'name');
        $this->assertSame($builder->wheres[0]['column']->value(), 'Zhineng');
        $this->assertSame($builder->wheres[0]['logical'], 'and');
        $this->assertTrue($builder->wheres[0]['negative'] ?? false);
    }

    public function test_where_not_column_constructs_negation_statement_with_attribute(): void
    {
        $attribute = Attribute::string('name', 'Zhineng');
        $builder = new Builder();
        $builder->whereNotColumn($attribute);
        $this->assertCount(1, $builder->wheres);
        $this->assertSame($builder->wheres[0]['comparison'], '=');
        $this->assertInstanceOf(StringAttribute::class, $builder->wheres[0]['column']);
        $this->assertSame($builder->wheres[0]['column']->name(), $attribute->name());
        $this->assertSame($builder->wheres[0]['column']->value(), $attribute->value());
        $this->assertSame($builder->wheres[0]['logical'], 'and');
        $this->assertTrue($builder->wheres[0]['negative'] ?? false);
    }

    /**
     * @param  TColumnName  $attributes
     */
    #[DataProvider('provide_multiple_attributes')]
    public function test_where_not_column_constructs_multiple_negation_statements($attributes): void
    {
        $builder = new Builder();
        $builder->whereNotColumn($attributes);
        $this->assertCount(2, $builder->wheres);
        $this->assertSame($builder->wheres[0]['comparison'], '=');
        $this->assertSame($builder->wheres[0]['logical'], 'and');
        $this->assertTrue($builder->wheres[0]['negative'] ?? false);
        $this->assertSame($builder->wheres[1]['comparison'], '=');
        $this->assertSame($builder->wheres[1]['logical'], 'and');
        $this->assertTrue($builder->wheres[1]['negative'] ?? false);
    }

    public function test_or_where_column_constructs_logical_or_condition(): void
    {
        $builder = new Builder();
        $builder->orWhereColumn('name', '!=', 'Zhineng');
        $this->assertCount(1, $builder->wheres);
        $this->assertSame($builder->wheres[0]['comparison'], '!=');
        $this->assertInstanceOf(StringAttribute::class, $builder->wheres[0]['column']);
        $this->assertSame($builder->wheres[0]['column']->name(), 'name');
        $this->assertSame($builder->wheres[0]['column']->value(), 'Zhineng');
        $this->assertSame($builder->wheres[0]['logical'], 'or');
    }

    public function test_or_where_column_constructs_logical_or_condition_with_attribute(): void
    {
        $attribute = Attribute::string('name', 'Zhineng');
        $builder = new Builder();
        $builder->orWhereColumn($attribute);
        $this->assertCount(1, $builder->wheres);
        $this->assertSame($builder->wheres[0]['comparison'], '=');
        $this->assertSame($builder->wheres[0]['logical'], 'or');
    }

    /**
     * @param  TColumnName  $attributes
     */
    #[DataProvider('provide_multiple_attributes')]
    public function test_or_where_column_constructs_multiple_logical_or_conditions($attributes): void
    {
        $builder = new Builder();
        $builder->orWhereColumn($attributes);
        $this->assertCount(2, $builder->wheres);
        $this->assertSame($builder->wheres[0]['comparison'], '=');
        $this->assertSame($builder->wheres[0]['logical'], 'or');
        $this->assertSame($builder->wheres[1]['comparison'], '=');
        $this->assertSame($builder->wheres[1]['logical'], 'or');
    }

    public function test_or_where_not_column_constructs_negative_logical_or_condition(): void
    {
        $builder = new Builder();
        $builder->orWhereNotColumn('name', 'Zhineng');
        $this->assertCount(1, $builder->wheres);
        $this->assertSame($builder->wheres[0]['comparison'], '=');
        $this->assertInstanceOf(StringAttribute::class, $builder->wheres[0]['column']);
        $this->assertSame($builder->wheres[0]['column']->name(), 'name');
        $this->assertSame($builder->wheres[0]['column']->value(), 'Zhineng');
        $this->assertSame($builder->wheres[0]['logical'], 'or');
        $this->assertTrue($builder->wheres[0]['negative'] ?? false);
    }

    public function test_or_where_not_column_constructs_negative_logical_or_condition_with_attribute(): void
    {
        $attribute = Attribute::string('name', 'Zhineng');
        $builder = new Builder();
        $builder->orWhereNotColumn($attribute);
        $this->assertCount(1, $builder->wheres);
        $this->assertSame($builder->wheres[0]['comparison'], '=');
        $this->assertInstanceOf(StringAttribute::class, $builder->wheres[0]['column']);
        $this->assertSame($builder->wheres[0]['column']->name(), $attribute->name());
        $this->assertSame($builder->wheres[0]['column']->value(), $attribute->value());
        $this->assertSame($builder->wheres[0]['logical'], 'or');
        $this->assertTrue($builder->wheres[0]['negative'] ?? false);
    }

    /**
     * @param  TColumnName  $attributes
     */
    #[DataProvider('provide_multiple_attributes')]
    public function test_or_where_not_column_constructs_multiple_negative_logical_or_conditions($attributes): void
    {
        $builder = new Builder();
        $builder->orWhereNotColumn($attributes);
        $this->assertCount(2, $builder->wheres);
        $this->assertSame($builder->wheres[0]['comparison'], '=');
        $this->assertSame($builder->wheres[0]['logical'], 'or');
        $this->assertTrue($builder->wheres[0]['negative'] ?? false);
        $this->assertSame($builder->wheres[1]['comparison'], '=');
        $this->assertSame($builder->wheres[1]['logical'], 'or');
        $this->assertTrue($builder->wheres[1]['negative'] ?? false);
    }

    public function test_where_column_grouping(): void
    {
        $builder = new Builder();
        $builder->whereColumn(function (Builder $builder): void {
            $builder
                ->whereColumn('attr1', 'foo')
                ->whereColumn('attr2', 'bar');
        });
        $this->assertCount(1, $builder->wheres);
        $this->assertSame($builder->wheres[0]['logical'], 'and');
        $this->assertIsArray($builder->wheres[0]['column']);
        $this->assertCount(2, $builder->wheres[0]['column']);
        $this->assertFalse($builder->wheres[0]['negative'] ?? true);
    }

    public function test_or_where_column_grouping(): void
    {
        $builder = new Builder();
        $builder->orWhereColumn(function (Builder $builder): void {
            $builder
                ->whereColumn('attr1', 'foo')
                ->whereColumn('attr2', 'bar');
        });
        $this->assertCount(1, $builder->wheres);
        $this->assertSame($builder->wheres[0]['logical'], 'or');
        $this->assertIsArray($builder->wheres[0]['column']);
        $this->assertCount(2, $builder->wheres[0]['column']);
        $this->assertFalse($builder->wheres[0]['negative'] ?? true);
    }

    public function test_where_not_column_grouping(): void
    {
        $builder = new Builder();
        $builder->whereNotColumn(function (Builder $builder): void {
            $builder
                ->whereColumn('attr1', 'foo')
                ->whereColumn('attr2', 'bar');
        });
        $this->assertCount(1, $builder->wheres);
        $this->assertSame($builder->wheres[0]['logical'], 'and');
        $this->assertIsArray($builder->wheres[0]['column']);
        $this->assertCount(2, $builder->wheres[0]['column']);
        $this->assertTrue($builder->wheres[0]['negative'] ?? false);
    }

    public function test_or_where_not_column_grouping(): void
    {
        $builder = new Builder();
        $builder->orWhereNotColumn(function (Builder $builder): void {
            $builder
                ->whereColumn('attr1', 'foo')
                ->whereColumn('attr2', 'bar');
        });
        $this->assertCount(1, $builder->wheres);
        $this->assertSame($builder->wheres[0]['logical'], 'or');
        $this->assertIsArray($builder->wheres[0]['column']);
        $this->assertCount(2, $builder->wheres[0]['column']);
        $this->assertTrue($builder->wheres[0]['negative'] ?? false);
    }

    public function test_where_filter_accepts_filter_message(): void
    {
        $builder = new Builder();
        $builder->whereFilter($filter = new Filter());
        $this->assertSame($filter, $builder->filter);
    }

    public function test_where_accepts_primary_key(): void
    {
        $builder = new Builder();
        $builder->where($key = PrimaryKey::string('key', 'foo'));
        $this->assertSame([$key], $builder->whereKeys);
    }

    public function test_where_accepts_multiple_primary_keys(): void
    {
        $builder = new Builder();
        $builder->where([
            $key1 = PrimaryKey::string('key1', 'foo'),
            $key2 = PrimaryKey::string('key2', 'bar'),
        ]);
        $this->assertSame([$key1, $key2], $builder->whereKeys);
    }

    #[DataProvider('provide_super_wheres')]
    public function test_where_accepts_attribute(string $where): void
    {
        $attribute = Attribute::string('name', 'Zhineng');
        $builder = new Builder();
        $builder->{$where}($attribute);
        $this->assertCount(1, $builder->wheres);
    }

    /**
     * @param  mixed[]  $attributes
     */
    #[DataProvider('provide_super_where_multiple_attribute')]
    public function test_where_accepts_multiple_attributes(string $where, $attributes): void
    {
        $builder = new Builder();
        $builder->{$where}($attributes);
        $this->assertCount(2, $builder->wheres);
    }

    #[DataProvider('provide_super_wheres')]
    public function test_where_accepts_column_grouping(string $where): void
    {
        $builder = new Builder();
        $builder->{$where}(fn (Builder $builder): Builder => $builder->where('attr2', 'bar')->where('attr3', 'baz'));
        $this->assertCount(1, $builder->wheres);
    }

    public function test_where_accepts_filter_message(): void
    {
        $builder = new Builder();
        $builder->where($filter = new Filter());
        $this->assertSame($filter, $builder->filter);
    }

    public function test_select_from_specifies_the_boundaries_of_the_first_column(): void
    {
        $builder = new Builder();
        $builder->selectUntil('attr2');
        $this->assertSame('attr2', $builder->selectStart);
    }

    public function test_select_to_specifies_the_boundaries_of_the_last_column(): void
    {
        $builder = new Builder();
        $builder->selectBefore('attr3');
        $this->assertSame('attr3', $builder->selectStop);
    }

    public function test_select_between_specifies_the_column_boundaries(): void
    {
        $builder = new Builder();
        $builder->selectBetween('attr2', 'attr3');
        $this->assertSame('attr2', $builder->selectStart);
        $this->assertSame('attr3', $builder->selectStop);
    }

    #[DataProvider('provide_versions')]
    public function test_where_version_specifies_time_range_specific_time(\DateTimeInterface|TimeRange|int $version, int $timestamp): void
    {
        $builder = new Builder();
        $builder->whereVersion($version);
        $this->assertInstanceOf(TimeRange::class, $builder->version);
        $this->assertTrue($builder->version->hasSpecificTime());
        $this->assertFalse($builder->version->hasStartTime());
        $this->assertFalse($builder->version->hasEndTime());
        $this->assertSame($timestamp, $builder->version->getSpecificTime());
    }

    #[DataProvider('provide_versions')]
    public function test_where_version_from_specifies_time_range_start_time(\DateTimeInterface|TimeRange|int $version, int $timestamp): void
    {
        $builder = new Builder();
        $builder->whereVersionFrom($version);
        $this->assertInstanceOf(TimeRange::class, $builder->version);
        $this->assertFalse($builder->version->hasSpecificTime());
        $this->assertTrue($builder->version->hasStartTime());
        $this->assertFalse($builder->version->hasEndTime());
        $this->assertSame($timestamp, $builder->version->getStartTime());
    }

    #[DataProvider('provide_versions')]
    public function test_where_version_before_specifies_time_range_end_time(\DateTimeInterface|TimeRange|int $version, int $timestamp): void
    {
        $builder = new Builder();
        $builder->whereVersionBefore($version);
        $this->assertInstanceOf(TimeRange::class, $builder->version);
        $this->assertFalse($builder->version->hasSpecificTime());
        $this->assertFalse($builder->version->hasStartTime());
        $this->assertTrue($builder->version->hasEndTime());
        $this->assertSame($timestamp, $builder->version->getEndTime());
    }

    public function test_where_version_between_specifies_time_range(): void
    {
        $version1 = 1000;
        $version2 = 2000;
        $builder = new Builder();
        $builder->whereVersionBetween($version1, $version2);
        $this->assertInstanceOf(TimeRange::class, $builder->version);
        $this->assertFalse($builder->version->hasSpecificTime());
        $this->assertTrue($builder->version->hasStartTime());
        $this->assertTrue($builder->version->hasEndTime());
        $this->assertSame(1000, $builder->version->getStartTime());
        $this->assertSame(2000, $builder->version->getEndTime());
    }

    #[TestWith(['whereVersionFrom'])]
    #[TestWith(['whereVersionBefore'])]
    public function test_where_version_specific_time_and_range_are_mutually_exclusive(string $where): void
    {
        $builder = new Builder();
        $builder->whereVersion(1234567891011)->{$where}(1234567891011);
        $this->assertInstanceOf(TimeRange::class, $builder->version);
        $this->assertFalse($builder->version->hasSpecificTime());
    }

    /**
     * @return \Generator<string, TColumnName[]>
     */
    public static function provide_multiple_attributes(): \Generator
    {
        yield 'name and values' => [[
            ['attr1', 'foo'],
            ['attr2', 'bar'],
        ]];

        yield 'name, comparison operator and values' => [[
            ['attr1', '=', 'foo'],
            ['attr2', '=', 'bar'],
        ]];

        yield 'attributes' => [[
            Attribute::string('attr1', 'foo'),
            Attribute::string('attr2', 'bar'),
        ]];
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function provide_super_wheres(): \Generator
    {
        yield 'where' => ['where'];
        yield 'or where' => ['orWhere'];
        yield 'where not' => ['whereNot'];
        yield 'or where not' => ['orWhereNot'];
    }

    /**
     * @return array<int, mixed[]>
     */
    public static function provide_super_where_multiple_attribute(): array
    {
        return DataProviderHelper::cartesian(
            static::provide_super_wheres(),
            static::provide_multiple_attributes()
        );
    }

    /**
     * @return \Generator<string, mixed[]>
     */
    public static function provide_versions(): \Generator
    {
        yield 'timestamp' => [1234567891011, 1234567891011];

        yield 'datetime' => [
            $now = new \DateTimeImmutable(),
            (int) $now->format('Uv'),
        ];

        yield 'time range' => [
            (new TimeRange())
                ->setSpecificTime(1234567891011)
                ->setStartTime(1234567891011)
                ->setEndTime(1234567891011),
            1234567891011,
        ];
    }
}
