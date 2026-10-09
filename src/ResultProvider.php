<?php

declare(strict_types=1);

namespace Dew\Acs;

use Dew\Acs\OpenApi\Api;
use Dew\Acs\OpenApi\ApiDocs;
use Dew\Acs\OpenApi\RefFinder;
use Dew\Acs\OpenApi\Schema;
use Psr\Http\Message\ResponseInterface;

final readonly class ResultProvider
{
    private RefFinder $refFinder;

    /**
     * @param  class-string<\Dew\Acs\AcsException>  $exceptionClass
     */
    public function __construct(
        private ApiDocs $docs,
        private string $exceptionClass = AcsException::class
    ) {
        $this->refFinder = new RefFinder($this->docs);
    }

    /**
     * @return \Dew\Acs\Result<mixed[]>
     * @throws \Dew\Acs\AcsException
     */
    public function make(ResponseInterface $response, ?Api $api = null): Result
    {
        $result = (new Result($this->decode($response, $api)))
            ->setResponse($response);

        $response = new Response($response);

        if ($response->isError()) {
            throw $this->exceptionClass::makeFromResult($result);
        }

        return $result;
    }

    /**
     * @return mixed[]
     */
    private function decode(ResponseInterface $response, ?Api $api = null): array
    {
        $contentType = strtolower($response->getHeaderLine('Content-Type'));

        return match (true) {
            str_contains($contentType, 'json') => $this->makeJsonResult($response),
            str_contains($contentType, 'xml') => $this->makeXmlResult($response, $api),
            default => [],
        };
    }

    /**
     * @return mixed[]
     */
    private function makeJsonResult(ResponseInterface $response): array
    {
        $encoder = new JsonEncoder();

        return $encoder->decode((string) $response->getBody());
    }

    /**
     * @return mixed[]
     */
    private function makeXmlResult(ResponseInterface $response, ?Api $api = null): array
    {
        $encoder = new XmlEncoder();
        $decoded = $encoder->decode((string) $response->getBody());

        $statusCode = (string) $response->getStatusCode();

        if (! $api instanceof Api || ! isset($api->responses[$statusCode])) {
            return $decoded;
        }

        $schema = $api->responses[$statusCode]->schema;

        if (! $schema instanceof Schema) {
            return $decoded;
        }

        $formatter = new XmlFormatter();
        $formatter->findSchemaUsing(function (string $path): ?Schema {
            $schema = $this->refFinder->find($path);

            return is_array($schema) ? Schema::make($schema) : null;
        });

        return $formatter->format($decoded, $schema);
    }
}
