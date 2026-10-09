<?php

declare(strict_types=1);

namespace Dew\Acs\Sls;

use Dew\Acs\Signatures\SignsRequest;
use Dew\Acs\Signatures\V4Signature as BaseV4Signature;
use Psr\Http\Message\RequestInterface;

/**
 * @mixin \Dew\Acs\Signatures\V4Signature
 */
final readonly class V4Signature implements SignsRequest
{
    public function __construct(
        private BaseV4Signature $signer = new BaseV4Signature('SLS4-HMAC-SHA256', 'sls')
    ) {
        $this->signer->signHeaders([
            'Content-Type',
            'Host',
            'X-Acs-*',
            'X-Log-*',
        ]);

        $this->signer->onlyIncludeSignedHeadersInCanonical();
    }

    /**
     * @param  array<string, mixed>  $config
     */
    #[\Override]
    public function signRequest(RequestInterface $request, array $config): RequestInterface
    {
        $datetime = new \DateTimeImmutable('now', new \DateTimeZone('UTC'));
        $body = (string) $request->getBody();

        $request = $request
            ->withHeader('X-Log-Date', $datetime->format('Ymd\THis\Z'))
            ->withHeader('X-Log-Content-Sha256', hash('sha256', $body))
            ->withHeader('X-Log-Apiversion', '0.6.0');

        if (! $request->hasHeader('X-Log-Bodyrawsize')) {
            $request = $request->withHeader('X-Log-Bodyrawsize', (string) strlen($body));
        }

        return $this->signer->signRequest($request, $config);
    }

    /**
     * @param  array<int, mixed>  $arguments
     */
    public function __call(string $method, array $arguments): mixed
    {
        return $this->signer->$method(...$arguments);
    }
}
