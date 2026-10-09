<?php

declare(strict_types=1);

namespace Dew\Acs\Oss;

use Dew\Acs\AcsException;

final class OssException extends AcsException
{
    use CustomErrorCode;
}
