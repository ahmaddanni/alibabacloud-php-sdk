<?php

declare(strict_types=1);

namespace Dew\Acs\Tests\Tablestore;

use Dew\Acs\Tablestore\InstanceException;
use Dew\Acs\Tablestore\Messages\Error;
use Dew\Acs\Tablestore\Messages\GetRowRequest;
use Dew\Acs\Tablestore\TablestoreInstance;
use Http\Mock\Client;
use Nyholm\Psr7\Response;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\TestWith;
use PHPUnit\Framework\TestCase;

/**
 * @phpstan-import-type TConfig from \Dew\Acs\Tablestore\TablestoreInstance
 */
#[CoversClass(TablestoreInstance::class)]
final class TablestoreInstanceTest extends TestCase
{
    #[TestWith([400], 'client error')]
    #[TestWith([500], 'server error')]
    public function test_send_handles_http_error(int $status): void
    {
        $this->expectException(InstanceException::class);
        $this->expectExceptionMessage('Something wrong has happended.');
        $error = new Error();
        $error->setCode('SomethingWrong');
        $error->setMessage('Something wrong has happended.');
        $response = new Response($status, [], $error->serializeToString());
        $client = new Client();
        $client->addResponse($response);
        $instance = new TablestoreInstance($this->makeConfig(['http_client' => $client]));
        $instance->send('/GetRow', new GetRowRequest());
    }

    /**
     * @param  array<string, mixed>|TConfig  $config
     * @return TConfig
     */
    private function makeConfig(array $config): array
    {
        /** @var TConfig */
        return [
            'credentials' => [
                'key' => 'mykey',
                'secret' => 'mysecret',
            ],
            'region' => 'cn-somewhere',
            'instance' => 'myinstance',
            'endpoint' => 'https://example.com',
            'http_client' => new Client(),
            ...$config,
        ];
    }
}
