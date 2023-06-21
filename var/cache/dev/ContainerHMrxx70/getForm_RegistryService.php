<?php

namespace ContainerHMrxx70;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForm_RegistryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'form.registry' shared service.
     *
     * @return \Symfony\Component\Form\FormRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormRegistryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormRegistry.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormExtensionInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'DependencyInjection'.\DIRECTORY_SEPARATOR.'DependencyInjectionExtension.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'ResolvedFormTypeFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'Proxy'.\DIRECTORY_SEPARATOR.'ResolvedTypeFactoryDataCollectorProxy.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'ResolvedFormTypeFactory.php';

        return $container->privates['form.registry'] = new \Symfony\Component\Form\FormRegistry([0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Form\\AccountsFormType' => ['privates', 'App\\Form\\AccountsFormType', 'getAccountsFormTypeService', true],
            'App\\Form\\AreaFormType' => ['privates', 'App\\Form\\AreaFormType', 'getAreaFormTypeService', true],
            'App\\Form\\CampaignFormType' => ['privates', 'App\\Form\\CampaignFormType', 'getCampaignFormTypeService', true],
            'App\\Form\\CategoriesFormType' => ['privates', 'App\\Form\\CategoriesFormType', 'getCategoriesFormTypeService', true],
            'App\\Form\\ContactsFormType' => ['privates', 'App\\Form\\ContactsFormType', 'getContactsFormTypeService', true],
            'App\\Form\\ConvertedAccountsFormType' => ['privates', 'App\\Form\\ConvertedAccountsFormType', 'getConvertedAccountsFormTypeService', true],
            'App\\Form\\ConvertedContactFormType' => ['privates', 'App\\Form\\ConvertedContactFormType', 'getConvertedContactFormTypeService', true],
            'App\\Form\\ConvertedFormType' => ['privates', 'App\\Form\\ConvertedFormType', 'getConvertedFormTypeService', true],
            'App\\Form\\DepartmentsFormType' => ['privates', 'App\\Form\\DepartmentsFormType', 'getDepartmentsFormTypeService', true],
            'App\\Form\\EntitiesFormType' => ['privates', 'App\\Form\\EntitiesFormType', 'getEntitiesFormTypeService', true],
            'App\\Form\\LeadsFormType' => ['privates', 'App\\Form\\LeadsFormType', 'getLeadsFormTypeService', true],
            'App\\Form\\LocationsFormType' => ['privates', 'App\\Form\\LocationsFormType', 'getLocationsFormTypeService', true],
            'App\\Form\\OpportunitiesFormType' => ['privates', 'App\\Form\\OpportunitiesFormType', 'getOpportunitiesFormTypeService', true],
            'App\\Form\\PhonesFormType' => ['privates', 'App\\Form\\PhonesFormType', 'getPhonesFormTypeService', true],
            'App\\Form\\PrioritiesFormType' => ['privates', 'App\\Form\\PrioritiesFormType', 'getPrioritiesFormTypeService', true],
            'App\\Form\\RegistrationFormType' => ['privates', 'App\\Form\\RegistrationFormType', 'getRegistrationFormTypeService', true],
            'App\\Form\\ResetPasswordRequestFormType' => ['privates', 'App\\Form\\ResetPasswordRequestFormType', 'getResetPasswordRequestFormTypeService', true],
            'App\\Form\\RolesFormType' => ['privates', 'App\\Form\\RolesFormType', 'getRolesFormTypeService', true],
            'App\\Form\\SourceFormType' => ['privates', 'App\\Form\\SourceFormType', 'getSourceFormTypeService', true],
            'App\\Form\\StagesFormType' => ['privates', 'App\\Form\\StagesFormType', 'getStagesFormTypeService', true],
            'App\\Form\\StatusFormType' => ['privates', 'App\\Form\\StatusFormType', 'getStatusFormTypeService', true],
            'App\\Form\\TypesFormType' => ['privates', 'App\\Form\\TypesFormType', 'getTypesFormTypeService', true],
            'App\\Form\\UserFormType' => ['privates', 'App\\Form\\UserFormType', 'getUserFormTypeService', true],
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => ['privates', 'form.type.entity', 'getForm_Type_EntityService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => ['privates', 'form.type.choice', 'getForm_Type_ChoiceService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType' => ['privates', 'form.type.color', 'getForm_Type_ColorService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => ['privates', 'form.type.file', 'getForm_Type_FileService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => ['privates', 'form.type.form', 'getForm_Type_FormService', true],
        ], [
            'App\\Form\\AccountsFormType' => '?',
            'App\\Form\\AreaFormType' => '?',
            'App\\Form\\CampaignFormType' => '?',
            'App\\Form\\CategoriesFormType' => '?',
            'App\\Form\\ContactsFormType' => '?',
            'App\\Form\\ConvertedAccountsFormType' => '?',
            'App\\Form\\ConvertedContactFormType' => '?',
            'App\\Form\\ConvertedFormType' => '?',
            'App\\Form\\DepartmentsFormType' => '?',
            'App\\Form\\EntitiesFormType' => '?',
            'App\\Form\\LeadsFormType' => '?',
            'App\\Form\\LocationsFormType' => '?',
            'App\\Form\\OpportunitiesFormType' => '?',
            'App\\Form\\PhonesFormType' => '?',
            'App\\Form\\PrioritiesFormType' => '?',
            'App\\Form\\RegistrationFormType' => '?',
            'App\\Form\\ResetPasswordRequestFormType' => '?',
            'App\\Form\\RolesFormType' => '?',
            'App\\Form\\SourceFormType' => '?',
            'App\\Form\\StagesFormType' => '?',
            'App\\Form\\StatusFormType' => '?',
            'App\\Form\\TypesFormType' => '?',
            'App\\Form\\UserFormType' => '?',
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => '?',
        ]), ['Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.form.transformation_failure_handling'] ?? $container->load('getForm_TypeExtension_Form_TransformationFailureHandlingService'));
            yield 1 => ($container->privates['form.type_extension.form.http_foundation'] ?? $container->load('getForm_TypeExtension_Form_HttpFoundationService'));
            yield 2 => ($container->privates['form.type_extension.form.validator'] ?? $container->load('getForm_TypeExtension_Form_ValidatorService'));
            yield 3 => ($container->privates['form.type_extension.upload.validator'] ?? $container->load('getForm_TypeExtension_Upload_ValidatorService'));
            yield 4 => ($container->privates['form.type_extension.csrf'] ?? $container->load('getForm_TypeExtension_CsrfService'));
            yield 5 => ($container->privates['form.type_extension.form.data_collector'] ?? $container->load('getForm_TypeExtension_Form_DataCollectorService'));
        }, 6), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.repeated.validator'] ?? ($container->privates['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension()));
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.submit.validator'] ?? ($container->privates['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension()));
        }, 1)], new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_guesser.validator'] ?? $container->load('getForm_TypeGuesser_ValidatorService'));
            yield 1 => ($container->privates['form.type_guesser.doctrine'] ?? $container->load('getForm_TypeGuesser_DoctrineService'));
        }, 2))], new \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy(new \Symfony\Component\Form\ResolvedFormTypeFactory(), ($container->privates['data_collector.form'] ?? $container->getDataCollector_FormService())));
    }
}
