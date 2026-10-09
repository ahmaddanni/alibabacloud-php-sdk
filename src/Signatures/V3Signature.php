<?php

declare(strict_types=1);

namespace Dew\Acs\Signatures;

use Dew\Acs\ConfigChecker;
use Dew\Acs\OpenApi\Api;
use Dew\Acs\OpenApi\ApiDocs;
use GuzzleHttp\Psr7\Query;
use Psr\Http\Message\RequestInterface;

/**
 * @see https://www.alibabacloud.com/help/en/sdk/product-overview/v3-request-structure-and-signature
 */
final class V3Signature implements SignsRequest, NeedsApiContext
{
    private readonly ConfigChecker $configChecker;

    private ApiDocs $docs;

    private Api $api;

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

        $datetime = new \DateTimeImmutable('now', new \DateTimeZone('UTC'));

        $nonce = bin2hex(random_bytes(16));

        $request = $request
            ->withHeader('x-acs-action', $this->api->getName() ?? throw new \RuntimeException('Missing API name.'))
            ->withHeader('x-acs-version', $this->docs->info->version)
            ->withHeader('x-acs-signature-nonce', $nonce)
            ->withHeader('x-acs-date', $datetime->format('Y-m-d\TH:i:s\Z'))
            ->withHeader('x-acs-content-sha256', hash('sha256', (string) $request->getBody()));

        if (isset($config['credentials']['token'])) {
            $request = $request
                ->withHeader('x-acs-accesskey-id', $config['credentials']['key'])
                ->withHeader('x-acs-security-token', $config['credentials']['token']);
        }

        return $request->withHeader('Authorization', $this->getAuthorization($request, $config['credentials']));
    }

    #[\Override]
    public function setApiContext(ApiDocs $docs, Api $api): void
    {
        $this->docs = $docs;
        $this->api = $api;
    }

    /**
     * @param  array{key: string, secret: string}  $credentials
     */
    public function getAuthorization(RequestInterface $request, array $credentials): string
    {
        return sprintf(
            'ACS3-HMAC-SHA256 Credential=%s,SignedHeaders=%s,Signature=%s',
            $credentials['key'],
            implode(';', $this->getSignedHeaders($request)),
            $this->getSignature($request, $credentials['secret'])
        );
    }

    /**
     * @return string[]
     */
    public function getSignedHeaders(RequestInterface $request): array
    {
        $headers = array_map('strtolower', array_keys($request->getHeaders()));
        sort($headers);

        return $headers;
    }

    public function getSignature(RequestInterface $request, string $secret): string
    {
        $stringToSign = $this->getStringToSign($request);

        return hash_hmac('sha256', $stringToSign, $secret);
    }

    private function getStringToSign(RequestInterface $request): string
    {
        return implode("\n", [
            'ACS3-HMAC-SHA256',
            hash('sha256', $this->getCanonicalRequest($request)),
        ]);
    }

    public function getCanonicalRequest(RequestInterface $request): string
    {
        $headers = $this->getSignedHeaders($request);

        return implode("\n", [
            strtoupper($request->getMethod()),
            $request->getUri()->getPath(),
            $this->getCanonicalQueryString($request),
            $this->getCanonicalHeaders($request, $headers),
            implode(';', $headers),
            hash('sha256', (string) $request->getBody()),
        ]);
    }

    public function getCanonicalQueryString(RequestInterface $request): string
    {
        $query = Query::parse($request->getUri()->getQuery());

        if ($query === []) {
            return '';
        }

        ksort($query);

        $result = '';
        $delimiter = '';

        foreach ($query as $key => $value) {
            $key = rawurlencode((string) $key);
            $value = is_array($value) ? implode(',', $value) : $value;
            $value = is_string($value) ? rawurlencode($value) : '';
            $result .= $delimiter.$key.'='.$value;
            $delimiter = '&';
        }

        return $result;
    }

    /**
     * @param  string[]|null  $headers
     */
    public function getCanonicalHeaders(RequestInterface $request, ?array $headers = null): string
    {
        $headers ??= $this->getSignedHeaders($request);

        $result = '';

        foreach ($headers as $header) {
            $result .= sprintf("%s:%s\n", $header, $request->getHeaderLine($header));
        }

        return $result;
    }
}
