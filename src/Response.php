<?php

declare(strict_types=1);

namespace Dew\Acs;

use Psr\Http\Message\ResponseInterface;

/**
 * @internal
 */
final readonly class Response
{
    public function __construct(
        private ResponseInterface $response
    ) {
        //
    }

    public function status(): int
    {
        return $this->response->getStatusCode();
    }

    public function body(): string
    {
        return (string) $this->response->getBody();
    }

    public function isInformational(): bool
    {
        return $this->status() >= 100 && $this->status() < 200;
    }

    public function isSuccessful(): bool
    {
        return $this->status() >= 200 && $this->status() < 300;
    }

    public function isRedirection(): bool
    {
        return $this->status() >= 300 && $this->status() < 400;
    }

    public function isClientError(): bool
    {
        return $this->status() >= 400 && $this->status() < 500;
    }

    public function isServerError(): bool
    {
        return $this->status() >= 500 && $this->status() < 600;
    }

    public function isError(): bool
    {
        return $this->isClientError() || $this->isServerError();
    }

    public function getPsrResponse(): ResponseInterface
    {
        return $this->response;
    }
}
