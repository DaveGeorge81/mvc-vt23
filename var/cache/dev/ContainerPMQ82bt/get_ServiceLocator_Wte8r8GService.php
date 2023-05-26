<?php

namespace ContainerPMQ82bt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Wte8r8GService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.wte8r8G' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.wte8r8G'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'dealerRepository' => ['privates', 'App\\Repository\\DealerRepository', 'getDealerRepositoryService', true],
            'playerRepository' => ['privates', 'App\\Repository\\PlayerRepository', 'getPlayerRepositoryService', true],
        ], [
            'dealerRepository' => 'App\\Repository\\DealerRepository',
            'playerRepository' => 'App\\Repository\\PlayerRepository',
        ]);
    }
}