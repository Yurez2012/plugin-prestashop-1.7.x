<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4c58708330850ccffa6728a032a533c3
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'CompropagoSdk\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'CompropagoSdk\\' => 
        array (
            0 => __DIR__ . '/..' . '/compropago/php-sdk/CompropagoSdk',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4c58708330850ccffa6728a032a533c3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4c58708330850ccffa6728a032a533c3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
