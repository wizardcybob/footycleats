<?php

namespace Container1DjnS8N;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_6n_BuRKService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.6n.buRK' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.6n.buRK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cleat' => ['privates', '.errored..service_locator.6n.buRK.App\\Entity\\Cleat', NULL, 'Cannot autowire service ".service_locator.6n.buRK": it references class "App\\Entity\\Cleat" but no such service exists.'],
        ], [
            'cleat' => 'App\\Entity\\Cleat',
        ]);
    }
}