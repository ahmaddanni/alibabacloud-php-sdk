<?php

declare(strict_types=1);

require_once __DIR__.'/../../vendor/autoload.php';

use Dew\Acs\Sls\Compression;
use Dew\Acs\Sls\Deflate;
use Dew\Acs\Sls\Lz4;
use Dew\Acs\Sls\Messages\LogGroup;
use Dew\Acs\Sls\Protobuf;
use Dew\Acs\Sls\Zstd;

function mockedSimpleLog(): LogGroup
{
    return Protobuf::toLogGroup([
        'logs' => [[
            'time' => time(),
            'contents' => [
                'user_id' => '12345',
                'level' => 'alert',
                'message' => 'Something went wrong.',
            ],
        ]],
        'topic' => 'app',
        'source' => '127.0.0.1',
    ]);
}

function mockedUserLoginLog(): LogGroup
{
    return Protobuf::toLogGroup([
        'logs' => [[
            'time' => time(),
            'contents' => [
                'user_id' => '12345',
                'username' => 'jdoe',
                'ip_address' => '192.168.1.10',
                'device' => 'Chrome Browser',
                'login_status' => 'Success',
                'location' => 'New York, NY',
                'login_method' => 'Password',
            ],
        ]],
        'topic' => 'login',
        'source' => '127.0.0.1',
    ]);
}

function mockedNginxAccessLog(): LogGroup
{
    return Protobuf::toLogGroup([
        'logs' => [[
            'time' => time(),
            'contents' => [
                'remote_addr' => '192.168.1.1',
                'remote_user' => '-',
                'time_local' => '16/Aug/2024:08:23:45 +0000',
                'request' => 'GET /index.html HTTP/1.1',
                'status' => '200',
                'body_bytes_sent' => '1024',
                'http_referer' => 'http://example.com/home',
                'http_user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36',
                'http_x_forwarded_for' => '',
            ],
        ]],
        'topic' => 'nginx:access',
        'source' => '127.0.0.1',
    ]);
}

/**
 * Calculate the execution time of the given callback in ms.
 */
function benchmark(callable $callback): float
{
    $start = hrtime(as_number: true);

    $callback();

    $elapsed = hrtime(as_number: true) - $start;

    // nanoseconds to milliseconds
    return ((int) (($elapsed / 10 ** 6) * 100)) / 100;
}

function benchmarkCompression(Compression $compression, string $data, int $maxLevel, int $minLevel = 1): void
{
    $size = strlen($data);

    for ($i = $minLevel; $i <= $maxLevel; $i++) {
        $encoded = '';
        $elapsed = benchmark(function () use (&$encoded, $compression, $data, $i): void {
            $encoded = $compression->encode($data, level: $i);
        });
        printf("%3s bytes\t[%s:%2s] %3s bytes\t%3s%%  %sms".PHP_EOL,
            $size, $compression->format(), $i,
            $compressed = strlen($encoded), -floor((1 - $compressed / $size) * 100),
            $elapsed
        );
    }
}

function benchmarkDeflate(string $data): void
{
    benchmarkCompression(new Deflate(), $data, maxLevel: 9);
}

function benchmarkZstd(string $data): void
{
    benchmarkCompression(new Zstd(), $data, maxLevel: 22);
}

function benchmarkLz4(string $data): void
{
    benchmarkCompression(new Lz4(), $data, maxLevel: 12, minLevel: 0);
}

function main(): void
{
    $simple = mockedSimpleLog()->serializeToString();
    echo PHP_EOL.'=> deflate: simple (protobuf)'.PHP_EOL;
    benchmarkDeflate($simple);
    echo PHP_EOL.'=> zstd: simple (protobuf)'.PHP_EOL;
    benchmarkZstd($simple);
    echo PHP_EOL.'=> lz4: simple (protobuf)'.PHP_EOL;
    benchmarkLz4($simple);

    $login = mockedUserLoginLog()->serializeToString();
    echo PHP_EOL.'=> deflate: user login (protobuf)'.PHP_EOL;
    benchmarkDeflate($login);
    echo PHP_EOL.'=> zstd: user login (protobuf)'.PHP_EOL;
    benchmarkZstd($login);
    echo PHP_EOL.'=> lz4: user login (protobuf)'.PHP_EOL;
    benchmarkLz4($login);

    $nginx = mockedNginxAccessLog()->serializeToString();
    echo PHP_EOL.'=> deflate: nginx (protobuf)'.PHP_EOL;
    benchmarkDeflate($nginx);
    echo PHP_EOL.'=> zstd: nginx (protobuf)'.PHP_EOL;
    benchmarkZstd($nginx);
    echo PHP_EOL.'=> lz4: nginx (protobuf)'.PHP_EOL;
    benchmarkLz4($nginx);

    $text = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
    echo PHP_EOL.'=> deflate: lorem ipsum'.PHP_EOL;
    benchmarkDeflate($text);
    echo PHP_EOL.'=> zstd: lorem ipsum'.PHP_EOL;
    benchmarkZstd($text);
    echo PHP_EOL.'=> lz4: lorem ipsum'.PHP_EOL;
    benchmarkLz4($text);
}

main();
