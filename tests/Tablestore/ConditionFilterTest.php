<?php

declare(strict_types=1);

namespace Dew\Acs\Tests\Tablestore;

use Dew\Acs\Tablestore\Attribute;
use Dew\Acs\Tablestore\ConditionFilter;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(ConditionFilter::class)]
final class ConditionFilterTest extends TestCase
{
    use TestsDataOperation;

    public function test_empty_condition(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Could not build a filter with an empty group.');
        $filter = new ConditionFilter([]);
        $filter->toFilter();
    }

    public function test_single_condition(): void
    {
        // expression: attr1 = 'foo'
        $filter = new ConditionFilter([
            ['comparison' => '=', 'column' => Attribute::string('attr1', 'foo'), 'logical' => 'and'],
        ]);
        $this->assertIsSingleValueFilter($filter->toFilter());
    }

    public function test_single_condition_not(): void
    {
        // expression: not attr1 = 'foo'
        $filter = new ConditionFilter([
            ['comparison' => '=', 'column' => Attribute::string('attr1', 'foo'), 'logical' => 'and', 'negative' => true],
        ]);
        $this->assertIsCompositeValueFilter($filter = $filter->toFilter());
        /** @var \Dew\Acs\Tablestore\Messages\CompositeColumnValueFilter */
        $filter = $this->unwrapFilter($filter);
        $this->assertIsLogicalNot($filter->getCombinator());
        $this->assertCount(1, $filter->getSubFilters());
        $this->assertIsSingleValueFilter($filter->getSubFilters()[0]);
    }

    public function test_single_condition_group(): void
    {
        // expression: (attr1 = 'foo')
        $filter = new ConditionFilter([[
            'comparison' => '=',
            'column' => [['comparison' => '=', 'column' => Attribute::string('attr1', 'foo'), 'logical' => 'and']],
            'logical' => 'and',
        ]]);
        $this->assertIsSingleValueFilter($filter->toFilter());
    }

    public function test_single_condition_negation_group(): void
    {
        // expression: not (attr1 = 'foo')
        $filter = new ConditionFilter([[
            'comparison' => '=',
            'column' => [['comparison' => '=', 'column' => Attribute::string('attr1', 'foo'), 'logical' => 'and']],
            'logical' => 'and',
            'negative' => true,
        ]]);
        $this->assertIsCompositeValueFilter($filter = $filter->toFilter());
        /** @var \Dew\Acs\Tablestore\Messages\CompositeColumnValueFilter */
        $filter = $this->unwrapFilter($filter);
        $this->assertIsLogicalNot($filter->getCombinator());
        $this->assertCount(1, $filter->getSubFilters());
        $this->assertIsSingleValueFilter($filter->getSubFilters()[0]);
    }

    public function test_multiple_conditions_and(): void
    {
        // expression: attr1 = 'foo' and attr2 = 'bar'
        $filter = new ConditionFilter([
            ['comparison' => '=', 'column' => Attribute::string('attr1', 'foo'), 'logical' => 'and'],
            ['comparison' => '=', 'column' => Attribute::string('attr2', 'bar'), 'logical' => 'and'],
        ]);
        $this->assertIsCompositeValueFilter($filter = $filter->toFilter());
        /** @var \Dew\Acs\Tablestore\Messages\CompositeColumnValueFilter */
        $filter = $this->unwrapFilter($filter);

        // expected: attr1 = 'foo' and attr2 = 'bar'
        //           ~~~~~~~~~~~~~ ^^^ ~~~~~~~~~~~~~
        //           sub-filter 0      sub-filter 1
        $this->assertIsLogicalAnd($filter->getCombinator());
        $this->assertCount(2, $filter->getSubFilters());
        $this->assertIsSingleValueFilter($filter->getSubFilters()[0]);
        $this->assertIsSingleValueFilter($filter->getSubFilters()[1]);
    }

    public function test_multiple_conditions_or(): void
    {
        // expression: attr1 = 'foo' or attr2 = 'bar'
        $filter = new ConditionFilter([
            ['comparison' => '=', 'column' => Attribute::string('attr1', 'foo'), 'logical' => 'and'],
            ['comparison' => '=', 'column' => Attribute::string('attr2', 'bar'), 'logical' => 'or'],
        ]);
        $this->assertIsCompositeValueFilter($filter = $filter->toFilter());
        /** @var \Dew\Acs\Tablestore\Messages\CompositeColumnValueFilter */
        $filter = $this->unwrapFilter($filter);

        // expected: attr1 = 'foo' or attr2 = 'bar'
        //           ~~~~~~~~~~~~~ ^^ ~~~~~~~~~~~~~
        //           sub-filter 0     sub-filter 1
        $this->assertIsLogicalOr($filter->getCombinator());
        $this->assertCount(2, $filter->getSubFilters());
        $this->assertIsSingleValueFilter($filter->getSubFilters()[0]);
        $this->assertIsSingleValueFilter($filter->getSubFilters()[1]);
    }

