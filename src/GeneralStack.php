<?php

declare(strict_types=1);

namespace Dew\Acs;

use Dew\Acs\Plugins\ConfigureUserAgent;
use Http\Client\Common\Plugin;

final class GeneralStack implements HandlerStack
{
    /**
     * @var \Http\Client\Common\Plugin[]
     */
    private array $appends = [];

    public function append(Plugin $plugin): self
    {
        $this->appends[] = $plugin;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    #[\Override]
    public function get(): array
    {
        return [
            new ConfigureUserAgent(),
            ...$this->appends,
        ];
    }
}
