<?php

namespace Container1DjnS8N;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_3nh8coDService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.3nh8coD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.3nh8coD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\CleatController::add_cleat' => ['privates', '.service_locator.xDeUaRF', 'get_ServiceLocator_XDeUaRFService', true],
            'App\\Controller\\CleatController::delete' => ['privates', '.service_locator.5IyKijD', 'get_ServiceLocator_5IyKijDService', true],
            'App\\Controller\\CleatController::edit' => ['privates', '.service_locator.5IyKijD', 'get_ServiceLocator_5IyKijDService', true],
            'App\\Controller\\CleatController::index' => ['privates', '.service_locator.xDeUaRF', 'get_ServiceLocator_XDeUaRFService', true],
            'App\\Controller\\CleatController::new' => ['privates', '.service_locator.xDeUaRF', 'get_ServiceLocator_XDeUaRFService', true],
            'App\\Controller\\CleatController::show' => ['privates', '.service_locator.6n.buRK', 'get_ServiceLocator_6n_BuRKService', true],
            'App\\Controller\\LoginFormController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\PanierController::delete' => ['privates', '.service_locator.TqAof7r', 'get_ServiceLocator_TqAof7rService', true],
            'App\\Controller\\PanierController::edit' => ['privates', '.service_locator.TqAof7r', 'get_ServiceLocator_TqAof7rService', true],
            'App\\Controller\\PanierController::index' => ['privates', '.service_locator.hx3i5vL', 'get_ServiceLocator_Hx3i5vLService', true],
            'App\\Controller\\PanierController::new' => ['privates', '.service_locator.trYRX.i', 'get_ServiceLocator_TrYRX_IService', true],
            'App\\Controller\\PanierController::show' => ['privates', '.service_locator.nCw7CeJ', 'get_ServiceLocator_NCw7CeJService', true],
            'App\\Controller\\StaticPages::home' => ['privates', '.service_locator.xDeUaRF', 'get_ServiceLocator_XDeUaRFService', true],
            'App\\Controller\\StaticPages::login' => ['privates', '.service_locator.Y0N5Tbd', 'get_ServiceLocator_Y0N5TbdService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\CleatController:add_cleat' => ['privates', '.service_locator.xDeUaRF', 'get_ServiceLocator_XDeUaRFService', true],
            'App\\Controller\\CleatController:delete' => ['privates', '.service_locator.5IyKijD', 'get_ServiceLocator_5IyKijDService', true],
            'App\\Controller\\CleatController:edit' => ['privates', '.service_locator.5IyKijD', 'get_ServiceLocator_5IyKijDService', true],
            'App\\Controller\\CleatController:index' => ['privates', '.service_locator.xDeUaRF', 'get_ServiceLocator_XDeUaRFService', true],
            'App\\Controller\\CleatController:new' => ['privates', '.service_locator.xDeUaRF', 'get_ServiceLocator_XDeUaRFService', true],
            'App\\Controller\\CleatController:show' => ['privates', '.service_locator.6n.buRK', 'get_ServiceLocator_6n_BuRKService', true],
            'App\\Controller\\LoginFormController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\PanierController:delete' => ['privates', '.service_locator.TqAof7r', 'get_ServiceLocator_TqAof7rService', true],
            'App\\Controller\\PanierController:edit' => ['privates', '.service_locator.TqAof7r', 'get_ServiceLocator_TqAof7rService', true],
            'App\\Controller\\PanierController:index' => ['privates', '.service_locator.hx3i5vL', 'get_ServiceLocator_Hx3i5vLService', true],
            'App\\Controller\\PanierController:new' => ['privates', '.service_locator.trYRX.i', 'get_ServiceLocator_TrYRX_IService', true],
            'App\\Controller\\PanierController:show' => ['privates', '.service_locator.nCw7CeJ', 'get_ServiceLocator_NCw7CeJService', true],
            'App\\Controller\\StaticPages:home' => ['privates', '.service_locator.xDeUaRF', 'get_ServiceLocator_XDeUaRFService', true],
            'App\\Controller\\StaticPages:login' => ['privates', '.service_locator.Y0N5Tbd', 'get_ServiceLocator_Y0N5TbdService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\CleatController::add_cleat' => '?',
            'App\\Controller\\CleatController::delete' => '?',
            'App\\Controller\\CleatController::edit' => '?',
            'App\\Controller\\CleatController::index' => '?',
            'App\\Controller\\CleatController::new' => '?',
            'App\\Controller\\CleatController::show' => '?',
            'App\\Controller\\LoginFormController::login' => '?',
            'App\\Controller\\PanierController::delete' => '?',
            'App\\Controller\\PanierController::edit' => '?',
            'App\\Controller\\PanierController::index' => '?',
            'App\\Controller\\PanierController::new' => '?',
            'App\\Controller\\PanierController::show' => '?',
            'App\\Controller\\StaticPages::home' => '?',
            'App\\Controller\\StaticPages::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\CleatController:add_cleat' => '?',
            'App\\Controller\\CleatController:delete' => '?',
            'App\\Controller\\CleatController:edit' => '?',
            'App\\Controller\\CleatController:index' => '?',
            'App\\Controller\\CleatController:new' => '?',
            'App\\Controller\\CleatController:show' => '?',
            'App\\Controller\\LoginFormController:login' => '?',
            'App\\Controller\\PanierController:delete' => '?',
            'App\\Controller\\PanierController:edit' => '?',
            'App\\Controller\\PanierController:index' => '?',
            'App\\Controller\\PanierController:new' => '?',
            'App\\Controller\\PanierController:show' => '?',
            'App\\Controller\\StaticPages:home' => '?',
            'App\\Controller\\StaticPages:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
