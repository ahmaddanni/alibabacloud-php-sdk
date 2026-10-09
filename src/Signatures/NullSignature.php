<?php

declare(strict_types=1);

namespace Dew\Acs\Signatures;

use Psr\Http\Message\RequestInterface;

final class NullSignature implements SignsRequest
{
    /**
     * @param  array<string, mixed>  $config
     */
    #[\Override]
    public function signRequest(RequestInterface $request, array $config): RequestInterface
    {
        return $request;
    }
}
