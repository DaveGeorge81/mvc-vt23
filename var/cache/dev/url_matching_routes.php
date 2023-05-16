<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/game/make-bet' => [[['_route' => 'make-bet', '_controller' => 'App\\Controller\\BetController::makeBet'], null, null, null, false, false, null]],
        '/game/bet' => [[['_route' => 'bet', '_controller' => 'App\\Controller\\BetController::bet'], null, ['POST' => 0], null, false, false, null]],
        '/library' => [[['_route' => 'library', '_controller' => 'App\\Controller\\BooksController::index'], null, null, null, false, false, null]],
        '/library/create' => [[['_route' => 'book_create', '_controller' => 'App\\Controller\\BooksController::createBook'], null, ['POST' => 0], null, false, false, null]],
        '/library/add' => [[['_route' => 'add_book', '_controller' => 'App\\Controller\\BooksController::addBook'], null, null, null, false, false, null]],
        '/library/show' => [[['_route' => 'books_show_all', '_controller' => 'App\\Controller\\BooksController::showAllBooks'], null, null, null, false, false, null]],
        '/library/delete' => [[['_route' => 'book_delete', '_controller' => 'App\\Controller\\BooksController::deleteBook'], null, ['POST' => 0], null, false, false, null]],
        '/library/update' => [[['_route' => 'book_update', '_controller' => 'App\\Controller\\BooksController::updateBook'], null, ['POST' => 0], null, false, false, null]],
        '/api/library/books' => [[['_route' => 'all_books_api', '_controller' => 'App\\Controller\\BooksControllerJson::showAllBooks'], null, null, null, false, false, null]],
        '/card/deck/draw' => [[['_route' => 'draw', '_controller' => 'App\\Controller\\DrawCard::drawSingleCard'], null, null, null, false, false, null]],
        '/api/deck/draw' => [
            [['_route' => 'single_api', '_controller' => 'App\\Controller\\DrawCardJson::drawCard'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'many_api', '_controller' => 'App\\Controller\\DrawCardJson::drawMany'], null, ['POST' => 0], null, true, false, null],
        ],
        '/game' => [[['_route' => 'game', '_controller' => 'App\\Controller\\MeControllerGame::game'], null, null, null, false, false, null]],
        '/game/init' => [[['_route' => 'init', '_controller' => 'App\\Controller\\MeControllerGame::init'], null, null, null, false, false, null]],
        '/game/game21' => [[['_route' => 'game21', '_controller' => 'App\\Controller\\MeControllerGame::game21'], null, null, null, false, false, null]],
        '/game/hit' => [[['_route' => 'hit', '_controller' => 'App\\Controller\\MeControllerGame::hit'], null, null, null, false, false, null]],
        '/game/cpuHit' => [[['_route' => 'cpuHit', '_controller' => 'App\\Controller\\MeControllerGame::cpuHit'], null, null, null, false, false, null]],
        '/game/doc' => [[['_route' => 'doc', '_controller' => 'App\\Controller\\MeControllerGame::doc'], null, null, null, false, false, null]],
        '/api/game' => [[['_route' => 'game_api', '_controller' => 'App\\Controller\\MeControllerGameJson::gameApi'], null, null, null, false, false, null]],
        '/api/quote' => [[['_route' => 'quote', '_controller' => 'App\\Controller\\MeControllerJson::quote'], null, null, null, false, false, null]],
        '/api/deck' => [[['_route' => 'deck_api', '_controller' => 'App\\Controller\\MeControllerJson::deck'], null, ['GET' => 0], null, false, false, null]],
        '/api/deck/shuffle' => [[['_route' => 'shuffle_api', '_controller' => 'App\\Controller\\MeControllerJson::shuffleCard'], null, ['POST' => 0], null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\MeControllerTwig::home'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'about', '_controller' => 'App\\Controller\\MeControllerTwig::about'], null, null, null, false, false, null]],
        '/lucky' => [[['_route' => 'lucky', '_controller' => 'App\\Controller\\MeControllerTwig::number'], null, null, null, false, false, null]],
        '/report' => [[['_route' => 'report', '_controller' => 'App\\Controller\\MeControllerTwig::report'], null, null, null, false, false, null]],
        '/api' => [[['_route' => 'api', '_controller' => 'App\\Controller\\MeControllerTwig::api'], null, null, null, false, false, null]],
        '/card' => [[['_route' => 'card', '_controller' => 'App\\Controller\\MeControllerTwig::card'], null, null, null, false, false, null]],
        '/card/deck' => [[['_route' => 'deck', '_controller' => 'App\\Controller\\MeControllerTwig::deck'], null, null, null, false, false, null]],
        '/card/deck/shuffle' => [[['_route' => 'shuffle', '_controller' => 'App\\Controller\\MeControllerTwig::shuffleCard'], null, null, null, false, false, null]],
        '/metrics' => [[['_route' => 'metrics', '_controller' => 'App\\Controller\\MetricsController::home'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/library/(?'
                    .'|show/([^/]++)(*:194)'
                    .'|delete/([^/]++)(*:217)'
                    .'|update/([^/]++)(*:240)'
                .')'
                .'|/api/library/book/([^/]++)(*:275)'
                .'|/card/deck/draw/(\\d+)(*:304)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        194 => [[['_route' => 'book_by_id', '_controller' => 'App\\Controller\\BooksController::showBookById'], ['id'], null, null, false, true, null]],
        217 => [[['_route' => 'delete_by_id', '_controller' => 'App\\Controller\\BooksController::deleteBookById'], ['id'], null, null, false, true, null]],
        240 => [[['_route' => 'update_by_id', '_controller' => 'App\\Controller\\BooksController::updateBookById'], ['id'], null, null, false, true, null]],
        275 => [[['_route' => 'book_by_isbn', '_controller' => 'App\\Controller\\BooksControllerJson::showBookByIsbn'], ['isbn'], null, null, false, true, null]],
        304 => [
            [['_route' => 'draw_many', '_controller' => 'App\\Controller\\DrawCard::drawMany'], ['num'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
