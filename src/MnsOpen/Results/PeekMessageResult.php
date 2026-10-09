<?php

declare(strict_types=1);

namespace Dew\Acs\MnsOpen\Results;

use Dew\Acs\MnsOpen\Models\PeekMessage;

final class PeekMessageResult extends MnsResult
{
    public function message(): PeekMessage
    {
        return PeekMessage::make($this->get('Message'));
    }
}
