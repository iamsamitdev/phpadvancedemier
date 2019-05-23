<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit29dc5eaf52f6aa276081085bae197250
{
    public static $files = array (
        '00303997c76b41baa1b8f9dd1059dc2d' => __DIR__ . '/../..' . '/phpGrid/conf.php',
        '4c8bd2f3f436536aef4b6ae1a3754649' => __DIR__ . '/../..' . '/phpChart/conf.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Picqer\\Barcode\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Picqer\\Barcode\\' => 
        array (
            0 => __DIR__ . '/..' . '/picqer/php-barcode-generator/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit29dc5eaf52f6aa276081085bae197250::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit29dc5eaf52f6aa276081085bae197250::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
