<?php

declare(strict_types=1);

namespace Dew\Acs;

final class XmlEncoder implements DataEncoder
{
    /**
     * @param  mixed[]  $data
     */
    #[\Override]
    public function encode(array $data): string
    {
        if (count($data) > 1) {
            throw new \InvalidArgumentException(
                'The data should have an outermost element.'
            );
        }

        $rootElement = array_key_first($data);

        if ($rootElement === null) {
            throw new \InvalidArgumentException('The data is empty.');
        }

        if (is_int($rootElement)) {
            throw new \InvalidArgumentException('The outermost element should be a string.');
        }

        $dom = new \DOMDocument('1.0', 'UTF-8');

        if (is_scalar($data[$rootElement])) {
            $element = $dom->createElement($rootElement, $this->encodeValue($data[$rootElement]));
            $dom->append($element);
        } else {
            $element = $dom->createElement($rootElement);
            $this->encodeNode($element, $data[$rootElement]);
            $dom->append($element);
        }

        $xml = $dom->saveXML();

        if ($xml === false) {
            throw new \RuntimeException('Failed to encode XML.');
        }

        return $xml;
    }

    private function encodeNode(\DOMNode $node, mixed $data): void
    {
        if (is_scalar($data)) {
            $this->encodeTextNode($node, $data);
        } elseif (is_array($data)) {
            $this->encodeArray($node, $data);
        }
    }

    private function encodeTextNode(\DOMNode $node, int|float|string|bool $data): void
    {
        $document = $this->ownerDocument($node);
        $textNode = $document->createTextNode($this->encodeValue($data));
        $node->appendChild($textNode);
    }

    /**
     * @param  mixed[]  $data
     */
    private function encodeArray(\DOMNode $node, array $data): void
    {
        $document = $this->ownerDocument($node);

        foreach ($data as $key => $value) {
            $key = is_string($key) ? $key : 'item'.($key + 1);

            if (is_array($value) && array_is_list($value)) {
                foreach ($value as $val) {
                    $this->encodeArray($node, [$key => $val]);
                }

                continue;
            }

            $element = $document->createElement($key);
            $this->encodeNode($element, $value);
            $node->appendChild($element);
        }
    }

    private function encodeValue(mixed $value): string
    {
        if (is_bool($value)) {
            return $value ? 'true' : 'false';
        }

        if (is_scalar($value)) {
            return (string) $value;
        }

        if ($value instanceof \Stringable) {
            return $value->__toString();
        }

        throw new \InvalidArgumentException('Could not encode value.');
    }

    /**
     * @return mixed[]
     */
    #[\Override]
    public function decode(string $data): array
    {
        if ($data === '') {
            return [];
        }

        $xml = new \DOMDocument();
        $xml->loadXML($data, LIBXML_NOBLANKS);

        $document = $xml->documentElement;

        if ($document === null) {
            return [];
        }

        /** @var mixed[] */
        return $this->normalize([
            $document->nodeName => $this->decodeNode($document),
        ]);
    }

    private function decodeNode(\DOMNode $node): mixed
    {
        return match ($node->nodeType) {
            XML_ELEMENT_NODE => $this->decodeElementNode($node),
            XML_TEXT_NODE,
            XML_CDATA_SECTION_NODE => $this->decodeTextNode($node),
            default => throw new \RuntimeException(
                "Unsupported decode node type {$node->nodeType}."
            ),
        };
    }

    /**
     * @return array<string, mixed>
     */
    private function decodeElementNode(\DOMNode $node): array
    {
        $result = [];

        foreach ($node->childNodes as $child) {
            $result[$child->nodeName] ??= [];
            $result[$child->nodeName][] = $this->decodeNode($child);
        }

        return $result;
    }

    private function decodeTextNode(\DOMNode $node): string
    {
        return $node->textContent;
    }

    private function normalize(mixed $data): mixed
    {
        if (! is_array($data)) {
            return $data;
        }

        if (array_is_list($data) && count($data) === 1) {
            return $this->normalize($data[0]);
        }

        if (isset($data['#text'])) {
            return $data['#text'][0];
        }

        if (isset($data['#cdata-section'])) {
            return $data['#cdata-section'][0];
        }

        $result = $data;

        foreach ($result as $key => $value) {
            $result[$key] = $this->normalize($value);
        }

        return $result;
    }

    private function ownerDocument(\DOMNode $node): \DOMDocument
    {
        /** @var \DOMDocument */
        return $node->ownerDocument ?? $node;
    }
}
