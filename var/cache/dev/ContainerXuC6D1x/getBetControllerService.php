<?php

namespace ContainerXuC6D1x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBetControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\BetController' shared autowired service.
     *
     * @return \App\Controller\BetController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/BetController.php';

        $container->services['App\\Controller\\BetController'] = $instance = new \App\Controller\BetController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\BetController', $container));

        return $instance;
    }
}
