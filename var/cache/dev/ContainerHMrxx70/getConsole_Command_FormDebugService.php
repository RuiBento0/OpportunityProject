<?php

namespace ContainerHMrxx70;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_FormDebugService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.form_debug' shared service.
     *
     * @return \Symfony\Component\Form\Command\DebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DebugCommand.php';

        $container->privates['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(($container->privates['form.registry'] ?? $container->load('getForm_RegistryService')), [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'App\\Form', 2 => 'Symfony\\Bridge\\Doctrine\\Form\\Type'], [0 => 'App\\Form\\AccountsFormType', 1 => 'App\\Form\\AreaFormType', 2 => 'App\\Form\\CampaignFormType', 3 => 'App\\Form\\CategoriesFormType', 4 => 'App\\Form\\ContactsFormType', 5 => 'App\\Form\\ConvertedAccountsFormType', 6 => 'App\\Form\\ConvertedContactFormType', 7 => 'App\\Form\\ConvertedFormType', 8 => 'App\\Form\\DepartmentsFormType', 9 => 'App\\Form\\EntitiesFormType', 10 => 'App\\Form\\LeadsFormType', 11 => 'App\\Form\\LocationsFormType', 12 => 'App\\Form\\OpportunitiesFormType', 13 => 'App\\Form\\PhonesFormType', 14 => 'App\\Form\\PrioritiesFormType', 15 => 'App\\Form\\RegistrationFormType', 16 => 'App\\Form\\ResetPasswordRequestFormType', 17 => 'App\\Form\\RolesFormType', 18 => 'App\\Form\\SourceFormType', 19 => 'App\\Form\\StagesFormType', 20 => 'App\\Form\\StatusFormType', 21 => 'App\\Form\\TypesFormType', 22 => 'App\\Form\\UserFormType', 23 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 24 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 25 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType', 26 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType', 27 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType'], [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension', 1 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 6 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension', 7 => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension'], [0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser'], ($container->privates['debug.file_link_formatter'] ?? $container->getDebug_FileLinkFormatterService()));

        $instance->setName('debug:form');
        $instance->setDescription('Display form type information');

        return $instance;
    }
}
