<?php

namespace ContainerEOxkeXF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductControllerupdateProductStockService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.P7gSmYq.App\Controller\ProductController::updateProductStock()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.P7gSmYq.App\\Controller\\ProductController::updateProductStock()'] = ($container->privates['.service_locator.P7gSmYq'] ?? $container->load('get_ServiceLocator_P7gSmYqService'))->withContext('App\\Controller\\ProductController::updateProductStock()', $container);
    }
}
