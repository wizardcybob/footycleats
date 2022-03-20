<?php

namespace Container1DjnS8N;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Y0N5TbdService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Y0N5Tbd' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Y0N5Tbd'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cleatRepository' => ['privates', 'App\\Repository\\CleatRepository', 'getCleatRepositoryService', true],
            'panierRepository' => ['privates', 'App\\Repository\\PanierRepository', 'getPanierRepositoryService', true],
        ], [
            'cleatRepository' => 'App\\Repository\\CleatRepository',
            'panierRepository' => 'App\\Repository\\PanierRepository',
        ]);
    }
}
