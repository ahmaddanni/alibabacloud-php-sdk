<?php

declare(strict_types=1);

namespace Dew\Acs\Tablestore;

use Dew\Acs\Tablestore\Messages\CompositeColumnValueFilter;
use Dew\Acs\Tablestore\Messages\Filter;

/**
 * @phpstan-type TItem \Dew\Acs\Tablestore\ConditionGroup|\Dew\Acs\Tablestore\Condition
 */
final class ConditionGroup
{
    use HandlesNegation;
    use InteractsWithFilter;

    /**
     * The logical operators.
     *
     * @var string[]
     */
    public const SUPPORTED = [
        'and',
        'or',
    ];

    /**
     * Create a new condition group instance.
     *
     * @param  TItem[]  $items
     */
    public function __construct(
        private string $logicalOperator,
        private array $items
    ) {
        if (! in_array($this->logicalOperator, self::SUPPORTED, strict: true)) {
            throw new \InvalidArgumentException(
                'The condition group accepts only logical operator "and" or "or".'
            );
        }
    }

    /**
     * Represent as Protobuf filter message.
     */
    public function toFilter(): Filter
    {
        if ($this->size() === 0) {
            throw new \InvalidArgumentException(
                'Could not build a filter with an empty group.'
            );
        }

        $filter = $this->buildFilter();

        return $this->isNegative() ? $this->wrapNot($filter) : $filter;
    }

    /**
     * Build a Protobuf filter message.
     */
    private function buildFilter(): Filter
    {
        if ($this->size() === 1) {
            return $this->items[0]->toFilter();
        }

        return $this->wrapFilter((new CompositeColumnValueFilter())
            ->setCombinator($this->getCombinator($this->logicalOperator()))
            ->setSubFilters(array_map(fn ($item): Filter => $item->toFilter(), $this->items))
        );
    }

    /**
     * Get the logical operator.
     */
    public function logicalOperator(): string
    {
        return $this->logicalOperator;
    }

    /**
     * The size of the group.
     */
    public function size(): int
    {
        return count($this->items);
    }

    /**
     * Get the items of the group.
     *
     * @return TItem[]
     */
    public function items(): array
    {
        return $this->items;
    }
}
