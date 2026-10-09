<?php

declare(strict_types=1);

namespace Dew\Acs\Oss;

trait CustomErrorCode
{
    /**
     * The message field in the error response.
     */
    #[\Override]
    public static function errorMessage(): string
    {
        return 'Error.Message';
    }

    /**
     * The code field in the error response.
     */
    #[\Override]
    public static function errorCode(): string
    {
        return 'Error.Code';
    }
}
