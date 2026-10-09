<?php

declare(strict_types=1);

namespace Dew\Acs\Sls;

use Dew\Acs\Signatures\SignsRequest;
use Psr\Http\Message\RequestInterface;

final readonly class AKSignature implements SignsRequest
{
    public function __construct(
        private SignsRequest $signer = new V4Signature()
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
}
