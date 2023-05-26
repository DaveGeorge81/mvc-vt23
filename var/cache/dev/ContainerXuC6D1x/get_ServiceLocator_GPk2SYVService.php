<?php

namespace ContainerXuC6D1x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GPk2SYVService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.gPk2SYV' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.gPk2SYV'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\BlackJackController::init' => ['privates', '.service_locator.79thqOA', 'get_ServiceLocator_79thqOAService', true],
            'App\\Controller\\BooksController::createBook' => ['privates', '.service_locator.VLD2CK_', 'get_ServiceLocator_VLD2CKService', true],
            'App\\Controller\\BooksController::deleteBook' => ['privates', '.service_locator.VLD2CK_', 'get_ServiceLocator_VLD2CKService', true],
            'App\\Controller\\BooksController::deleteBookById' => ['privates', '.service_locator.VLD2CK_', 'get_ServiceLocator_VLD2CKService', true],
            'App\\Controller\\BooksController::showAllBooks' => ['privates', '.service_locator.VLD2CK_', 'get_ServiceLocator_VLD2CKService', true],
            'App\\Controller\\BooksController::showBookById' => ['privates', '.service_locator.VLD2CK_', 'get_ServiceLocator_VLD2CKService', true],
            'App\\Controller\\BooksController::updateBook' => ['privates', '.service_locator.VLD2CK_', 'get_ServiceLocator_VLD2CKService', true],
            'App\\Controller\\BooksController::updateBookById' => ['privates', '.service_locator.VLD2CK_', 'get_ServiceLocator_VLD2CKService', true],
            'App\\Controller\\BooksControllerJson::showAllBooks' => ['privates', '.service_locator.VLD2CK_', 'get_ServiceLocator_VLD2CKService', true],
            'App\\Controller\\BooksControllerJson::showBookByIsbn' => ['privates', '.service_locator.VLD2CK_', 'get_ServiceLocator_VLD2CKService', true],
            'App\\Controller\\DbController::dbTest' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\DbController::showAllDb' => ['privates', '.service_locator.wte8r8G', 'get_ServiceLocator_Wte8r8GService', true],
            'App\\Controller\\DbController::updateDb' => ['privates', '.service_locator.wte8r8G', 'get_ServiceLocator_Wte8r8GService', true],
            'App\\Controller\\DbController::updateDbById' => ['privates', '.service_locator.79thqOA', 'get_ServiceLocator_79thqOAService', true],
            'App\\Controller\\DealerController::createDealer' => ['privates', '.service_locator.79thqOA', 'get_ServiceLocator_79thqOAService', true],
            'App\\Controller\\DealerController::deleteDealer' => ['privates', '.service_locator.79thqOA', 'get_ServiceLocator_79thqOAService', true],
            'App\\Controller\\DealerController::deleteDealerById' => ['privates', '.service_locator.79thqOA', 'get_ServiceLocator_79thqOAService', true],
            'App\\Controller\\DealerController::showAllDealers' => ['privates', '.service_locator.79thqOA', 'get_ServiceLocator_79thqOAService', true],
            'App\\Controller\\DealerController::showDealerById' => ['privates', '.service_locator.79thqOA', 'get_ServiceLocator_79thqOAService', true],
            'App\\Controller\\DealerController::updateDealer' => ['privates', '.service_locator.79thqOA', 'get_ServiceLocator_79thqOAService', true],
            'App\\Controller\\DealerController::updateDealerById' => ['privates', '.service_locator.79thqOA', 'get_ServiceLocator_79thqOAService', true],
            'App\\Controller\\PlayerController::createPlayer' => ['privates', '.service_locator..ZZ_Ilp', 'get_ServiceLocator__ZZIlpService', true],
            'App\\Controller\\PlayerController::deletePlayer' => ['privates', '.service_locator..ZZ_Ilp', 'get_ServiceLocator__ZZIlpService', true],
            'App\\Controller\\PlayerController::deletePlayerById' => ['privates', '.service_locator..ZZ_Ilp', 'get_ServiceLocator__ZZIlpService', true],
            'App\\Controller\\PlayerController::showAllPlayers' => ['privates', '.service_locator..ZZ_Ilp', 'get_ServiceLocator__ZZIlpService', true],
            'App\\Controller\\PlayerController::showPlayerById' => ['privates', '.service_locator..ZZ_Ilp', 'get_ServiceLocator__ZZIlpService', true],
            'App\\Controller\\PlayerController::updatePlayer' => ['privates', '.service_locator..ZZ_Ilp', 'get_ServiceLocator__ZZIlpService', true],
            'App\\Controller\\PlayerController::updatePlayerById' => ['privates', '.service_locator..ZZ_Ilp', 'get_ServiceLocator__ZZIlpService', true],
            'App\\Controller\\ProjectControllerJson::apiDealer' => ['privates', '.service_locator.79thqOA', 'get_ServiceLocator_79thqOAService', true],
            'App\\Controller\\ProjectControllerJson::apiPlayers' => ['privates', '.service_locator..ZZ_Ilp', 'get_ServiceLocator__ZZIlpService', true],
            'App\\Controller\\ProjectControllerJson::searchName' => ['privates', '.service_locator..ZZ_Ilp', 'get_ServiceLocator__ZZIlpService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\BlackJackController:init' => ['privates', '.service_locator.79thqOA', 'get_ServiceLocator_79thqOAService', true],
            'App\\Controller\\BooksController:createBook' => ['privates', '.service_locator.VLD2CK_', 'get_ServiceLocator_VLD2CKService', true],
            'App\\Controller\\BooksController:deleteBook' => ['privates', '.service_locator.VLD2CK_', 'get_ServiceLocator_VLD2CKService', true],
            'App\\Controller\\BooksController:deleteBookById' => ['privates', '.service_locator.VLD2CK_', 'get_ServiceLocator_VLD2CKService', true],
            'App\\Controller\\BooksController:showAllBooks' => ['privates', '.service_locator.VLD2CK_', 'get_ServiceLocator_VLD2CKService', true],
            'App\\Controller\\BooksController:showBookById' => ['privates', '.service_locator.VLD2CK_', 'get_ServiceLocator_VLD2CKService', true],
            'App\\Controller\\BooksController:updateBook' => ['privates', '.service_locator.VLD2CK_', 'get_ServiceLocator_VLD2CKService', true],
            'App\\Controller\\BooksController:updateBookById' => ['privates', '.service_locator.VLD2CK_', 'get_ServiceLocator_VLD2CKService', true],
            'App\\Controller\\BooksControllerJson:showAllBooks' => ['privates', '.service_locator.VLD2CK_', 'get_ServiceLocator_VLD2CKService', true],
            'App\\Controller\\BooksControllerJson:showBookByIsbn' => ['privates', '.service_locator.VLD2CK_', 'get_ServiceLocator_VLD2CKService', true],
            'App\\Controller\\DbController:dbTest' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\DbController:showAllDb' => ['privates', '.service_locator.wte8r8G', 'get_ServiceLocator_Wte8r8GService', true],
            'App\\Controller\\DbController:updateDb' => ['privates', '.service_locator.wte8r8G', 'get_ServiceLocator_Wte8r8GService', true],
            'App\\Controller\\DbController:updateDbById' => ['privates', '.service_locator.79thqOA', 'get_ServiceLocator_79thqOAService', true],
            'App\\Controller\\DealerController:createDealer' => ['privates', '.service_locator.79thqOA', 'get_ServiceLocator_79thqOAService', true],
            'App\\Controller\\DealerController:deleteDealer' => ['privates', '.service_locator.79thqOA', 'get_ServiceLocator_79thqOAService', true],
            'App\\Controller\\DealerController:deleteDealerById' => ['privates', '.service_locator.79thqOA', 'get_ServiceLocator_79thqOAService', true],
            'App\\Controller\\DealerController:showAllDealers' => ['privates', '.service_locator.79thqOA', 'get_ServiceLocator_79thqOAService', true],
            'App\\Controller\\DealerController:showDealerById' => ['privates', '.service_locator.79thqOA', 'get_ServiceLocator_79thqOAService', true],
            'App\\Controller\\DealerController:updateDealer' => ['privates', '.service_locator.79thqOA', 'get_ServiceLocator_79thqOAService', true],
            'App\\Controller\\DealerController:updateDealerById' => ['privates', '.service_locator.79thqOA', 'get_ServiceLocator_79thqOAService', true],
            'App\\Controller\\PlayerController:createPlayer' => ['privates', '.service_locator..ZZ_Ilp', 'get_ServiceLocator__ZZIlpService', true],
            'App\\Controller\\PlayerController:deletePlayer' => ['privates', '.service_locator..ZZ_Ilp', 'get_ServiceLocator__ZZIlpService', true],
            'App\\Controller\\PlayerController:deletePlayerById' => ['privates', '.service_locator..ZZ_Ilp', 'get_ServiceLocator__ZZIlpService', true],
            'App\\Controller\\PlayerController:showAllPlayers' => ['privates', '.service_locator..ZZ_Ilp', 'get_ServiceLocator__ZZIlpService', true],
            'App\\Controller\\PlayerController:showPlayerById' => ['privates', '.service_locator..ZZ_Ilp', 'get_ServiceLocator__ZZIlpService', true],
            'App\\Controller\\PlayerController:updatePlayer' => ['privates', '.service_locator..ZZ_Ilp', 'get_ServiceLocator__ZZIlpService', true],
            'App\\Controller\\PlayerController:updatePlayerById' => ['privates', '.service_locator..ZZ_Ilp', 'get_ServiceLocator__ZZIlpService', true],
            'App\\Controller\\ProjectControllerJson:apiDealer' => ['privates', '.service_locator.79thqOA', 'get_ServiceLocator_79thqOAService', true],
            'App\\Controller\\ProjectControllerJson:apiPlayers' => ['privates', '.service_locator..ZZ_Ilp', 'get_ServiceLocator__ZZIlpService', true],
            'App\\Controller\\ProjectControllerJson:searchName' => ['privates', '.service_locator..ZZ_Ilp', 'get_ServiceLocator__ZZIlpService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\BlackJackController::init' => '?',
            'App\\Controller\\BooksController::createBook' => '?',
            'App\\Controller\\BooksController::deleteBook' => '?',
            'App\\Controller\\BooksController::deleteBookById' => '?',
            'App\\Controller\\BooksController::showAllBooks' => '?',
            'App\\Controller\\BooksController::showBookById' => '?',
            'App\\Controller\\BooksController::updateBook' => '?',
            'App\\Controller\\BooksController::updateBookById' => '?',
            'App\\Controller\\BooksControllerJson::showAllBooks' => '?',
            'App\\Controller\\BooksControllerJson::showBookByIsbn' => '?',
            'App\\Controller\\DbController::dbTest' => '?',
            'App\\Controller\\DbController::showAllDb' => '?',
            'App\\Controller\\DbController::updateDb' => '?',
            'App\\Controller\\DbController::updateDbById' => '?',
            'App\\Controller\\DealerController::createDealer' => '?',
            'App\\Controller\\DealerController::deleteDealer' => '?',
            'App\\Controller\\DealerController::deleteDealerById' => '?',
            'App\\Controller\\DealerController::showAllDealers' => '?',
            'App\\Controller\\DealerController::showDealerById' => '?',
            'App\\Controller\\DealerController::updateDealer' => '?',
            'App\\Controller\\DealerController::updateDealerById' => '?',
            'App\\Controller\\PlayerController::createPlayer' => '?',
            'App\\Controller\\PlayerController::deletePlayer' => '?',
            'App\\Controller\\PlayerController::deletePlayerById' => '?',
            'App\\Controller\\PlayerController::showAllPlayers' => '?',
            'App\\Controller\\PlayerController::showPlayerById' => '?',
            'App\\Controller\\PlayerController::updatePlayer' => '?',
            'App\\Controller\\PlayerController::updatePlayerById' => '?',
            'App\\Controller\\ProjectControllerJson::apiDealer' => '?',
            'App\\Controller\\ProjectControllerJson::apiPlayers' => '?',
            'App\\Controller\\ProjectControllerJson::searchName' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\BlackJackController:init' => '?',
            'App\\Controller\\BooksController:createBook' => '?',
            'App\\Controller\\BooksController:deleteBook' => '?',
            'App\\Controller\\BooksController:deleteBookById' => '?',
            'App\\Controller\\BooksController:showAllBooks' => '?',
            'App\\Controller\\BooksController:showBookById' => '?',
            'App\\Controller\\BooksController:updateBook' => '?',
            'App\\Controller\\BooksController:updateBookById' => '?',
            'App\\Controller\\BooksControllerJson:showAllBooks' => '?',
            'App\\Controller\\BooksControllerJson:showBookByIsbn' => '?',
            'App\\Controller\\DbController:dbTest' => '?',
            'App\\Controller\\DbController:showAllDb' => '?',
            'App\\Controller\\DbController:updateDb' => '?',
            'App\\Controller\\DbController:updateDbById' => '?',
            'App\\Controller\\DealerController:createDealer' => '?',
            'App\\Controller\\DealerController:deleteDealer' => '?',
            'App\\Controller\\DealerController:deleteDealerById' => '?',
            'App\\Controller\\DealerController:showAllDealers' => '?',
            'App\\Controller\\DealerController:showDealerById' => '?',
            'App\\Controller\\DealerController:updateDealer' => '?',
            'App\\Controller\\DealerController:updateDealerById' => '?',
            'App\\Controller\\PlayerController:createPlayer' => '?',
            'App\\Controller\\PlayerController:deletePlayer' => '?',
            'App\\Controller\\PlayerController:deletePlayerById' => '?',
            'App\\Controller\\PlayerController:showAllPlayers' => '?',
            'App\\Controller\\PlayerController:showPlayerById' => '?',
            'App\\Controller\\PlayerController:updatePlayer' => '?',
            'App\\Controller\\PlayerController:updatePlayerById' => '?',
            'App\\Controller\\ProjectControllerJson:apiDealer' => '?',
            'App\\Controller\\ProjectControllerJson:apiPlayers' => '?',
            'App\\Controller\\ProjectControllerJson:searchName' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
