<?php

declare(strict_types=1);

namespace Dew\Acs\OpenApi;

final readonly class RefFinder
{
    public function __construct(
        public mixed $subject
    ) {
        //
    }

    public function find(string $path, mixed $default = null): mixed
    {
        $paths = explode('/', $path);
        $result = $this->subject;

        foreach ($paths as $current) {
            if ($current === '#') {
                $result = $this->subject;
            } elseif (is_object($result) && property_exists($result, $current)) {
                $result = $result->{$current};
            } elseif (is_array($result) && array_key_exists($current, $result)) {
                $result = $result[$current];
            } else {
                $result = $default;
            }
        }

        return $result;
    }
}
