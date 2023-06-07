<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/business/accounts/create' => [[['_route' => 'accounts_create', '_controller' => 'App\\Controller\\AccountsController::createaccounts'], null, null, null, false, false, null]],
        '/authentication/users/create' => [[['_route' => 'user_create', '_controller' => 'App\\Controller\\AuthenticationController::createuser'], null, null, null, false, false, null]],
        '/authentication/role/create' => [[['_route' => 'role_create', '_controller' => 'App\\Controller\\AuthenticationController::createrole'], null, null, null, false, false, null]],
        '/business/contacts/create' => [[['_route' => 'contacts_create', '_controller' => 'App\\Controller\\ContactsController::createcontacts'], null, null, null, false, false, null]],
        '/excel/generator/accounts' => [[['_route' => 'app_excel_generator_accounts', '_controller' => 'App\\Controller\\ExcelGeneratorController::excelgeneratoraccounts'], null, null, null, false, false, null]],
        '/excel/generator/users' => [[['_route' => 'app_excel_generator_users', '_controller' => 'App\\Controller\\ExcelGeneratorController::excelgeneratorusers'], null, null, null, false, false, null]],
        '/excel/generator/contacts' => [[['_route' => 'app_excel_generator_contacts', '_controller' => 'App\\Controller\\ExcelGeneratorController::excelgeneratorcontacts'], null, null, null, false, false, null]],
        '/excel/generator/leads' => [[['_route' => 'app_excel_generator_leads', '_controller' => 'App\\Controller\\ExcelGeneratorController::excelgeneratorleads'], null, null, null, false, false, null]],
        '/excel/generator/opportunities' => [[['_route' => 'app_excel_generator_opportunities', '_controller' => 'App\\Controller\\ExcelGeneratorController::excelgeneratoropportunities'], null, null, null, false, false, null]],
        '/excel/import/accounts' => [[['_route' => 'app_excel_import_accounts', '_controller' => 'App\\Controller\\ExcelGeneratorController::excelimportaccounts'], null, null, null, false, false, null]],
        '/excel/upload/accounts' => [[['_route' => 'app_excel_upload_accounts', '_controller' => 'App\\Controller\\ExcelGeneratorController::exceluploadaccounts'], null, null, null, false, false, null]],
        '/excel/import/contacts' => [[['_route' => 'app_excel_import_contacts', '_controller' => 'App\\Controller\\ExcelGeneratorController::excelimportcontacts'], null, null, null, false, false, null]],
        '/excel/upload/contacts' => [[['_route' => 'app_excel_upload_contacts', '_controller' => 'App\\Controller\\ExcelGeneratorController::exceluploadcontacts'], null, null, null, false, false, null]],
        '/excel/import/opportunities' => [[['_route' => 'app_excel_import_opportunities', '_controller' => 'App\\Controller\\ExcelGeneratorController::excelimportopportunities'], null, null, null, false, false, null]],
        '/excel/upload/opportunities' => [[['_route' => 'app_excel_upload_opportunities', '_controller' => 'App\\Controller\\ExcelGeneratorController::exceluploadopportunities'], null, null, null, false, false, null]],
        '/excel/import/leads' => [[['_route' => 'app_excel_import_leads', '_controller' => 'App\\Controller\\ExcelGeneratorController::excelimportleads'], null, null, null, false, false, null]],
        '/excel/import/leads/template' => [[['_route' => 'app_excel_import_template', '_controller' => 'App\\Controller\\ExcelGeneratorController::exceluploadleadstemplate'], null, null, null, false, false, null]],
        '/excel/upload/leads' => [[['_route' => 'app_excel_upload_leads', '_controller' => 'App\\Controller\\ExcelGeneratorController::exceluploadleads'], null, null, null, false, false, null]],
        '/reports/accounts' => [[['_route' => 'app_reports_accounts', '_controller' => 'App\\Controller\\ExcelGeneratorController::reportexcelaccounts'], null, null, null, false, false, null]],
        '/reports/converted' => [[['_route' => 'app_reports_converted', '_controller' => 'App\\Controller\\ExcelGeneratorController::reportexcelconverted'], null, null, null, false, false, null]],
        '/leads/list' => [[['_route' => 'app_leads', '_controller' => 'App\\Controller\\LeadsController::list'], null, ['GET' => 0], null, false, false, null]],
        '/business/leads/create' => [[['_route' => 'leads_create', '_controller' => 'App\\Controller\\LeadsController::createleads'], null, null, null, false, false, null]],
        '/email' => [[['_route' => 'app_mailer_sendemail', '_controller' => 'App\\Controller\\MailerController::sendEmail'], null, null, null, false, false, null]],
        '/email2' => [[['_route' => 'app_mailer_sendemail2', '_controller' => 'App\\Controller\\MailerController::sendEmail2'], null, null, null, false, false, null]],
        '/index' => [[['_route' => 'app_index', '_controller' => 'App\\Controller\\MainController::index2'], null, null, null, false, false, null]],
        '/options' => [[['_route' => 'app_options', '_controller' => 'App\\Controller\\MainController::index'], null, ['GET' => 0], null, false, false, null]],
        '/authentication/users' => [[['_route' => 'app_authentication_users', '_controller' => 'App\\Controller\\MainController::listusers'], null, null, null, false, false, null]],
        '/authentication/roles' => [[['_route' => 'app_authentication_roles', '_controller' => 'App\\Controller\\MainController::listroles'], null, null, null, false, false, null]],
        '/options/departments' => [[['_route' => 'app_options_departments', '_controller' => 'App\\Controller\\MainController::listdepartments'], null, ['GET' => 0], null, false, false, null]],
        '/options/categories' => [[['_route' => 'app_options_categories', '_controller' => 'App\\Controller\\MainController::listcategories'], null, ['GET' => 0], null, false, false, null]],
        '/options/entities' => [[['_route' => 'app_options_entities', '_controller' => 'App\\Controller\\MainController::listentities'], null, ['GET' => 0], null, false, false, null]],
        '/options/priorities' => [[['_route' => 'app_options_priorities', '_controller' => 'App\\Controller\\MainController::listpriorities'], null, ['GET' => 0], null, false, false, null]],
        '/options/status' => [[['_route' => 'app_options_status', '_controller' => 'App\\Controller\\MainController::liststatus'], null, ['GET' => 0], null, false, false, null]],
        '/options/stages' => [[['_route' => 'app_options_stages', '_controller' => 'App\\Controller\\MainController::liststages'], null, ['GET' => 0], null, false, false, null]],
        '/options/area' => [[['_route' => 'app_options_area', '_controller' => 'App\\Controller\\MainController::listarea'], null, ['GET' => 0], null, false, false, null]],
        '/options/accountstype' => [[['_route' => 'app_options_accountstype', '_controller' => 'App\\Controller\\MainController::listaccountstype'], null, ['GET' => 0], null, false, false, null]],
        '/options/campaign' => [[['_route' => 'app_options_campaign', '_controller' => 'App\\Controller\\MainController::listcampaign'], null, null, null, false, false, null]],
        '/options/source' => [[['_route' => 'app_options_sources', '_controller' => 'App\\Controller\\MainController::listsources'], null, null, null, false, false, null]],
        '/options/locations' => [[['_route' => 'app_options_locations', '_controller' => 'App\\Controller\\MainController::listlocations'], null, null, null, false, false, null]],
        '/work' => [[['_route' => 'app_work', '_controller' => 'App\\Controller\\MainController::listwork'], null, ['GET' => 0], null, false, false, null]],
        '/business/contacts' => [[['_route' => 'app_business_contacts', '_controller' => 'App\\Controller\\MainController::listcontacts'], null, ['GET' => 0], null, false, false, null]],
        '/business/accounts' => [[['_route' => 'app_business_accounts', '_controller' => 'App\\Controller\\MainController::listaccounts'], null, ['GET' => 0], null, false, false, null]],
        '/business/leads' => [[['_route' => 'app_business_leads', '_controller' => 'App\\Controller\\MainController::listleads'], null, ['GET' => 0], null, false, false, null]],
        '/business/opportunities' => [[['_route' => 'app_business_opportunities', '_controller' => 'App\\Controller\\MainController::listopportunities'], null, ['GET' => 0], null, false, false, null]],
        '/' => [[['_route' => 'app_main', '_controller' => 'App\\Controller\\MainController::main'], null, ['GET' => 0], null, false, false, null]],
        '/support/reports' => [[['_route' => 'app_support_reports', '_controller' => 'App\\Controller\\MainController::reports'], null, ['GET' => 0], null, false, false, null]],
        '/opportunities/list' => [[['_route' => 'app_opportunities', '_controller' => 'App\\Controller\\OpportunitiesController::list'], null, ['GET' => 0], null, false, false, null]],
        '/business/opportunities/create' => [[['_route' => 'opportunities_create', '_controller' => 'App\\Controller\\OpportunitiesController::createopportunities'], null, null, null, false, false, null]],
        '/options/locations/create' => [[['_route' => 'locations_create', '_controller' => 'App\\Controller\\OptionsController::createlocations'], null, null, null, false, false, null]],
        '/options/departments/create' => [[['_route' => 'departments_create', '_controller' => 'App\\Controller\\OptionsController::createdepartments'], null, null, null, false, false, null]],
        '/options/categories/create' => [[['_route' => 'categories_create', '_controller' => 'App\\Controller\\OptionsController::createcategories'], null, null, null, false, false, null]],
        '/options/entities/create' => [[['_route' => 'entities_create', '_controller' => 'App\\Controller\\OptionsController::createentities'], null, null, null, false, false, null]],
        '/options/priorities/create' => [[['_route' => 'priorities_create', '_controller' => 'App\\Controller\\OptionsController::createpriorities'], null, null, null, false, false, null]],
        '/options/status/create' => [[['_route' => 'status_create', '_controller' => 'App\\Controller\\OptionsController::createstatus'], null, null, null, false, false, null]],
        '/options/stages/create' => [[['_route' => 'stages_create', '_controller' => 'App\\Controller\\OptionsController::createstages'], null, null, null, false, false, null]],
        '/options/area/create' => [[['_route' => 'area_create', '_controller' => 'App\\Controller\\OptionsController::createarea'], null, null, null, false, false, null]],
        '/options/accountstype/create' => [[['_route' => 'accountstype_create', '_controller' => 'App\\Controller\\OptionsController::createaccountstype'], null, null, null, false, false, null]],
        '/options/campaign/create' => [[['_route' => 'campaign_create', '_controller' => 'App\\Controller\\OptionsController::createcampaign'], null, null, null, false, false, null]],
        '/options/sources/create' => [[['_route' => 'sources_create', '_controller' => 'App\\Controller\\OptionsController::createsources'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/resetpassword' => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\SecurityController::resetpassword'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/business/(?'
                    .'|accounts/(?'
                        .'|show/([^/]++)(*:80)'
                        .'|edit/([^/]++)(*:100)'
                        .'|delete/([^/]++)(*:123)'
                    .')'
                    .'|con(?'
                        .'|tacts/(?'
                            .'|show/([^/]++)(*:160)'
                            .'|edit/([^/]++)(*:181)'
                            .'|delete/([^/]++)(*:204)'
                        .')'
                        .'|vert/lead/([^/]++)(*:231)'
                    .')'
                    .'|leads/(?'
                        .'|show/([^/]++)(*:262)'
                        .'|edit/([^/]++)(*:283)'
                        .'|delete/([^/]++)(*:306)'
                    .')'
                    .'|opportunities/(?'
                        .'|show/([^/]++)(*:345)'
                        .'|edit/([^/]++)(*:366)'
                        .'|delete/([^/]++)(*:389)'
                    .')'
                .')'
                .'|/authentication/(?'
                    .'|users/(?'
                        .'|show/([^/]++)(*:440)'
                        .'|edit/([^/]++)(*:461)'
                        .'|delete/([^/]++)(*:484)'
                    .')'
                    .'|role/(?'
                        .'|show/([^/]++)(*:514)'
                        .'|edit/([^/]++)(*:535)'
                        .'|delete/([^/]++)(*:558)'
                    .')'
                .')'
                .'|/p(?'
                    .'|rofile/([^/]++)(*:588)'
                    .'|df/generator/(?'
                        .'|([^/]++)(*:620)'
                        .'|accounts/([^/]++)(*:645)'
                        .'|contacts/([^/]++)(*:670)'
                        .'|leads/([^/]++)(*:692)'
                        .'|opportunities/([^/]++)(*:722)'
                    .')'
                    .'|assword/([^/]++)(*:747)'
                .')'
                .'|/options/(?'
                    .'|locations/(?'
                        .'|show/([^/]++)(*:794)'
                        .'|edit/([^/]++)(*:815)'
                        .'|delete/([^/]++)(*:838)'
                    .')'
                    .'|departments/(?'
                        .'|show/([^/]++)(*:875)'
                        .'|edit/([^/]++)(*:896)'
                        .'|delete/([^/]++)(*:919)'
                    .')'
                    .'|ca(?'
                        .'|tegories/(?'
                            .'|show/([^/]++)(*:958)'
                            .'|edit/([^/]++)(*:979)'
                            .'|delete/([^/]++)(*:1002)'
                        .')'
                        .'|mpaign/(?'
                            .'|show/([^/]++)(*:1035)'
                            .'|edit/([^/]++)(*:1057)'
                            .'|delete/([^/]++)(*:1081)'
                        .')'
                    .')'
                    .'|entities/(?'
                        .'|show/([^/]++)(*:1117)'
                        .'|edit/([^/]++)(*:1139)'
                        .'|delete/([^/]++)(*:1163)'
                    .')'
                    .'|priorities/(?'
                        .'|show/([^/]++)(*:1200)'
                        .'|edit/([^/]++)(*:1222)'
                        .'|delete/([^/]++)(*:1246)'
                    .')'
                    .'|s(?'
                        .'|ta(?'
                            .'|tus/(?'
                                .'|show/([^/]++)(*:1285)'
                                .'|edit/([^/]++)(*:1307)'
                                .'|delete/([^/]++)(*:1331)'
                            .')'
                            .'|ges/(?'
                                .'|show/([^/]++)(*:1361)'
                                .'|edit/([^/]++)(*:1383)'
                                .'|delete/([^/]++)(*:1407)'
                            .')'
                        .')'
                        .'|ources/(?'
                            .'|show/([^/]++)(*:1441)'
                            .'|edit/([^/]++)(*:1463)'
                            .'|delete/([^/]++)(*:1487)'
                        .')'
                    .')'
                    .'|a(?'
                        .'|rea/(?'
                            .'|show/([^/]++)(*:1522)'
                            .'|edit/([^/]++)(*:1544)'
                            .'|delete/([^/]++)(*:1568)'
                        .')'
                        .'|ccountstype/(?'
                            .'|show/([^/]++)(*:1606)'
                            .'|edit/([^/]++)(*:1628)'
                            .'|delete/([^/]++)(*:1652)'
                        .')'
                    .')'
                .')'
                .'|/logint/([^/]++)(*:1680)'
                .'|/newpassword/([^/]++)(*:1710)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        80 => [[['_route' => 'accounts_show', '_controller' => 'App\\Controller\\AccountsController::showaccounts'], ['id'], null, null, false, true, null]],
        100 => [[['_route' => 'accounts_edit', '_controller' => 'App\\Controller\\AccountsController::editaccounts'], ['id'], null, null, false, true, null]],
        123 => [[['_route' => 'accounts_delete', '_controller' => 'App\\Controller\\AccountsController::deletecontacts'], ['id'], ['GET' => 0], null, false, true, null]],
        160 => [[['_route' => 'contacts_show', '_controller' => 'App\\Controller\\ContactsController::showcontacts'], ['id'], null, null, false, true, null]],
        181 => [[['_route' => 'contacts_edit', '_controller' => 'App\\Controller\\ContactsController::editcontacts'], ['id'], null, null, false, true, null]],
        204 => [[['_route' => 'contacts_delete', '_controller' => 'App\\Controller\\ContactsController::deletecontacts'], ['id'], ['GET' => 0], null, false, true, null]],
        231 => [[['_route' => 'leads_convert', '_controller' => 'App\\Controller\\LeadsController::convertleads'], ['id'], null, null, false, true, null]],
        262 => [[['_route' => 'leads_show', '_controller' => 'App\\Controller\\LeadsController::showlead'], ['id'], ['GET' => 0], null, false, true, null]],
        283 => [[['_route' => 'leads_edit', '_controller' => 'App\\Controller\\LeadsController::editlead'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        306 => [[['_route' => 'leads_delete', '_controller' => 'App\\Controller\\LeadsController::deleteleads'], ['id'], null, null, false, true, null]],
        345 => [[['_route' => 'opportunities_show', '_controller' => 'App\\Controller\\OpportunitiesController::showlead'], ['id'], ['GET' => 0], null, false, true, null]],
        366 => [[['_route' => 'opportunities_edit', '_controller' => 'App\\Controller\\OpportunitiesController::editlead'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        389 => [[['_route' => 'opportunities_delete', '_controller' => 'App\\Controller\\OpportunitiesController::deleteopportunities'], ['id'], null, null, false, true, null]],
        440 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\AuthenticationController::showuser'], ['id'], null, null, false, true, null]],
        461 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\AuthenticationController::edituser'], ['id'], null, null, false, true, null]],
        484 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\AuthenticationController::deleteuser'], ['id'], ['GET' => 0], null, false, true, null]],
        514 => [[['_route' => 'role_show', '_controller' => 'App\\Controller\\AuthenticationController::showrole'], ['id'], null, null, false, true, null]],
        535 => [[['_route' => 'role_edit', '_controller' => 'App\\Controller\\AuthenticationController::editrole'], ['id'], null, null, false, true, null]],
        558 => [[['_route' => 'role_delete', '_controller' => 'App\\Controller\\AuthenticationController::deleterole'], ['id'], ['GET' => 0], null, false, true, null]],
        588 => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\MainController::listprofile'], ['id'], null, null, false, true, null]],
        620 => [[['_route' => 'app_pdf_generator', '_controller' => 'App\\Controller\\PdfGeneratorController::pdfgenerator'], ['entity'], ['GET' => 0], null, false, true, null]],
        645 => [[['_route' => 'app_pdf_generator_accounts', '_controller' => 'App\\Controller\\PdfGeneratorController::pdfgeneratoraccounts'], ['id'], ['GET' => 0], null, false, true, null]],
        670 => [[['_route' => 'app_pdf_generator_contacts', '_controller' => 'App\\Controller\\PdfGeneratorController::pdfgeneratorcontacts'], ['id'], ['GET' => 0], null, false, true, null]],
        692 => [[['_route' => 'app_pdf_generator_leads', '_controller' => 'App\\Controller\\PdfGeneratorController::pdfgeneratorleads'], ['id'], ['GET' => 0], null, false, true, null]],
        722 => [[['_route' => 'app_pdf_generator_opportunities', '_controller' => 'App\\Controller\\PdfGeneratorController::pdfgeneratoropportunities'], ['id'], ['GET' => 0], null, false, true, null]],
        747 => [[['_route' => 'app_password', '_controller' => 'App\\Controller\\SecurityController::createpassword'], ['token'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        794 => [[['_route' => 'locations_show', '_controller' => 'App\\Controller\\OptionsController::showlocations'], ['id'], null, null, false, true, null]],
        815 => [[['_route' => 'locations_edit', '_controller' => 'App\\Controller\\OptionsController::editlocations'], ['id'], null, null, false, true, null]],
        838 => [[['_route' => 'locations_delete', '_controller' => 'App\\Controller\\OptionsController::deletelocations'], ['id'], ['GET' => 0], null, false, true, null]],
        875 => [[['_route' => 'departments_show', '_controller' => 'App\\Controller\\OptionsController::showdepartments'], ['id'], null, null, false, true, null]],
        896 => [[['_route' => 'departments_edit', '_controller' => 'App\\Controller\\OptionsController::editdepartments'], ['id'], null, null, false, true, null]],
        919 => [[['_route' => 'departments_delete', '_controller' => 'App\\Controller\\OptionsController::deletedepartments'], ['id'], ['GET' => 0], null, false, true, null]],
        958 => [[['_route' => 'categories_show', '_controller' => 'App\\Controller\\OptionsController::showcategories'], ['id'], null, null, false, true, null]],
        979 => [[['_route' => 'categories_edit', '_controller' => 'App\\Controller\\OptionsController::editcategories'], ['id'], null, null, false, true, null]],
        1002 => [[['_route' => 'categories_delete', '_controller' => 'App\\Controller\\OptionsController::deletecategories'], ['id'], ['GET' => 0], null, false, true, null]],
        1035 => [[['_route' => 'campaign_show', '_controller' => 'App\\Controller\\OptionsController::showcampaign'], ['id'], null, null, false, true, null]],
        1057 => [[['_route' => 'campaign_edit', '_controller' => 'App\\Controller\\OptionsController::editcampaign'], ['id'], null, null, false, true, null]],
        1081 => [[['_route' => 'campaign_delete', '_controller' => 'App\\Controller\\OptionsController::deletecampaign'], ['id'], ['GET' => 0], null, false, true, null]],
        1117 => [[['_route' => 'entities_show', '_controller' => 'App\\Controller\\OptionsController::showentities'], ['id'], null, null, false, true, null]],
        1139 => [[['_route' => 'entities_edit', '_controller' => 'App\\Controller\\OptionsController::editentities'], ['id'], null, null, false, true, null]],
        1163 => [[['_route' => 'entities_delete', '_controller' => 'App\\Controller\\OptionsController::deleteentities'], ['id'], ['GET' => 0], null, false, true, null]],
        1200 => [[['_route' => 'priorities_show', '_controller' => 'App\\Controller\\OptionsController::showpriorities'], ['id'], null, null, false, true, null]],
        1222 => [[['_route' => 'priorities_edit', '_controller' => 'App\\Controller\\OptionsController::editpriorities'], ['id'], null, null, false, true, null]],
        1246 => [[['_route' => 'priorities_delete', '_controller' => 'App\\Controller\\OptionsController::deletepriorities'], ['id'], ['GET' => 0], null, false, true, null]],
        1285 => [[['_route' => 'status_show', '_controller' => 'App\\Controller\\OptionsController::showstatus'], ['id'], null, null, false, true, null]],
        1307 => [[['_route' => 'status_edit', '_controller' => 'App\\Controller\\OptionsController::editstatus'], ['id'], null, null, false, true, null]],
        1331 => [[['_route' => 'status_delete', '_controller' => 'App\\Controller\\OptionsController::deletestatus'], ['id'], ['GET' => 0], null, false, true, null]],
        1361 => [[['_route' => 'stages_show', '_controller' => 'App\\Controller\\OptionsController::showstages'], ['id'], null, null, false, true, null]],
        1383 => [[['_route' => 'stages_edit', '_controller' => 'App\\Controller\\OptionsController::editstages'], ['id'], null, null, false, true, null]],
        1407 => [[['_route' => 'stages_delete', '_controller' => 'App\\Controller\\OptionsController::deletestages'], ['id'], ['GET' => 0], null, false, true, null]],
        1441 => [[['_route' => 'sources_show', '_controller' => 'App\\Controller\\OptionsController::showcsource'], ['id'], null, null, false, true, null]],
        1463 => [[['_route' => 'sources_edit', '_controller' => 'App\\Controller\\OptionsController::editcsource'], ['id'], null, null, false, true, null]],
        1487 => [[['_route' => 'sources_delete', '_controller' => 'App\\Controller\\OptionsController::deletesources'], ['id'], null, null, false, true, null]],
        1522 => [[['_route' => 'area_show', '_controller' => 'App\\Controller\\OptionsController::showarea'], ['id'], null, null, false, true, null]],
        1544 => [[['_route' => 'area_edit', '_controller' => 'App\\Controller\\OptionsController::editarea'], ['id'], null, null, false, true, null]],
        1568 => [[['_route' => 'area_delete', '_controller' => 'App\\Controller\\OptionsController::deletearea'], ['id'], ['GET' => 0], null, false, true, null]],
        1606 => [[['_route' => 'accountstype_show', '_controller' => 'App\\Controller\\OptionsController::showaccountstype'], ['id'], null, null, false, true, null]],
        1628 => [[['_route' => 'accountstype_edit', '_controller' => 'App\\Controller\\OptionsController::editaccountstype'], ['id'], null, null, false, true, null]],
        1652 => [[['_route' => 'accountstype_delete', '_controller' => 'App\\Controller\\OptionsController::deleteaccountstype'], ['id'], ['GET' => 0], null, false, true, null]],
        1680 => [[['_route' => 'app_login_token', '_controller' => 'App\\Controller\\SecurityController::loginwithtoken'], ['token'], null, null, false, true, null]],
        1710 => [
            [['_route' => 'app_newpassword', '_controller' => 'App\\Controller\\SecurityController::newpassword'], ['token'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
