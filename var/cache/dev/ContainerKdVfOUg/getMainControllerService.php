<?php

namespace ContainerKdVfOUg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMainControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\MainController' shared autowired service.
     *
     * @return \App\Controller\MainController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'MainController.php';

        $container->services['App\\Controller\\MainController'] = $instance = new \App\Controller\MainController(($container->privates['security.helper'] ?? $container->load('getSecurity_HelperService')), ($container->services['translator'] ?? $container->getTranslatorService()), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['App\\Repository\\UsersRepository'] ?? $container->load('getUsersRepositoryService')), ($container->privates['App\\Repository\\RolesRepository'] ?? $container->load('getRolesRepositoryService')), ($container->privates['App\\Repository\\DepartmentsRepository'] ?? $container->load('getDepartmentsRepositoryService')), ($container->privates['App\\Repository\\CategoriesRepository'] ?? $container->load('getCategoriesRepositoryService')), ($container->privates['App\\Repository\\EntitiesRepository'] ?? $container->load('getEntitiesRepositoryService')), ($container->privates['App\\Repository\\PrioritiesRepository'] ?? $container->load('getPrioritiesRepositoryService')), ($container->privates['App\\Repository\\StatusRepository'] ?? $container->load('getStatusRepositoryService')), ($container->privates['App\\Repository\\StagesRepository'] ?? $container->load('getStagesRepositoryService')), ($container->privates['App\\Repository\\AreaRepository'] ?? $container->load('getAreaRepositoryService')), ($container->privates['App\\Repository\\AccountsTypeRepository'] ?? $container->load('getAccountsTypeRepositoryService')), ($container->privates['App\\Repository\\CampaignRepository'] ?? $container->load('getCampaignRepositoryService')), ($container->privates['App\\Repository\\SourcesRepository'] ?? $container->load('getSourcesRepositoryService')), ($container->privates['App\\Repository\\LocationsRepository'] ?? $container->load('getLocationsRepositoryService')), ($container->privates['App\\Repository\\ContactsRepository'] ?? $container->load('getContactsRepositoryService')), ($container->privates['App\\Repository\\AccountsRepository'] ?? $container->load('getAccountsRepositoryService')), ($container->privates['App\\Repository\\LeadsRepository'] ?? $container->load('getLeadsRepositoryService')), ($container->privates['App\\Repository\\OpportunitiesRepository'] ?? $container->load('getOpportunitiesRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.l1ae.Qz'] ?? $container->load('get_ServiceLocator_L1ae_QzService'))->withContext('App\\Controller\\MainController', $container));

        return $instance;
    }
}
