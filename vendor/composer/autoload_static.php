<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd5e504e2a3d01d815b64a06eb8fbee24
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'Owner\\VKbot\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Owner\\VKbot\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd5e504e2a3d01d815b64a06eb8fbee24::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd5e504e2a3d01d815b64a06eb8fbee24::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd5e504e2a3d01d815b64a06eb8fbee24::$classMap;

        }, null, ClassLoader::class);
    }
}
