<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit21e42ea54be6c3dbe829cfd997da9e0b
{
    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Zend\\Stdlib\\' => 12,
            'Zend\\ServiceManager\\' => 20,
            'Zend\\Db\\' => 8,
            'Zend\\Config\\' => 12,
        ),
        'P' => 
        array (
            'Psr\\Container\\' => 14,
        ),
        'I' => 
        array (
            'Interop\\Container\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zend\\Stdlib\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-stdlib/src',
        ),
        'Zend\\ServiceManager\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-servicemanager/src',
        ),
        'Zend\\Db\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-db/src',
        ),
        'Zend\\Config\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-config/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Interop\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/container-interop/container-interop/src/Interop/Container',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit21e42ea54be6c3dbe829cfd997da9e0b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit21e42ea54be6c3dbe829cfd997da9e0b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}