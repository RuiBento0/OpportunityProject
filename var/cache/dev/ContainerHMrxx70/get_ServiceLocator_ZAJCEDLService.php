<?php

namespace ContainerHMrxx70;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZAJCEDLService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ZAJCEDL' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZAJCEDL'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AccountsController::createaccounts' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\AccountsController::editaccounts' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\AuthenticationController::createrole' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\AuthenticationController::createuser' => ['privates', '.service_locator.JiduedT', 'get_ServiceLocator_JiduedTService', true],
            'App\\Controller\\AuthenticationController::editrole' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\AuthenticationController::edituser' => ['privates', '.service_locator.Eb10OZq', 'get_ServiceLocator_Eb10OZqService', true],
            'App\\Controller\\ContactsController::createcontacts' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\ContactsController::editcontacts' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\ExcelGeneratorController::excelgeneratoraccounts' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\ExcelGeneratorController::excelgeneratorcontacts' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\ExcelGeneratorController::excelgeneratorleads' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\ExcelGeneratorController::excelgeneratoropportunities' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\ExcelGeneratorController::excelgeneratorusers' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\ExcelGeneratorController::exceluploadaccounts' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\ExcelGeneratorController::exceluploadcontacts' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\ExcelGeneratorController::exceluploadleads' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\ExcelGeneratorController::exceluploadopportunities' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\ExcelGeneratorController::reportexcelaccounts' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\ExcelGeneratorController::reportexcelconverted' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\LeadsController::convertleads' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\LeadsController::createleads' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\LeadsController::editlead' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\LeadsController::list' => ['privates', '.service_locator.R3NbhXz', 'get_ServiceLocator_R3NbhXzService', true],
            'App\\Controller\\MailerController::sendEmail' => ['privates', '.service_locator.CpaXrFh', 'get_ServiceLocator_CpaXrFhService', true],
            'App\\Controller\\MailerController::sendEmail2' => ['privates', '.service_locator.gvsgc.U', 'get_ServiceLocator_Gvsgc_UService', true],
            'App\\Controller\\MainController::language' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\MainController::listprofile' => ['privates', '.service_locator.SxWgT3I', 'get_ServiceLocator_SxWgT3IService', true],
            'App\\Controller\\OpportunitiesController::createopportunities' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\OpportunitiesController::editlead' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\OpportunitiesController::list' => ['privates', '.service_locator.v5preZg', 'get_ServiceLocator_V5preZgService', true],
            'App\\Controller\\OptionsController::createaccountstype' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\OptionsController::createarea' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\OptionsController::createcampaign' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\OptionsController::createcategories' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\OptionsController::createdepartments' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\OptionsController::createentities' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\OptionsController::createlocations' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\OptionsController::createpriorities' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\OptionsController::createsources' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\OptionsController::createstages' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\OptionsController::createstatus' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\OptionsController::editaccountstype' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\OptionsController::editarea' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\OptionsController::editcampaign' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\OptionsController::editcategories' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\OptionsController::editcsource' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\OptionsController::editdepartments' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\OptionsController::editentities' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\OptionsController::editlocations' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\OptionsController::editpriorities' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\OptionsController::editstages' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\OptionsController::editstatus' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.e6b0BD8', 'get_ServiceLocator_E6b0BD8Service', true],
            'App\\Controller\\SecurityController::createpassword' => ['privates', '.service_locator.4u5os03', 'get_ServiceLocator_4u5os03Service', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\SecurityController::loginwithtoken' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\SecurityController::newpassword' => ['privates', '.service_locator.4u5os03', 'get_ServiceLocator_4u5os03Service', true],
            'App\\Controller\\SecurityController::resetpassword' => ['privates', '.service_locator.e6b0BD8', 'get_ServiceLocator_E6b0BD8Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Controller\\AccountsController:createaccounts' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\AccountsController:editaccounts' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\AuthenticationController:createrole' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\AuthenticationController:createuser' => ['privates', '.service_locator.JiduedT', 'get_ServiceLocator_JiduedTService', true],
            'App\\Controller\\AuthenticationController:editrole' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\AuthenticationController:edituser' => ['privates', '.service_locator.Eb10OZq', 'get_ServiceLocator_Eb10OZqService', true],
            'App\\Controller\\ContactsController:createcontacts' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\ContactsController:editcontacts' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\ExcelGeneratorController:excelgeneratoraccounts' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\ExcelGeneratorController:excelgeneratorcontacts' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\ExcelGeneratorController:excelgeneratorleads' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\ExcelGeneratorController:excelgeneratoropportunities' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\ExcelGeneratorController:excelgeneratorusers' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\ExcelGeneratorController:exceluploadaccounts' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\ExcelGeneratorController:exceluploadcontacts' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\ExcelGeneratorController:exceluploadleads' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\ExcelGeneratorController:exceluploadopportunities' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\ExcelGeneratorController:reportexcelaccounts' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\ExcelGeneratorController:reportexcelconverted' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\LeadsController:convertleads' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\LeadsController:createleads' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\LeadsController:editlead' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\LeadsController:list' => ['privates', '.service_locator.R3NbhXz', 'get_ServiceLocator_R3NbhXzService', true],
            'App\\Controller\\MailerController:sendEmail' => ['privates', '.service_locator.CpaXrFh', 'get_ServiceLocator_CpaXrFhService', true],
            'App\\Controller\\MailerController:sendEmail2' => ['privates', '.service_locator.gvsgc.U', 'get_ServiceLocator_Gvsgc_UService', true],
            'App\\Controller\\MainController:language' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\MainController:listprofile' => ['privates', '.service_locator.SxWgT3I', 'get_ServiceLocator_SxWgT3IService', true],
            'App\\Controller\\OpportunitiesController:createopportunities' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\OpportunitiesController:editlead' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\OpportunitiesController:list' => ['privates', '.service_locator.v5preZg', 'get_ServiceLocator_V5preZgService', true],
            'App\\Controller\\OptionsController:createaccountstype' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\OptionsController:createarea' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\OptionsController:createcampaign' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\OptionsController:createcategories' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\OptionsController:createdepartments' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\OptionsController:createentities' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\OptionsController:createlocations' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\OptionsController:createpriorities' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\OptionsController:createsources' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\OptionsController:createstages' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\OptionsController:createstatus' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\OptionsController:editaccountstype' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\OptionsController:editarea' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\OptionsController:editcampaign' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\OptionsController:editcategories' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\OptionsController:editcsource' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\OptionsController:editdepartments' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\OptionsController:editentities' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\OptionsController:editlocations' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\OptionsController:editpriorities' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\OptionsController:editstages' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\OptionsController:editstatus' => ['privates', '.service_locator.M9PMcRV', 'get_ServiceLocator_M9PMcRVService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.e6b0BD8', 'get_ServiceLocator_E6b0BD8Service', true],
            'App\\Controller\\SecurityController:createpassword' => ['privates', '.service_locator.4u5os03', 'get_ServiceLocator_4u5os03Service', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\SecurityController:loginwithtoken' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\SecurityController:newpassword' => ['privates', '.service_locator.4u5os03', 'get_ServiceLocator_4u5os03Service', true],
            'App\\Controller\\SecurityController:resetpassword' => ['privates', '.service_locator.e6b0BD8', 'get_ServiceLocator_E6b0BD8Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
        ], [
            'App\\Controller\\AccountsController::createaccounts' => '?',
            'App\\Controller\\AccountsController::editaccounts' => '?',
            'App\\Controller\\AuthenticationController::createrole' => '?',
            'App\\Controller\\AuthenticationController::createuser' => '?',
            'App\\Controller\\AuthenticationController::editrole' => '?',
            'App\\Controller\\AuthenticationController::edituser' => '?',
            'App\\Controller\\ContactsController::createcontacts' => '?',
            'App\\Controller\\ContactsController::editcontacts' => '?',
            'App\\Controller\\ExcelGeneratorController::excelgeneratoraccounts' => '?',
            'App\\Controller\\ExcelGeneratorController::excelgeneratorcontacts' => '?',
            'App\\Controller\\ExcelGeneratorController::excelgeneratorleads' => '?',
            'App\\Controller\\ExcelGeneratorController::excelgeneratoropportunities' => '?',
            'App\\Controller\\ExcelGeneratorController::excelgeneratorusers' => '?',
            'App\\Controller\\ExcelGeneratorController::exceluploadaccounts' => '?',
            'App\\Controller\\ExcelGeneratorController::exceluploadcontacts' => '?',
            'App\\Controller\\ExcelGeneratorController::exceluploadleads' => '?',
            'App\\Controller\\ExcelGeneratorController::exceluploadopportunities' => '?',
            'App\\Controller\\ExcelGeneratorController::reportexcelaccounts' => '?',
            'App\\Controller\\ExcelGeneratorController::reportexcelconverted' => '?',
            'App\\Controller\\LeadsController::convertleads' => '?',
            'App\\Controller\\LeadsController::createleads' => '?',
            'App\\Controller\\LeadsController::editlead' => '?',
            'App\\Controller\\LeadsController::list' => '?',
            'App\\Controller\\MailerController::sendEmail' => '?',
            'App\\Controller\\MailerController::sendEmail2' => '?',
            'App\\Controller\\MainController::language' => '?',
            'App\\Controller\\MainController::listprofile' => '?',
            'App\\Controller\\OpportunitiesController::createopportunities' => '?',
            'App\\Controller\\OpportunitiesController::editlead' => '?',
            'App\\Controller\\OpportunitiesController::list' => '?',
            'App\\Controller\\OptionsController::createaccountstype' => '?',
            'App\\Controller\\OptionsController::createarea' => '?',
            'App\\Controller\\OptionsController::createcampaign' => '?',
            'App\\Controller\\OptionsController::createcategories' => '?',
            'App\\Controller\\OptionsController::createdepartments' => '?',
            'App\\Controller\\OptionsController::createentities' => '?',
            'App\\Controller\\OptionsController::createlocations' => '?',
            'App\\Controller\\OptionsController::createpriorities' => '?',
            'App\\Controller\\OptionsController::createsources' => '?',
            'App\\Controller\\OptionsController::createstages' => '?',
            'App\\Controller\\OptionsController::createstatus' => '?',
            'App\\Controller\\OptionsController::editaccountstype' => '?',
            'App\\Controller\\OptionsController::editarea' => '?',
            'App\\Controller\\OptionsController::editcampaign' => '?',
            'App\\Controller\\OptionsController::editcategories' => '?',
            'App\\Controller\\OptionsController::editcsource' => '?',
            'App\\Controller\\OptionsController::editdepartments' => '?',
            'App\\Controller\\OptionsController::editentities' => '?',
            'App\\Controller\\OptionsController::editlocations' => '?',
            'App\\Controller\\OptionsController::editpriorities' => '?',
            'App\\Controller\\OptionsController::editstages' => '?',
            'App\\Controller\\OptionsController::editstatus' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::createpassword' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\SecurityController::loginwithtoken' => '?',
            'App\\Controller\\SecurityController::newpassword' => '?',
            'App\\Controller\\SecurityController::resetpassword' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\AccountsController:createaccounts' => '?',
            'App\\Controller\\AccountsController:editaccounts' => '?',
            'App\\Controller\\AuthenticationController:createrole' => '?',
            'App\\Controller\\AuthenticationController:createuser' => '?',
            'App\\Controller\\AuthenticationController:editrole' => '?',
            'App\\Controller\\AuthenticationController:edituser' => '?',
            'App\\Controller\\ContactsController:createcontacts' => '?',
            'App\\Controller\\ContactsController:editcontacts' => '?',
            'App\\Controller\\ExcelGeneratorController:excelgeneratoraccounts' => '?',
            'App\\Controller\\ExcelGeneratorController:excelgeneratorcontacts' => '?',
            'App\\Controller\\ExcelGeneratorController:excelgeneratorleads' => '?',
            'App\\Controller\\ExcelGeneratorController:excelgeneratoropportunities' => '?',
            'App\\Controller\\ExcelGeneratorController:excelgeneratorusers' => '?',
            'App\\Controller\\ExcelGeneratorController:exceluploadaccounts' => '?',
            'App\\Controller\\ExcelGeneratorController:exceluploadcontacts' => '?',
            'App\\Controller\\ExcelGeneratorController:exceluploadleads' => '?',
            'App\\Controller\\ExcelGeneratorController:exceluploadopportunities' => '?',
            'App\\Controller\\ExcelGeneratorController:reportexcelaccounts' => '?',
            'App\\Controller\\ExcelGeneratorController:reportexcelconverted' => '?',
            'App\\Controller\\LeadsController:convertleads' => '?',
            'App\\Controller\\LeadsController:createleads' => '?',
            'App\\Controller\\LeadsController:editlead' => '?',
            'App\\Controller\\LeadsController:list' => '?',
            'App\\Controller\\MailerController:sendEmail' => '?',
            'App\\Controller\\MailerController:sendEmail2' => '?',
            'App\\Controller\\MainController:language' => '?',
            'App\\Controller\\MainController:listprofile' => '?',
            'App\\Controller\\OpportunitiesController:createopportunities' => '?',
            'App\\Controller\\OpportunitiesController:editlead' => '?',
            'App\\Controller\\OpportunitiesController:list' => '?',
            'App\\Controller\\OptionsController:createaccountstype' => '?',
            'App\\Controller\\OptionsController:createarea' => '?',
            'App\\Controller\\OptionsController:createcampaign' => '?',
            'App\\Controller\\OptionsController:createcategories' => '?',
            'App\\Controller\\OptionsController:createdepartments' => '?',
            'App\\Controller\\OptionsController:createentities' => '?',
            'App\\Controller\\OptionsController:createlocations' => '?',
            'App\\Controller\\OptionsController:createpriorities' => '?',
            'App\\Controller\\OptionsController:createsources' => '?',
            'App\\Controller\\OptionsController:createstages' => '?',
            'App\\Controller\\OptionsController:createstatus' => '?',
            'App\\Controller\\OptionsController:editaccountstype' => '?',
            'App\\Controller\\OptionsController:editarea' => '?',
            'App\\Controller\\OptionsController:editcampaign' => '?',
            'App\\Controller\\OptionsController:editcategories' => '?',
            'App\\Controller\\OptionsController:editcsource' => '?',
            'App\\Controller\\OptionsController:editdepartments' => '?',
            'App\\Controller\\OptionsController:editentities' => '?',
            'App\\Controller\\OptionsController:editlocations' => '?',
            'App\\Controller\\OptionsController:editpriorities' => '?',
            'App\\Controller\\OptionsController:editstages' => '?',
            'App\\Controller\\OptionsController:editstatus' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:createpassword' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\SecurityController:loginwithtoken' => '?',
            'App\\Controller\\SecurityController:newpassword' => '?',
            'App\\Controller\\SecurityController:resetpassword' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
