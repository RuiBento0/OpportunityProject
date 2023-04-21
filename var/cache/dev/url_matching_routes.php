<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/movies' => [[['_route' => 'movies', '_controller' => 'App\\Controller\\MoviesController::index'], null, ['GET' => 0], null, false, false, null]],
        '/movies/create' => [[['_route' => 'create_movie', '_controller' => 'App\\Controller\\MoviesController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/lucky/number' => [[['_route' => 'app_lucky_number', '_controller' => 'App\\Controller\\LuckyController::number'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/movies/(?'
                    .'|edit/([^/]++)(*:66)'
                    .'|delete/([^/]++)(*:88)'
                    .'|([^/]++)(*:103)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        66 => [[['_route' => 'edit_movie', '_controller' => 'App\\Controller\\MoviesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        88 => [[['_route' => 'delete_movie', '_controller' => 'App\\Controller\\MoviesController::delete'], ['id'], ['GET' => 0, 'DELETE' => 1], null, false, true, null]],
        103 => [
            [['_route' => 'movie', '_controller' => 'App\\Controller\\MoviesController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
