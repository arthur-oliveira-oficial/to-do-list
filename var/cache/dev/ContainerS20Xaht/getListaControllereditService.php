<?php

namespace ContainerS20Xaht;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getListaControllereditService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.g7iP4uJ.App\Controller\ListaController::edit()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.g7iP4uJ.App\\Controller\\ListaController::edit()'] = ($container->privates['.service_locator.g7iP4uJ'] ?? $container->load('get_ServiceLocator_G7iP4uJService'))->withContext('App\\Controller\\ListaController::edit()', $container);
    }
}
