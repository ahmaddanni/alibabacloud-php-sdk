<?php

declare(strict_types=1);

namespace Dew\Acs\Plugins;

use Dew\Acs\AcsClient;
use Http\Client\Common\Plugin;
use Http\Promise\Promise;
use Psr\Http\Message\RequestInterface;

final class ConfigureUserAgent implements Plugin
{
    /**
     * @param  callable(\Psr\Http\Message\RequestInterface): \Http\Promise\Promise  $next
     * @param  callable(\Psr\Http\Message\RequestInterface): \Http\Promise\Promise  $first
     */
    #[\Override]
    public function handleRequest(RequestInterface $request, callable $next, callable $first): Promise
    {
        $existing = $request->getHeaderLine('User-Agent');

        $userAgent = sprintf('DewAcsPHP/%s (%s; PHP %s) %s',
            AcsClient::MAJOR_VERSION, PHP_OS, PHP_VERSION, $existing
        );

        return $next($request->withHeader('User-Agent', $userAgent));
    }
}
