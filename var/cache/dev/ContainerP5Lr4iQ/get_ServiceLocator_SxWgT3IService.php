<?php

namespace ContainerP5Lr4iQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SxWgT3IService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.SxWgT3I' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.SxWgT3I'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'userPasswordHasher' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
        ], [
            'userPasswordHasher' => '?',
        ]);
    }
}
