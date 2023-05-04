<?php

namespace Container5ZAXXMF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_V5preZgService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.v5preZg' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.v5preZg'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'opportunitiesRepository' => ['privates', 'App\\Repository\\OpportunitiesRepository', 'getOpportunitiesRepositoryService', true],
        ], [
            'opportunitiesRepository' => 'App\\Repository\\OpportunitiesRepository',
        ]);
    }
}
