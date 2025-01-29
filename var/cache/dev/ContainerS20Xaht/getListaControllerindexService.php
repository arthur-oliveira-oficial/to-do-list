<?php

namespace ContainerS20Xaht;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getListaControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.uQ9Ot44.App\Controller\ListaController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.uQ9Ot44.App\\Controller\\ListaController::index()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'listaRepository' => ['privates', 'App\\Repository\\ListaRepository', 'getListaRepositoryService', true],
            'serializer' => ['privates', 'serializer', 'getSerializerService', false],
        ], [
            'listaRepository' => 'App\\Repository\\ListaRepository',
            'serializer' => '?',
        ]))->withContext('App\\Controller\\ListaController::index()', $container);
    }
}
