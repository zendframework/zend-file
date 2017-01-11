<?php

use PhpCsFixer\Finder;
use PhpCsFixer\Config;

$finder = Finder::create()
    ->in('src')
    ->in('test')
    ->notPath('TestAsset')
    ->notPath('_files')
    ->filter(function (SplFileInfo $file) {
        if (\strstr($file->getPath(), 'compatibility')) {
            return false;
        }
    });

$config = Config::create()
    ->setRiskyAllowed(true)
    ->setRules([
        'array_syntax' => [
            'syntax' => 'short',
        ],
        'blank_line_after_namespace' => true,
        'braces' => true,
        'elseif' => true,
        'encoding' => true,
        'full_opening_tag' => true,
        'function_declaration' => true,
        'indentation_type' => true,
        'line_ending' => true,
        'lowercase_keywords' => true,
        'method_argument_space' => true,
        'no_alias_functions' => true,
        'no_closing_tag' => true,
        'no_empty_statement' => true,
        'no_extra_consecutive_blank_lines' => [
            'use',
        ],
        'no_spaces_after_function_name' => true,
        'no_spaces_inside_parenthesis' => true,
        'no_trailing_whitespace' => true,
        'no_unused_imports' => true,
        'no_whitespace_in_blank_line' => true,
        'object_operator_without_whitespace' => true,
        'simplified_null_return' => true,
        'single_blank_line_at_eof' => true,
        'single_import_per_statement' => true,
        'standardize_not_equals' => true,
        'visibility_required' => true,
    ])
    ->setFinder($finder);

return $config;
