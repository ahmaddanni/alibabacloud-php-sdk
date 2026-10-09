<?php

declare(strict_types=1);

namespace Dew\Acs\Tests\Tablestore;

use Dew\Acs\Tablestore\Attribute;
use Dew\Acs\Tablestore\Condition;
use Dew\Acs\Tablestore\ConditionGroup;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(ConditionGroup::class)]
final class ConditionGroupTest extends TestCase
{
    use TestsDataOperation;

    public function test_group_size(): void
    {
        $group = new ConditionGroup('and', [
            new Condition(['comparison' => '=', 'column' => Attribute::string('value', 'foo'), 'logical' => 'and']),
            new ConditionGroup('and', []),
        ]);
        $this->assertSame($group->size(), 2);
    }

    public function test_filter_generation_and(): void
    {
        $group = new ConditionGroup('and', [
            new Condition(['comparison' => '=', 'column' => Attribute::string('attr1', 'foo'), 'logical' => 'and']),
            new Condition(['comparison' => '=', 'column' => Attribute::string('attr2', 'bar'), 'logical' => 'and']),
        ]);
        $filter = $group->toFilter();
        $this->assertIsCompositeValueFilter($filter);
        /** @var \Dew\Acs\Tablestore\Messages\CompositeColumnValueFilter */
        $filter = $this->unwrapFilter($filter);
        $this->assertIsLogicalAnd($filter->getCombinator());
        $this->assertCount(2, $filter->getSubFilters());
        $this->assertIsSingleValueFilter($filter->getSubFilters()[0]);
        $this->assertIsSingleValueFilter($filter->getSubFilters()[1]);
    }

    public function test_filter_generation_or(): void
    {
        $group = new ConditionGroup('or', [
            new Condition(['comparison' => '=', 'column' => Attribute::string('attr1', 'foo'), 'logical' => 'or']),
            new Condition(['comparison' => '=', 'column' => Attribute::string('attr2', 'bar'), 'logical' => 'or']),
        ]);
        $filter = $group->toFilter();
        $this->assertIsCompositeValueFilter($filter);
        /** @var \Dew\Acs\Tablestore\Messages\CompositeColumnValueFilter */
        $filter = $this->unwrapFilter($filter);
        $this->assertIsLogicalOr($filter->getCombinator());
        $this->assertCount(2, $filter->getSubFilters());
        $this->assertIsSingleValueFilter($filter->getSubFilters()[0]);
        $this->assertIsSingleValueFilter($filter->getSubFilters()[1]);
    }

    public function test_filter_generation_not(): void
    {
        $group = (new ConditionGroup('and', [
            new Condition(['comparison' => '=', 'column' => Attribute::string('attr1', 'foo'), 'logical' => 'and']),
        ]))->not();
        $filter = $group->toFilter();
        $this->assertIsCompositeValueFilter($filter);
        /** @var \Dew\Acs\Tablestore\Messages\CompositeColumnValueFilter */
        $filter = $this->unwrapFilter($filter);
        $this->assertIsLogicalNot($filter->getCombinator());
        $this->assertCount(1, $filter->getSubFilters());
        $this->assertIsSingleValueFilter($filter->getSubFilters()[0]);
    }

    public function test_filter_generation_nested(): void
    {
        // expression: (attr1 = 'foo' or attr2 = 'bar') and attr3 = 'baz'
        $group = new ConditionGroup('and', [
            new ConditionGroup('or', [
                new Condition(['comparison' => '=', 'column' => Attribute::string('attr1', 'foo'), 'logical' => 'or']),
                new Condition(['comparison' => '=', 'column' => Attribute::string('attr2', 'bar'), 'logical' => 'or']),
            ]),
            new Condition(['comparison' => '=', 'column' => Attribute::string('attr3', 'baz'), 'logical' => 'and']),
        ]);
        $filter = $group->toFilter();
        $this->assertIsCompositeValueFilter($filter);
        /** @var \Dew\Acs\Tablestore\Messages\CompositeColumnValueFilter */
        $filter = $this->unwrapFilter($filter);

        // expected: (attr1 = 'foo' or attr2 = 'bar') and attr3 = 'baz'
        //           ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ ^^^ ~~~~~~~~~~~~~
        //           sub-filter 0                         sub-filter 1
        $this->assertIsLogicalAnd($filter->getCombinator());
        $this->assertCount(2, $filter->getSubFilters());
        $this->assertIsCompositeValueFilter($filter->getSubFilters()[0]);
        $this->assertIsSingleValueFilter($filter->getSubFilters()[1]);

        // expected: attr1 = 'foo' or attr2 = 'bar'
        //           ~~~~~~~~~~~~~ ^^ ~~~~~~~~~~~~~
        //           sub-filter 0     sub-filter 1
        /** @var \Dew\Acs\Tablestore\Messages\CompositeColumnValueFilter */
        $filter = $this->unwrapFilter($filter->getSubFilters()[0]);
        $this->assertIsLogicalOr($filter->getCombinator());
        $this->assertCount(2, $filter->getSubFilters());
        $this->assertIsSingleValueFilter($filter->getSubFilters()[0]);
        $this->assertIsSingleValueFilter($filter->getSubFilters()[1]);
    }

    public function test_filter_generation_negation(): void
    {
        // expression: not (attr1 = 'foo' and attr2 = 'bar')
        $group = (new ConditionGroup('and', [
            new Condition(['comparison' => '=', 'column' => Attribute::string('attr1', 'foo'), 'logical' => 'and']),
            new Condition(['comparison' => '=', 'column' => Attribute::string('attr2', 'bar'), 'logical' => 'and']),
        ]))->not();
        $filter = $group->toFilter();
        $this->assertIsCompositeValueFilter($filter);
        /** @var \Dew\Acs\Tablestore\Messages\CompositeColumnValueFilter */
        $filter = $this->unwrapFilter($filter);

        // expected: not (attr1 = 'foo' and attr2 = 'bar')
        //           ^^^ ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        //               sub-filter 0
        $this->assertIsLogicalNot($filter->getCombinator());
        $this->assertCount(1, $filter->getSubFilters());
        $this->assertIsCompositeValueFilter($filter->getSubFilters()[0]);
        /** @var \Dew\Acs\Tablestore\Messages\CompositeColumnValueFilter */
        $filter = $this->unwrapFilter($filter->getSubFilters()[0]);

        // expected: attr1 = 'foo' and attr2 = 'bar'
        //           ~~~~~~~~~~~~~ ^^^ ~~~~~~~~~~~~~
        //           sub-filter 0      sub-filter 1
        $this->assertIsLogicalAnd($filter->getCombinator());
        $this->assertCount(2, $filter->getSubFilters());
        $this->assertIsSingleValueFilter($filter->getSubFilters()[0]);
        $this->assertIsSingleValueFilter($filter->getSubFilters()[1]);
    }

    public function test_filter_generation_with_empty_group(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Could not build a filter with an empty group.');
        $group = new ConditionGroup('and', []);
        $group->toFilter();
    }

    public function test_filter_generation_with_only_one_condition(): void
    {
        $group = new ConditionGroup('and', [
            new Condition(['comparison' => '=', 'column' => Attribute::string('attr1', 'foo'), 'logical' => 'and']),
        ]);
        $this->assertIsSingleValueFilter($group->toFilter());
    }

    public function test_invalid_logical_operator(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('The condition group accepts only logical operator "and" or "or".');
        new ConditionGroup('not', []);
    }
}
