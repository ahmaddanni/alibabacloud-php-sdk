<?php

declare(strict_types=1);

namespace Dew\Acs\Signatures;

use Psr\Http\Message\RequestInterface;

interface SignsRequest
{
    /**
     * @param  array<string, mixed>  $config
     */
    public function signRequest(RequestInterface $request, array $config): RequestInterface;
}
