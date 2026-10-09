<?php

declare(strict_types=1);

namespace Dew\Acs\OpenApi;

use GuzzleHttp\Psr7\Query;

final readonly class RPCStyleBuilder implements ApiDataBuilder
{
    private SchemaReader $schemaReader;

    private string $scheme;

    /**
     * The parameter style encoder.
     */
    private StyleEncoder $encoder;

    public function __construct(
        private ApiDocs $docs,
        private Api $api
    ) {
        $this->schemaReader = new SchemaReader();
        $this->scheme = in_array('https', $this->api->schemes, strict: true)
            ? 'https'
            : $this->api->schemes[0];

        $this->encoder = new StyleEncoder();
    }

    /**
     * @param  mixed[]  $arguments
     */
    #[\Override]
    public function build(array $arguments): ApiData
    {
        $method = strtoupper($this->api->methods[0]);
        $query = [];
        $headers = [];
        $formData = [];
        $body = '';

        foreach ($this->api->parameters as $parameter) {
            $value = $arguments[$parameter->name] ?? null;

            if ($parameter->schema->required === true && $value === null) {
                throw new \InvalidArgumentException("The {$parameter->name} is required.");
            }

            if ($value === null) {
                continue;
            }

            switch ($parameter->in) {
                case ParameterLocation::QUERY:
                    $value = $this->getParameterValue($parameter, $value);
                    $query = [
                        ...$query,
                        ...is_array($value)
                            ? $value
                            : [$parameter->name => $this->encodeQueryParameter($value)],
                    ];
                    break;
                case ParameterLocation::FORM:
                    $formData[$parameter->name] = $this->getParameterValue($parameter, $value);
                    break;
                default:
                    throw new \RuntimeException("Unsupported parameter location {$parameter->in->value}.");
            }
        }

        if ($formData !== []) {
            $method = 'POST';
            $headers['Content-Type'] = 'application/x-www-form-urlencoded';
            $body = Query::build($formData, PHP_QUERY_RFC1738);
        }

        return new ApiData(
            host: null,
            scheme: $this->scheme,
            method: $method,
            path: '/',
            headers: $headers,
            query: Query::build($query),
            body: $body
        );
    }

    private function getParameterValue(Parameter $parameter, mixed $value): mixed
    {
        $value = $this->schemaReader
            ->getProperty($parameter->schema, $value, $parameter->name);

        if (! is_array($value)) {
            return $value;
        }

        return match ($parameter->style) {
            'simple' => $this->encoder->encodeSimple($value),
            'repeatList', 'flat' => $this->encoder->encodeRepeatList($value, $parameter->name),
            'json' => $this->encoder->encodeJson($value),
            default => $value,
        };
    }

    private function encodeQueryParameter(mixed $value): string
    {
        if (is_bool($value)) {
            return $value ? 'true' : 'false';
        }

        if (is_scalar($value) || $value instanceof \Stringable) {
            return (string) $value;
        }

        throw new \InvalidArgumentException('Could not encode the query.');
    }
}
