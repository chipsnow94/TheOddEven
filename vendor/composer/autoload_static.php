<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6c178c12d510dccfc33bc49074e12f61
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'phpDocumentor\\Reflection\\' => 25,
        ),
        'W' => 
        array (
            'Webmozart\\Assert\\' => 17,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Yaml\\' => 23,
            'Symfony\\Component\\Process\\' => 26,
            'Symfony\\Component\\Finder\\' => 25,
            'Symfony\\Component\\EventDispatcher\\' => 34,
            'Symfony\\Component\\Debug\\' => 24,
            'Symfony\\Component\\Console\\' => 26,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'D' => 
        array (
            'Doctrine\\Instantiator\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'phpDocumentor\\Reflection\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpdocumentor/reflection-common/src',
            1 => __DIR__ . '/..' . '/phpdocumentor/type-resolver/src',
            2 => __DIR__ . '/..' . '/phpdocumentor/reflection-docblock/src',
        ),
        'Webmozart\\Assert\\' => 
        array (
            0 => __DIR__ . '/..' . '/webmozart/assert/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Yaml\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/yaml',
        ),
        'Symfony\\Component\\Process\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/process',
        ),
        'Symfony\\Component\\Finder\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/finder',
        ),
        'Symfony\\Component\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/event-dispatcher',
        ),
        'Symfony\\Component\\Debug\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/debug',
        ),
        'Symfony\\Component\\Console\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/console',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Doctrine\\Instantiator\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/instantiator/src/Doctrine/Instantiator',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Prophecy\\' => 
            array (
                0 => __DIR__ . '/..' . '/phpspec/prophecy/src',
            ),
            'PhpSpec' => 
            array (
                0 => __DIR__ . '/..' . '/phpspec/phpspec/src',
            ),
        ),
        'D' => 
        array (
            'Diff' => 
            array (
                0 => __DIR__ . '/..' . '/phpspec/php-diff/lib',
            ),
        ),
    );

    public static $fallbackDirsPsr0 = array (
        0 => __DIR__ . '/../..' . '/src',
    );

    public static $classMap = array (
        'SebastianBergmann\\Comparator\\ArrayComparator' => __DIR__ . '/..' . '/sebastian/comparator/src/ArrayComparator.php',
        'SebastianBergmann\\Comparator\\Comparator' => __DIR__ . '/..' . '/sebastian/comparator/src/Comparator.php',
        'SebastianBergmann\\Comparator\\ComparisonFailure' => __DIR__ . '/..' . '/sebastian/comparator/src/ComparisonFailure.php',
        'SebastianBergmann\\Comparator\\DOMNodeComparator' => __DIR__ . '/..' . '/sebastian/comparator/src/DOMNodeComparator.php',
        'SebastianBergmann\\Comparator\\DateTimeComparator' => __DIR__ . '/..' . '/sebastian/comparator/src/DateTimeComparator.php',
        'SebastianBergmann\\Comparator\\DoubleComparator' => __DIR__ . '/..' . '/sebastian/comparator/src/DoubleComparator.php',
        'SebastianBergmann\\Comparator\\ExceptionComparator' => __DIR__ . '/..' . '/sebastian/comparator/src/ExceptionComparator.php',
        'SebastianBergmann\\Comparator\\Factory' => __DIR__ . '/..' . '/sebastian/comparator/src/Factory.php',
        'SebastianBergmann\\Comparator\\MockObjectComparator' => __DIR__ . '/..' . '/sebastian/comparator/src/MockObjectComparator.php',
        'SebastianBergmann\\Comparator\\NumericComparator' => __DIR__ . '/..' . '/sebastian/comparator/src/NumericComparator.php',
        'SebastianBergmann\\Comparator\\ObjectComparator' => __DIR__ . '/..' . '/sebastian/comparator/src/ObjectComparator.php',
        'SebastianBergmann\\Comparator\\ResourceComparator' => __DIR__ . '/..' . '/sebastian/comparator/src/ResourceComparator.php',
        'SebastianBergmann\\Comparator\\ScalarComparator' => __DIR__ . '/..' . '/sebastian/comparator/src/ScalarComparator.php',
        'SebastianBergmann\\Comparator\\SplObjectStorageComparator' => __DIR__ . '/..' . '/sebastian/comparator/src/SplObjectStorageComparator.php',
        'SebastianBergmann\\Comparator\\TypeComparator' => __DIR__ . '/..' . '/sebastian/comparator/src/TypeComparator.php',
        'SebastianBergmann\\Diff\\Chunk' => __DIR__ . '/..' . '/sebastian/diff/src/Chunk.php',
        'SebastianBergmann\\Diff\\Diff' => __DIR__ . '/..' . '/sebastian/diff/src/Diff.php',
        'SebastianBergmann\\Diff\\Differ' => __DIR__ . '/..' . '/sebastian/diff/src/Differ.php',
        'SebastianBergmann\\Diff\\Exception' => __DIR__ . '/..' . '/sebastian/diff/src/Exception/Exception.php',
        'SebastianBergmann\\Diff\\InvalidArgumentException' => __DIR__ . '/..' . '/sebastian/diff/src/Exception/InvalidArgumentException.php',
        'SebastianBergmann\\Diff\\Line' => __DIR__ . '/..' . '/sebastian/diff/src/Line.php',
        'SebastianBergmann\\Diff\\LongestCommonSubsequenceCalculator' => __DIR__ . '/..' . '/sebastian/diff/src/LongestCommonSubsequenceCalculator.php',
        'SebastianBergmann\\Diff\\MemoryEfficientLongestCommonSubsequenceCalculator' => __DIR__ . '/..' . '/sebastian/diff/src/MemoryEfficientLongestCommonSubsequenceCalculator.php',
        'SebastianBergmann\\Diff\\Output\\AbstractChunkOutputBuilder' => __DIR__ . '/..' . '/sebastian/diff/src/Output/AbstractChunkOutputBuilder.php',
        'SebastianBergmann\\Diff\\Output\\DiffOnlyOutputBuilder' => __DIR__ . '/..' . '/sebastian/diff/src/Output/DiffOnlyOutputBuilder.php',
        'SebastianBergmann\\Diff\\Output\\DiffOutputBuilderInterface' => __DIR__ . '/..' . '/sebastian/diff/src/Output/DiffOutputBuilderInterface.php',
        'SebastianBergmann\\Diff\\Output\\UnifiedDiffOutputBuilder' => __DIR__ . '/..' . '/sebastian/diff/src/Output/UnifiedDiffOutputBuilder.php',
        'SebastianBergmann\\Diff\\Parser' => __DIR__ . '/..' . '/sebastian/diff/src/Parser.php',
        'SebastianBergmann\\Diff\\TimeEfficientLongestCommonSubsequenceCalculator' => __DIR__ . '/..' . '/sebastian/diff/src/TimeEfficientLongestCommonSubsequenceCalculator.php',
        'SebastianBergmann\\Exporter\\Exporter' => __DIR__ . '/..' . '/sebastian/exporter/src/Exporter.php',
        'SebastianBergmann\\RecursionContext\\Context' => __DIR__ . '/..' . '/sebastian/recursion-context/src/Context.php',
        'SebastianBergmann\\RecursionContext\\Exception' => __DIR__ . '/..' . '/sebastian/recursion-context/src/Exception.php',
        'SebastianBergmann\\RecursionContext\\InvalidArgumentException' => __DIR__ . '/..' . '/sebastian/recursion-context/src/InvalidArgumentException.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6c178c12d510dccfc33bc49074e12f61::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6c178c12d510dccfc33bc49074e12f61::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit6c178c12d510dccfc33bc49074e12f61::$prefixesPsr0;
            $loader->fallbackDirsPsr0 = ComposerStaticInit6c178c12d510dccfc33bc49074e12f61::$fallbackDirsPsr0;
            $loader->classMap = ComposerStaticInit6c178c12d510dccfc33bc49074e12f61::$classMap;

        }, null, ClassLoader::class);
    }
}
