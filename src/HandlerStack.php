<?php

declare(strict_types=1);

namespace Dew\Acs;

interface HandlerStack
{
    /**
     * Get the handlers.
     *
     * @return \Http\Client\Common\Plugin[]
     */
    public function get(): array;
}
