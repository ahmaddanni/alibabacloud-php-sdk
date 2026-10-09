<?php

declare(strict_types=1);

namespace Dew\Acs\Tablestore;

use Google\Protobuf\Internal\Message;

interface InteractsWithTablestore
{
    /**
     * @throws \Dew\Acs\Tablestore\InstanceException
     */
    public function send(string $uri, Message $message): string;
}
