<?php

declare(strict_types=1);

namespace Dew\Acs\Tablestore;

use Dew\Acs\Tablestore\Cells\Cell;
use Dew\Acs\Tablestore\Cells\HasValue;
use Dew\Acs\Tablestore\Messages\Filter;
use Dew\Acs\Tablestore\Messages\SingleColumnValueFilter;

/**
 * @phpstan-type TCondition array{
 *   comparison: string,
 *   column: \Dew\Acs\Tablestore\Cells\Cell
 * }
 */
final class Condition
{
    use HandlesNegation;
    use InteractsWithFilter;

    /**
     * Create a condition instance.
     *
     * @param  TCondition  $condition
     */
    public function __construct(
        public array $condition
    ) {
        //
    }

    /**
     * The comparison operator of the conditional statement.
     */
    public function comparisonOperator(): string
    {
        return $this->condition['comparison'];
    }

    /**
     * The column to be compared.
     */
    public function column(): Cell
    {
        return $this->condition['column'];
    }

    /**
     * Get the formatted cell value in PlainBuffer representation.
     */
    public function getCellValue(Cell $cell): string
    {
        if (! $cell instanceof HasValue) {
            throw new \InvalidArgumentException(sprintf(
                'The column [%s] does not contain value.', $cell->name()
            ));
        }

        $cell->toFormattedValue($buffer = new PlainBufferWriter());

        return $buffer->getBuffer();
    }

    /**
     * Represent the condition in a filter message.
     */
    public function toFilter(): Filter
    {
        $filter = (new SingleColumnValueFilter())
            ->setComparator($this->getComparator($this->comparisonOperator()))
            ->setColumnName($this->column()->name())
            ->setColumnValue($this->getCellValue($this->column()))
            ->setFilterIfMissing(true)
            ->setLatestVersionOnly(true);

        $filter = $this->wrapFilter($filter);

        return $this->isNegative() ? $this->wrapNot($filter) : $filter;
    }
}
