<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit58e60b6b9bde6a4e148784cd565e5629
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'app\\model\\entidade\\Requisito' => __DIR__ . '/../..' . '/app/model/entidade/Requisito.php',
        'app\\model\\entidade\\Sistema' => __DIR__ . '/../..' . '/app/model/entidade/Sistema.php',
        'app\\model\\entidade\\Tratamento' => __DIR__ . '/../..' . '/app/model/entidade/Tratamento.php',
        'app\\model\\entidade\\Usuario' => __DIR__ . '/../..' . '/app/model/entidade/Usuario.php',
        'app\\model\\entidade\\Versao' => __DIR__ . '/../..' . '/app/model/entidade/Versao.php',
        'app\\util\\Conexao' => __DIR__ . '/../..' . '/app/util/Conexao.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit58e60b6b9bde6a4e148784cd565e5629::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit58e60b6b9bde6a4e148784cd565e5629::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit58e60b6b9bde6a4e148784cd565e5629::$classMap;

        }, null, ClassLoader::class);
    }
}
