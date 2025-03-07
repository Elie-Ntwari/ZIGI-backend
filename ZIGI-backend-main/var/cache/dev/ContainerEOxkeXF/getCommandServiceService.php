<?php

namespace ContainerEOxkeXF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCommandServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\CommandService' shared autowired service.
     *
     * @return \App\Service\CommandService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Service/CommandService.php';

        return $container->privates['App\\Service\\CommandService'] = new \App\Service\CommandService(($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')), ($container->privates['App\\Repository\\ProductRepository'] ?? $container->load('getProductRepositoryService')), ($container->privates['App\\Repository\\CommandRepository'] ?? $container->load('getCommandRepositoryService')));
    }
}
