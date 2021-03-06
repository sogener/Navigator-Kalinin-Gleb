<?php
return [
    'target_php_version' => '7.4',
    'directory_list' => [
        'src',
        'public',
        'vendor/iqdev/bitrix-stubs/stubs'
    ],
    'exclude_analysis_directory_list' => [
        'public/local/php_interface/migrations',
        'public/local/php_interface/migrations.archive',
        'public/local/modules/sprint.migration',
        'public/bitrix',
        'vendor/iqdev/bitrix-stubs/stubs'
    ],
    'exclude_file_list' => [
        'src/Base/Load.php',
        'src/App.php',
        'public/i.php',
    ],
    // A list of plugin files to execute.
    // See https://github.com/phan/phan/tree/master/.phan/plugins for even more.
    'plugins' => [
        // checks if a function, closure or method unconditionally returns.

        // can also be written as 'vendor/phan/phan/.phan/plugins/AlwaysReturnPlugin.php'
        'AlwaysReturnPlugin',
        // Checks for syntactically unreachable statements in
        // the global scope or function bodies.
//        'UnreachableCodePlugin',
        'DollarDollarPlugin',
        'DuplicateArrayKeyPlugin',
        'PregRegexCheckerPlugin',
        'PrintfCheckerPlugin',
    ],
    'suppress_issue_types' => ['PhanTypeArraySuspiciousNullable', 'PhanUnusedProtectedMethodParameter'],
    'exclude_file_regex' => '@^((vendor/.*/(tests|Tests))|(public/bitrix)|(src/Migrations))/@',
    'simplify_ast' => false,
    'dead_code_detection' => false,
];
