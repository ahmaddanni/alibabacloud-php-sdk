<?php

declare(strict_types=1);

namespace Dew\Acs\Oss;

use Http\Client\Common\Plugin;
use Http\Promise\Promise;
use Psr\Http\Message\RequestInterface;

final class EnsureContentLengthExists implements Plugin
{
    /**
     * @param  callable(\Psr\Http\Message\RequestInterface): \Http\Promise\Promise  $next
     * @param  callable(\Psr\Http\Message\RequestInterface): \Http\Promise\Promise  $first
     */
    #[\Override]
    public function handleRequest(RequestInterface $request, callable $next, callable $first): Promise
    {
        if (! $request->hasHeader('Content-Length')
            && ($request->getBody()->getSize() ?? 0) === 0) {
            $request = $request->withHeader('Content-Length', '0');
        }

        return $next($request);
    }
}
