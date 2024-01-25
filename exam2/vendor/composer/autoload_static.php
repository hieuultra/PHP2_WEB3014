<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1371e6049791b7a662eea54a7cd39d95
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Phroute\\Phroute\\' => 16,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Phroute\\Phroute\\' => 
        array (
            0 => __DIR__ . '/..' . '/phroute/phroute/src/Phroute',
        ),
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1371e6049791b7a662eea54a7cd39d95::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1371e6049791b7a662eea54a7cd39d95::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1371e6049791b7a662eea54a7cd39d95::$classMap;

        }, null, ClassLoader::class);
    }
}