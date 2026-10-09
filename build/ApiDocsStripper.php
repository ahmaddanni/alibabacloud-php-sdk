<?php

declare(strict_types=1);

use Dew\Acs\Arr;

final class ApiDocsStripper
{
    /**
     * @param  mixed[]  $docs
     * @return mixed[]
     */
    public static function strip(array $docs): array
    {
        $result = Arr::only($docs, [
            'version',
            'info',
            'components',
            'apis',
            'endpoints',
        ]);

        if (isset($result['apis']) && is_array($result['apis'])) {
            $result['apis'] = static::stripApis($result['apis']);
        }

        if (isset($result['components']['schemas']) && is_array($result['components']['schemas'])) {
            foreach ($result['components']['schemas'] as $name => $schema) {
                $result['components']['schemas'][$name] = static::stripSchema($result['components']['schemas'][$name]);
            }
        }

        return $result;
    }

    /**
     * @param  mixed[][]  $apis
     * @return mixed[][]
     */
    public static function stripApis(array $apis): array
    {
        $result = [];

        foreach ($apis as $name => $api) {
            $result[$name] = Arr::only($api, [
                'path',
                'methods',
                'schemes',
                'security',
                'consumes',
                'produces',
                'deprecated',
                'parameters',
            ]);

            if (isset($result[$name]['parameters']) &&
                is_array($result[$name]['parameters'])) {
                $result[$name]['parameters'] = static::stripParameters($result[$name]['parameters']);
            }

            if (isset($api['responses']) &&
                is_array($api['responses']) &&
                static::shouldIncludeResponse($result[$name])) {
                $result[$name]['responses'] = static::stripResponses($api['responses']);
            }
        }

        return $result;
    }

    /**
     * @param  array<int, mixed[]>  $parameters
     * @return array<int, mixed[]>
     */
    public static function stripParameters(array $parameters): array
    {
        $result = [];

        foreach ($parameters as $parameter) {
            $stripped = Arr::only($parameter, [
                'name',
                'in',
                'style',
                'schema',
            ]);

            if (isset($stripped['schema']) && is_array($stripped['schema'])) {
                $stripped['schema'] = static::stripSchema($stripped['schema']);
            }

            $result[] = $stripped;
        }

        return $result;
    }

    /**
     * @param  mixed[][]  $responses
     * @return mixed[][]
     */
    public static function stripResponses(array $responses): array
    {
        $result = [];

        foreach ($responses as $status => $response) {
            $result[$status] = Arr::only($response, ['schema']);

            if (isset($result[$status]['schema'])) {
                $result[$status]['schema'] = static::stripSchema($result[$status]['schema']);
            }
        }

        return $result;
    }

    /**
     * @param  mixed[]  $schema
     * @return mixed[]
     */
    public static function stripSchema(array $schema): array
    {
        $result = Arr::only($schema, [
            '$ref',
            'type',
            'format',
            'deprecated',
            'required',
            'minimum',
            'exclusiveMinimum',
            'maximum',
            'exclusiveMaximum',
            'minLength',
            'maxLength',
            'enum',
            'pattern',
            'properties',
            'additionalProperties',
            'items',
            'minItems',
            'maxItems',
        ]);

        if (isset($result['properties']) && is_array($result['properties'])) {
            foreach ($result['properties'] as $name => $property) {
                // The property schema is expected to be an array. However, we
                // have encountered a malformed schema definition that is a
                // string. The check is to avoid these malformed schemas.
                if (! is_array($property)) {
                    continue;
                }

                $result['properties'][$name] = static::stripSchema($property);
            }
        }

        if (isset($result['additionalProperties'])) {
            $result['additionalProperties'] = static::stripSchema($result['additionalProperties']);
        }

        if (isset($result['items'])) {
            $result['items'] = static::stripSchema($result['items']);
        }

        return $result;
    }

    /**
     * @param  array<string, mixed>  $parameter
     */
    public static function shouldIncludeResponse(array $parameter): bool
    {
        // For now, response metadata is only used for XML responses, and
        // we rely on the schema to transform the XML object back into
        // the specific data structure, or we can safely discard it.
        if (isset($parameter['consumes']) && is_array($parameter['consumes'])) {
            return static::containsXml($parameter['consumes']);
        }

        return false;
    }

    /**
     * @param  string[]  $contentTypes
     */
    public static function containsXml(array $contentTypes): bool
    {
        foreach ($contentTypes as $type) {
            if (str_contains($type, 'xml')) {
                return true;
            }
        }

        return false;
    }
}
