<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit16bfd2cc52e55997d611fefa9d1a84a4
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MF\\' => 3,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MF\\' => 
        array (
            0 => __DIR__ . '/..' . '/MF',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit16bfd2cc52e55997d611fefa9d1a84a4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit16bfd2cc52e55997d611fefa9d1a84a4::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
