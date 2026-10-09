<?php

declare(strict_types=1);

final class ProductBuilder
{
    private const NAMESPACE_PLACEHOLDER = '%NAMESPACE%';

    private const PRODUCT_PLACEHOLDER = '%PRODUCT%';

    private const IMPORTS_PLACEHOLDER = '%IMPORTS%';

    private const TRAITS_PLACEHOLDER = '%TRAITS%';

    /**
     * The required imports for the client.
     */
    private array $defaultImports = [
        'Dew\\Acs\\AcsClient',
    ];

    /**
     * The required imports for the exception.
     */
    private array $defaultExceptionImports = [
        'Dew\\Acs\\AcsException',
    ];

    public function __construct(
        private string $basePath,
        private string $namespace,
        private string $product
    ) {
        //
    }

    /**
     * Build the product client.
     *
     * @param  class-string  $traits
     */
    public function buildClient(array $traits = []): self
    {
        return $this->buildClientIfMissing($traits);
    }

    /**
     * Build the product client if missing.
     *
     * @param  class-string  $traits
     */
    private function buildClientIfMissing(array $traits = []): self
    {
        $filename = implode(DIRECTORY_SEPARATOR, [
            $this->basePath,
            $this->product,
            $this->product.'Client.php',
        ]);

        if (is_file($filename)) {
            return $this;
        }

        $this->prepareDirectory($filename);

        $code = $this->getStubClientCode();
        $code = $this->injectNamespace($code);
        $code = $this->injectProduct($code);
        $code = $this->injectImports($code, [...$this->defaultImports, ...$traits]);
        $code = $this->injectTraits($code, $traits);

        file_put_contents($filename, $code, LOCK_EX);

        return $this;
    }

    private function injectNamespace(string $code): string
    {
        return str_replace(self::NAMESPACE_PLACEHOLDER, $this->namespace, $code);
    }

    private function injectProduct(string $code): string
    {
        return str_replace(self::PRODUCT_PLACEHOLDER, $this->product, $code);
    }

    /**
     * @param  class-string[]  $imports
     */
    private function injectImports(string $code, array $imports): string
    {
        // Exclude the imports that have the same namespace as the client
        $imports = array_filter($imports, function (string $fqdn): bool {
            $basename = basename(str_replace('\\', '/', $fqdn));

            return $fqdn !== $this->namespace.'\\'.$this->product.'\\'.$basename;
        });

        $imports = array_map(
            fn (string $fqdn): string => sprintf('use %s;', $fqdn),
            $imports
        );

        sort($imports);

        return str_replace(self::IMPORTS_PLACEHOLDER, implode("\n", $imports), $code);
    }

    /**
     * @param  class-string[]  $traits
     */
    private function injectTraits(string $code, array $traits): string
    {
        if ($traits === []) {
            return str_replace(self::TRAITS_PLACEHOLDER, '//', $code);
        }

        $uses = array_map(
            fn (string $fqdn): string => sprintf('use %s;', basename(str_replace('\\', '/', $fqdn))),
            $traits
        );

        sort($uses);

        $indent = str_repeat(' ', 4);
        $separator = "\n".$indent;

        return str_replace(self::TRAITS_PLACEHOLDER, implode($separator, $uses), $code);
    }

    private function getStubClientCode(): string
    {
        return <<<'PHP'
        <?php

        declare(strict_types=1);

        namespace %NAMESPACE%\%PRODUCT%;

        %IMPORTS%

        final class %PRODUCT%Client extends AcsClient
        {
            %TRAITS%
        }

        PHP;
    }

    /**
     * Build the product exception.
     *
     * @param  class-string  $traits
     */
    public function buildException(array $traits = []): self
    {
        return $this->buildExceptionIfMissing($traits);
    }

    /**
     * Build the product exception if missing.
     *
     * @param  class-string  $traits
     */
    private function buildExceptionIfMissing(array $traits = []): self
    {
        $filename = implode(DIRECTORY_SEPARATOR, [
            $this->basePath,
            $this->product,
            $this->product.'Exception.php',
        ]);

        if (is_file($filename)) {
            return $this;
        }

        $this->prepareDirectory($filename);

        $code = $this->getStubExceptionCode();
        $code = $this->injectNamespace($code);
        $code = $this->injectProduct($code);
        $code = $this->injectImports($code, [...$this->defaultExceptionImports, ...$traits]);
        $code = $this->injectTraits($code, $traits);

        file_put_contents($filename, $code, LOCK_EX);

        return $this;
    }

    private function getStubExceptionCode(): string
    {
        return <<<'PHP'
        <?php

        declare(strict_types=1);

        namespace %NAMESPACE%\%PRODUCT%;

        %IMPORTS%

        final class %PRODUCT%Exception extends AcsException
        {
            %TRAITS%
        }

        PHP;
    }

    private function prepareDirectory(string $filename): void
    {
        $directory = dirname($filename);

        if (! is_dir($directory)) {
            mkdir($directory, 0755, recursive: true);
        }
    }
}
