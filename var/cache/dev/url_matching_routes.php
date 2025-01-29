<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/lista' => [
            [['_route' => 'lista_index', '_controller' => 'App\\Controller\\ListaController::index'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'lista_new', '_controller' => 'App\\Controller\\ListaController::new'], null, ['POST' => 0], null, true, false, null],
        ],
        '/api/login' => [[['_route' => 'api_login', '_controller' => 'App\\Controller\\LoginController::index'], null, ['POST' => 0], null, false, false, null]],
        '/api/tarefa' => [[['_route' => 'tarefa_index', '_controller' => 'App\\Controller\\TarefaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/api/usuarios' => [
            [['_route' => 'usuario_index', '_controller' => 'App\\Controller\\UsuarioController::index'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'usuario_new', '_controller' => 'App\\Controller\\UsuarioController::new'], null, ['POST' => 0], null, true, false, null],
        ],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/api/(?'
                    .'|lista/([^/]++)(?'
                        .'|(*:67)'
                        .'|/compartilhar(*:87)'
                    .')'
                    .'|tarefa/(?'
                        .'|lista/([^/]++)(*:119)'
                        .'|([^/]++)(?'
                            .'|(*:138)'
                        .')'
                    .')'
                    .'|usuarios/([^/]++)(?'
                        .'|(*:168)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        67 => [
            [['_route' => 'lista_show', '_controller' => 'App\\Controller\\ListaController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'lista_edit', '_controller' => 'App\\Controller\\ListaController::edit'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'lista_delete', '_controller' => 'App\\Controller\\ListaController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        87 => [[['_route' => 'lista_compartilhar', '_controller' => 'App\\Controller\\ListaController::compartilhar'], ['id'], ['POST' => 0], null, false, false, null]],
        119 => [[['_route' => 'tarefa_new', '_controller' => 'App\\Controller\\TarefaController::new'], ['listaId'], ['POST' => 0], null, false, true, null]],
        138 => [
            [['_route' => 'tarefa_show', '_controller' => 'App\\Controller\\TarefaController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'tarefa_edit', '_controller' => 'App\\Controller\\TarefaController::edit'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'tarefa_delete', '_controller' => 'App\\Controller\\TarefaController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        168 => [
            [['_route' => 'usuario_show', '_controller' => 'App\\Controller\\UsuarioController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'usuario_edit', '_controller' => 'App\\Controller\\UsuarioController::edit'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'usuario_delete', '_controller' => 'App\\Controller\\UsuarioController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
