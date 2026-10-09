<?php

declare(strict_types=1);

namespace Dew\Acs;

use Psr\Http\Message\ResponseInterface;

class AcsException extends \Exception
{
    /**
     * The message field in the error response.
     */
    public const ERROR_MESSAGE = 'Message';

    /**
     * The code field in the error response.
     */
    public const ERROR_CODE = 'Code';

    /**
     * @var int|string
     */
    protected $code;

    /**
     * @var \Dew\Acs\Result<array<mixed>>|null
     */
    protected ?Result $result = null;

    final public function __construct(string $message, int|string $code)
    {
        $this->message = $message;
        $this->code = $code;
    }

    /**
     * Create an exception from the given result.
     *
     * @param  \Dew\Acs\Result<array<mixed>>|array<mixed>  $result
     */
    public static function makeFromResult(Result|array $result): static
    {
        $result = $result instanceof Result ? $result : new Result($result);

        /** @var string */
        $message = $result->get(static::errorMessage(), 'Could not communicate with Alibaba Cloud.');

        /** @var string|int */
        $code = $result->get(static::errorCode(), 0);

        return (new static($message, $code))->setResult($result);
    }

    /**
     * The message field in the error response.
     */
    public static function errorMessage(): string
    {
        return static::ERROR_MESSAGE;
    }

    /**
     * The code field in the error response.
     */
    public static function errorCode(): string
    {
        return static::ERROR_CODE;
    }

    /**
     * @param  \Dew\Acs\Result<array<mixed>>  $result
     */
    public function setResult(Result $result): static
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Get the underlying result.
     *
     * @return \Dew\Acs\Result<array<mixed>>|null
     */
    public function getResult()
    {
        return $this->result;
    }

    public function getResponse(): ?ResponseInterface
    {
        return $this->result?->getResponse();
    }
}
