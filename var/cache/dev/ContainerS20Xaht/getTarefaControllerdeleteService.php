<?php

namespace ContainerS20Xaht;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTarefaControllerdeleteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.qGsI5Pk.App\Controller\TarefaController::delete()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.qGsI5Pk.App\\Controller\\TarefaController::delete()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'tarefa' => ['privates', '.errored..service_locator.qGsI5Pk.App\\Entity\\Tarefa', NULL, 'Cannot autowire service ".service_locator.qGsI5Pk": it needs an instance of "App\\Entity\\Tarefa" but this type has been excluded in "config/services.yaml".'],
        ], [
            'tarefa' => 'App\\Entity\\Tarefa',
        ]))->withContext('App\\Controller\\TarefaController::delete()', $container);
    }
}
