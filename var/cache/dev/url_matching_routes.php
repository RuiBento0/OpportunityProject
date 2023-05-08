<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/accounts/list' => [[['_route' => 'app_accounts', '_controller' => 'App\\Controller\\AccountsController::list'], null, ['GET' => 0], null, false, false, null]],
        '/accounts/create' => [[['_route' => 'app_accounts_new', '_controller' => 'App\\Controller\\AccountsController::new'], null, ['GET' => 0], null, false, false, null]],
        '/contacts/list' => [[['_route' => 'app_contacts', '_controller' => 'App\\Controller\\ContactsController::list'], null, ['GET' => 0], null, false, false, null]],
        '/contacts/create' => [[['_route' => 'app_contacts_new', '_controller' => 'App\\Controller\\ContactsController::new'], null, ['GET' => 0], null, false, false, null]],
        '/leads/list' => [[['_route' => 'app_leads', '_controller' => 'App\\Controller\\LeadsController::list'], null, ['GET' => 0], null, false, false, null]],
        '/leads/create' => [[['_route' => 'app_leads_new', '_controller' => 'App\\Controller\\LeadsController::new'], null, ['GET' => 0], null, false, false, null]],
        '/email' => [[['_route' => 'app_mailer_sendemail', '_controller' => 'App\\Controller\\MailerController::sendEmail'], null, null, null, false, false, null]],
        '/email2' => [[['_route' => 'app_mailer_sendemail2', '_controller' => 'App\\Controller\\MailerController::sendEmail2'], null, null, null, false, false, null]],
        '/options' => [[['_route' => 'app_options', '_controller' => 'App\\Controller\\MainController::index'], null, ['GET' => 0], null, false, false, null]],
        '/options/users' => [[['_route' => 'app_options_users', '_controller' => 'App\\Controller\\MainController::listusers'], null, ['GET' => 0], null, false, false, null]],
        '/options/roles' => [[['_route' => 'app_options_roles', '_controller' => 'App\\Controller\\MainController::listroles'], null, ['GET' => 0], null, false, false, null]],
        '/options/departments' => [[['_route' => 'app_options_departments', '_controller' => 'App\\Controller\\MainController::listdepartments'], null, ['GET' => 0], null, false, false, null]],
        '/options/categories' => [[['_route' => 'app_options_categories', '_controller' => 'App\\Controller\\MainController::listcategories'], null, ['GET' => 0], null, false, false, null]],
        '/options/entities' => [[['_route' => 'app_options_entities', '_controller' => 'App\\Controller\\MainController::listentities'], null, ['GET' => 0], null, false, false, null]],
        '/options/priorities' => [[['_route' => 'app_options_priorities', '_controller' => 'App\\Controller\\MainController::listpriorities'], null, ['GET' => 0], null, false, false, null]],
        '/options/status' => [[['_route' => 'app_options_status', '_controller' => 'App\\Controller\\MainController::liststatus'], null, ['GET' => 0], null, false, false, null]],
        '/options/stages' => [[['_route' => 'app_options_stages', '_controller' => 'App\\Controller\\MainController::liststages'], null, ['GET' => 0], null, false, false, null]],
        '/options/area' => [[['_route' => 'app_options_area', '_controller' => 'App\\Controller\\MainController::listarea'], null, ['GET' => 0], null, false, false, null]],
        '/options/accountstype' => [[['_route' => 'app_options_accountstype', '_controller' => 'App\\Controller\\MainController::listaccountstype'], null, ['GET' => 0], null, false, false, null]],
        '/opportunities/list' => [[['_route' => 'app_opportunities', '_controller' => 'App\\Controller\\OpportunitiesController::list'], null, ['GET' => 0], null, false, false, null]],
        '/opportunities/create' => [[['_route' => 'app_opportunities_new', '_controller' => 'App\\Controller\\OpportunitiesController::new'], null, ['GET' => 0], null, false, false, null]],
        '/index' => [[['_route' => 'app_index', '_controller' => 'App\\Controller\\OpportunitiesController::index2'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, ['POST' => 0, 'GET' => 1], null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\SecurityController::register'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:78)'
                .'|/login/([^/]++)(*:100)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        78 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        100 => [
            [['_route' => 'app_login_token', '_controller' => 'App\\Controller\\SecurityController::loginwithtoken'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
