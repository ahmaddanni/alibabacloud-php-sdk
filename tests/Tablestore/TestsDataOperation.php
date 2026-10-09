<?php

declare(strict_types=1);

namespace Dew\Acs\Tests\Tablestore;

use Dew\Acs\Tablestore\Messages\ColumnPaginationFilter;
use Dew\Acs\Tablestore\Messages\ComparatorType;
use Dew\Acs\Tablestore\Messages\CompositeColumnValueFilter;
use Dew\Acs\Tablestore\Messages\Filter;
use Dew\Acs\Tablestore\Messages\FilterType;
use Dew\Acs\Tablestore\Messages\LogicalOperator;
use Dew\Acs\Tablestore\Messages\SingleColumnValueFilter;
use PHPUnit\Framework\Assert;

trait TestsDataOperation
{
    final public static function assertIsSingleValueFilter(mixed $filter): void
    {
        Assert::assertInstanceOf(Filter::class, $filter);
        Assert::assertSame(FilterType::FT_SINGLE_COLUMN_VALUE, $filter->getType());
    }

    final public function assertIsCompositeValueFilter(mixed $filter): void
    {
        Assert::assertInstanceOf(Filter::class, $filter);
        Assert::assertSame(FilterType::FT_COMPOSITE_COLUMN_VALUE, $filter->getType());
    }

    final public function assertIsPaginationFilter(mixed $filter): void
    {
        Assert::assertInstanceOf(Filter::class, $filter);
        Assert::assertSame(FilterType::FT_COLUMN_PAGINATION, $filter->getType());
    }

    final public function unwrapFilter(mixed $filter): SingleColumnValueFilter|CompositeColumnValueFilter|ColumnPaginationFilter
    {
        if (! $filter instanceof Filter) {
            throw new \InvalidArgumentException(
                'The filter must be an instance of Filter message.'
            );
        }

        $unwrap = match ($filter->getType()) {
            FilterType::FT_SINGLE_COLUMN_VALUE => new SingleColumnValueFilter(),
            FilterType::FT_COMPOSITE_COLUMN_VALUE => new CompositeColumnValueFilter(),
            FilterType::FT_COLUMN_PAGINATION => new ColumnPaginationFilter(),
        };

        $unwrap->mergeFromString($filter->getFilter());

        return $unwrap;
    }

    final public function assertIsLogicalNot(int $operator): void
    {
        Assert::assertSame(LogicalOperator::LO_NOT, $operator);
    }

    final public function assertIsLogicalAnd(int $operator): void
    {
        Assert::assertSame(LogicalOperator::LO_AND, $operator);
    }

    final public function assertIsLogicalOr(int $operator): void
    {
        Assert::assertSame(LogicalOperator::LO_OR, $operator);
    }

    final public function assertIsEqualityOperator(int $operator): void
    {
        Assert::assertSame(ComparatorType::CT_EQUAL, $operator);
    }

    final public function assertIsInequalityOperator(int $operator): void
    {
        Assert::assertSame(ComparatorType::CT_NOT_EQUAL, $operator);
    }

    final public function assertIsGreaterThanOperator(int $operator): void
    {
        Assert::assertSame(ComparatorType::CT_GREATER_THAN, $operator);
    }

    final public function assertIsGreaterThanOrEqualOperator(int $operator): void
    {
        Assert::assertSame(ComparatorType::CT_GREATER_EQUAL, $operator);
    }

    final public function assertIsLessThanOperator(int $operator): void
    {
        Assert::assertSame(ComparatorType::CT_LESS_THAN, $operator);
    }

    final public function assertIsLessThanOrEqualOperator(int $operator): void
    {
        Assert::assertSame(ComparatorType::CT_LESS_EQUAL, $operator);
    }
}
