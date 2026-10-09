<?php

declare(strict_types=1);

namespace Dew\Acs\Tests\Tablestore;

use Dew\Acs\Tablestore\Attribute;
use Dew\Acs\Tablestore\Condition;
use Dew\Acs\Tablestore\Messages\ComparatorType;
use Dew\Acs\Tablestore\PlainBufferWriter;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

#[CoversClass(Condition::class)]
final class ConditionTest extends TestCase
{
    use TestsDataOperation;

    #[DataProvider('provide_comparisons')]
    public function test_filter_generation_comparison(string $operator, int $comparison): void
    {
        $buffer = new PlainBufferWriter();
        $attribute = Attribute::integer('value', 100);
        $attribute->toFormattedValue($buffer);
        $condition = new Condition([
            'comparison' => $operator,
            'column' => $attribute,
            'logical' => 'and',
        ]);
        $filter = $condition->toFilter();
        $this->assertIsSingleValueFilter($filter);
        /** @var \Dew\Acs\Tablestore\Messages\SingleColumnValueFilter */
        $filter = $this->unwrapFilter($filter);
        $this->assertSame($filter->getComparator(), $comparison);
        $this->assertSame($filter->getColumnName(), $attribute->name());
        $this->assertSame($filter->getColumnValue(), $buffer->getBuffer());
        $this->assertTrue($filter->getFilterIfMissing());
        $this->assertTrue($filter->getLatestVersionOnly());
    }

    public function test_filter_generation_negation(): void
    {
        $buffer = new PlainBufferWriter();
        $attribute = Attribute::integer('value', 100);
        $attribute->toFormattedValue($buffer);
        $condition = new Condition([
            'comparison' => '=',
            'column' => $attribute,
            'logical' => 'and',
        ]);
        $filter = $condition->not()->toFilter();
        $this->assertIsCompositeValueFilter($filter);
        /** @var \Dew\Acs\Tablestore\Messages\CompositeColumnValueFilter */
        $filter = $this->unwrapFilter($filter);
        $this->assertIsLogicalNot($filter->getCombinator());
        $this->assertCount(1, $filter->getSubFilters());
        $this->assertIsSingleValueFilter($filter->getSubFilters()[0]);
        /** @var \Dew\Acs\Tablestore\Messages\SingleColumnValueFilter */
        $filter = $this->unwrapFilter($filter->getSubFilters()[0]);
        $this->assertIsEqualityOperator($filter->getComparator());
        $this->assertSame($filter->getColumnName(), $attribute->name());
        $this->assertSame($filter->getColumnValue(), $buffer->getBuffer());
        $this->assertTrue($filter->getFilterIfMissing());
        $this->assertTrue($filter->getLatestVersionOnly());
    }

    public function test_filter_generation_attribute_without_value(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('The column [value] does not contain value.');
        $attribute = Attribute::delete('value');
        $condition = new Condition([
            'comparison' => '=',
            'column' => $attribute,
            'logical' => 'and',
        ]);
        $condition->toFilter();
    }

    /**
     * @return \Generator<string, array{0: string, 1: int}>
     */
    public static function provide_comparisons(): \Generator
    {
        yield 'equals operator' => ['=', ComparatorType::CT_EQUAL];
        yield 'not equals operator !=' => ['!=', ComparatorType::CT_NOT_EQUAL];
        yield 'not equals operator <>' => ['<>', ComparatorType::CT_NOT_EQUAL];
        yield 'greater than operator' => ['>', ComparatorType::CT_GREATER_THAN];
        yield 'greater than or equal operator' => ['>=', ComparatorType::CT_GREATER_EQUAL];
        yield 'less than operator' => ['<', ComparatorType::CT_LESS_THAN];
        yield 'less than or equal operator' => ['<=', ComparatorType::CT_LESS_EQUAL];
    }
}
