<?php

namespace ContainerOnZxlBy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserControllercreateCustomerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.hz.RJka.App\Controller\UserController::createCustomer()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.hz.RJka.App\\Controller\\UserController::createCustomer()'] = ($container->privates['.service_locator.hz.RJka'] ?? $container->load('get_ServiceLocator_Hz_RJkaService'))->withContext('App\\Controller\\UserController::createCustomer()', $container);
    }
}
