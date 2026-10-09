<?php

declare(strict_types=1);

namespace Dew\Acs\Tablestore;

use Dew\Acs\Tablestore\Messages\ColumnPaginationFilter;
use Dew\Acs\Tablestore\Messages\Filter;

/**
 * @see https://www.alibabacloud.com/help/en/tablestore/developer-reference/columnpaginationfilter
 */
final class PaginationFilter
{
    use InteractsWithFilter;

    /**
     * Create a pagination filter builder.
     */
    public function __construct(
        protected int $offset,
        protected int $limit
    ) {
        //
    }

    /**
     * Represent as Protobuf filter message.
     */
    public function toFilter(): Filter
    {
        $filter = new ColumnPaginationFilter();
        $filter->setOffset($this->offset);
        $filter->setLimit($this->limit);

        return $this->wrapFilter($filter);
    }
}
