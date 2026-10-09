<?php

declare(strict_types=1);

namespace Dew\Acs\Tablestore;

use Dew\Acs\Tablestore\Messages\Condition;
use Dew\Acs\Tablestore\Messages\Filter;
use Dew\Acs\Tablestore\Messages\ReturnContent;

trait HandlesDataOperation
{
    /**
     * Represent as a condition Protobuf message.
     */
    public function toCondition(BatchBuilder|Builder $builder): Condition
    {
        $condition = new Condition();
        $condition->setRowExistence($builder->expectation);

        if ($this->shouldBuildFilter($builder)) {
            $condition->setColumnCondition($this->buildFilter($builder)->serializeToString());
        }

        return $condition;
    }

    /**
     * Represent as a return type Protobuf message.
     */
    protected function toReturnContent(BatchBuilder|Builder $builder): ReturnContent
    {
        $content = new ReturnContent();
        $content->setReturnType($builder->returned);
        $content->setReturnColumnNames($builder->selects);

        return $content;
    }

    /**
     * Determine if the builder contains any filter conditions.
     */
    public function shouldBuildFilter(BatchBuilder|Builder $builder): bool
    {
        if ($builder->filter instanceof Filter) {
            return true;
        }

        if ($builder->wheres !== []) {
            return true;
        }

        return is_int($builder->offset) && is_int($builder->limit);
    }

    /**
     * Build Protobuf filter message from the builder.
     */
    public function buildFilter(BatchBuilder|Builder $builder): Filter
    {
        if ($builder->filter instanceof Filter) {
            return $builder->filter;
        }

        if ($builder->wheres !== []) {
            return (new ConditionFilter($builder->wheres))->toFilter();
        }

        if (is_int($builder->offset) && is_int($builder->limit)) {
            return (new PaginationFilter($builder->offset, $builder->limit))->toFilter();
        }

        throw new \RuntimeException('Missing filter data to build with.');
    }
}
