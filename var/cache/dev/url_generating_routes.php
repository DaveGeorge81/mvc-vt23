<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'game' => [[], ['_controller' => 'App\\Controller\\MeControllerGame::game'], [], [['text', '/game']], [], [], []],
    'init' => [[], ['_controller' => 'App\\Controller\\MeControllerGame::init'], [], [['text', '/game/init']], [], [], []],
    'game21' => [[], ['_controller' => 'App\\Controller\\MeControllerGame::game21'], [], [['text', '/game/game21']], [], [], []],
    'hit' => [[], ['_controller' => 'App\\Controller\\MeControllerGame::hit'], [], [['text', '/game/hit']], [], [], []],
    'quote' => [[], ['_controller' => 'App\\Controller\\MeControllerJson::quote'], [], [['text', '/api/quote']], [], [], []],
    'deck_api' => [[], ['_controller' => 'App\\Controller\\MeControllerJson::deck'], [], [['text', '/api/deck']], [], [], []],
    'shuffle_api' => [[], ['_controller' => 'App\\Controller\\MeControllerJson::shuffleCard'], [], [['text', '/api/deck/shuffle']], [], [], []],
    'single_api' => [[], ['_controller' => 'App\\Controller\\MeControllerJson::drawCard'], [], [['text', '/api/deck/draw']], [], [], []],
    'many_api' => [[], ['_controller' => 'App\\Controller\\MeControllerJson::drawMany'], [], [['text', '/api/deck/draw/']], [], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\MeControllerTwig::home'], [], [['text', '/']], [], [], []],
    'about' => [[], ['_controller' => 'App\\Controller\\MeControllerTwig::about'], [], [['text', '/about']], [], [], []],
    'lucky' => [[], ['_controller' => 'App\\Controller\\MeControllerTwig::number'], [], [['text', '/lucky']], [], [], []],
    'report' => [[], ['_controller' => 'App\\Controller\\MeControllerTwig::report'], [], [['text', '/report']], [], [], []],
    'api' => [[], ['_controller' => 'App\\Controller\\MeControllerTwig::api'], [], [['text', '/api']], [], [], []],
    'card' => [[], ['_controller' => 'App\\Controller\\MeControllerTwig::card'], [], [['text', '/card']], [], [], []],
    'deck' => [[], ['_controller' => 'App\\Controller\\MeControllerTwig::deck'], [], [['text', '/card/deck']], [], [], []],
    'shuffle' => [[], ['_controller' => 'App\\Controller\\MeControllerTwig::shuffleCard'], [], [['text', '/card/deck/shuffle']], [], [], []],
    'draw' => [[], ['_controller' => 'App\\Controller\\MeControllerTwig::drawCard'], [], [['text', '/card/deck/draw']], [], [], []],
    'draw_many' => [['num'], ['_controller' => 'App\\Controller\\MeControllerTwig::drawMany'], ['num' => '\\d+'], [['variable', '/', '\\d+', 'num', true], ['text', '/card/deck/draw']], [], [], []],
];
