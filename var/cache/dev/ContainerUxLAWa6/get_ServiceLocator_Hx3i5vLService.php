<?php

namespace ContainerUxLAWa6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Hx3i5vLService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.hx3i5vL' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.hx3i5vL'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'panierRepository' => ['privates', 'App\\Repository\\PanierRepository', 'getPanierRepositoryService', true],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'panierRepository' => 'App\\Repository\\PanierRepository',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
