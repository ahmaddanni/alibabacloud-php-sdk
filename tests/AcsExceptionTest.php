<?php

declare(strict_types=1);

namespace Dew\Acs\Tests;

use Dew\Acs\AcsException;
use Dew\Acs\Result;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\TestWith;
use PHPUnit\Framework\TestCase;

#[CoversClass(AcsException::class)]
final class AcsExceptionTest extends TestCase
{
    #[TestWith([['Code' => 'Unknown', 'Message' => 'Something went wrong.']])]
    #[TestWith([new Result(['Code' => 'Unknown', 'Message' => 'Something went wrong.'])])]
    public function test_create_exception_from_result_array(mixed $result): void
    {
        $exception = AcsException::makeFromResult($result);
        $this->assertInstanceOf(AcsException::class, $exception);
        $this->assertSame('Something went wrong.', $exception->getMessage());
        $this->assertSame('Unknown', $exception->getCode());
    }
}
