<?php

declare(strict_types=1);

namespace Dew\Acs\Sls;

use Dew\Acs\AcsException;

final class SlsException extends AcsException
{
    use CustomErrorCode;
}
