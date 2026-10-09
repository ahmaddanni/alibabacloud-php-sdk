<?php

declare(strict_types=1);

namespace Dew\Acs\Tablestore;

use Dew\Acs\Tablestore\Messages\ColumnPaginationFilter;
use Dew\Acs\Tablestore\Messages\ComparatorType;
use Dew\Acs\Tablestore\Messages\CompositeColumnValueFilter;
use Dew\Acs\Tablestore\Messages\Filter;
use Dew\Acs\Tablestore\Messages\FilterType;
use Dew\Acs\Tablestore\Messages\LogicalOperator;
use Dew\Acs\Tablestore\Messages\SingleColumnValueFilter;

trait InteractsWithFilter
{
    /**
     * Resolve the comparator from the comparison operator.
     */
    protected function getComparator(string $operator): int
    {
        return match ($operator) {
            '=' => ComparatorType::CT_EQUAL,
            '!=', '<>' => ComparatorType::CT_NOT_EQUAL,
            '>' => ComparatorType::CT_GREATER_THAN,
            '>=' => ComparatorType::CT_GREATER_EQUAL,
            '<' => ComparatorType::CT_LESS_THAN,
            '<=' => ComparatorType::CT_LESS_EQUAL,
            default => throw new \InvalidArgumentException(sprintf(
                'Comparison operator accepts =, !=, <>, >, >=, <, or <=, but [%s] is given.',
                $operator
            )),
        };
    }

    /**
     * Resolve the combinator from the logical operator.
     */
    protected function getCombinator(string $operator): int
    {
        return match ($operator) {
            'not' => LogicalOperator::LO_NOT,
            'and' => LogicalOperator::LO_AND,
            'or' => LogicalOperator::LO_OR,
            default => throw new \InvalidArgumentException(sprintf(
                'Logical operator accepts "and", "or", or "not", but [%s] is given.',
                $operator
            )),
        };
    }

    /**
     * Wrap the filter in a Protobuf message.
     */
    protected function wrapFilter(SingleColumnValueFilter|CompositeColumnValueFilter|ColumnPaginationFilter $filter): Filter
    {
        return (new Filter())
            ->setType($this->getFilterType($filter))
            ->setFilter($filter->serializeToString());
    }

    /**
     * Wrap the filter in a Protobuf message with the "not" logical operator.
     */
    protected function wrapNot(Filter $filter): Filter
    {
        $filter = (new CompositeColumnValueFilter())
            ->setCombinator(LogicalOperator::LO_NOT)
            ->setSubFilters([$filter]);

        return $this->wrapFilter($filter);
    }

    /**
     * Resolve the filter type from the filter message.
     */
    private function getFilterType(SingleColumnValueFilter|CompositeColumnValueFilter|ColumnPaginationFilter $filter): int
    {
        return match ($filter::class) {
            SingleColumnValueFilter::class => FilterType::FT_SINGLE_COLUMN_VALUE,
            CompositeColumnValueFilter::class => FilterType::FT_COMPOSITE_COLUMN_VALUE,
            ColumnPaginationFilter::class => FilterType::FT_COLUMN_PAGINATION,
            default => throw new \InvalidArgumentException(sprintf(
                'Unsupported filter type [%s] is given.', $filter::class
            )),
        };
    }
}
