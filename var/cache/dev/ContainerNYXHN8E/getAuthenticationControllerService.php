<?php

namespace ContainerNYXHN8E;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAuthenticationControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\AuthenticationController' shared autowired service.
     *
     * @return \App\Controller\AuthenticationController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AuthenticationController.php';

        $container->services['App\\Controller\\AuthenticationController'] = $instance = new \App\Controller\AuthenticationController(($container->privates['security.helper'] ?? $container->load('getSecurity_HelperService')), ($container->privates['security.user_password_hasher'] ?? $container->load('getSecurity_UserPasswordHasherService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')), ($container->privates['App\\Repository\\UsersRepository'] ?? $container->load('getUsersRepositoryService')), ($container->privates['App\\Repository\\RolesRepository'] ?? $container->load('getRolesRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.l1ae.Qz'] ?? $container->load('get_ServiceLocator_L1ae_QzService'))->withContext('App\\Controller\\AuthenticationController', $container));

        return $instance;
    }
}
