<?php

namespace ContainerHMrxx70;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Gvsgc_UService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.gvsgc.U' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.gvsgc.U'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'mailer2' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
        ], [
            'mailer2' => '?',
        ]);
    }
}