    public function test_multiple_conditions_or_or(): void
    {
        // expression: attr1 = 'foo' or attr2 = 'bar'

        // The test case is the same as the one above, and we intentionally add
        // it cause it covers the scenario when user building a query filter
        // with the method "orWhere" chaining to right from the beginning.
        $filter = new ConditionFilter([
            ['comparison' => '=', 'column' => Attribute::string('attr1', 'foo'), 'logical' => 'or'],
            ['comparison' => '=', 'column' => Attribute::string('attr2', 'bar'), 'logical' => 'or'],
        ]);
        $this->assertIsCompositeValueFilter($filter = $filter->toFilter());
        /** @var \Dew\Acs\Tablestore\Messages\CompositeColumnValueFilter */
        $filter = $this->unwrapFilter($filter);

        // expected: attr1 = 'foo' or attr2 = 'bar'
        //           ~~~~~~~~~~~~~ ^^ ~~~~~~~~~~~~~
        //           sub-filter 0     sub-filter 1
        $this->assertIsLogicalOr($filter->getCombinator());
        $this->assertCount(2, $filter->getSubFilters());
        $this->assertIsSingleValueFilter($filter->getSubFilters()[0]);
        $this->assertIsSingleValueFilter($filter->getSubFilters()[1]);
    }

    public function test_multiple_conditions_and_not(): void
    {
        // expression: not attr1 = 'foo' and not attr2 = 'bar'
        $filter = new ConditionFilter([
            ['comparison' => '=', 'column' => Attribute::string('attr1', 'foo'), 'logical' => 'and', 'negative' => true],
            ['comparison' => '=', 'column' => Attribute::string('attr2', 'bar'), 'logical' => 'and', 'negative' => true],
        ]);
        $this->assertIsCompositeValueFilter($filter = $filter->toFilter());
        /** @var \Dew\Acs\Tablestore\Messages\CompositeColumnValueFilter */
        $filter = $this->unwrapFilter($filter);

        // expected: not attr1 = 'foo' and not attr2 = 'bar'
        //           ~~~~~~~~~~~~~~~~~ ^^^ ~~~~~~~~~~~~~~~~~
        //           sub-filter 0          sub-filter 1
        $this->assertIsLogicalAnd($filter->getCombinator());
        $this->assertCount(2, $filter->getSubFilters());
        $this->assertIsCompositeValueFilter($filter->getSubFilters()[0]);
        $this->assertIsCompositeValueFilter($filter->getSubFilters()[1]);
    }

    public function test_multiple_conditions_or_not(): void
    {
        // expression: not attr1 = 'foo' or not attr2 = 'bar'
        $filter = new ConditionFilter([
            ['comparison' => '=', 'column' => Attribute::string('attr1', 'foo'), 'logical' => 'and', 'negative' => true],
            ['comparison' => '=', 'column' => Attribute::string('attr2', 'bar'), 'logical' => 'or', 'negative' => true],
        ]);
        $this->assertIsCompositeValueFilter($filter = $filter->toFilter());
        /** @var \Dew\Acs\Tablestore\Messages\CompositeColumnValueFilter */
        $filter = $this->unwrapFilter($filter);

        // expected: not attr1 = 'foo' or not attr2 = 'bar'
        //           ~~~~~~~~~~~~~~~~~ ^^ ~~~~~~~~~~~~~~~~~
        //           sub-filter 0         sub-filter 1
        $this->assertIsLogicalOr($filter->getCombinator());
        $this->assertCount(2, $filter->getSubFilters());
        $this->assertIsCompositeValueFilter($filter->getSubFilters()[0]);
        $this->assertIsCompositeValueFilter($filter->getSubFilters()[1]);
    }

    public function test_operator_precedence_and(): void
    {
        // expression: attr1 = 'foo' and attr2 = 'bar' and attr3 = 'baz'
        $filter = new ConditionFilter([
            ['comparison' => '=', 'column' => Attribute::string('attr1', 'foo'), 'logical' => 'and'],
            ['comparison' => '=', 'column' => Attribute::string('attr2', 'bar'), 'logical' => 'and'],
            ['comparison' => '=', 'column' => Attribute::string('attr3', 'baz'), 'logical' => 'and'],
        ]);
        $this->assertIsCompositeValueFilter($filter = $filter->toFilter());
        /** @var \Dew\Acs\Tablestore\Messages\CompositeColumnValueFilter */
        $filter = $this->unwrapFilter($filter);

        // expected: (attr1 = 'foo') and (attr2 = 'bar') and (attr3 = 'baz')
        //           ~~~~~~~~~~~~~~~ ^^^ ~~~~~~~~~~~~~~~ ^^^ ~~~~~~~~~~~~~~~
        //           sub-filter 0        sub-filter 1        sub-filter 2
        $this->assertIsLogicalAnd($filter->getCombinator());
        $this->assertCount(3, $filter->getSubFilters());
        $this->assertIsSingleValueFilter($filter->getSubFilters()[0]);
        $this->assertIsSingleValueFilter($filter->getSubFilters()[1]);
        $this->assertIsSingleValueFilter($filter->getSubFilters()[2]);
    }

