<?php

namespace App\Controller;

use Exception;

use App\Utils\Utils;
use App\Card\BlackJackDeck;
use App\Card\Card;
use App\Card\CardGraphic;
use App\Card\CardHand;
use App\Card\DeckOfCards;
use App\Card\CardPlayer;
use App\Helper\Helper;

use App\Entity\Dealer;

use App\Repository\DealerRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class HitBjController extends AbstractController
{
    #[Route("/proj/hit", name: "bj_hit", methods: ['POST'])]
    public function hit(
        SessionInterface $session,
        Request $request
    ): Response {
        $request = $request->request->get('hand');
        /**
         * @var array<CardHand>
         */
        $hands = $session->get('hands');
        /**
         * @var BlackJackDeck
         */
        $deck = $session->get('deck');
        /**
         * @var array<string>
         */
        $done = $session->get('done');

        if ($deck->getNumberCards() == 0) {
            $deck = new BlackJackDeck();
            $deck->shuffleDeck();
        }
        $hands[$request]->add($deck->hitCard());


        $session->set('hands', $hands);
        $session->set('deck', $deck);

        if ($hands[$request]->blackJackPoints() >=21) {
            $done[$request] = "yes";
            $session->set('done', $done);
            return $this->redirectToRoute('bj_dealer');
        }

        return $this->redirectToRoute('black_jack');
    }

    #[Route("/proj/stand", name: "bj_stand", methods: ['POST'])]
    public function stand(
        SessionInterface $session,
        Request $request
    ): Response {
        $request = $request->request->get('stand');
        /**
         * @var array<string>
         */
        $done = $session->get('done');

        $done[$request] = "yes";
        $session->set('done', $done);

        return $this->redirectToRoute('bj_dealer');
    }
}
