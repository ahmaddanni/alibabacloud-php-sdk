<?php

namespace Dew\Acs\Oss;

use Dew\Acs\Signatures\NeedsArguments;
use Dew\Acs\Signatures\SignsRequest;
use Dew\Acs\Signatures\V4Signature as BaseV4Signature;
use Psr\Http\Message\RequestInterface;

/**
 * @mixin \Dew\Acs\Signatures\V4Signature
 */
final class V4Signature implements SignsRequest, NeedsArguments
{
    /**
     * @var string
     */
    public const VERSION = 'OSS4-HMAC-SHA256';

    /**
     * @var array<string, mixed>
     */
    private array $arguments;

    public function __construct(
        private readonly BaseV4Signature $signer = new BaseV4Signature('OSS4-HMAC-SHA256', 'oss')
    ) {
        $this->signer->includeAdditionalHeaders();

        $this->signer->signHeaders([
            'Content-MD5',
            'Content-Type',
            'X-Oss-*',
        ]);

        $this->signer->resourcePathUsing(function (RequestInterface $request): string {
            $bucket = $this->arguments['bucket'] ?? null;
            $object = $this->arguments['key'] ?? null;

            if (is_string($bucket) && $bucket !== '' && is_string($object) && $object !== '') {
                return "/$bucket/$object";
            }

            if (is_string($bucket) && $bucket !== '') {
                return "/$bucket/";
            }

            return '/';
        });

        $this->signer->hashPayloadUsing(
            fn (RequestInterface $request): string => 'UNSIGNED-PAYLOAD'
        );
    }

    /**
     * @param  array<string, mixed>  $config
     */
    #[\Override]
    public function signRequest(RequestInterface $request, array $config): RequestInterface
    {
        $datetime = new \DateTimeImmutable('now', new \DateTimeZone('UTC'));

        $request = $request
            ->withHeader('X-Oss-Date', $datetime->format('Ymd\THis\Z'))
            ->withHeader('X-Oss-Content-Sha256', 'UNSIGNED-PAYLOAD');

        return $this->signer->signRequest($request, $config);
    }

    /**
     * @param  array<string, mixed>  $arguments
     */
    #[\Override]
    public function setArguments(array $arguments): void
    {
        $this->arguments = $arguments;
    }

    /**
     * @param  array<int, mixed>  $arguments
     */
    public function __call(string $method, array $arguments): mixed
    {
        return $this->signer->$method(...$arguments);
    }
}
