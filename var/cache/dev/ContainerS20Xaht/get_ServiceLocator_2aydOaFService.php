<?php

namespace ContainerS20Xaht;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_2aydOaFService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.2aydOaF' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.2aydOaF'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'tarefa' => ['privates', '.errored..service_locator.2aydOaF.App\\Entity\\Tarefa', NULL, 'Cannot autowire service ".service_locator.2aydOaF": it needs an instance of "App\\Entity\\Tarefa" but this type has been excluded in "config/services.yaml".'],
            'serializer' => ['privates', 'serializer', 'getSerializerService', false],
        ], [
            'tarefa' => 'App\\Entity\\Tarefa',
            'serializer' => '?',
        ]);
    }
}
