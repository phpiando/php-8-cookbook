<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitac1b858246fc94de4f6efc97da986592
{
    public static $files = array (
        '5d3bafadccdbe97f4bb64aaea8cb0d61' => __DIR__ . '/../..' . '/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TaskManager\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TaskManager\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitac1b858246fc94de4f6efc97da986592::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitac1b858246fc94de4f6efc97da986592::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitac1b858246fc94de4f6efc97da986592::$classMap;

        }, null, ClassLoader::class);
    }
}
