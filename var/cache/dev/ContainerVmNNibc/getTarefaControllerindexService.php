<?php

namespace ContainerVmNNibc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTarefaControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.IExv_Jo.App\Controller\TarefaController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.IExv_Jo.App\\Controller\\TarefaController::index()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'tarefaRepository' => ['privates', 'App\\Repository\\TarefaRepository', 'getTarefaRepositoryService', true],
            'serializer' => ['privates', 'serializer', 'getSerializerService', false],
        ], [
            'tarefaRepository' => 'App\\Repository\\TarefaRepository',
            'serializer' => '?',
        ]))->withContext('App\\Controller\\TarefaController::index()', $container);
    }
}
