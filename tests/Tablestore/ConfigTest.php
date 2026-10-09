<?php

declare(strict_types=1);

namespace Dew\Acs\Tests\Tablestore;

use Dew\Acs\Tablestore\Config;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\TestWith;
use PHPUnit\Framework\TestCase;

#[CoversClass(Config::class)]
final class ConfigTest extends TestCase
{
    public function test_endpoint_normalization_endpoint(): void
    {
        $config = Config::normalizeEndpoint([
            'credentials' => ['key' => 'mykey', 'secret' => 'mysecret'],
            'region' => 'cn-somewhere',
            'instance' => 'myinstance',
        ]);
        $this->assertArrayHasKey('endpoint', $config);
        $this->assertSame('https://myinstance.cn-somewhere.tablestore.aliyuncs.com', $config['endpoint']);
    }

    #[TestWith(['https://myinstance.cn-somewhere.ots.aliyuncs.com'], 'endpoint')]
    #[TestWith(['https://myinstance.cn-somewhere.tablestore.aliyuncs.com'], 'dual-stack endpoint')]
    #[TestWith(['https://myinstance.cn-somewhere.vpc.tablestore.aliyuncs.com'], 'vpc endpoint')]
    #[TestWith(['myinstance.cn-somewhere.ots.aliyuncs.com'], 'missing scheme')]
    public function test_endpoint_normalization_instance_region(string $endpoint): void
    {
        $config = Config::normalizeEndpoint([
            'credentials' => ['key' => 'mykey', 'secret' => 'mysecret'],
            'endpoint' => $endpoint,
        ]);
        $this->assertArrayHasKey('instance', $config);
        $this->assertSame('myinstance', $config['instance']);
        $this->assertArrayHasKey('region', $config);
        $this->assertSame('cn-somewhere', $config['region']);
    }

    public function test_endpoint_normalization_instance_region_empty(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('The endpoint is not a valid URL.');
        Config::normalizeEndpoint([
            'credentials' => ['key' => 'mykey', 'secret' => 'mysecret'],
            'endpoint' => '',
        ]);
    }

    #[TestWith(['com'], 'root domain')]
    #[TestWith(['aliyuncs.com'], 'base endpoint')]
    #[TestWith(['tablestore.aliyuncs.com'], 'service endpoint')]
    #[TestWith(['cn-somewhere.tablestore.aliyuncs.com'], 'region endpoint')]
    public function test_endpoint_normalization_instance_region_invalid_endpoint(string $endpoint): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('The endpoint is not conventional.');
        Config::normalizeEndpoint([
            'credentials' => ['key' => 'mykey', 'secret' => 'mysecret'],
            'endpoint' => $endpoint,
        ]);
    }

    #[TestWith(['https://myinstance.cn-somewhere.ots.aliyuncs.com'], 'has scheme')]
    #[TestWith(['myinstance.cn-somewhere.ots.aliyuncs.com'], 'missing scheme')]
    public function test_endpoint_normalization_endpoint_scheme(string $endpoint): void
    {
        $config = Config::normalize([
            'credentials' => ['key' => 'mykey', 'secret' => 'mysecret'],
            'endpoint' => $endpoint,
        ]);
        $this->assertArrayHasKey('endpoint', $config);
        $this->assertSame('https://myinstance.cn-somewhere.ots.aliyuncs.com', $config['endpoint']);
    }

    #[TestWith(['https://example.com'], 'has scheme')]
    #[TestWith(['example.com'], 'missing scheme')]
    public function test_endpoint_normalization_complete(string $endpoint): void
    {
        $config = Config::normalize([
            'credentials' => ['key' => 'mykey', 'secret' => 'mysecret'],
            'region' => 'us-somewhere',
            'instance' => 'anotherinstance',
            'endpoint' => $endpoint,
        ]);
        $this->assertArrayHasKey('region', $config);
        $this->assertSame('us-somewhere', $config['region']);
        $this->assertArrayHasKey('instance', $config);
        $this->assertSame('anotherinstance', $config['instance']);
        $this->assertArrayHasKey('endpoint', $config);
        $this->assertSame('https://example.com', $config['endpoint']);
    }

    public function test_endpoint_normalization_missing_instance_only(): void
    {
        $config = Config::normalize([
            'credentials' => ['key' => 'mykey', 'secret' => 'mysecret'],
            'region' => 'us-somewhere',
            'endpoint' => 'https://myinstance.cn-somewhere.ots.aliyuncs.com',
        ]);
        $this->assertSame('us-somewhere', $config['region']);
        $this->assertSame('myinstance', $config['instance']);
        $this->assertSame('https://myinstance.cn-somewhere.ots.aliyuncs.com', $config['endpoint']);
    }

    public function test_endpoint_normalization_missing_region_only(): void
    {
        $config = Config::normalize([
            'credentials' => ['key' => 'mykey', 'secret' => 'mysecret'],
            'instance' => 'anotherinstance',
            'endpoint' => 'https://myinstance.cn-somewhere.ots.aliyuncs.com',
        ]);
        $this->assertSame('cn-somewhere', $config['region']);
        $this->assertSame('anotherinstance', $config['instance']);
        $this->assertSame('https://myinstance.cn-somewhere.ots.aliyuncs.com', $config['endpoint']);
    }

    public function test_endpoint_normalization_empty(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Specify at least the endpoint or region and instance in the config.');
        Config::normalize([
            'credentials' => ['key' => 'mykey', 'secret' => 'mysecret'],
        ]);
    }
}
