<?php

declare(strict_types=1);

namespace Dew\Acs\MnsOpen\Results;

use Dew\Acs\MnsOpen\Models\SendMessage;

final class BatchSendMessageResult extends MnsResult
{
    /**
     * @return \Dew\Acs\MnsOpen\Models\SendMessage[]
     */
    public function messages(): array
    {
        return $this->castInto('Messages.Message', SendMessage::class);
    }
}
