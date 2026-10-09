<?php

declare(strict_types=1);

namespace Dew\Acs\Tests\Sls;

use Dew\Acs\Sls\DataCompressionFactory;
use Dew\Acs\Sls\Deflate;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(DataCompressionFactory::class)]
final class DataCompressionFactoryTest extends TestCase
{
    public function test_make_compression_gzip(): void
    {
        $factory = new DataCompressionFactory();
        $this->assertInstanceOf(Deflate::class, $factory->make('gzip'));
    }
}
