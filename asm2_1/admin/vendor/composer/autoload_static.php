<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0d1149b607ad7d09e642e8c7162e53a2
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit0d1149b607ad7d09e642e8c7162e53a2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0d1149b607ad7d09e642e8c7162e53a2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0d1149b607ad7d09e642e8c7162e53a2::$classMap;

        }, null, ClassLoader::class);
    }
}
