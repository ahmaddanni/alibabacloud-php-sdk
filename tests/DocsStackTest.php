<?php

declare(strict_types=1);

namespace Dew\Acs\Tests;

use Dew\Acs\DocsStack;
use Dew\Acs\OpenApi\Api;
use Dew\Acs\OpenApi\ApiDocs;
use Dew\Acs\OpenApi\Info;
use Http\Client\Common\Plugin;
use Mockery as m;
use Nyholm\Psr7\Factory\Psr17Factory;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(DocsStack::class)]
final class DocsStackTest extends TestCase
{
    public function test_prepend(): void
    {
        $m1 = m::mock(Plugin::class);
        $m2 = m::mock(Plugin::class);
        $stack = $this->makeStack();
        $stack->prepend($m1)->prepend($m2);
        $handlers = $stack->get();
        $this->assertSame($m2, $handlers[0]);
        $this->assertSame($m1, $handlers[1]);
    }

    private function makeStack(): DocsStack
    {
        return new DocsStack(
            new ApiDocs(new Info('RPC', '2024-01-01', 'test'), [], [], []),
            new Api(null, [], [], [], false, [], [], [], []),
            [], [], new Psr17Factory()
        );
    }
}
