<?php

declare(strict_types=1);

namespace Dew\Acs\MnsOpen;

use Dew\Acs\AcsException;
use Dew\Acs\MnsOpen\Results\MnsResult;
use Dew\Acs\Result;

/**
 * @phpstan-type TErrorsError array{ErrorCode: string, ErrorMessage: string}
 */
final class QueueException extends AcsException
{
    /**
     * The message field in the error response.
     */
    public const ERROR_MESSAGE = 'Error.Message';

    /**
     * The code field in the error response.
     */
    public const ERROR_CODE = 'Error.Code';

    #[\Override]
    public static function makeFromResult(Result|array $result): static
    {
        $result = $result instanceof Result ? $result : new Result($result);

        if (! $result->has('Errors.Error')) {
            return parent::makeFromResult($result);
        }

        return static::makeFromMultipleErrors($result);
    }

    /**
     * Create an exception from multiple errors.
     *
     * @param  \Dew\Acs\Result<array<mixed>>  $result
     */
    private static function makeFromMultipleErrors(Result $result): static
    {
        /** @var TErrorsError[]|TErrorsError */
        $errors = $result->get('Errors.Error');

        if (! is_array($errors)) {
            return parent::makeFromResult($result);
        }

        /** @var TErrorsError[] */
        $errors = array_is_list($errors) ? $errors : [$errors];

        $total = count($errors);

        if ($total === 0) {
            return parent::makeFromResult($result);
        }

        ['ErrorMessage' => $message, 'ErrorCode' => $code] = $errors[0];

        $message = match ($total) {
            1 => $message,
            2 => $message.' (and 1 other)',
            default => $message.sprintf(' (and %d others)', $total - 1),
        };

        return (new static($message, $code))->setResult($result);
    }

    /**
     * Get the underlying result.
     *
     * @return \Dew\Acs\MnsOpen\Results\MnsResult|null
     */
    #[\Override]
    public function getResult()
    {
        return $this->result ? new MnsResult($this->result) : null;
    }
}
