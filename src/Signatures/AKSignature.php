<?php

declare(strict_types=1);

namespace Dew\Acs\Signatures;

use Dew\Acs\OpenApi\Api;
use Dew\Acs\OpenApi\ApiDocs;
use Psr\Http\Message\RequestInterface;

final readonly class AKSignature implements SignsRequest, NeedsApiContext
{
    public function __construct(
        private SignsRequest&NeedsApiContext $signer = new V3Signature()
    ) {
        //
    }

    /**
     * @param  array<string, mixed>  $config
     */
    #[\Override]
    public function signRequest(RequestInterface $request, array $config): RequestInterface
    {
        return $this->signer->signRequest($request, $config);
    }

    #[\Override]
    public function setApiContext(ApiDocs $docs, Api $api): void
    {
        $this->signer->setApiContext($docs, $api);
    }
}
