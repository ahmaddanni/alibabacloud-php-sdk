<?php

declare(strict_types=1);

namespace Dew\Acs;

use Dew\Acs\OpenApi\Api;
use Dew\Acs\OpenApi\ApiDocs;
use Dew\Acs\Plugins\SignRequest;
use Http\Client\Common\Plugin;
use Http\Client\Common\Plugin\HeaderSetPlugin;
use Psr\Http\Message\StreamFactoryInterface;

/**
 * @phpstan-import-type TConfig from \Dew\Acs\AcsClient
 */
final class DocsStack implements HandlerStack
{
    /**
     * @var \Http\Client\Common\Plugin[]
     */
    private array $prepends = [];

    /**
     * @var \Http\Client\Common\Plugin[]
     */
    private array $signings = [];

    /**
     * @var \Http\Client\Common\Plugin[]
     */
    private array $appends = [];

    /**
     * @param  TConfig  $config
     * @param  mixed[]  $arguments
     */
    public function __construct(
        private readonly ApiDocs $docs,
        private readonly Api $api,
        private readonly array $config,
        private readonly array $arguments,
        private readonly StreamFactoryInterface $streamFactory
    ) {
        //
    }

    public function prepend(Plugin $plugin): self
    {
        $this->prepends[] = $plugin;

        return $this;
    }

    public function signing(Plugin $plugin): self
    {
        $this->signings[] = $plugin;

        return $this;
    }

    public function append(Plugin $plugin): self
    {
        $this->appends[] = $plugin;

        return $this;
    }

    /**
     * Get the handlers.
     *
     * @return \Http\Client\Common\Plugin[]
     */
    #[\Override]
    public function get(): array
    {
        return [
            ...array_reverse($this->prepends),
            new Plugins\ConfigureUserAgent(),
            new Plugins\ConfigureAction($this->docs, $this->api, $this->streamFactory, $this->arguments),
            new HeaderSetPlugin(is_array($this->arguments['@headers'] ?? null) ? $this->arguments['@headers'] : []),
            ...$this->signings,
            SignRequest::withApiDocs($this->docs, $this->api, $this->config, $this->arguments),
            ...$this->appends,
        ];
    }
}
