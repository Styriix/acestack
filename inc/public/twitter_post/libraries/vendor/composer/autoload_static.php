<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8afbfeb276a76f55a341f48ccac7621c
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Abraham\\TwitterOAuth\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Abraham\\TwitterOAuth\\' => 
        array (
            0 => __DIR__ . '/..' . '/abraham/twitteroauth/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8afbfeb276a76f55a341f48ccac7621c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8afbfeb276a76f55a341f48ccac7621c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}