<?php

declare(strict_types=1);

namespace Dew\Acs\MnsOpen;

use Dew\Acs\ConfigChecker;
use Dew\Acs\Signatures\SignsRequest;
use Psr\Http\Message\RequestInterface;

final readonly class MnsSignature implements SignsRequest
{
    /**
     * The config validator.
     */
    private ConfigChecker $configChecker;

    /**
     * Create a new MNS signature instance.
     */
    public function __construct()
    {
        $this->configChecker = new ConfigChecker();
    }

    #[\Override]
    public function signRequest(RequestInterface $request, array $config): RequestInterface
    {
        $this->configChecker->ensureCredentialsExist($config);

        $request = $request
            ->withHeader('date', gmdate(\DateTimeInterface::RFC7231))
            ->withHeader('x-mns-version', '2015-06-06');

        return $request->withHeader('Authorization', sprintf('MNS %s:%s',
            $config['credentials']['key'],
            $this->signature($request, $config['credentials']['secret'])
        ));
    }

    /**
     * Calculate the signature for the request.
     */
    public function signature(RequestInterface $request, #[\SensitiveParameter] string $key): string
    {
        return base64_encode(hash_hmac(
            'sha1', $this->stringToSign($request), $key, binary: true
        ));
    }

    /**
     * Create signing data from the HTTP request.
     */
    public function stringToSign(RequestInterface $request): string
    {
        return implode("\n", [
            $request->getMethod(),
            $request->getHeaderLine('content-md5'),
            $request->getHeaderLine('content-type'),
            $request->getHeaderLine('date'),
            $this->canonicalizedHeaders($request),
            $this->canonicalizedResource($request),
        ]);
    }

    /**
     * Build canonicalized header string.
     */
    public function canonicalizedHeaders(RequestInterface $request): string
    {
        $headers = array_change_key_case($request->getHeaders(), CASE_LOWER);

        ksort($headers);

        $result = [];

        foreach ($headers as $name => $values) {
            if ($this->isMnsHeader($name)) {
                $result[] = $name.':'.$values[0];
            }
        }

        return implode("\n", $result);
    }

    /**
     * Build canonicalized resource string.
     */
    public function canonicalizedResource(RequestInterface $request): string
    {
        $path = $request->getUri()->getPath();
        $query = $request->getUri()->getQuery();

        if ($query === '') {
            return $path;
        }

        return $path.'?'.$query;
    }

    /**
     * Determine if the header is a MNS custom header.
     */
    public function isMnsHeader(string $header): bool
    {
        return str_starts_with(strtolower($header), 'x-mns-');
    }
}
