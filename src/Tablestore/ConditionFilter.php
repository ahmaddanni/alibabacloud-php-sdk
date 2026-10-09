<?php

declare(strict_types=1);

namespace Dew\Acs\Tablestore;

use Dew\Acs\Tablestore\Messages\Filter;

/**
 * @phpstan-type TCondition array{
 *   comparison: string,
 *   column: \Dew\Acs\Tablestore\Cells\Cell|mixed[][],
 *   logical: string,
 *   negative?: bool
 * }
 *
 * @see https://www.alibabacloud.com/help/en/tablestore/developer-reference/filter-1
 */
final class ConditionFilter
{
    /**
     * Create a new filter instance.
     *
     * @param  TCondition[]  $conditions
     */
    public function __construct(
        private array $conditions
    ) {
        //
    }

    /**
     * Represent as Protobuf filter message.
     */
    public function toFilter(): Filter
    {
        if ($this->size() === 1) {
            return $this->buildItem($this->conditions[0])->toFilter();
        }

        return $this->buildRoot($this->conditions)->toFilter();
    }

    /**
     * Build a root condition group.
     *
     * @param  TCondition[]  $conditions
     */
    private function buildRoot(array $conditions): ConditionGroup
    {
        // After reordering the conditions with operator precedence, the data
        // structure is converted into a list of OR conditions, where each
        // element consists of a list of AND conditions. No complicated.
        return new ConditionGroup('or', array_map(
            fn ($conditions): ConditionGroup => $this->buildGroup('and', $conditions),
            $this->withPrecedence($conditions)
        ));
    }

    /**
     * Build a condition group.
     *
     * @param  TCondition[]  $conditions
     */
    private function buildGroup(string $logical, array $conditions): ConditionGroup
    {
        $conditions = array_map(
            fn ($condition): ConditionGroup|Condition => $this->buildItem($condition),
            $conditions
        );

        return new ConditionGroup($logical, $conditions);
    }

    /**
     * Build condition from payload.
     *
     * @param  TCondition  $condition
     */
    private function buildItem(array $condition): ConditionGroup|Condition
    {
        $negative = $condition['negative'] ?? false;

        if (is_array($condition['column'])) {
            /** @var TCondition[] */
            $conditions = $condition['column'];

            return $this->buildRoot($conditions)->not($negative);
        }

        return $this->toConditionInstance($condition)->not($negative);
    }

    /**
     * Wrap conditions with priority structure.
     *
     * <code>
     * // Take an expression as example:
     * attr1 = 'foo' and attr2 = 'bar' or attr3 = 'baz'
     *
     * // It should be parsed to:
     * (attr1 = 'foo' and attr2 = 'bar') or (attr3 = 'baz')
     *
     * // And wrapped into the structure, like:
     * [ [attr1 = 'foo', attr2 = 'bar'], [attr3 = 'baz'] ]
     * │ └─────────── and. ───────────┘  └──── and. ───┘ │
     * └────────────────────── or. ──────────────────────┘
     * </code>
     *
     * @param  TCondition[]  $conditions
     * @return TCondition[][]
     */
    private function withPrecedence(array $conditions): array
    {
        return $this->split($conditions, 'or');
    }

    /**
     * Split conditions by the given logical operator.
     *
     * @param  TCondition[]  $conditions
     * @return TCondition[][]
     */
    private function split(array $conditions, string $logical): array
    {
        $result = [];
        $cursor = 0;

        foreach ($conditions as $condition) {
            if ($condition['logical'] === $logical) {
                $cursor++;
            }

            $result[$cursor][] = $condition;
        }

        return $result;
    }

    /**
     * Create a condition instance.
     *
     * @param  TCondition&array{column: \Dew\Acs\Tablestore\Cells\Cell}  $condition
     */
    private function toConditionInstance(array $condition): Condition
    {
        return new Condition($condition);
    }

    /**
     * The size of the conditions.
     */
    public function size(): int
    {
        return count($this->conditions);
    }

    /**
     * Get the filter conditions.
     *
     * @return TCondition[]
     */
    public function conditions(): array
    {
        return $this->conditions;
    }
}
