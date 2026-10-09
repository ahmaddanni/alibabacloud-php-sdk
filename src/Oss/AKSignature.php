<?php

namespace Dew\Acs\Oss;

use Dew\Acs\Signatures\NeedsArguments;
use Dew\Acs\Signatures\SignsRequest;
use Psr\Http\Message\RequestInterface;

final readonly class AKSignature implements SignsRequest, NeedsArguments
{
    public function __construct(
        private SignsRequest&NeedsArguments $signer = new V4Signature(),
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

    /**
     * @param  array<string, mixed>  $arguments
     */
    #[\Override]
    public function setArguments(array $arguments): void
    {
        $this->signer->setArguments($arguments);
    }
}
