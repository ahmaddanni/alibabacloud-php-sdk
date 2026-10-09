<?php

declare(strict_types=1);

namespace Dew\Acs\MnsOpen\Results;

use Dew\Acs\MnsOpen\Models\ChangeVisibility;

final class ChangeMessageVisibilityResult extends MnsResult
{
    public function changeVisibility(): ChangeVisibility
    {
        return ChangeVisibility::make($this->get('ChangeVisibility'));
    }
}
