<?php

declare(strict_types=1);

namespace Dew\Acs\Oss;

use Dew\Acs\ConfigChecker;
use Dew\Acs\Signatures\NeedsArguments;
use Dew\Acs\Signatures\SignsRequest;
use GuzzleHttp\Psr7\Query;
use Psr\Http\Message\RequestInterface;

/**
 * @phpstan-type TArguments array{
 *   bucket: string,
 *   key: string,
 *   expires: int
 * }
 * @mixin \Dew\Acs\Oss\V4Signature
 *
 * @see https://www.alibabacloud.com/help/en/oss/developer-reference/add-signatures-to-urls
 */
final class V4SignatureOnUrl implements SignsRequest, NeedsArguments
{
    private readonly ConfigChecker $configChecker;

    /**
     * @var array<string, mixed>
     */
    private array $arguments;

    public function __construct(
        private readonly V4Signature $signer = new V4Signature()
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

        $now = new \DateTimeImmutable('now', new \DateTimeZone('UTC'));

        $query = Query::parse($request->getUri()->getQuery());
        $query['x-oss-signature-version'] = $this->signer::VERSION;
        $query['x-oss-credential'] = sprintf('%s/%s',
            $config['credentials']['key'],
            $scope = $this->signer->buildScope($now, $config['region'])
        );
        $query['x-oss-date'] = $now->format('Ymd\THis\Z');
        $query['x-oss-expires'] = $this->arguments['expires'];
        $query['x-oss-additional-headers'] = implode(';', $this->signer->buildAdditionalHeaders($request));

        if (isset($config['credentials']['token'])) {
            $query['x-oss-security-token'] = $config['credentials']['token'];
        }

        $request = $request->withUri(
            $request->getUri()->withQuery(Query::build($query))
        );

        $stringToSign = $this->signer->buildStringToSign(
            $this->signer->buildCanonicalRequest($request), $now, $scope
        );

        $query['x-oss-signature'] = $this->signer->buildSignature(
            $scope, $stringToSign, $config['credentials']['secret']
        );

        return $request = $request->withUri(
            $request->getUri()->withQuery(Query::build($query))
        );
    }

    /**
     * @param  TArguments  $arguments
     */
    #[\Override]
    public function setArguments(array $arguments): void
    {
        $this->arguments = $arguments;
        $this->signer->setArguments($arguments);
    }

    /**
     * @param  array<int, mixed>  $arguments
     */
    public function __call(string $method, array $arguments): mixed
    {
        return $this->signer->$method(...$arguments);
    }
}
