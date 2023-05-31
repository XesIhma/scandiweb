<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7adc2c1ce283e5403e0d31f687ae27e8
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7adc2c1ce283e5403e0d31f687ae27e8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7adc2c1ce283e5403e0d31f687ae27e8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7adc2c1ce283e5403e0d31f687ae27e8::$classMap;

        }, null, ClassLoader::class);
    }
}
