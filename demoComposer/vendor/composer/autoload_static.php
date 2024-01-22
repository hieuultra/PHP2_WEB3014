<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitacb3f809fffc6b6eb6511da0e7235bee
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Hieu\\Mvc\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Hieu\\Mvc\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitacb3f809fffc6b6eb6511da0e7235bee::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitacb3f809fffc6b6eb6511da0e7235bee::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitacb3f809fffc6b6eb6511da0e7235bee::$classMap;

        }, null, ClassLoader::class);
    }
}
