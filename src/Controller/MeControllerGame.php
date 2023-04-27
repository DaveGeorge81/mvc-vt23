<?php

namespace App\Controller;

use Exception;

use App\Card\Card;
use App\Card\CardGraphic;
use App\Card\CardHand;
use App\Card\DeckOfCards;
use App\Card\Player;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
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

        $session->set('player', new CardHand());
        $session->set('game21', $deck);

        $session->set('cpu', new CardHand());

        $session->set('playerMoney', new Player());
        $session->set('cpuMoney', new Player());

        return $this->redirectToRoute('make-bet');
    }


    #[Route("/game/make-bet", name: "make-bet")]
    public function makeBet(
        SessionInterface $session
    ): Response {
        $done = "no";
        $session->set('done', $done);

        $session->set('playerPoints', 0);
        $session->set('cpuPoints', 0);
        $session->set('player', new CardHand());
        $session->set('cpu', new CardHand());

        /**
         * @var Player
         */
        $playerMoney = $session->get('playerMoney');

        /**
         * @var Player
         */
        $cpuMoney = $session->get('cpuMoney');

        $data = [
            "playerMoney" =>  $playerMoney->getMoney(),
            "cpuMoney" => $cpuMoney->getMoney(),
        ];
        return $this->render('bet.html.twig', $data);
    }


    #[Route("/game/bet", name: "bet", methods: ['POST'])]
    public function bet(
        Request $request,
        SessionInterface $session
    ): Response {
        $bet = $request->request->get('amount');
        $session->set('bet', $bet);

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
        /**
         * @var int
         */
        $playerPoints = $session->get('playerPoints');
        /**
         * @var int
         */
        $cpuPoints = $session->get('cpuPoints');

        /**
         * @var string
         */
        $done = $session->get('done');

        /**
         * @var Player
         */
        $playerMoney = $session->get('playerMoney');

        /**
         * @var Player
         */
        $cpuMoney = $session->get('cpuMoney');

        $data = [
            "playerCards" =>  $playerHand->getString(),
            "cpuCards" =>  $cpuHand->getString(),
            "numberOfCards" => $deck->getNumberCards(),
            "playerPoints" => $playerPoints,
            "cpuPoints" => $cpuPoints,
            "done" => $done,
            "playerMoney" => $playerMoney->getMoney(),
            "cpuMoney" => $cpuMoney->getMoney()
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
         * @var Player
         */
        $playerMoney = $session->get('playerMoney');
        /**
         * @var Player
         */
        $cpuMoney = $session->get('cpuMoney');

        /**
         * @var CardHand
         */
        $playerHand = $session->get('player');

        if (($deck->getNumberCards() == 0)) {
            $deck = new DeckOfCards();
            $deck->shuffleDeck();
            $session->set('game21', $deck);
        }
        $playerHand->add($deck->hitCard());
        $session->set('player', $playerHand);
        $session->set('game21', $deck);
        $session->set('playerPoints', $playerHand->points());

        /**
         * @var int
         */
        $bet = $session->get('bet');

        if ($session->get('playerPoints') > 21) {
            $done = "yes";
            $session->set('done', $done);
            $playerMoney->subMoney($bet);
            $cpuMoney->addMoney($bet);
            $this->addFlash(
                'alert',
                'Bust! You loose the round!'
            );
        }

        if ($session->get('playerPoints') == 21) {
            $done = "yes";
            $session->set('done', $done);
            $playerMoney->addMoney($bet);
            $cpuMoney->subMoney($bet);
            $this->addFlash(
                'success',
                'You got 21! You win the round!'
            );
        }

        $session->set('playerMoney', $playerMoney);
        $session->set('cpuMoney', $cpuMoney);

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
         * @var Player
         */
        $playerMoney = $session->get('playerMoney');
        /**
         * @var Player
         */
        $cpuMoney = $session->get('cpuMoney');

        /**
         * @var CardHand
         */
        $cpuHand = $session->get('cpu');

        /**
         * @var int
         */
        $bet = $session->get('bet');

        if (($deck->getNumberCards() == 0)) {
            $deck = new DeckOfCards();
            $deck->shuffleDeck();
            $session->set('game21', $deck);
        }

        while ($session->get('cpuPoints') < 17) {
            $cpuHand->add($deck->hitCard());
            $session->set('cpu', $cpuHand);
            $session->set('game21', $deck);

            $done = "yes";
            $session->set('done', $done);

            $session->set('cpuPoints', $cpuHand->points());
        }

        if ($session->get('playerPoints') > $session->get('cpuPoints') ||($session->get('cpuPoints') > 21)) {
            $playerMoney->addMoney($bet);
            $cpuMoney->subMoney($bet);
            $this->addFlash(
                'success',
                'Great! You win the round!'
            );
        }

        if (($session->get('playerPoints') == $session->get('cpuPoints') ||
            (($session->get('playerPoints') < $session->get('cpuPoints')) && $session->get('cpuPoints') <= 21))) {
            $playerMoney->subMoney($bet);
            $cpuMoney->addMoney($bet);
            $this->addFlash(
                'warning',
                'Sorry! Dealer wins this round!'
            );
        }

        $session->set('playerMoney', $playerMoney);
        $session->set('cpuMoney', $cpuMoney);

        return $this->redirectToRoute('game21');
    }


    #[Route("/game/doc", name: "doc")]
    public function doc(): Response
    {
        return $this->render('doc.html.twig');
    }
}
