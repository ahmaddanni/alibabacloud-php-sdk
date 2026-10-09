<?php

declare(strict_types=1);

namespace Dew\Acs\Plugins;

use Dew\Acs\OpenApi\Api;
use Dew\Acs\OpenApi\ApiDocs;
use Dew\Acs\Signatures\NeedsApiContext;
use Dew\Acs\Signatures\NeedsArguments;
use Dew\Acs\Signatures\NullSignature;
use Dew\Acs\Signatures\SignsRequest;
use Http\Client\Common\Plugin;
use Http\Promise\Promise;
use Psr\Http\Message\RequestInterface;

final readonly class SignRequest implements Plugin
{
    /**
     * @param  array<string, mixed>  $config
     */
    private function __construct(
        private SignsRequest $signer,
        private array $config
    ) {
        //
    }

    /**
     * @param  array<string, mixed>  $config
     * @param  array<string, mixed>  $arguments
     */
    public static function withApiDocs(ApiDocs $docs, Api $api, array $config, array $arguments): static
    {
        $auth = array_key_first($api->security[0] ?? []);

        $signer = is_string($auth)
            ? static::resolveSigner($docs->getNamespace(), $auth)
            : new NullSignature();

        if ($signer instanceof NeedsApiContext) {
            $signer->setApiContext($docs, $api);
        }

        if ($signer instanceof NeedsArguments) {
            $signer->setArguments($arguments);
        }

        return new static($signer, $config);
    }

    /**
     * @param  array<string, mixed>  $config
     */
    public static function withSignature(SignsRequest $signer, $config): static
    {
        return new static($signer, $config);
    }

    /**
     * @param  callable(\Psr\Http\Message\RequestInterface): \Http\Promise\Promise  $next
     * @param  callable(\Psr\Http\Message\RequestInterface): \Http\Promise\Promise  $first
     */
    #[\Override]
    public function handleRequest(RequestInterface $request, callable $next, callable $first): Promise
    {
        $request = $this->signer->signRequest($request, $this->config);

        return $next($request);
    }

    private static function resolveSigner(string $namespace, string $auth): SignsRequest
    {
        /** @var class-string<\Dew\Acs\Signatures\SignsRequest>[] */
        $candidates = [
            "\\Dew\\Acs\\{$namespace}\\{$auth}Signature",
            "\\Dew\\Acs\\Signatures\\{$auth}Signature",
        ];

        foreach ($candidates as $class) {
            if (class_exists($class)) {
                return new $class();
            }
        }

        throw new \InvalidArgumentException("Unsupported signature $auth.");
    }
}
