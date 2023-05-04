<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/accounts/list' => [[['_route' => 'app_accounts', '_controller' => 'App\\Controller\\AccountsController::list'], null, ['GET' => 0], null, false, false, null]],
        '/contacts/list' => [[['_route' => 'app_contacts', '_controller' => 'App\\Controller\\ContactsController::list'], null, ['GET' => 0], null, false, false, null]],
        '/leads/list' => [[['_route' => 'app_leads', '_controller' => 'App\\Controller\\LeadsController::list'], null, ['GET' => 0], null, false, false, null]],
        '/email' => [[['_route' => 'app_mailer_sendemail', '_controller' => 'App\\Controller\\MailerController::sendEmail'], null, null, null, false, false, null]],
        '/email2' => [[['_route' => 'app_mailer_sendemail2', '_controller' => 'App\\Controller\\MailerController::sendEmail2'], null, null, null, false, false, null]],
        '/opportunities/list' => [[['_route' => 'app_opportunities', '_controller' => 'App\\Controller\\OpportunitiesController::list'], null, ['GET' => 0], null, false, false, null]],
        '/index' => [[['_route' => 'app_index', '_controller' => 'App\\Controller\\OpportunitiesController::index2'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/login/([^/]++)(*:57)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [
            [['_route' => 'app_login_token', '_controller' => 'App\\Controller\\SecurityController::loginwithtoken'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
