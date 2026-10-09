<?php

declare(strict_types=1);

namespace Dew\Acs\Tablestore;

use Dew\Acs\Tablestore\Messages\Error;
use Exception;
use Psr\Http\Message\ResponseInterface;

final class InstanceException extends \Exception
{
    /**
     * The error code
     *
     * @var int|string
     */
    protected $code;

    /**
     * The error data in Protobuf message.
     */
    public ?Error $error = null;

    /**
     * The HTTP response.
     */
    public ?ResponseInterface $response = null;

    /**
     * Create a new exception instance.
     */
    public function __construct(string $message, string $code)
    {
        $this->message = $message;
        $this->code = $code;
    }

    /**
     * Set the error in Protobuf message.
     */
    public function setError(Error $error): self
    {
        $this->error = $error;

        return $this;
    }

    /**
     * Get the error in Protobuf message.
     */
    public function getError(): ?Error
    {
        return $this->error;
    }

    /**
     * Set the HTTP response.
     */
    public function setResponse(ResponseInterface $response): self
    {
        $this->response = $response;

        return $this;
    }

    /**
     * Get the HTTP response.
     */
    public function getResponse(): ?ResponseInterface
    {
        return $this->response;
    }
}
