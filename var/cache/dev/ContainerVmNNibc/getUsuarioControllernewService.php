<?php

namespace ContainerVmNNibc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUsuarioControllernewService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.2rSymSI.App\Controller\UsuarioController::new()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.2rSymSI.App\\Controller\\UsuarioController::new()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'passwordHasher' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
            'serializer' => ['privates', 'serializer', 'getSerializerService', false],
        ], [
            'passwordHasher' => '?',
            'serializer' => '?',
        ]))->withContext('App\\Controller\\UsuarioController::new()', $container);
    }
}
