<?php

declare(strict_types=1);

namespace Dew\Acs\MnsOpen\Results;

use Dew\Acs\MnsOpen\Models\PeekMessage;

final class BatchPeekMessageResult extends MnsResult
{
    /**
     * @return \Dew\Acs\MnsOpen\Models\PeekMessage[]
     */
    public function messages(): array
    {
        return $this->castInto('Messages.Message', PeekMessage::class);
    }
}
