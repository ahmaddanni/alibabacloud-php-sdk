<?php

declare(strict_types=1);

namespace Dew\Acs\Tablestore;

use Dew\Acs\Signatures\SignsRequest;
use Http\Client\Common\Plugin;
use Http\Promise\Promise;
use Psr\Http\Message\RequestInterface;

/**
 * @phpstan-import-type TNormalizedConfig from \Dew\Acs\Tablestore\TablestoreInstance
 */
final class SignRequest implements Plugin
{
    /**
     * @param  TNormalizedConfig  $config
     */
    public function __construct(
        private array $config,
        private readonly SignsRequest $signer = new V4Signature()
    ) {
        //
    }

    /**
     * @param  callable(\Psr\Http\Message\RequestInterface): \Http\Promise\Promise  $next
     * @param  callable(\Psr\Http\Message\RequestInterface): \Http\Promise\Promise  $first
     */
    #[\Override]
    public function handleRequest(RequestInterface $request, callable $next, callable $first): Promise
    {
        $now = new \DateTimeImmutable('now', new \DateTimeZone('UTC'));

        $request = $request
            ->withHeader('x-ots-accesskeyid', $this->config['credentials']['key'])
            ->withHeader('x-ots-apiversion', '2015-12-31')
            ->withHeader('x-ots-contentmd5', base64_encode(
                hash('md5', $request->getBody()->getContents(), binary: true)
            ))
            ->withHeader('x-ots-date', $now->format('Y-m-d\\TH:i:s.v\\Z'))
            ->withHeader('x-ots-instancename', $this->config['instance']);

        if (isset($this->config['credentials']['token'])) {
            $request = $request
                ->withHeader('x-ots-ststoken', $this->config['credentials']['token']);
        }

        return $next($this->signer->signRequest($request, $this->config));
    }
}
