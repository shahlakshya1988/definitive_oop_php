<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit891c9e7a05c3417364a5b54e433c487b
{
    public static $prefixLengthsPsr4 = array (
        'w' => 
        array (
            'wfm\\' => 4,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'wfm\\' => 
        array (
            0 => __DIR__ . '/..' . '/wfm',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit891c9e7a05c3417364a5b54e433c487b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit891c9e7a05c3417364a5b54e433c487b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
