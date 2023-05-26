<?php

namespace App\Controller;

use App\Entity\Player;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\PlayerRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PlayerController extends AbstractController
{
    #[Route('/player/add', name: 'add_player')]
    public function addPlayer(): Response
    {
        return $this->render(
            'player/new-player.html.twig'
        );
    }

    #[Route('/player/create', name: 'player_create', methods: ['POST'])]
    public function createPlayer(
        Request $request,
        PlayerRepository $playerRepository
    ): Response {
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

        return $this->redirectToRoute('player_show_all');
    }

    #[Route('/player/show', name: 'player_show_all')]
    public function showAllPlayers(
        PlayerRepository $playerRepository
    ): Response {
        $players = $playerRepository
            ->findAll();

        $data = [
            "players" =>  $players
        ];
        return $this->render('player/all-players.html.twig', $data);
    }

    #[Route('/player/show/{id}', name: 'player_by_id')]
    public function showPlayerById(
        PlayerRepository $playerRepository,
        int $id
    ): Response {
        $player = $playerRepository
            ->find($id);

        $data = [
            "player" =>  $player
        ];
        return $this->render('books/single-book.html.twig', $data);
    }


    #[Route('/player/delete', name: 'player_delete', methods: ['POST'])]
    public function deletePlayer(
        PlayerRepository $playerRepository,
        Request $request
    ): Response {
        $player = $playerRepository->find($request->request->get('id'));

        if (!$player) {
            throw $this->createNotFoundException(
                'No player found for id '.$request->request->get('id')
            );
        }

        $playerRepository->remove($player, true);
        $this->addFlash(
            'success',
            'Deleted book with id '.$player->getId()
        );

        return $this->redirectToRoute('books_show_all');
    }

    #[Route('/player/delete/{id}', name: 'del_player_by_id')]
    public function deletePlayerById(
        PlayerRepository $playerRepository,
        int $id
    ): Response {
        $player = $playerRepository
            ->find($id);

        $data = [
            "player" =>  $player
        ];
        return $this->render('books/delete-book.html.twig', $data);
    }


    #[Route('/player/update', name: 'player_update', methods: ['POST'])]
    public function updatePlayer(
        PlayerRepository $playerRepository,
        Request $request,
    ): Response {
        $player = $playerRepository->find($request->request->get('id'));

        if (!$player) {
            throw $this->createNotFoundException(
                'No player found for id '.$request->request->get('id')
            );
        }

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
        $playerRepository->save($player, true);
        $this->addFlash(
            'success',
            'Updated player with id '.$player->getId()
        );


        return $this->redirectToRoute('books_show_all');
    }

    #[Route('/player/update/{id}', name: 'update_player_by_id')]
    public function updatePlayerById(
        PlayerRepository $playerRepository,
        int $id
    ): Response {
        $player = $playerRepository
            ->find($id);

        $data = [
            "player" =>  $player
        ];
        return $this->render('books/update-book.html.twig', $data);
    }

    // #[Route('/player/reset', name: 'reset_player')]
    // public function reset(): Response
    // {


    //     return $this->redirectToRoute('player_show_all');
    // }
}
