<?php

namespace ContainerXuC6D1x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBetBjControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\BetBjController' shared autowired service.
     *
     * @return \App\Controller\BetBjController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/BetBjController.php';

        $container->services['App\\Controller\\BetBjController'] = $instance = new \App\Controller\BetBjController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\BetBjController', $container));

        return $instance;
    }
}