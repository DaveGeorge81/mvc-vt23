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
    'bj_bet' => [[], ['_controller' => 'App\\Controller\\BetBjController::bet'], [], [['text', '/proj/bet']], [], [], []],
    'set_bet' => [[], ['_controller' => 'App\\Controller\\BetBjController::setBet'], [], [['text', '/proj/set-bet']], [], [], []],
    'bj_winnings' => [[], ['_controller' => 'App\\Controller\\BetBjController::winnings'], [], [['text', '/proj/winnings']], [], [], []],
    'make-bet' => [[], ['_controller' => 'App\\Controller\\BetController::makeBet'], [], [['text', '/game/make-bet']], [], [], []],
    'bet' => [[], ['_controller' => 'App\\Controller\\BetController::bet'], [], [['text', '/game/bet']], [], [], []],
    'start' => [[], ['_controller' => 'App\\Controller\\BlackJackController::start'], [], [['text', '/proj/start']], [], [], []],
    'bj_init' => [[], ['_controller' => 'App\\Controller\\BlackJackController::init'], [], [['text', '/proj/init']], [], [], []],
    'set_up' => [[], ['_controller' => 'App\\Controller\\BlackJackController::setup'], [], [['text', '/proj/setup']], [], [], []],
    'black_jack' => [[], ['_controller' => 'App\\Controller\\BlackJackController::game'], [], [['text', '/proj/game']], [], [], []],
    'bj_hit' => [[], ['_controller' => 'App\\Controller\\BlackJackController::hit'], [], [['text', '/proj/hit']], [], [], []],
    'bj_stand' => [[], ['_controller' => 'App\\Controller\\BlackJackController::stand'], [], [['text', '/proj/stand']], [], [], []],
    'bj_dealer' => [[], ['_controller' => 'App\\Controller\\BlackJackController::dealer'], [], [['text', '/proj/dealer']], [], [], []],
    'library' => [[], ['_controller' => 'App\\Controller\\BooksController::index'], [], [['text', '/library']], [], [], []],
    'book_create' => [[], ['_controller' => 'App\\Controller\\BooksController::createBook'], [], [['text', '/library/create']], [], [], []],
    'add_book' => [[], ['_controller' => 'App\\Controller\\BooksController::addBook'], [], [['text', '/library/add']], [], [], []],
    'books_show_all' => [[], ['_controller' => 'App\\Controller\\BooksController::showAllBooks'], [], [['text', '/library/show']], [], [], []],
    'book_by_id' => [['id'], ['_controller' => 'App\\Controller\\BooksController::showBookById'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/library/show']], [], [], []],
    'book_delete' => [[], ['_controller' => 'App\\Controller\\BooksController::deleteBook'], [], [['text', '/library/delete']], [], [], []],
    'delete_by_id' => [['id'], ['_controller' => 'App\\Controller\\BooksController::deleteBookById'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/library/delete']], [], [], []],
    'book_update' => [[], ['_controller' => 'App\\Controller\\BooksController::updateBook'], [], [['text', '/library/update']], [], [], []],
    'update_by_id' => [['id'], ['_controller' => 'App\\Controller\\BooksController::updateBookById'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/library/update']], [], [], []],
    'all_books_api' => [[], ['_controller' => 'App\\Controller\\BooksControllerJson::showAllBooks'], [], [['text', '/api/library/books']], [], [], []],
    'book_by_isbn' => [['isbn'], ['_controller' => 'App\\Controller\\BooksControllerJson::showBookByIsbn'], [], [['variable', '/', '[^/]++', 'isbn', true], ['text', '/api/library/book']], [], [], []],
    'add_dealer' => [[], ['_controller' => 'App\\Controller\\DealerController::addDealer'], [], [['text', '/dealer/add']], [], [], []],
    'dealer_create' => [[], ['_controller' => 'App\\Controller\\DealerController::createDealer'], [], [['text', '/dealer/create']], [], [], []],
    'dealer_show_all' => [[], ['_controller' => 'App\\Controller\\DealerController::showAllDealers'], [], [['text', '/dealer/show']], [], [], []],
    'dealer_by_id' => [['id'], ['_controller' => 'App\\Controller\\DealerController::showDealerById'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/dealer/show']], [], [], []],
    'dealer_delete' => [[], ['_controller' => 'App\\Controller\\DealerController::deleteDealer'], [], [['text', '/dealer/delete']], [], [], []],
    'del_dealer_by_id' => [['id'], ['_controller' => 'App\\Controller\\DealerController::deleteDealerById'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/dealer/delete']], [], [], []],
    'dealer_update' => [[], ['_controller' => 'App\\Controller\\DealerController::updateDealer'], [], [['text', '/dealer/update']], [], [], []],
    'update_dealer_by_id' => [['id'], ['_controller' => 'App\\Controller\\DealerController::updateDealerById'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/dealer/update']], [], [], []],
    'draw' => [[], ['_controller' => 'App\\Controller\\DrawCard::drawSingleCard'], [], [['text', '/card/deck/draw']], [], [], []],
    'draw_many' => [['num'], ['_controller' => 'App\\Controller\\DrawCard::drawMany'], ['num' => '\\d+'], [['variable', '/', '\\d+', 'num', true], ['text', '/card/deck/draw']], [], [], []],
    'single_api' => [[], ['_controller' => 'App\\Controller\\DrawCardJson::drawCard'], [], [['text', '/api/deck/draw']], [], [], []],
    'many_api' => [[], ['_controller' => 'App\\Controller\\DrawCardJson::drawMany'], [], [['text', '/api/deck/draw/']], [], [], []],
    'db_update' => [[], ['_controller' => 'App\\Controller\\HejController::updateDb'], [], [['text', '/db/update']], [], [], []],
    'update_db_by_id' => [['id'], ['_controller' => 'App\\Controller\\HejController::updateDbById'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/db/update']], [], [], []],
    'db_show_all' => [[], ['_controller' => 'App\\Controller\\HejController::showAllDb'], [], [['text', '/db/show']], [], [], []],
    'db_restore' => [[], ['_controller' => 'App\\Controller\\HejController::restoreDb'], [], [['text', '/db/restore']], [], [], []],
    'db_reset' => [[], ['_controller' => 'App\\Controller\\HejController::dbTest'], [], [['text', '/db/reset']], [], [], []],
    'kill_session' => [[], ['_controller' => 'App\\Controller\\HejController::killSession'], [], [['text', '/proj/kill-session']], [], [], []],
    'game' => [[], ['_controller' => 'App\\Controller\\MeControllerGame::game'], [], [['text', '/game']], [], [], []],
    'init' => [[], ['_controller' => 'App\\Controller\\MeControllerGame::init'], [], [['text', '/game/init']], [], [], []],
    'game21' => [[], ['_controller' => 'App\\Controller\\MeControllerGame::game21'], [], [['text', '/game/game21']], [], [], []],
    'hit' => [[], ['_controller' => 'App\\Controller\\MeControllerGame::hit'], [], [['text', '/game/hit']], [], [], []],
    'cpuHit' => [[], ['_controller' => 'App\\Controller\\MeControllerGame::cpuHit'], [], [['text', '/game/cpuHit']], [], [], []],
    'doc' => [[], ['_controller' => 'App\\Controller\\MeControllerGame::doc'], [], [['text', '/game/doc']], [], [], []],
    'game_api' => [[], ['_controller' => 'App\\Controller\\MeControllerGameJson::gameApi'], [], [['text', '/api/game']], [], [], []],
    'quote' => [[], ['_controller' => 'App\\Controller\\MeControllerJson::quote'], [], [['text', '/api/quote']], [], [], []],
    'deck_api' => [[], ['_controller' => 'App\\Controller\\MeControllerJson::deck'], [], [['text', '/api/deck']], [], [], []],
    'shuffle_api' => [[], ['_controller' => 'App\\Controller\\MeControllerJson::shuffleCard'], [], [['text', '/api/deck/shuffle']], [], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\MeControllerTwig::home'], [], [['text', '/']], [], [], []],
    'about' => [[], ['_controller' => 'App\\Controller\\MeControllerTwig::about'], [], [['text', '/about']], [], [], []],
    'lucky' => [[], ['_controller' => 'App\\Controller\\MeControllerTwig::number'], [], [['text', '/lucky']], [], [], []],
    'report' => [[], ['_controller' => 'App\\Controller\\MeControllerTwig::report'], [], [['text', '/report']], [], [], []],
    'api' => [[], ['_controller' => 'App\\Controller\\MeControllerTwig::api'], [], [['text', '/api']], [], [], []],
    'card' => [[], ['_controller' => 'App\\Controller\\MeControllerTwig::card'], [], [['text', '/card']], [], [], []],
    'deck' => [[], ['_controller' => 'App\\Controller\\MeControllerTwig::deck'], [], [['text', '/card/deck']], [], [], []],
    'shuffle' => [[], ['_controller' => 'App\\Controller\\MeControllerTwig::shuffleCard'], [], [['text', '/card/deck/shuffle']], [], [], []],
    'metrics' => [[], ['_controller' => 'App\\Controller\\MetricsController::home'], [], [['text', '/metrics']], [], [], []],
    'add_player' => [[], ['_controller' => 'App\\Controller\\PlayerController::addPlayer'], [], [['text', '/player/add']], [], [], []],
    'player_create' => [[], ['_controller' => 'App\\Controller\\PlayerController::createPlayer'], [], [['text', '/player/create']], [], [], []],
    'player_show_all' => [[], ['_controller' => 'App\\Controller\\PlayerController::showAllPlayers'], [], [['text', '/player/show']], [], [], []],
    'player_by_id' => [['id'], ['_controller' => 'App\\Controller\\PlayerController::showPlayerById'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/player/show']], [], [], []],
    'player_delete' => [[], ['_controller' => 'App\\Controller\\PlayerController::deletePlayer'], [], [['text', '/player/delete']], [], [], []],
    'del_player_by_id' => [['id'], ['_controller' => 'App\\Controller\\PlayerController::deletePlayerById'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/player/delete']], [], [], []],
    'player_update' => [[], ['_controller' => 'App\\Controller\\PlayerController::updatePlayer'], [], [['text', '/player/update']], [], [], []],
    'update_player_by_id' => [['id'], ['_controller' => 'App\\Controller\\PlayerController::updatePlayerById'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/player/update']], [], [], []],
    'project' => [[], ['_controller' => 'App\\Controller\\ProjectController::project'], [], [['text', '/proj']], [], [], []],
    'proj_about' => [[], ['_controller' => 'App\\Controller\\ProjectController::about'], [], [['text', '/proj/about']], [], [], []],
    'proj_api' => [[], ['_controller' => 'App\\Controller\\ProjectController::api'], [], [['text', '/proj/api']], [], [], []],
    'proj_database' => [[], ['_controller' => 'App\\Controller\\ProjectController::doc'], [], [['text', '/proj/about/database']], [], [], []],
    'search_name' => [[], ['_controller' => 'App\\Controller\\ProjectControllerJson::searchName'], [], [['text', '/proj/api/search/']], [], [], []],
    'api_players' => [[], ['_controller' => 'App\\Controller\\ProjectControllerJson::apiPlayers'], [], [['text', '/proj/api/players']], [], [], []],
    'api_dealer' => [[], ['_controller' => 'App\\Controller\\ProjectControllerJson::apiDealer'], [], [['text', '/proj/api/dealer']], [], [], []],
    'api_card_stat' => [[], ['_controller' => 'App\\Controller\\ProjectControllerJson::apiCardStat'], [], [['text', '/proj/api/card-stat']], [], [], []],
    'api_show_hands' => [[], ['_controller' => 'App\\Controller\\ProjectControllerJson::apiShowHands'], [], [['text', '/proj/api/show-hands']], [], [], []],
];
