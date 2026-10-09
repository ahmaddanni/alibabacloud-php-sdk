<?php

declare(strict_types=1);

namespace Dew\Acs\MnsOpen\Results;

use Dew\Acs\MnsOpen\Models\SendMessage;

final class SendMessageResult extends MnsResult
{
    public function message(): SendMessage
    {
        return SendMessage::make($this->get('Message'));
    }
}
