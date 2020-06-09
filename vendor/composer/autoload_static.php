<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite5fc25a69264069e88403cb3b00438fc
{
    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'tests\\' => 6,
        ),
        'h' => 
        array (
            'handler\\' => 8,
        ),
        'T' => 
        array (
            'Thrift\\' => 7,
        ),
        'S' => 
        array (
            'Swoorift\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/gen/tests',
        ),
        'handler\\' => 
        array (
            0 => __DIR__ . '/../..' . '/handler',
        ),
        'Thrift\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/thrift/lib',
        ),
        'Swoorift\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite5fc25a69264069e88403cb3b00438fc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite5fc25a69264069e88403cb3b00438fc::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
