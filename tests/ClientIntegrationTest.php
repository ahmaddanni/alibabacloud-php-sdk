<?php

declare(strict_types=1);

namespace Dew\Acs\Tests;

use ahmaddanni\Acs\AcsClient;
use ahmaddanni\Acs\ApiDocsResolver;
use ahmaddanni\Acs\Sts\StsClient;
use Http\Mock\Client;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

/**
 * @phpstan-import-type TProductInfo from \ahmaddanni\Acs\ApiDocsResolver
 * @phpstan-import-type TConfig from \ahmaddanni\Acs\AcsClient
 */
#[CoversClass(AcsClient::class)]
final class ClientIntegrationTest extends TestCase
{
    /**
     * @param  class-string<\Dew\Acs\AcsClient>  $fqdn
     */
    #[DataProvider('clientProvider')]
    public function test_client_can_be_resolved(string $fqdn): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Could not find Foo API.');
        $client = new $fqdn($this->makeConfig());
        $client->__call('foo', []);
    }

    public function test_at_headers(): void
    {
        $httpClient = new Client();
        $client = new StsClient($this->makeConfig(['http_client' => $httpClient]));
        $client->getCallerIdentity(['@headers' => ['x-foo' => 'bar']]);
        $request = $httpClient->getLastRequest();
        $this->assertSame('bar', $request->getHeaderLine('x-foo'));
    }

    public function test_user_agent_header(): void
    {
        $httpClient = new Client();
        $client = new StsClient($this->makeConfig(['http_client' => $httpClient]));
        $client->getCallerIdentity();
        $request = $httpClient->getLastRequest();
        $this->assertStringMatchesFormat('ahmaddanniAcsPHP/%s (%s; PHP %s)', $request->getHeaderLine('User-Agent'));
    }

    /**
     * @return \Generator<string, class-string<\ahmaddanni\Acs\AcsClient>[]>
     */
    public static function clientProvider(): \Generator
    {
        $products = require __DIR__.'/../data/products.php';

        foreach ($products as $product) {
            /** @var TProductInfo $product */
            $name = ApiDocsResolver::getNormalizedProductName($product['code']);

            /** @var class-string<\ahmaddanni\Acs\AcsClient> */
            $fqdn = "\\ahmaddanni\\Acs\\{$name}\\{$name}Client";

            if (! class_exists($fqdn)) {
                throw new \RuntimeException("Missing $name client.");
            }

            yield $product['code'] => [$fqdn];
        }
    }

    /**
     * @param  TConfig|array<string, mixed>  $config
     * @return TConfig
     */
    private function makeConfig(array $config = []): array
    {
        /** @var TConfig */
        return [
            'credentials' => [
                'key' => 'mykey',
                'secret' => 'mysecret',
            ],
            'region' => 'cn-somewhere',
            'endpoint' => 'example.com',
            'http_client' => new Client(),
            ...$config,
        ];
    }
}
