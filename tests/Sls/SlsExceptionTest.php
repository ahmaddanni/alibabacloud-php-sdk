<?php

declare(strict_types=1);

namespace Dew\Acs\Tests\Sls;

use Dew\Acs\Result;
use Dew\Acs\Sls\SlsException;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(SlsException::class)]
final class SlsExceptionTest extends TestCase
{
    public function test_prefixed_code_and_message(): void
    {
        $result = new Result([
            'errorCode' => 'ProjectAlreadyExist',
            'errorMessage' => 'Project ProjectName already exist.',
        ]);
        $e = SlsException::makeFromResult($result);
        $this->assertSame('ProjectAlreadyExist', $e->getCode());
        $this->assertSame('Project ProjectName already exist.', $e->getMessage());
    }
}
