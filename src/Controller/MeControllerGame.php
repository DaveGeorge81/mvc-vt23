<?php

namespace App\Controller;

use Exception;

use App\Card\Card;
use App\Card\CardGraphic;
use App\Card\CardHand;
use App\Card\DeckOfCards;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class MeControllerGame extends AbstractController
{
    #[Route("/game", name: "game")]
    public function game(): Response
    {
        return $this->render('game.html.twig');
    }

    #[Route("/game/init", name: "init")]
    public function init(
        SessionInterface $session
    ): Response {
        /**
         * @var DeckOfCards
         */
        $deck = new DeckOfCards();
        $deck->shuffleDeck();
        $session->set('game21', $deck);

        $playerHand = new CardHand();
        $playerHand->add($deck->hitDeck());
        $session->set('player', $playerHand);

        $cpuHand = new CardHand();
        $session->set('cpu', $cpuHand);

        // $data = [
        //     "deckCards" =>  $deck->getString(),
        //     "numberOfCards" => $deck->getNumberCards()
        // ];
        return $this->redirectToRoute('game21');
    }

    #[Route("/game/game21", name: "game21")]
    public function game21(
        SessionInterface $session
    ): Response {
        /**
         * @var DeckOfCards
         */
        $deck = $session->get('game21');
        /**
         * @var CardHand
         */
        $playerHand = $session->get('player');
        /**
         * @var CardHand
         */
        $cpuHand = $session->get('cpu');

        if ($cpuHand->getValues() != []) {
            $data = [
                "playerCards" =>  $playerHand->getString(),
                "cpuCards" =>  $cpuHand->getString(),
                "numberOfCards" => $deck->getNumberCards()
            ];
            return $this->render('game21.html.twig', $data);
        }

        // if ($playerHand->getValues() != []) {
        //     $data = [
        //         "playerCards" =>  $playerHand->getString(),
        //         "cpuCards" =>  "",
        //         "numberOfCards" => $deck->getNumberCards()
        //     ];
        //     return $this->render('game21.html.twig', $data);
        // }


        $data = [
            "playerCards" =>  $playerHand->getString(),
            "cpuCards" =>  "",
            "numberOfCards" => $deck->getNumberCards()
        ];
        return $this->render('game21.html.twig', $data);
    }
}

