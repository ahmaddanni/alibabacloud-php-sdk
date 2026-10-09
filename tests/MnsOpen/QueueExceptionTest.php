<?php

declare(strict_types=1);

namespace Dew\Acs\Tests\MnsOpen;

use Dew\Acs\MnsOpen\QueueException;
use Dew\Acs\MnsOpen\Results\MnsResult;
use Dew\Acs\Result;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(QueueException::class)]
final class QueueExceptionTest extends TestCase
{
    public function test_query_exception_should_be_thrown(): void
    {
        $e = QueueException::makeFromResult(new Result(['Error' => ['Code' => 'Unknown', 'Message' => 'Something went wrong!']]));
        $this->assertSame('Something went wrong!', $e->getMessage());
        $this->assertSame('Unknown', $e->getCode());
        $this->assertInstanceOf(MnsResult::class, $e->getResult());
    }

    public function test_result_contains_multiple_error_messages_1_other(): void
    {
        $e = QueueException::makeFromResult(new Result([
            'Errors' => [
                'Error' => [
                    ['ErrorCode' => 'Unknown1', 'ErrorMessage' => 'Something went wrong 1!'],
                    ['ErrorCode' => 'Unknown2', 'ErrorMessage' => 'Something went wrong 2!'],
                ],
            ],
        ]));
        $this->assertSame('Something went wrong 1! (and 1 other)', $e->getMessage());
        $this->assertSame('Unknown1', $e->getCode());
    }

    public function test_result_contains_multiple_error_messages_2_others(): void
    {
        $e = QueueException::makeFromResult(new Result([
            'Errors' => [
                'Error' => [
                    ['ErrorCode' => 'Unknown1', 'ErrorMessage' => 'Something went wrong 1!'],
                    ['ErrorCode' => 'Unknown2', 'ErrorMessage' => 'Something went wrong 2!'],
                    ['ErrorCode' => 'Unknown3', 'ErrorMessage' => 'Something went wrong 3!'],
                ],
            ],
        ]));
        $this->assertSame('Something went wrong 1! (and 2 others)', $e->getMessage());
        $this->assertSame('Unknown1', $e->getCode());
    }

    public function test_result_contains_multiple_error_messages_associative_array(): void
    {
        $e = QueueException::makeFromResult(new Result([
            'Errors' => [
                'Error' => [
                    'ErrorCode' => 'Unknown1',
                    'ErrorMessage' => 'Something went wrong 1!',
                ],
            ],
        ]));
        $this->assertSame('Something went wrong 1!', $e->getMessage());
        $this->assertSame('Unknown1', $e->getCode());
    }
}
