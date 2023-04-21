<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'movies' => [[], ['_controller' => 'App\\Controller\\MoviesController::index'], [], [['text', '/movies']], [], [], []],
    'create_movie' => [[], ['_controller' => 'App\\Controller\\MoviesController::create'], [], [['text', '/movies/create']], [], [], []],
    'edit_movie' => [['id'], ['_controller' => 'App\\Controller\\MoviesController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/movies/edit']], [], [], []],
    'delete_movie' => [['id'], ['_controller' => 'App\\Controller\\MoviesController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/movies/delete']], [], [], []],
    'movie' => [['id'], ['_controller' => 'App\\Controller\\MoviesController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/movies']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_lucky_number' => [[], ['_controller' => 'App\\Controller\\LuckyController::number'], [], [['text', '/lucky/number']], [], [], []],
];
