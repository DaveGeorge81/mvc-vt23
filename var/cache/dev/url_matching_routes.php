<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/game' => [[['_route' => 'game', '_controller' => 'App\\Controller\\MeControllerGame::game'], null, null, null, false, false, null]],
        '/game/init' => [[['_route' => 'init', '_controller' => 'App\\Controller\\MeControllerGame::init'], null, null, null, false, false, null]],
        '/game/make-bet' => [[['_route' => 'make-bet', '_controller' => 'App\\Controller\\MeControllerGame::makeBet'], null, null, null, false, false, null]],
        '/game/bet' => [[['_route' => 'bet', '_controller' => 'App\\Controller\\MeControllerGame::bet'], null, ['POST' => 0], null, false, false, null]],
        '/game/game21' => [[['_route' => 'game21', '_controller' => 'App\\Controller\\MeControllerGame::game21'], null, null, null, false, false, null]],
        '/game/hit' => [[['_route' => 'hit', '_controller' => 'App\\Controller\\MeControllerGame::hit'], null, null, null, false, false, null]],
        '/game/cpuHit' => [[['_route' => 'cpuHit', '_controller' => 'App\\Controller\\MeControllerGame::cpuHit'], null, null, null, false, false, null]],
        '/game/doc' => [[['_route' => 'doc', '_controller' => 'App\\Controller\\MeControllerGame::doc'], null, null, null, false, false, null]],
        '/api/game' => [[['_route' => 'game_api', '_controller' => 'App\\Controller\\MeControllerGameJson::gameApi'], null, null, null, false, false, null]],
        '/api/quote' => [[['_route' => 'quote', '_controller' => 'App\\Controller\\MeControllerJson::quote'], null, null, null, false, false, null]],
        '/api/deck' => [[['_route' => 'deck_api', '_controller' => 'App\\Controller\\MeControllerJson::deck'], null, ['GET' => 0], null, false, false, null]],
        '/api/deck/shuffle' => [[['_route' => 'shuffle_api', '_controller' => 'App\\Controller\\MeControllerJson::shuffleCard'], null, ['POST' => 0], null, false, false, null]],
        '/api/deck/draw' => [
            [['_route' => 'single_api', '_controller' => 'App\\Controller\\MeControllerJson::drawCard'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'many_api', '_controller' => 'App\\Controller\\MeControllerJson::drawMany'], null, ['POST' => 0], null, true, false, null],
        ],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\MeControllerTwig::home'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'about', '_controller' => 'App\\Controller\\MeControllerTwig::about'], null, null, null, false, false, null]],
        '/lucky' => [[['_route' => 'lucky', '_controller' => 'App\\Controller\\MeControllerTwig::number'], null, null, null, false, false, null]],
        '/report' => [[['_route' => 'report', '_controller' => 'App\\Controller\\MeControllerTwig::report'], null, null, null, false, false, null]],
        '/api' => [[['_route' => 'api', '_controller' => 'App\\Controller\\MeControllerTwig::api'], null, null, null, false, false, null]],
        '/card' => [[['_route' => 'card', '_controller' => 'App\\Controller\\MeControllerTwig::card'], null, null, null, false, false, null]],
        '/card/deck' => [[['_route' => 'deck', '_controller' => 'App\\Controller\\MeControllerTwig::deck'], null, null, null, false, false, null]],
        '/card/deck/shuffle' => [[['_route' => 'shuffle', '_controller' => 'App\\Controller\\MeControllerTwig::shuffleCard'], null, null, null, false, false, null]],
        '/card/deck/draw' => [[['_route' => 'draw', '_controller' => 'App\\Controller\\MeControllerTwig::drawCard'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/card/deck/draw/(\\d+)(*:63)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        63 => [
            [['_route' => 'draw_many', '_controller' => 'App\\Controller\\MeControllerTwig::drawMany'], ['num'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
