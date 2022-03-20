<?php

namespace ContainerUxLAWa6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NCw7CeJService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.nCw7CeJ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.nCw7CeJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'panier' => ['privates', '.errored..service_locator.nCw7CeJ.App\\Entity\\Panier', NULL, 'Cannot autowire service ".service_locator.nCw7CeJ": it references class "App\\Entity\\Panier" but no such service exists.'],
            'user' => ['privates', '.errored..service_locator.nCw7CeJ.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.nCw7CeJ": it references class "App\\Entity\\User" but no such service exists.'],
        ], [
            'panier' => 'App\\Entity\\Panier',
            'user' => 'App\\Entity\\User',
        ]);
    }
}