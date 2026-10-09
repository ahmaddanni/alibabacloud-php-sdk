<?php

declare(strict_types=1);

$finder = (new PhpCsFixer\Finder())
    ->in([
        __DIR__.'/src',
        __DIR__.'/tests',
    ])
    ->exclude([
        'Tablestore/Messages',
        'Tablestore/Metadata',
        'Sls/Messages',
        'Sls/Metadata',
    ]);

return (new PhpCsFixer\Config())
    ->setRules([
        '@PSR12' => true,

        // Array Notation
        'array_syntax' => ['syntax' => 'short'],

        // Casing
        'integer_literal_case' => true,

        // Function Notation
        'method_argument_space' => [
            'on_multiline' => 'ignore',
        ],
        'nullable_type_declaration_for_default_null_value' => true,

        // Import
        'global_namespace_import' => [
            'import_classes' => false,
        ],
        'no_unused_imports' => true,
        'ordered_imports' => [
            'imports_order' => ['class', 'function', 'const'],
            'sort_algorithm' => 'alpha',
        ],

        // Language Construct
        'nullable_type_declaration' => [
            'syntax' => 'question_mark',
        ],

        // PHPDoc
        'phpdoc_separation' => [
            'skip_unlisted_annotations' => true,
        ],
    ])
    ->setFinder($finder);
