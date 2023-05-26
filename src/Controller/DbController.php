<?php

namespace App\Controller;

use App\Entity\Dealer;
use App\Entity\Player;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\DealerRepository;
use App\Repository\PlayerRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

use Doctrine\DBAL\Connection;

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class DbController extends AbstractController
{
    // #[Route('/dealer/add', name: 'add_dealer')]
    // public function addDealer(): Response
    // {
    //     return $this->render(
    //         'dealer/new-dealer.html.twig'
    //     );
    // }

    #[Route('/db/update', name: 'db_update', methods: ['POST'])]
    public function updateDb(
        DealerRepository $dealerRepository,
        PlayerRepository $playerRepository,
        Request $request,
    ): Response {
        $dealer = $dealerRepository->find($request->request->get('id'));

        if (!$dealer) {
            throw $this->createNotFoundException(
                'No dealer found for id '.$request->request->get('id')
            );
        }

        /**
         * @var int
         */
        $handsPlayed = $request->request->get('played');

        /**
         * @var int
         */
        $handsWon = $request->request->get('won');

        /**
         * @var int
         */
        $handsLost = $request->request->get('lost');

        /**
         * @var int
         */
        $handsPush = $request->request->get('push');

        $dealer->setHandsPlayed($handsPlayed);
        $dealer->setHandsWon($handsWon);
        $dealer->setHandsLost($handsLost);
        $dealer->setHandsPush($handsPush);
        $dealerRepository->save($dealer, true);
        $this->addFlash(
            'success',
            'Updated dealer with id '.$dealer->getId()
        );

        $players = $playerRepository;

        $player = new Player();
        /**
         * @var string
         */
        $name = $request->request->get('name');

        /**
         * @var int
         */
        $money = $request->request->get('money');

        /**
         * @var int
         */
        $roundsPlayed = $request->request->get('rounds');


        $player->setName($name);
        $player->setMoney($money);
        $player->setRoundsPlayed($roundsPlayed);

        $players->save($player, true);

        $this->addFlash(
            'success',
            'Added new player with id '.$player->getId()
        );


        return $this->redirectToRoute('db_show_all');
    }

    #[Route('/db/update/{id}', name: 'update_db_by_id')]
    public function updateDbById(
        SessionInterface $session,
        DealerRepository $dealerRepository,
        int $id
    ): Response {
        $dealer = $dealerRepository
            ->find($id);

        $player = $session->get('player');
        $name = $session->get('name');
        $gamesPlayed = $session->get('games');
        $dbDealer = $session->get('db-dealer');

        $data = [
            "dealer" =>  $dealer,
            "db_dealer" => $dbDealer,
            "player" => $player,
            "name" => $name,
            "games" => $gamesPlayed
        ];
        return $this->render('db/update-db.html.twig', $data);
    }

    #[Route('/db/show', name: 'db_show_all')]
    public function showAllDb(
        DealerRepository $dealerRepository,
        PlayerRepository $playerRepository,
    ): Response {
        $dealers = $dealerRepository
            ->findAll();
        $players = $playerRepository
        ->findAll();

        $data = [
            "dealers" => $dealers,
            "players" => $players
        ];
        return $this->render('db/all-db.html.twig', $data);
    }

    #[Route('/db/restore', name: 'db_restore')]
    public function restoreDb(
    ): Response {

        return $this->render('db/restore.html.twig');
    }

    #[Route('/db/reset', name: 'db_reset', methods: ['POST'])]
    public function dbTest(
        Request $request,
        ManagerRegistry $doctrine
    ): Response {
        $resp = $request->request->get('answer');
        if ($resp == "yes") {
            /**
             * @var Connection $connection
             */
            $connection = $doctrine->getConnection();
            $file = '../var/backup.sql';
            $sql = '
            DROP TABLE IF EXISTS dealer;
            DROP TABLE IF EXISTS player;
        '. file_get_contents($file);

            $connection->executeStatement($sql);
            $doctrine->getManager()->flush();

            $this->addFlash('success', 'Database restored');
        }
        return $this->redirectToRoute('db_show_all');
    }

    #[Route("/proj/kill-session", name: "kill_session")]
    public function killSession(
        SessionInterface $session
    ): Response {
        $hej = "hello";
        $session->invalidate();
        $this->addFlash(
            'warning',
            'Session killed!'
        );
        $data =[
            "hej" => $hej
        ];
        return $this->render('/proj/kill.html.twig', $data);
    }
}
