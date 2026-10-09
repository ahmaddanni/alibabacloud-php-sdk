<?php

declare(strict_types=1);

namespace Dew\Acs\Ots;

use Dew\Acs\ApiDocsResolver;
use Dew\Acs\OpenApi\ApiDocs;

trait ResolvesOtsEndpoint
{
    /**
     * @var string
     */
    public const DEFAULT_VERSION = '2016-06-20';

    #[\Override]
    protected function resolveApiDocs(): ApiDocs
    {
        $version = $this->config['version'] ?? self::DEFAULT_VERSION;

        if (! is_string($version)) {
            throw new \InvalidArgumentException('The version should be a string.');
        }

        return ApiDocs::make(
            ApiDocsResolver::make()->getProductDefinition('Ots', $version)
        );
    }

    #[\Override]
    protected function resolveEndpoint(): string
    {
        return $this->config['endpoint'] ?? sprintf('ots.%s.aliyuncs.com', $this->region);
    }
}
