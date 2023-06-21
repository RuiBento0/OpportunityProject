<?php

namespace ContainerHMrxx70;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JiduedTService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.JiduedT' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.JiduedT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
            'userPasswordHasher' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
        ], [
            'mailer' => '?',
            'userPasswordHasher' => '?',
        ]);
    }
}
