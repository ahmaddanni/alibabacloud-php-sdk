<?php

namespace Dew\Acs\Signatures;

use Dew\Acs\ConfigChecker;
use Dew\Acs\Str;
use GuzzleHttp\Psr7\Query;
use Psr\Http\Message\RequestInterface;

final class V4Signature implements SignsRequest
{
    private readonly ConfigChecker $configChecker;

    /**
     * @var array<string, true>
     */
    private array $signedHeaderMap = [];

    /**
     * @var string[]
     */
    private array $signedHeaderMasks = [];

    private bool $onlyIncludeSignedHeadersInCanonical = false;

    /**
     * @var \Closure(\Psr\Http\Message\RequestInterface): string
     */
    private ?\Closure $payloadHasher = null;

    /**
     * @var \Closure(\Psr\Http\Message\RequestInterface, \Dew\Acs\Signatures\V4Signature): string
     */
    private ?\Closure $resourcePathBuilder = null;

    private bool $includeAdditionalHeaders = false;

    public function __construct(
        private readonly string $version,
        private readonly string $product
    ) {
        $this->configChecker = new ConfigChecker();
    }

    /**
     * @param  array<string, mixed>  $config
     */
    #[\Override]
    public function signRequest(RequestInterface $request, array $config): RequestInterface
    {
        $this->configChecker->ensureCredentialsExist($config);
        $this->configChecker->ensureRegionExists($config);

        $datetime = new \DateTimeImmutable('now', new \DateTimeZone('UTC'));

        $stringToSign = $this->buildStringToSign(
            $this->buildCanonicalRequest($request),
            $datetime, $scope = $this->buildScope($datetime, $config['region'])
        );

        $signature = $this->buildSignature(
            $scope, $stringToSign, $config['credentials']['secret']
        );

        if ($this->includeAdditionalHeaders) {
            return $request->withHeader('Authorization', sprintf(
                '%s Credential=%s/%s,AdditionalHeaders=%s,Signature=%s',
                $this->version, $config['credentials']['key'], $scope,
                implode(';', $this->buildAdditionalHeaders($request)), $signature
            ));
        }

        return $request->withHeader('Authorization', sprintf(
            '%s Credential=%s/%s,Signature=%s',
            $this->version, $config['credentials']['key'], $scope, $signature
        ));
    }

    public function buildCanonicalRequest(RequestInterface $request): string
    {
        return implode("\n", [
            $request->getMethod(),
            $this->buildCanonicalUri($request),
            $this->buildCanonicalQueryString($request),
            $this->buildCanonicalHeaders($request),
            $this->includeAdditionalHeaders
                ? implode(';', $this->buildAdditionalHeaders($request))
                : implode(';', $this->buildSignedHeaders($request)),
            $this->buildHashedPayload($request),
        ]);
    }

    public function buildStringToSign(string $canonicalRequest, \DateTimeInterface $datetime, string $scope): string
    {
        return implode("\n", [
            $this->version,
            $datetime->format('Ymd\THis\Z'),
            $scope,
            hash('sha256', $canonicalRequest),
        ]);
    }

    public function buildCanonicalUri(RequestInterface $request): string
    {
        if ($this->resourcePathBuilder) {
            return call_user_func($this->resourcePathBuilder, $request, $this);
        }

        return $request->getUri()->getPath();
    }

    /**
     * @param  \Closure(\Psr\Http\Message\RequestInterface): string  $callback
     */
    public function resourcePathUsing(\Closure $callback): void
    {
        $this->resourcePathBuilder = $callback;
    }

    public function buildCanonicalQueryString(RequestInterface $request): string
    {
        $query = Query::parse($request->getUri()->getQuery());

        $sorted = [];
        foreach ($query as $key => $value) {
            $key = rawurlencode((string) $key);
            $value = is_array($value) ? implode('&', $value) : $value;
            $value = is_string($value) ? rawurlencode($value) : '';
            $sorted[$key] = $value;
        }
        ksort($sorted);

        $result = '';
        $delimiter = '';

        foreach ($sorted as $key => $value) {
            $pair = $value === '' ? $key : $key.'='.$value;
            $result .= $delimiter.$pair;
            $delimiter = '&';
        }

        return $result;
    }

    public function buildCanonicalHeaders(RequestInterface $request): string
    {
        $result = [];

        foreach ($this->buildCanonicalHeaderNames($request) as $name) {
            $result[] = strtolower($name).':'.$request->getHeaderLine($name);
        }

        return implode("\n", $result)."\n";
    }

    /**
     * @return string[]
     */
    public function buildCanonicalHeaderNames(RequestInterface $request): array
    {
        if ($this->onlyIncludeSignedHeadersInCanonical) {
            return $this->buildSignedHeaders($request);
        }

        $headers = array_keys($request->getHeaders());

        sort($headers, SORT_STRING | SORT_FLAG_CASE);

        return $headers;
    }

    /**
     * @return string[]
     */
    public function buildAdditionalHeaders(RequestInterface $request): array
    {
        $headers = $request->getHeaders();
        $result = [];

        foreach ($headers as $name => $values) {
            $name = strtolower($name);

            if (! $this->isSignedHeader($name)) {
                $result[] = $name;
            }
        }

        sort($result);

        return $result;
    }

    /**
     * @return string[]
     */
    public function buildSignedHeaders(RequestInterface $request): array
    {
        $headers = $request->getHeaders();
        $result = [];

        foreach ($headers as $name => $values) {
            $name = strtolower($name);

            if ($this->isSignedHeader($name)) {
                $result[] = $name;
            }
        }

        sort($result);

        return $result;
    }

    public function buildHashedPayload(RequestInterface $request): string
    {
        if (isset($this->payloadHasher)) {
            return call_user_func($this->payloadHasher, $request);
        }

        return hash('sha256', (string) $request->getBody());
    }

    /**
     * @param  \Closure(\Psr\Http\Message\RequestInterface): string  $callback
     */
    public function hashPayloadUsing(\Closure $callback): void
    {
        $this->payloadHasher = $callback;
    }

    public function buildScope(\DateTimeInterface $datetime, string $region): string
    {
        return sprintf('%s/%s/%s/aliyun_v4_request',
            $datetime->format('Ymd'), $region, $this->product
        );
    }

    public function isSignedHeader(string $header): bool
    {
        $header = strtolower($header);

        if (isset($this->signedHeaderMap[$header])) {
            return true;
        }

        foreach ($this->signedHeaderMasks as $mask) {
            if (Str::is($mask, $header)) {
                return true;
            }

            if ($header === $mask) {
                return true;
            }
        }

        return false;
    }

    /**
     * @param  string[]  $headers
     */
    public function signHeaders(array $headers): void
    {
        foreach ($headers as $name) {
            $name = strtolower($name);

            if (str_contains($name, '*')) {
                $this->signedHeaderMasks[] = $name;
            } else {
                $this->signedHeaderMap[$name] = true;
            }
        }

    }

    public function onlyIncludeSignedHeadersInCanonical(bool $only = true): void
    {
        $this->onlyIncludeSignedHeadersInCanonical = $only;
    }

    public function includeAdditionalHeaders(bool $include = true): void
    {
        $this->includeAdditionalHeaders = $include;
    }

    public function buildSignature(string $scope, string $stringToSign, string $secret): string
    {
        return bin2hex(array_reduce(
            [...explode('/', $scope), $stringToSign],
            fn (string $key, string $data): string => hash_hmac('sha256', $data, $key, binary: true),
            'aliyun_v4'.$secret
        ));
    }
}
