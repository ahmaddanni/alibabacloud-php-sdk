<?php

declare(strict_types=1);

namespace Dew\Acs\MnsOpen\Results;

use Dew\Acs\MnsOpen\Models\ReceiveMessage;

final class BatchReceiveMessageResult extends MnsResult
{
    /**
     * @return \Dew\Acs\MnsOpen\Models\ReceiveMessage[]
     */
    public function messages(): array
    {
        return $this->castInto('Messages.Message', ReceiveMessage::class);
    }
}
