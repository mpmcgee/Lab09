<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf2f37d063f945fc05f45419d10a4db2b
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Database' => __DIR__ . '/../..' . '/application/database.class.php',
        'Index' => __DIR__ . '/../..' . '/views/index/index.class.php',
        'Login' => __DIR__ . '/../..' . '/views/login/login.class.php',
        'Logout' => __DIR__ . '/../..' . '/views/logout/logout.class.php',
        'Register' => __DIR__ . '/../..' . '/views/index/register.class.php',
        'Reset' => __DIR__ . '/../..' . '/views/reset/reset.class.php',
        'UserController' => __DIR__ . '/../..' . '/controllers/user_controller.class.php',
        'UserError' => __DIR__ . '/../..' . '/views/error/user_error.class.php',
        'UserModel' => __DIR__ . '/../..' . '/models/user_model.class.php',
        'Verify' => __DIR__ . '/../..',
        'View' => __DIR__ . '/../..' . '/views/view.class.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitf2f37d063f945fc05f45419d10a4db2b::$classMap;

        }, null, ClassLoader::class);
    }
}
