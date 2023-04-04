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
    'app_me_number' => [[], ['_controller' => 'App\\Controller\\MeController::number'], [], [['text', '/lucky/number']], [], [], []],
    'app_me_hi' => [[], ['_controller' => 'App\\Controller\\MeController::hi'], [], [['text', '/lucky/hi']], [], [], []],
    'app_me_jsonnumber' => [[], ['_controller' => 'App\\Controller\\MeController::jsonNumber'], [], [['text', '/api/lucky/number']], [], [], []],
    'app_mecontrollerjson_jsonnumber' => [[], ['_controller' => 'App\\Controller\\MeControllerJson::jsonNumber'], [], [['text', '/api/lucky/number']], [], [], []],
    'quote' => [[], ['_controller' => 'App\\Controller\\MeControllerJson::quote'], [], [['text', '/api/quote']], [], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\MeControllerTwig::home'], [], [['text', '/']], [], [], []],
    'about' => [[], ['_controller' => 'App\\Controller\\MeControllerTwig::about'], [], [['text', '/about']], [], [], []],
    'lucky' => [[], ['_controller' => 'App\\Controller\\MeControllerTwig::number'], [], [['text', '/lucky']], [], [], []],
    'report' => [[], ['_controller' => 'App\\Controller\\MeControllerTwig::report'], [], [['text', '/report']], [], [], []],
    'kmom01' => [[], ['_controller' => 'App\\Controller\\MeControllerTwig::kmom01'], [], [['text', '/kmom01']], [], [], []],
];