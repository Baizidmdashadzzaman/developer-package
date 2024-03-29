<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit814263ae491fac53a7ed3dd7e41c07da
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit814263ae491fac53a7ed3dd7e41c07da', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit814263ae491fac53a7ed3dd7e41c07da', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit814263ae491fac53a7ed3dd7e41c07da::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
