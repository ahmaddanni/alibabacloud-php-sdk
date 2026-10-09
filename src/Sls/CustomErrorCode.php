<?php

declare(strict_types=1);

namespace Dew\Acs\Sls;

trait CustomErrorCode
{
    /**
     * The message field in the error response.
     */
    #[\Override]
    public static function errorMessage(): string
    {
        return 'errorMessage';
    }

    /**
     * The code field in the error response.
     */
    #[\Override]
    public static function errorCode(): string
    {
        return 'errorCode';
    }
}
