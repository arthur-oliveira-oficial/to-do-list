<?php

namespace ContainerVmNNibc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTarefaControllereditService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.2aydOaF.App\Controller\TarefaController::edit()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.2aydOaF.App\\Controller\\TarefaController::edit()'] = ($container->privates['.service_locator.2aydOaF'] ?? $container->load('get_ServiceLocator_2aydOaFService'))->withContext('App\\Controller\\TarefaController::edit()', $container);
    }
}
