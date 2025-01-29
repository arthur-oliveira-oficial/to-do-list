<?php

namespace ContainerVmNNibc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTarefaControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\TarefaController' shared autowired service.
     *
     * @return \App\Controller\TarefaController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/TarefaController.php';

        $container->services['App\\Controller\\TarefaController'] = $instance = new \App\Controller\TarefaController(($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)));

        $instance->setContainer(($container->privates['.service_locator.ZyP9f7K'] ?? $container->load('get_ServiceLocator_ZyP9f7KService'))->withContext('App\\Controller\\TarefaController', $container));

        return $instance;
    }
}
