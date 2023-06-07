<?php

namespace ContainerNYXHN8E;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Orm_DefaultEntityManagerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'doctrine.orm.default_entity_manager' shared service.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'common'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Proxy'.\DIRECTORY_SEPARATOR.'Autoloader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'Proxy'.\DIRECTORY_SEPARATOR.'Autoloader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'dbal'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Configuration.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'Configuration.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'Adapter'.\DIRECTORY_SEPARATOR.'ArrayAdapter.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'Driver'.\DIRECTORY_SEPARATOR.'MappingDriver.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'MappingDriver.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'Driver'.\DIRECTORY_SEPARATOR.'MappingDriverChain.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'NamingStrategy.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'UnderscoreNamingStrategy.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'QuoteStrategy.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'Internal'.\DIRECTORY_SEPARATOR.'SQLResultCasing.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'DefaultQuoteStrategy.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'EntityListenerResolver.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'EntityListenerServiceResolver.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'ContainerEntityListenerResolver.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'RepositoryFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ContainerRepositoryFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'ManagerConfigurator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'Driver'.\DIRECTORY_SEPARATOR.'CompatibilityAnnotationDriver.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'Driver'.\DIRECTORY_SEPARATOR.'ColocatedMappingDriver.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'Driver'.\DIRECTORY_SEPARATOR.'AttributeDriver.php';

        $a = new \Doctrine\ORM\Configuration();

        $b = new \Doctrine\Persistence\Mapping\Driver\MappingDriverChain();
        $b->addDriver(($container->privates['doctrine.orm.default_attribute_metadata_driver'] ?? ($container->privates['doctrine.orm.default_attribute_metadata_driver'] = new \Doctrine\ORM\Mapping\Driver\AttributeDriver([0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Entity')]))), 'App\\Entity');

        $a->setEntityNamespaces(['App' => 'App\\Entity']);
        $a->setMetadataCache(new \Symfony\Component\Cache\Adapter\ArrayAdapter());
        $a->setQueryCache(($container->privates['cache.doctrine.orm.default.query'] ?? ($container->privates['cache.doctrine.orm.default.query'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter())));
        $a->setResultCache(($container->privates['cache.doctrine.orm.default.result'] ?? ($container->privates['cache.doctrine.orm.default.result'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter())));
        $a->setMetadataDriverImpl(new \Doctrine\Bundle\DoctrineBundle\Mapping\MappingDriver($b, new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine.ulid_generator' => ['privates', 'doctrine.ulid_generator', 'getDoctrine_UlidGeneratorService', true],
            'doctrine.uuid_generator' => ['privates', 'doctrine.uuid_generator', 'getDoctrine_UuidGeneratorService', true],
        ], [
            'doctrine.ulid_generator' => '?',
            'doctrine.uuid_generator' => '?',
        ])));
        $a->setProxyDir(($container->targetDir.''.'/doctrine/orm/Proxies'));
        $a->setProxyNamespace('Proxies');
        $a->setAutoGenerateProxyClasses(true);
        $a->setSchemaIgnoreClasses([]);
        $a->setClassMetadataFactoryName('Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ClassMetadataFactory');
        $a->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $a->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy(0, true));
        $a->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $a->setEntityListenerResolver(new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver($container));
        $a->setLazyGhostObjectEnabled(false);
        $a->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Repository\\AccountsRepository' => ['privates', 'App\\Repository\\AccountsRepository', 'getAccountsRepositoryService', true],
            'App\\Repository\\AccountsTypeRepository' => ['privates', 'App\\Repository\\AccountsTypeRepository', 'getAccountsTypeRepositoryService', true],
            'App\\Repository\\AddressesRepository' => ['privates', 'App\\Repository\\AddressesRepository', 'getAddressesRepositoryService', true],
            'App\\Repository\\AreaRepository' => ['privates', 'App\\Repository\\AreaRepository', 'getAreaRepositoryService', true],
            'App\\Repository\\CampaignRepository' => ['privates', 'App\\Repository\\CampaignRepository', 'getCampaignRepositoryService', true],
            'App\\Repository\\CategoriesRepository' => ['privates', 'App\\Repository\\CategoriesRepository', 'getCategoriesRepositoryService', true],
            'App\\Repository\\ContactsRepository' => ['privates', 'App\\Repository\\ContactsRepository', 'getContactsRepositoryService', true],
            'App\\Repository\\DepartmentsRepository' => ['privates', 'App\\Repository\\DepartmentsRepository', 'getDepartmentsRepositoryService', true],
            'App\\Repository\\EmailsRepository' => ['privates', 'App\\Repository\\EmailsRepository', 'getEmailsRepositoryService', true],
            'App\\Repository\\EntitiesRepository' => ['privates', 'App\\Repository\\EntitiesRepository', 'getEntitiesRepositoryService', true],
            'App\\Repository\\LeadsRepository' => ['privates', 'App\\Repository\\LeadsRepository', 'getLeadsRepositoryService', true],
            'App\\Repository\\LocationsRepository' => ['privates', 'App\\Repository\\LocationsRepository', 'getLocationsRepositoryService', true],
            'App\\Repository\\LocationsTypeRepository' => ['privates', 'App\\Repository\\LocationsTypeRepository', 'getLocationsTypeRepositoryService', true],
            'App\\Repository\\MovieRepository' => ['privates', 'App\\Repository\\MovieRepository', 'getMovieRepositoryService', true],
            'App\\Repository\\OpportunitiesRepository' => ['privates', 'App\\Repository\\OpportunitiesRepository', 'getOpportunitiesRepositoryService', true],
            'App\\Repository\\PhonesRepository' => ['privates', 'App\\Repository\\PhonesRepository', 'getPhonesRepositoryService', true],
            'App\\Repository\\PrioritiesRepository' => ['privates', 'App\\Repository\\PrioritiesRepository', 'getPrioritiesRepositoryService', true],
            'App\\Repository\\ProductRepository' => ['privates', 'App\\Repository\\ProductRepository', 'getProductRepositoryService', true],
            'App\\Repository\\RolesRepository' => ['privates', 'App\\Repository\\RolesRepository', 'getRolesRepositoryService', true],
            'App\\Repository\\SourcesRepository' => ['privates', 'App\\Repository\\SourcesRepository', 'getSourcesRepositoryService', true],
            'App\\Repository\\StagesRepository' => ['privates', 'App\\Repository\\StagesRepository', 'getStagesRepositoryService', true],
            'App\\Repository\\StatusRepository' => ['privates', 'App\\Repository\\StatusRepository', 'getStatusRepositoryService', true],
            'App\\Repository\\UploadsRepository' => ['privates', 'App\\Repository\\UploadsRepository', 'getUploadsRepositoryService', true],
            'App\\Repository\\UsersRepository' => ['privates', 'App\\Repository\\UsersRepository', 'getUsersRepositoryService', true],
        ], [
            'App\\Repository\\AccountsRepository' => '?',
            'App\\Repository\\AccountsTypeRepository' => '?',
            'App\\Repository\\AddressesRepository' => '?',
            'App\\Repository\\AreaRepository' => '?',
            'App\\Repository\\CampaignRepository' => '?',
            'App\\Repository\\CategoriesRepository' => '?',
            'App\\Repository\\ContactsRepository' => '?',
            'App\\Repository\\DepartmentsRepository' => '?',
            'App\\Repository\\EmailsRepository' => '?',
            'App\\Repository\\EntitiesRepository' => '?',
            'App\\Repository\\LeadsRepository' => '?',
            'App\\Repository\\LocationsRepository' => '?',
            'App\\Repository\\LocationsTypeRepository' => '?',
            'App\\Repository\\MovieRepository' => '?',
            'App\\Repository\\OpportunitiesRepository' => '?',
            'App\\Repository\\PhonesRepository' => '?',
            'App\\Repository\\PrioritiesRepository' => '?',
            'App\\Repository\\ProductRepository' => '?',
            'App\\Repository\\RolesRepository' => '?',
            'App\\Repository\\SourcesRepository' => '?',
            'App\\Repository\\StagesRepository' => '?',
            'App\\Repository\\StatusRepository' => '?',
            'App\\Repository\\UploadsRepository' => '?',
            'App\\Repository\\UsersRepository' => '?',
        ])));

        $container->services['doctrine.orm.default_entity_manager'] = $instance = new \Doctrine\ORM\EntityManager(($container->services['doctrine.dbal.default_connection'] ?? $container->load('getDoctrine_Dbal_DefaultConnectionService')), $a);

        (new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator([], []))->configure($instance);

        return $instance;
    }
}
