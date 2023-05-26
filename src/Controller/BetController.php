<?php

namespace App\Controller;

use Exception;

use App\Card\Card;
use App\Card\CardGraphic;
use App\Card\CardHand;
use App\Card\DeckOfCards;
use App\Card\CardPlayer;
use App\Helper\Helper;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class BetController extends AbstractController
{
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
         * @var CardPlayer
         */
        $playerMoney = $session->get('playerMoney');

        /**
         * @var CardPlayer
         */
        $cpuMoney = $session->get('cpuMoney');

        $data = [
            "playerMoney" => $playerMoney->getMoney(),
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
}