    public function test_operator_precedence_and_or(): void
    {
        // expression: attr1 = 'foo' and attr2 = 'bar' or attr3 = 'baz'
        $filter = new ConditionFilter([
            ['comparison' => '=', 'column' => Attribute::string('attr1', 'foo'), 'logical' => 'and'],
            ['comparison' => '=', 'column' => Attribute::string('attr2', 'bar'), 'logical' => 'and'],
            ['comparison' => '=', 'column' => Attribute::string('attr3', 'baz'), 'logical' => 'or'],
        ]);
        $this->assertIsCompositeValueFilter($filter = $filter->toFilter());
        /** @var \Dew\Acs\Tablestore\Messages\CompositeColumnValueFilter */
        $filter = $this->unwrapFilter($filter);

        // expected: (attr1 = 'foo' and attr2 = 'bar') or attr3 = 'baz'
        //           ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ ^^ ~~~~~~~~~~~~~
        //           sub-filter 0                         sub-filter 1
        $this->assertIsLogicalOr($filter->getCombinator());
        $this->assertCount(2, $filter->getSubFilters());
        $this->assertIsCompositeValueFilter($filter->getSubFilters()[0]);
        $this->assertIsSingleValueFilter($filter->getSubFilters()[1]);
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

    public function test_operator_precedence_and_and_not(): void
    {
        // expression: attr1 = 'foo' and attr2 = 'bar' and not attr3 = 'baz'
        $filter = new ConditionFilter([
            ['comparison' => '=', 'column' => Attribute::string('attr1', 'foo'), 'logical' => 'and'],
            ['comparison' => '=', 'column' => Attribute::string('attr2', 'bar'), 'logical' => 'and'],
            ['comparison' => '=', 'column' => Attribute::string('attr3', 'baz'), 'logical' => 'and', 'negative' => true],
        ]);
        $this->assertIsCompositeValueFilter($filter = $filter->toFilter());
        /** @var \Dew\Acs\Tablestore\Messages\CompositeColumnValueFilter */
        $filter = $this->unwrapFilter($filter);

        // expected: (attr1 = 'foo') and (attr2 = 'bar') and (not attr3 = 'baz')
        //           ~~~~~~~~~~~~~~~ ^^^ ~~~~~~~~~~~~~~~ ^^^ ~~~~~~~~~~~~~~~~~~~
        //           sub-filter 0        sub-filter 1        sub-filter 2
        $this->assertIsLogicalAnd($filter->getCombinator());
        $this->assertCount(3, $filter->getSubFilters());
        $this->assertIsSingleValueFilter($filter->getSubFilters()[0]);
        $this->assertIsSingleValueFilter($filter->getSubFilters()[1]);
        $this->assertIsCompositeValueFilter($filter->getSubFilters()[2]);
        /** @var \Dew\Acs\Tablestore\Messages\CompositeColumnValueFilter */
        $filter = $this->unwrapFilter($filter->getSubFilters()[2]);

        // expected: not attr3 = 'baz'
        //           ^^^ ~~~~~~~~~~~~~
        //               sub-filter 0
        $this->assertIsLogicalNot($filter->getCombinator());
        $this->assertCount(1, $filter->getSubFilters());
        $this->assertIsSingleValueFilter($filter->getSubFilters()[0]);
    }

    public function test_operator_precedence_and_or_not(): void
    {
        // expression: attr1 = 'foo' and attr2 = 'bar' or not attr3 = 'baz'
        $filter = new ConditionFilter([
            ['comparison' => '=', 'column' => Attribute::string('attr1', 'foo'), 'logical' => 'and'],
            ['comparison' => '=', 'column' => Attribute::string('attr2', 'bar'), 'logical' => 'and'],
            ['comparison' => '=', 'column' => Attribute::string('attr3', 'baz'), 'logical' => 'or', 'negative' => true],
        ]);
        $this->assertIsCompositeValueFilter($filter = $filter->toFilter());
        /** @var \Dew\Acs\Tablestore\Messages\CompositeColumnValueFilter */
        $filter = $this->unwrapFilter($filter);

        // expected: (attr1 = 'foo' and attr2 = 'bar') or (not attr3 = 'baz')
        //           ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ ^^ ~~~~~~~~~~~~~~~~~~~
        //           sub-filter 0                         sub-filter 1
        $this->assertIsLogicalOr($filter->getCombinator());
        $this->assertCount(2, $filter->getSubFilters());
        $this->assertIsCompositeValueFilter($filter->getSubFilters()[0]);
        $this->assertIsCompositeValueFilter($filter->getSubFilters()[1]);
        /** @var \Dew\Acs\Tablestore\Messages\CompositeColumnValueFilter */
        $left = $this->unwrapFilter($filter->getSubFilters()[0]);
        /** @var \Dew\Acs\Tablestore\Messages\CompositeColumnValueFilter */
        $right = $this->unwrapFilter($filter->getSubFilters()[1]);

        // expected: attr1 = 'foo' and attr2 = 'bar'
        //           ~~~~~~~~~~~~~ ^^^ ~~~~~~~~~~~~~
        //           sub-filter 0      sub-filter 1
        $this->assertIsLogicalAnd($left->getCombinator());
        $this->assertCount(2, $left->getSubFilters());
        $this->assertIsSingleValueFilter($left->getSubFilters()[0]);
        $this->assertIsSingleValueFilter($left->getSubFilters()[1]);

        // expected: not attr3 = 'baz'
        //           ^^^ ~~~~~~~~~~~~~
        //               sub-filter 0
        $this->assertIsLogicalNot($right->getCombinator());
        $this->assertCount(1, $right->getSubFilters());
        $this->assertIsSingleValueFilter($right->getSubFilters()[0]);
    }

    public function test_operator_precedence_or(): void
    {
        // expression: attr1 = 'foo' or attr2 = 'bar' or attr3 = 'baz'
        $filter = new ConditionFilter([
            ['comparison' => '=', 'column' => Attribute::string('attr1', 'foo'), 'logical' => 'and'],
            ['comparison' => '=', 'column' => Attribute::string('attr2', 'bar'), 'logical' => 'or'],
            ['comparison' => '=', 'column' => Attribute::string('attr3', 'baz'), 'logical' => 'or'],
        ]);
        $this->assertIsCompositeValueFilter($filter = $filter->toFilter());
        /** @var \Dew\Acs\Tablestore\Messages\CompositeColumnValueFilter */
        $filter = $this->unwrapFilter($filter);

        // expected: (attr1 = 'foo') or (attr2 = 'bar') or (attr3 = 'baz')
        //           ~~~~~~~~~~~~~~~ ^^ ~~~~~~~~~~~~~~~ ^^ ~~~~~~~~~~~~~~~
        //           sub-filter 0       sub-filter 1       sub-filter 2
        $this->assertIsLogicalOr($filter->getCombinator());
        $this->assertCount(3, $filter->getSubFilters());
        $this->assertIsSingleValueFilter($filter->getSubFilters()[0]);
        $this->assertIsSingleValueFilter($filter->getSubFilters()[1]);
        $this->assertIsSingleValueFilter($filter->getSubFilters()[2]);
    }

    public function test_operator_precedence_or_and(): void
    {
        // expression: attr1 = 'foo' or attr2 = 'bar' and attr3 = 'baz'
        $filter = new ConditionFilter([
            ['comparison' => '=', 'column' => Attribute::string('attr1', 'foo'), 'logical' => 'and'],
            ['comparison' => '=', 'column' => Attribute::string('attr2', 'bar'), 'logical' => 'or'],
            ['comparison' => '=', 'column' => Attribute::string('attr3', 'baz'), 'logical' => 'and'],
        ]);
        $this->assertIsCompositeValueFilter($filter = $filter->toFilter());
        /** @var \Dew\Acs\Tablestore\Messages\CompositeColumnValueFilter */
        $filter = $this->unwrapFilter($filter);

        // expected: attr1 = 'foo' or (attr2 = 'bar' and attr3 = 'baz')
        //           ~~~~~~~~~~~~~ ^^ ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        //           sub-filter 0     sub-filter 1
        $this->assertIsLogicalOr($filter->getCombinator());
        $this->assertCount(2, $filter->getSubFilters());
        $this->assertIsSingleValueFilter($filter->getSubFilters()[0]);
        $this->assertIsCompositeValueFilter($filter->getSubFilters()[1]);
        /** @var \Dew\Acs\Tablestore\Messages\CompositeColumnValueFilter */
        $filter = $this->unwrapFilter($filter->getSubFilters()[1]);

        // assert: attr2 = 'bar' and attr3 = 'baz'
        //         ~~~~~~~~~~~~~ ^^^ ~~~~~~~~~~~~~
        //         sub-filter 0     sub-filter 1
        $this->assertIsLogicalAnd($filter->getCombinator());
        $this->assertCount(2, $filter->getSubFilters());
        $this->assertIsSingleValueFilter($filter->getSubFilters()[0]);
        $this->assertIsSingleValueFilter($filter->getSubFilters()[1]);
    }

    public function test_operator_precedence_or_and_not(): void
    {
        // expression: attr1 = 'foo' or attr2 = 'bar' and not attr3 = 'baz'
        $filter = new ConditionFilter([
            ['comparison' => '=', 'column' => Attribute::string('attr1', 'foo'), 'logical' => 'and'],
            ['comparison' => '=', 'column' => Attribute::string('attr2', 'bar'), 'logical' => 'or'],
            ['comparison' => '=', 'column' => Attribute::string('attr3', 'baz'), 'logical' => 'and', 'negative' => true],
        ]);
        $this->assertIsCompositeValueFilter($filter = $filter->toFilter());
        /** @var \Dew\Acs\Tablestore\Messages\CompositeColumnValueFilter */
        $filter = $this->unwrapFilter($filter);

        // expected: attr1 = 'foo' or (attr2 = 'bar' and not attr3 = 'baz')
        //           ~~~~~~~~~~~~~ ^^ ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        //           sub-filter 0     sub-filter 1
        $this->assertIsLogicalOr($filter->getCombinator());
        $this->assertCount(2, $filter->getSubFilters());
        $this->assertIsSingleValueFilter($filter->getSubFilters()[0]);
        $this->assertIsCompositeValueFilter($filter->getSubFilters()[1]);
        /** @var \Dew\Acs\Tablestore\Messages\CompositeColumnValueFilter */
        $filter = $this->unwrapFilter($filter->getSubFilters()[1]);

        // expected: attr2 = 'bar' and (not attr3 = 'baz')
        //           ~~~~~~~~~~~~~ ^^^ ~~~~~~~~~~~~~~~~~~~
        //           sub-filter 0      sub-filter 1
        $this->assertIsLogicalAnd($filter->getCombinator());
        $this->assertCount(2, $filter->getSubFilters());
        $this->assertIsSingleValueFilter($filter->getSubFilters()[0]);
        $this->assertIsCompositeValueFilter($filter->getSubFilters()[1]);
        /** @var \Dew\Acs\Tablestore\Messages\CompositeColumnValueFilter */
        $filter = $this->unwrapFilter($filter->getSubFilters()[1]);

        // expected: not attr3 = 'baz'
        //           ^^^ ~~~~~~~~~~~~~
        //               sub-filter 0
        $this->assertIsLogicalNot($filter->getCombinator());
        $this->assertCount(1, $filter->getSubFilters());
        $this->assertIsSingleValueFilter($filter->getSubFilters()[0]);
    }

    public function test_operator_precedence_or_or_not(): void
    {
        // expression: attr1 = 'foo' or attr2 = 'bar' or not attr3 = 'baz'
        $filter = new ConditionFilter([
            ['comparison' => '=', 'column' => Attribute::string('attr1', 'foo'), 'logical' => 'and'],
            ['comparison' => '=', 'column' => Attribute::string('attr2', 'bar'), 'logical' => 'or'],
            ['comparison' => '=', 'column' => Attribute::string('attr3', 'baz'), 'logical' => 'or', 'negative' => true],
        ]);
        $this->assertIsCompositeValueFilter($filter = $filter->toFilter());
        /** @var \Dew\Acs\Tablestore\Messages\CompositeColumnValueFilter */
        $filter = $this->unwrapFilter($filter);

        // expected: (attr1 = 'foo') or (attr2 = 'bar') or (not attr3 = 'baz')
        //           ~~~~~~~~~~~~~~~ ^^ ~~~~~~~~~~~~~~~ ^^ ~~~~~~~~~~~~~~~~~~~
        //           sub-filter 0       sub-filter 1       sub-filter 2
        $this->assertIsLogicalOr($filter->getCombinator());
        $this->assertCount(3, $filter->getSubFilters());
        $this->assertIsSingleValueFilter($filter->getSubFilters()[0]);
        $this->assertIsSingleValueFilter($filter->getSubFilters()[1]);
        $this->assertIsCompositeValueFilter($filter->getSubFilters()[2]);
        /** @var \Dew\Acs\Tablestore\Messages\CompositeColumnValueFilter */
        $filter = $this->unwrapFilter($filter->getSubFilters()[2]);

        // expected: not attr3 = 'baz'
        //           ^^^ ~~~~~~~~~~~~~
        //               sub-filter 0
        $this->assertIsLogicalNot($filter->getCombinator());
        $this->assertCount(1, $filter->getSubFilters());
        $this->assertIsSingleValueFilter($filter->getSubFilters()[0]);
    }

    public function test_operator_precedence_and_not_and(): void
    {
        // expression: attr1 = 'foo' and not attr2 = 'bar' and attr3 = 'baz'
        $filter = new ConditionFilter([
            ['comparison' => '=', 'column' => Attribute::string('attr1', 'foo'), 'logical' => 'and'],
            ['comparison' => '=', 'column' => Attribute::string('attr2', 'bar'), 'logical' => 'and', 'negative' => true],
            ['comparison' => '=', 'column' => Attribute::string('attr3', 'baz'), 'logical' => 'and'],
        ]);
        $this->assertIsCompositeValueFilter($filter = $filter->toFilter());
        /** @var \Dew\Acs\Tablestore\Messages\CompositeColumnValueFilter */
        $filter = $this->unwrapFilter($filter);

        // expected: (attr1 = 'foo') and (not attr2 = 'bar') and (attr3 = 'baz')
        //           ~~~~~~~~~~~~~~~ ^^^ ~~~~~~~~~~~~~~~~~~~ ^^^ ~~~~~~~~~~~~~~~
        //           sub-filter 0        sub-filter 1            sub-filter 2
        $this->assertIsLogicalAnd($filter->getCombinator());
        $this->assertCount(3, $filter->getSubFilters());
        $this->assertIsSingleValueFilter($filter->getSubFilters()[0]);
        $this->assertIsCompositeValueFilter($filter->getSubFilters()[1]);
        $this->assertIsSingleValueFilter($filter->getSubFilters()[2]);
        /** @var \Dew\Acs\Tablestore\Messages\CompositeColumnValueFilter */
        $filter = $this->unwrapFilter($filter->getSubFilters()[1]);

        // expected: not attr2 = 'bar'
        //           ^^^ ~~~~~~~~~~~~~
        //               sub-filter 0
        $this->assertIsLogicalNot($filter->getCombinator());
        $this->assertCount(1, $filter->getSubFilters());
        $this->assertIsSingleValueFilter($filter->getSubFilters()[0]);
    }

    public function test_operator_precedence_and_not_or(): void
    {
        // expression: attr1 = 'foo' and not attr2 = 'bar' or attr3 = 'baz'
        $filter = new ConditionFilter([
            ['comparison' => '=', 'column' => Attribute::string('attr1', 'foo'), 'logical' => 'and'],
            ['comparison' => '=', 'column' => Attribute::string('attr2', 'bar'), 'logical' => 'and', 'negative' => true],
            ['comparison' => '=', 'column' => Attribute::string('attr3', 'baz'), 'logical' => 'or'],
        ]);
        $this->assertIsCompositeValueFilter($filter = $filter->toFilter());
        /** @var \Dew\Acs\Tablestore\Messages\CompositeColumnValueFilter */
        $filter = $this->unwrapFilter($filter);

        // expected: (attr1 = 'foo' and not attr2 = 'bar') or attr3 = 'baz'
        //           ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ ^^ ~~~~~~~~~~~~~
        //           sub-filter 0                             sub-filter 1
        $this->assertIsLogicalOr($filter->getCombinator());
        $this->assertCount(2, $filter->getSubFilters());
        $this->assertIsCompositeValueFilter($filter->getSubFilters()[0]);
        $this->assertIsSingleValueFilter($filter->getSubFilters()[1]);
        /** @var \Dew\Acs\Tablestore\Messages\CompositeColumnValueFilter */
        $filter = $this->unwrapFilter($filter->getSubFilters()[0]);

        // expected: attr1 = 'foo' and (not attr2 = 'bar')
        //           ~~~~~~~~~~~~~ ^^^ ~~~~~~~~~~~~~~~~~~~
        //           sub-filter 0      sub-filter 1
        $this->assertIsLogicalAnd($filter->getCombinator());
        $this->assertCount(2, $filter->getSubFilters());
        $this->assertIsSingleValueFilter($filter->getSubFilters()[0]);
        $this->assertIsCompositeValueFilter($filter->getSubFilters()[1]);
        /** @var \Dew\Acs\Tablestore\Messages\CompositeColumnValueFilter */
        $filter = $this->unwrapFilter($filter->getSubFilters()[1]);

        // expected: not attr2 = 'bar'
        //           ^^^ ~~~~~~~~~~~~~
        //               sub-filter 0
        $this->assertIsLogicalNot($filter->getCombinator());
        $this->assertCount(1, $filter->getSubFilters());
        $this->assertIsSingleValueFilter($filter->getSubFilters()[0]);
    }

    public function test_operator_precedence_or_not_and(): void
    {
        // expression: attr1 = 'foo' or not attr2 = 'bar' and attr3 = 'baz'
        $filter = new ConditionFilter([
            ['comparison' => '=', 'column' => Attribute::string('attr1', 'foo'), 'logical' => 'and'],
            ['comparison' => '=', 'column' => Attribute::string('attr2', 'bar'), 'logical' => 'or', 'negative' => true],
            ['comparison' => '=', 'column' => Attribute::string('attr3', 'baz'), 'logical' => 'and'],
        ]);
        $this->assertIsCompositeValueFilter($filter = $filter->toFilter());
        /** @var \Dew\Acs\Tablestore\Messages\CompositeColumnValueFilter */
        $filter = $this->unwrapFilter($filter);

        // expected: attr1 = 'foo' or (not attr2 = 'bar' and attr3 = 'baz')
        //           ~~~~~~~~~~~~~ ^^ ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        //           sub-filter 0     sub-filter 1
        $this->assertIsLogicalOr($filter->getCombinator());
        $this->assertCount(2, $filter->getSubFilters());
        $this->assertIsSingleValueFilter($filter->getSubFilters()[0]);
        $this->assertIsCompositeValueFilter($filter->getSubFilters()[1]);
        /** @var \Dew\Acs\Tablestore\Messages\CompositeColumnValueFilter */
        $filter = $this->unwrapFilter($filter->getSubFilters()[1]);

        // expected: (not attr2 = 'bar') and attr3 = 'baz'
        //           ~~~~~~~~~~~~~~~~~~~ ^^^ ~~~~~~~~~~~~~
        //           sub-filter 0            sub-filter 1
        $this->assertIsLogicalAnd($filter->getCombinator());
        $this->assertCount(2, $filter->getSubFilters());
        $this->assertIsCompositeValueFilter($filter->getSubFilters()[0]);
        $this->assertIsSingleValueFilter($filter->getSubFilters()[1]);
        /** @var \Dew\Acs\Tablestore\Messages\CompositeColumnValueFilter */
        $filter = $this->unwrapFilter($filter->getSubFilters()[0]);

        // expected: not attr2 = 'bar'
        //           ^^^ ~~~~~~~~~~~~~
        //               sub-filter 0
        $this->assertIsLogicalNot($filter->getCombinator());
        $this->assertCount(1, $filter->getSubFilters());
        $this->assertIsSingleValueFilter($filter->getSubFilters()[0]);
    }

    public function test_operator_precedence_or_not_or(): void
    {
        // expression: attr1 = 'foo' or not attr2 = 'bar' or attr3 = 'baz'
        $filter = new ConditionFilter([
            ['comparison' => '=', 'column' => Attribute::string('attr1', 'foo'), 'logical' => 'and'],
            ['comparison' => '=', 'column' => Attribute::string('attr2', 'bar'), 'logical' => 'or', 'negative' => true],
            ['comparison' => '=', 'column' => Attribute::string('attr3', 'baz'), 'logical' => 'or'],
        ]);
        $this->assertIsCompositeValueFilter($filter = $filter->toFilter());
        /** @var \Dew\Acs\Tablestore\Messages\CompositeColumnValueFilter */
        $filter = $this->unwrapFilter($filter);

        // expected: (attr1 = 'foo') or (not attr2 = 'bar') or (attr3 = 'baz')
        //           ~~~~~~~~~~~~~~~ ^^ ~~~~~~~~~~~~~~~~~~~ ^^ ~~~~~~~~~~~~~~~
        //           sub-filter 0       sub-filter 1           sub-filter 2
        $this->assertIsLogicalOr($filter->getCombinator());
        $this->assertCount(3, $filter->getSubFilters());
        $this->assertIsSingleValueFilter($filter->getSubFilters()[0]);
        $this->assertIsCompositeValueFilter($filter->getSubFilters()[1]);
        $this->assertIsSingleValueFilter($filter->getSubFilters()[2]);
        /** @var \Dew\Acs\Tablestore\Messages\CompositeColumnValueFilter */
        $filter = $this->unwrapFilter($filter->getSubFilters()[1]);

        // expected: not attr2 = 'bar'
        //           ^^^ ~~~~~~~~~~~~~
        //               sub-filter 0
        $this->assertIsLogicalNot($filter->getCombinator());
        $this->assertCount(1, $filter->getSubFilters());
        $this->assertIsSingleValueFilter($filter->getSubFilters()[0]);
    }

    public function test_grouping_and(): void
    {
        // expression: attr1 = 'foo' and (attr2 = 'bar' or attr3 = 'baz')
        $filter = new ConditionFilter([
            ['comparison' => '=', 'column' => Attribute::string('attr1', 'foo'), 'logical' => 'and'],
            [
                'comparison' => '=',
                'column' => [
                    ['comparison' => '=', 'column' => Attribute::string('attr2', 'bar'), 'logical' => 'and'],
                    ['comparison' => '=', 'column' => Attribute::string('attr3', 'baz'), 'logical' => 'or'],
                ],
                'logical' => 'and',
            ],
        ]);
        $this->assertIsCompositeValueFilter($filter = $filter->toFilter());
        /** @var \Dew\Acs\Tablestore\Messages\CompositeColumnValueFilter */
        $filter = $this->unwrapFilter($filter);

        // expected: attr1 = 'foo' and (attr2 = 'bar' or attr3 = 'baz')
        //           ~~~~~~~~~~~~~ ^^^ ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        //           sub-filter 0      sub-filter 1
        $this->assertIsLogicalAnd($filter->getCombinator());
        $this->assertCount(2, $filter->getSubFilters());
        $this->assertIsSingleValueFilter($filter->getSubFilters()[0]);
        $this->assertIsCompositeValueFilter($filter->getSubFilters()[1]);
        /** @var \Dew\Acs\Tablestore\Messages\CompositeColumnValueFilter */
        $filter = $this->unwrapFilter($filter->getSubFilters()[1]);

        // expected: attr2 = 'bar' or attr3 = 'baz'
        //           ~~~~~~~~~~~~~ ^^ ~~~~~~~~~~~~~
        //           sub-filter 0     sub-filter 1
        $this->assertIsLogicalOr($filter->getCombinator());
        $this->assertCount(2, $filter->getSubFilters());
        $this->assertIsSingleValueFilter($filter->getSubFilters()[0]);
        $this->assertIsSingleValueFilter($filter->getSubFilters()[1]);
    }

    public function test_grouping_or(): void
    {
        // expression: attr1 = 'foo' or (attr2 = 'bar' or attr3 = 'baz')
        $filter = new ConditionFilter([
            ['comparison' => '=', 'column' => Attribute::string('attr1', 'foo'), 'logical' => 'and'],
            [
                'comparison' => '=',
                'column' => [
                    ['comparison' => '=', 'column' => Attribute::string('attr2', 'bar'), 'logical' => 'and'],
                    ['comparison' => '=', 'column' => Attribute::string('attr3', 'baz'), 'logical' => 'or'],
                ],
                'logical' => 'or',
            ],
        ]);
        $this->assertIsCompositeValueFilter($filter = $filter->toFilter());
        /** @var \Dew\Acs\Tablestore\Messages\CompositeColumnValueFilter */
        $filter = $this->unwrapFilter($filter);

        // expected: attr1 = 'foo' or (attr2 = 'bar' or attr3 = 'baz')
        //           ~~~~~~~~~~~~~ ^^ ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        //           sub-filter 0      sub-filter 1
        $this->assertIsLogicalOr($filter->getCombinator());
        $this->assertCount(2, $filter->getSubFilters());
        $this->assertIsSingleValueFilter($filter->getSubFilters()[0]);
        $this->assertIsCompositeValueFilter($filter->getSubFilters()[1]);
        /** @var \Dew\Acs\Tablestore\Messages\CompositeColumnValueFilter */
        $filter = $this->unwrapFilter($filter->getSubFilters()[1]);

        // expected: attr2 = 'bar' or attr3 = 'baz'
        //           ~~~~~~~~~~~~~ ^^ ~~~~~~~~~~~~~
        //           sub-filter 0     sub-filter 1
        $this->assertIsLogicalOr($filter->getCombinator());
        $this->assertCount(2, $filter->getSubFilters());
        $this->assertIsSingleValueFilter($filter->getSubFilters()[0]);
        $this->assertIsSingleValueFilter($filter->getSubFilters()[1]);
    }

    public function test_grouping_and_not(): void
    {
        // expression: attr1 = 'foo' and not (attr2 = 'bar' or attr3 = 'baz')
        $filter = new ConditionFilter([
            ['comparison' => '=', 'column' => Attribute::string('attr1', 'foo'), 'logical' => 'and'],
            [
                'comparison' => '=',
                'column' => [
                    ['comparison' => '=', 'column' => Attribute::string('attr2', 'bar'), 'logical' => 'and'],
                    ['comparison' => '=', 'column' => Attribute::string('attr3', 'baz'), 'logical' => 'or'],
                ],
                'logical' => 'and',
                'negative' => true,
            ],
        ]);
        $this->assertIsCompositeValueFilter($filter = $filter->toFilter());
        /** @var \Dew\Acs\Tablestore\Messages\CompositeColumnValueFilter */
        $filter = $this->unwrapFilter($filter);

        // expected: attr1 = 'foo' and (not (attr2 = 'bar' or attr3 = 'baz'))
        //           ~~~~~~~~~~~~~ ^^^ ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        //           sub-filter 0      sub-filter 1
        $this->assertIsLogicalAnd($filter->getCombinator());
        $this->assertCount(2, $filter->getSubFilters());
        $this->assertIsSingleValueFilter($filter->getSubFilters()[0]);
        $this->assertIsCompositeValueFilter($filter->getSubFilters()[1]);
        /** @var \Dew\Acs\Tablestore\Messages\CompositeColumnValueFilter */
        $filter = $this->unwrapFilter($filter->getSubFilters()[1]);

        // expected: not (attr2 = 'bar' or attr3 = 'baz')
        //           ^^^ ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        //               sub-filter 0
        $this->assertIsLogicalNot($filter->getCombinator());
        $this->assertCount(1, $filter->getSubFilters());
        $this->assertIsCompositeValueFilter($filter->getSubFilters()[0]);
        /** @var \Dew\Acs\Tablestore\Messages\CompositeColumnValueFilter */
        $filter = $this->unwrapFilter($filter->getSubFilters()[0]);

        // expected: attr2 = 'bar' or attr3 = 'baz'
        //           ~~~~~~~~~~~~~ ^^ ~~~~~~~~~~~~~
        //           sub-filter 0     sub-filter 1
        $this->assertIsLogicalOr($filter->getCombinator());
        $this->assertCount(2, $filter->getSubFilters());
        $this->assertIsSingleValueFilter($filter->getSubFilters()[0]);
        $this->assertIsSingleValueFilter($filter->getSubFilters()[1]);
    }

    public function test_grouping_or_not(): void
    {
        // expression: attr1 = 'foo' or not (attr2 = 'bar' and attr3 = 'baz')
        $filter = new ConditionFilter([
            ['comparison' => '=', 'column' => Attribute::string('attr1', 'foo'), 'logical' => 'and'],
            [
                'comparison' => '=',
                'column' => [
                    ['comparison' => '=', 'column' => Attribute::string('attr2', 'bar'), 'logical' => 'and'],
                    ['comparison' => '=', 'column' => Attribute::string('attr3', 'baz'), 'logical' => 'and'],
                ],
                'logical' => 'or',
                'negative' => true,
            ],
        ]);
        $this->assertIsCompositeValueFilter($filter = $filter->toFilter());
        /** @var \Dew\Acs\Tablestore\Messages\CompositeColumnValueFilter */
        $filter = $this->unwrapFilter($filter);

        // expected: attr1 = 'foo' or (not (attr2 = 'bar' and attr3 = 'baz'))
        //           ~~~~~~~~~~~~~ ^^ ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        //           sub-filter 0     sub-filter 1
        $this->assertIsLogicalOr($filter->getCombinator());
        $this->assertCount(2, $filter->getSubFilters());
        $this->assertIsSingleValueFilter($filter->getSubFilters()[0]);
        $this->assertIsCompositeValueFilter($filter->getSubFilters()[1]);
        /** @var \Dew\Acs\Tablestore\Messages\CompositeColumnValueFilter */
        $filter = $this->unwrapFilter($filter->getSubFilters()[1]);

        // expected: not (attr2 = 'bar' and attr3 = 'baz')
        //           ^^^ ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        //               sub-filter 0
        $this->assertIsLogicalNot($filter->getCombinator());
        $this->assertCount(1, $filter->getSubFilters());
        $this->assertIsCompositeValueFilter($filter->getSubFilters()[0]);
        /** @var \Dew\Acs\Tablestore\Messages\CompositeColumnValueFilter */
        $filter = $this->unwrapFilter($filter->getSubFilters()[0]);

        // expected: attr2 = 'bar' and attr3 = 'baz'
        //           ~~~~~~~~~~~~~ ^^^ ~~~~~~~~~~~~~
        //           sub-filter 0      sub-filter 1
        $this->assertIsLogicalAnd($filter->getCombinator());
        $this->assertCount(2, $filter->getSubFilters());
        $this->assertIsSingleValueFilter($filter->getSubFilters()[0]);
        $this->assertIsSingleValueFilter($filter->getSubFilters()[1]);
    }
}
