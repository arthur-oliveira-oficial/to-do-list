<?php

namespace ContainerS20Xaht;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUsuarioControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.cYaxScO.App\Controller\UsuarioController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.cYaxScO.App\\Controller\\UsuarioController::index()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'usuarioRepository' => ['privates', 'App\\Repository\\UsuarioRepository', 'getUsuarioRepositoryService', true],
            'serializer' => ['privates', 'serializer', 'getSerializerService', false],
        ], [
            'usuarioRepository' => 'App\\Repository\\UsuarioRepository',
            'serializer' => '?',
        ]))->withContext('App\\Controller\\UsuarioController::index()', $container);
    }
}
