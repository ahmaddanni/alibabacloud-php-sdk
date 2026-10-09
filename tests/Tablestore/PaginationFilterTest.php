<?php

declare(strict_types=1);

namespace Dew\Acs\Tests\Tablestore;

use Dew\Acs\Tablestore\PaginationFilter;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(PaginationFilter::class)]
final class PaginationFilterTest extends TestCase
{
    use TestsDataOperation;

    public function test_filter_generation(): void
    {
        $filter = (new PaginationFilter(1, 2))->toFilter();
        $this->assertIsPaginationFilter($filter);
        /** @var \Dew\Acs\Tablestore\Messages\ColumnPaginationFilter */
        $filter = $this->unwrapFilter($filter);
        $this->assertSame(1, $filter->getOffset());
        $this->assertSame(2, $filter->getLimit());
    }
}
