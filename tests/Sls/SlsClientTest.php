<?php

declare(strict_types=1);

namespace Dew\Acs\Tests\Sls;

use Dew\Acs\Sls\ManagesLogs;
use Dew\Acs\Sls\SlsClient;
use Http\Mock\Client;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\CoversTrait;
use PHPUnit\Framework\TestCase;

/**
 * @phpstan-import-type TConfig from \Dew\Acs\AcsClient
 */
#[CoversClass(SlsClient::class)]
#[CoversTrait(ManagesLogs::class)]
final class SlsClientTest extends TestCase
{
    public function test_put_logs_load_balancing(): void
    {
        $mock = new Client();
        $client = $this->makeClient(['http_client' => $mock]);
        $client->putLogs(['project' => 'testing', 'logstore' => 'default']);
        $this->assertSame('/logstores/default/shards/lb', $mock->getLastRequest()->getUri()->getPath());
    }

    public function test_put_logs_shard(): void
    {
        $mock = new Client();
        $client = $this->makeClient(['http_client' => $mock]);
        $client->putLogs([
            'project' => 'testing',
            'logstore' => 'default',
            'hash' => '00000000000000000000000000000000',
        ]);
        $uri = $mock->getLastRequest()->getUri();
        $this->assertSame('/logstores/default/shards/route', $uri->getPath());
        $this->assertSame('key=00000000000000000000000000000000', $uri->getQuery());
    }

    /**
     * @param  TConfig|array<string, mixed>  $config
     */
    private function makeClient(array $config = []): SlsClient
    {
        /** @var TConfig */
        $config = [
            'credentials' => [
                'key' => 'mykey',
                'secret' => 'mysecret',
            ],
            'region' => 'cn-somewhere',
            'endpoint' => 'example.com',
            'http_client' => new Client(),
            ...$config,
        ];

        return new SlsClient($config);
    }
}
