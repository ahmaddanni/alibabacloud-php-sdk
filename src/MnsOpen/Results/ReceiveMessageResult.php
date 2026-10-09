<?php

declare(strict_types=1);

namespace Dew\Acs\MnsOpen\Results;

use Dew\Acs\MnsOpen\Models\ReceiveMessage;

final class ReceiveMessageResult extends MnsResult
{
    public function message(): ReceiveMessage
    {
        return ReceiveMessage::make($this->get('Message'));
    }
}
