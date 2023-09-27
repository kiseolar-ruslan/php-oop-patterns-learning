<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit135fdd2831616a32ff9d854321fb8a49
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit135fdd2831616a32ff9d854321fb8a49::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit135fdd2831616a32ff9d854321fb8a49::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit135fdd2831616a32ff9d854321fb8a49::$classMap;

        }, null, ClassLoader::class);
    }
}