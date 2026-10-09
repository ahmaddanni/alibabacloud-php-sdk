<?php

declare(strict_types=1);

namespace Dew\Acs\Tablestore;

use Dew\Acs\Signatures\SignsRequest;
use Psr\Http\Message\RequestInterface;

final readonly class V4Signature implements SignsRequest
{
    private ConfigChecker $configChecker;

    public function __construct()
    {
        $this->configChecker = new ConfigChecker();
    }

    /**
     * @param  array<string, mixed>  $config
     */
    #[\Override]
    public function signRequest(RequestInterface $request, array $config): RequestInterface
    {
        $this->configChecker->ensureRegionExists($config);

        $now = new \DateTimeImmutable('now', new \DateTimeZone('UTC'));

        $request = $request
            ->withHeader('x-ots-signregion', $config['region'])
            ->withHeader('x-ots-signdate', $now->format('Ymd'));

        return $request->withHeader(
            'x-ots-signaturev4',
            $this->getSignature($request, $this->getSigngingKey($config, $now))
        );
    }

    public function getStringToSign(RequestInterface $request): string
    {
        return implode("\n", [
            $request->getUri()->getPath(),
            $request->getMethod(),
            '',
            $this->getCanonicalHeaders($request),
            'ots',
        ]);
    }

    /**
     * @param  array<string, mixed>  $config
     */
    public function getSigngingKey(array $config, \DateTimeInterface $datetime): string
    {
        $this->configChecker->ensureCredentialsExist($config);

        return base64_encode(array_reduce(
            $this->getScope($config, $datetime),
            fn (string $key, string $data): string => hash_hmac('sha256', $data, $key, binary: true),
            'aliyun_v4'.$config['credentials']['secret']
        ));
    }

    /**
     * @param  array<string, mixed>  $config
     * @return string[]
     */
    public function getScope(array $config, \DateTimeInterface $datetime): array
    {
        $this->configChecker->ensureRegionExists($config);

        return [
            $datetime->format('Ymd'),
            $config['region'],
            'ots',
            'aliyun_v4_request',
        ];
    }

    public function getCanonicalHeaders(RequestInterface $request): string
    {
        $headers = [];

        foreach ($request->getHeaders() as $name => $value) {
            if ($this->isOtsHeader($name)) {
                $headers[$name] = sprintf('%s:%s', $name, implode(',', $value));
            }
        }

        ksort($headers);

        return implode("\n", array_values($headers));
    }

    public function isOtsHeader(string $header): bool
    {
        return str_starts_with($header, 'x-ots-');
    }

    public function getSignature(RequestInterface $request, string $key): string
    {
        $data = $this->getStringToSign($request);

        return base64_encode(hash_hmac('sha256', $data, $key, binary: true));
    }
}
