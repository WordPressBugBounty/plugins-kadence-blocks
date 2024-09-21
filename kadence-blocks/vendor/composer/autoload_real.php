<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInite01c39b8216ae47b7ba0a0c330678b0f
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

        spl_autoload_register(array('ComposerAutoloaderInite01c39b8216ae47b7ba0a0c330678b0f', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInite01c39b8216ae47b7ba0a0c330678b0f', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInite01c39b8216ae47b7ba0a0c330678b0f::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
