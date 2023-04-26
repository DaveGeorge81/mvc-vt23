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
        if ($session->has('game21')) {
            $session->remove('game21');
        }

        $deck = new DeckOfCards();
        $deck->shuffleDeck();

        $done = "no";
        $session->set('done', $done);

        $session->set('playerPoints', 0);
        $session->set('cpuPoints', 0);

        $playerHand = new CardHand();
        // $playerHand->add($deck->hitCard());
        $session->set('player', $playerHand);
        $session->set('game21', $deck);

        $cpuHand = new CardHand();
        $session->set('cpu', $cpuHand);

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
        // $playerPoints = $playerHand->points();
        $playerPoints = $session->get('playerPoints');
        // $cpuPoints = $cpuHand->points();
        // $session->set('playerPoints', $playerPoints);
        $cpuPoints = $session->get('cpuPoints');

        /**
         * @var string
         */
        $done = $session->get('done');

        if ($cpuHand->getValues() != []) {
            $data = [
                "playerCards" =>  $playerHand->getString(),
                "cpuCards" =>  $cpuHand->getString(),
                "numberOfCards" => $deck->getNumberCards(),
                "playerPoints" => $playerPoints,
                "cpuPoints" => $cpuPoints,
                "done" => $done
            ];
            return $this->render('game21.html.twig', $data);
        }

        $data = [
            "playerCards" =>  $playerHand->getString(),
            "cpuCards" =>  "",
            "numberOfCards" => $deck->getNumberCards(),
            "playerPoints" => $playerPoints,
            "cpuPoints" => "",
            "done" => $done
        ];
        return $this->render('game21.html.twig', $data);
    }

    #[Route("/game/hit", name: "hit")]
    public function hit(
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
        $playerHand->add($deck->hitCard());
        $session->set('player', $playerHand);
        $session->set('game21', $deck);
        $session->set('playerPoints', $playerHand->points());

        if ($session->get('playerPoints') > 21) {
            $this->addFlash(
                'alert',
                'Bust! You loose!'
            );
        }

        if ($session->get('playerPoints') == 21) {
            $this->addFlash(
                'success',
                'You got 21! You win!'
            );
        }

        return $this->redirectToRoute('game21');
    }

    #[Route("/game/cpuHit", name: "cpuHit")]
    public function cpuHit(
        SessionInterface $session
    ): Response {
        /**
         * @var DeckOfCards
         */
        $deck = $session->get('game21');

        /**
         * @var CardHand
         */
        $cpuHand = $session->get('cpu');
        $cpuHand->add($deck->hitCard());
        $session->set('cpu', $cpuHand);
        $session->set('game21', $deck);

        $done = "yes";
        $session->set('done', $done);

        $session->set('cpuPoints', $cpuHand->points());

        if ($session->get('cpuPoints') < 17) {
            return $this->redirectToRoute('cpuHit');
        }

        if ($session->get('playerPoints') > $session->get('cpuPoints') ||($session->get('cpuPoints') > 21) ) {
            $this->addFlash(
                'success',
                'Congratulations! You win!'
            );
        }

        if (($session->get('playerPoints') == $session->get('cpuPoints') || 
            (($session->get('playerPoints') < $session->get('cpuPoints')) && $session->get('cpuPoints') <= 21))) {
            $this->addFlash(
                'warning',
                'Sorry! Bank wins!'
            );
        }

        return $this->redirectToRoute('game21');
    }
}
