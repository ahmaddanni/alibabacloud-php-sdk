<?php

declare(strict_types=1);

use Dew\Acs\ApiDocsResolver;

/**
 * @phpstan-import-type TProductInfo from \Dew\Acs\ApiDocsResolver
 * @phpstan-import-type TApiDocs from \Dew\Acs\OpenApi\ApiDocs
 * @phpstan-type TCollectedApi array{string, array{version: string, deprecated: bool}}
 */
final readonly class AnnotationBuilder
{
    /**
     * @param  TProductInfo  $product
     * @param  string[]  $docs
     */
    public function __construct(
        private array $product,
        private array $docs
    ) {
        //
    }

    public function annotate(): void
    {
        $incrementable = static::isVersionIncrementable($this->product['versions'][0]);

        $docBlock = $incrementable
            ? $this->docBlockForIncrementableVersion($this->product['versions'][0])
            : $this->docBlockForSeparatedVersion();

        if ($docBlock === '') {
            return;
        }

        if ($this->writeToClient($docBlock) === false) {
            throw new RuntimeException(
                "Failed to annocate the {$this->product['code']} client."
            );
        }
    }

    /**
     * @param  string[]  $docs  A list of API docs locations.
     * @return TCollectedApi
     */
    private function collectApis(array $docs): array
    {
        $apis = [];

        foreach ($docs as $path) {
            if (! file_exists($path)) {
                throw new InvalidArgumentException(sprintf(
                    'The docs path "%s" could not be found.', $path
                ));
            }

            /** @var TApiDocs */
            $docs = require $path;

            foreach ($docs['apis'] as $name => $api) {
                if (isset($apis[$name])) {
                    continue;
                }

                $apis[$name] = [
                    'version' => $docs['info']['version'],
                    'deprecated' => $api['deprecated'] ?? false,
                ];
            }
        }

        return $apis;
    }

    public static function isVersionIncrementable(string $version): bool
    {
        return preg_match('/\d{4}-\d{2}-\d{2}/', $version) === 1;
    }

    private function docBlockForIncrementableVersion(string $initialVersion): string
    {
        $apis = $this->collectApis($this->docs);
        $phpDoc = $this->buildPhpDoc($apis, $initialVersion);

        if ($phpDoc === '') {
            return '';
        }

        return "/**\n".$phpDoc." */";
    }

    private function docBlockForSeparatedVersion(): string
    {
        $phpDoc = '';

        foreach ($this->docs as $path) {
            $apis = $this->collectApis([$path]);
            $phpDoc .= $this->buildPhpDoc($apis);
        }

        if ($phpDoc === '') {
            return '';
        }

        return "/**\n".$phpDoc." */";
    }

    /**
     * @param  TCollectedApi  $apis
     */
    private function buildPhpDoc(array $apis, ?string $initialVersion = null): string
    {
        $contents = '';

        foreach ($apis as $action => $meta) {
            $method = lcfirst($action);

            $deprecated = $meta['deprecated']
                ? sprintf(' {@deprecated %s}', $meta['version'])
                : '';

            $since = $meta['version'] !== $initialVersion
                ? sprintf(' {@since %s}', $meta['version'])
                : '';

            $contents .= sprintf(
                " * @method \Dew\Acs\Result %s(array \$arguments = [])%s%s\n",
                $method, $deprecated, $since
            );

            $contents .= sprintf(
                " * @method \Http\Promise\Promise %sAsync(\$arguments = [])%s%s\n",
                $method, $deprecated, $since
            );
        }

        return $contents;
    }

    private function writeToClient(string $docBlock): bool
    {
        $product = ApiDocsResolver::getNormalizedProductName($this->product['code']);

        $filename = __DIR__.'/../src/'.$product.'/'.$product.'Client.php';

        if (! file_exists($filename)) {
            throw new RuntimeException(
                "Could not find the {$this->product['code']} client."
            );
        }

        $contents = file_get_contents($filename);

        if ($contents === false) {
            throw new RuntimeException(
                "Could not get the contents of the {$this->product['code']} client."
            );
        }

        $matches = $this->findExistingDocBlock($contents);

        if (! isset($matches[0])) {
            return false;
        }

        $annotated = str_replace(
            $matches[0], $docBlock."\n".$matches['class'], $contents
        );

        return is_int(file_put_contents($filename, $annotated, LOCK_EX));
    }

    /**
     * @return string[]
     */
    private function findExistingDocBlock(string $contents): array
    {
        $matches = [];

        preg_match(
            '/(?:(?:\/\*\*.*\s\*\/\s)?(?<class>(?:final )?(?:readonly )?class \w+Client))/s',
            $contents,
            $matches
        );

        return $matches;
    }
}
