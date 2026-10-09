<?php

declare(strict_types=1);

namespace Dew\Acs\Sls;

use Dew\Acs\ConfigChecker;
use Dew\Acs\Signatures\SignsRequest;
use GuzzleHttp\Psr7\Query;
use Psr\Http\Message\RequestInterface;

/**
 * @see https://www.alibabacloud.com/help/en/sls/developer-reference/request-signatures
 */
final readonly class V1Signature implements SignsRequest
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

        $datetime = new \DateTimeImmutable('now', new \DateTimeZone('UTC'));

        $body = (string) $request->getBody();

        $request = $request
            ->withHeader('x-log-signaturemethod', 'hmac-sha1')
            ->withHeader('x-log-apiversion', '0.6.0')
            ->withHeader('x-log-bodyrawsize', (string) strlen($body))
            ->withHeader('Date', $datetime->format(\DateTimeImmutable::RFC7231));

        $body = (string) $request->getBody();

        if ($body !== '') {
            $request = $request->withHeader('Content-MD5', strtoupper(hash('md5', $body)));
        }

        return $request->withHeader('Authorization', sprintf('LOG %s:%s',
            $config['credentials']['key'], $this->getSignature($request, $config['credentials']['secret'])
        ));
    }

    public function getSignature(RequestInterface $request, string $key): string
    {
        $data = $this->getMessage($request);

        return base64_encode(
            hash_hmac('sha1', $data, $key, binary: true)
        );
    }

    public function getMessage(RequestInterface $request): string
    {
        return implode("\n", [
            strtoupper($request->getMethod()),
            $request->getHeaderLine('Content-MD5'),
            $request->getHeaderLine('Content-Type'),
            $request->getHeaderLine('Date'),
            $this->getAcsHeaders($request),
            $this->getResourcePath($request),
        ]);
    }

    public function getAcsHeaders(RequestInterface $request): string
    {
        $headers = [];

        foreach ($request->getHeaders() as $name => $values) {
            if ($this->isAcsHeader($name)) {
                $headers[$name] = implode(',', $values);
            }
        }

        ksort($headers);

        foreach ($headers as $name => $value) {
            $headers[$name] = $name.':'.$value;
        }

        return implode("\n", $headers);
    }

    public function isAcsHeader(string $header): bool
    {
        return str_starts_with($header, 'x-acs-')
            || str_starts_with($header, 'x-log-');
    }

    public function getResourcePath(RequestInterface $request): string
    {
        $query = $this->getSortedQuery($request);
        $path = $request->getUri()->getPath();

        if ($query === '') {
            return $path;
        }

        return $path.'?'.$query;
    }

    public function getSortedQuery(RequestInterface $request): string
    {
        $query = Query::parse($request->getUri()->getQuery());
        ksort($query);

        $result = '';
        $delimiter = '';

        foreach ($query as $key => $value) {
            $value = is_array($value) ? implode(',', $value) : $value;
            $result .= $delimiter.$key.'='.$value;
            $delimiter = '&';
        }

        return $result;
    }
}
