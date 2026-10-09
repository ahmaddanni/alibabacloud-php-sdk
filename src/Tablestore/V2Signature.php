<?php

declare(strict_types=1);

namespace Dew\Acs\Tablestore;

use Dew\Acs\Signatures\SignsRequest;
use Psr\Http\Message\RequestInterface;

final readonly class V2Signature implements SignsRequest
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
        $this->configChecker->ensureCredentialsExist($config);

        return $request->withHeader(
            'x-ots-signature',
            $this->getSignature($request, $config['credentials']['secret'])
        );
    }

    public function getStringToSign(RequestInterface $request): string
    {
        return implode("\n", [
            $request->getUri()->getPath(),
            $request->getMethod(),
            '',
            $this->getCanonicalHeaders($request),
        ]);
    }

    public function getSignature(RequestInterface $request, string $key): string
    {
        $data = $this->getStringToSign($request);

        return base64_encode(hash_hmac('sha1', $data, $key, binary: true));
    }

    public function getCanonicalHeaders(RequestInterface $request): string
    {
        $headers = '';

        foreach ($request->getHeaders() as $name => $value) {
            if ($this->isOtsHeader($name)) {
                $headers .= sprintf("%s:%s\n", $name, implode(',', $value));
            }
        }

        return $headers;
    }

    public function isOtsHeader(string $header): bool
    {
        return str_starts_with($header, 'x-ots-');
    }
}
