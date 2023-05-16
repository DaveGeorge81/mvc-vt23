<?php

namespace App\Controller;

use Exception;

use App\Card\CardHand;
use App\Card\DeckOfCards;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class DrawCard extends AbstractController
{
    #[Route("/card/deck/draw", name: "draw")]
    public function drawSingleCard(
        SessionInterface $session
    ): Response {
        if ($session->has('deck') === false) {
            $deck = new DeckOfCards();
            $session->set('deck', $deck);
        }
        /**
         * @var DeckOfCards
         */
        $deck = $session->get('deck');
        if ($session->has('drawn') === false) {
            $session->set('drawn', []);
        }

        $deck->shuffleDeck();
        $singleCard = $deck->drawSingle();
        if ($singleCard->suit == "empty") {
            $this->addFlash(
                'warning',
                'No more cards'
            );
            $data = [
                "deckCards" =>  "face-sad",
                "numberOfCards" => $deck->getNumberCards()
            ];
            return $this->render('draw.html.twig', $data);
        };
        $deck->removeCard();
        $session->set('deck', $deck);

        $data = [
            "deckCards" =>  $singleCard->getAsString(),
            "numberOfCards" => $deck->getNumberCards()
        ];
        return $this->render('draw.html.twig', $data);
    }

    #[Route("/card/deck/draw/{num<\d+>}", name: "draw_many")]
    public function drawMany(
        SessionInterface $session,
        int $num
    ): Response {
        if ($session->has('deck') === false) {
            $deck = new DeckOfCards();
            $session->set('deck', $deck);
        }
        /**
         * @var DeckOfCards
         */
        $deck = $session->get('deck');
        if ($num > $deck->getNumberCards()) {
            $maxCards = $deck->getNumberCards();
            throw new Exception("Drew too many cards. Only {$maxCards} cards left.");
        }

        $hand = new CardHand();
        for ($i = 1; $i <= $num; $i++) {
            $deck->shuffleDeck();
            $singleCard = $deck->drawSingle();
            $hand->Add($singleCard);
            $deck->removeCard();
        }

        $data = [
            "deckCards" =>  $hand->getString(),
            "numberOfCards" => $deck->getNumberCards()
        ];
        return $this->render('draw-many.html.twig', $data);
    }
}
