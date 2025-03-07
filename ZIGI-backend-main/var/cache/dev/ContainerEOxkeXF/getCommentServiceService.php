<?php

namespace ContainerEOxkeXF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCommentServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\CommentService' shared autowired service.
     *
     * @return \App\Service\CommentService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Service/CommentService.php';

        return $container->privates['App\\Service\\CommentService'] = new \App\Service\CommentService(($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')));
    }
}
