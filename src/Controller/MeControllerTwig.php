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

class MeControllerTwig extends AbstractController
{
    #[Route("/", name: "home")]
    public function home(): Response
    {
        return $this->render('home.html.twig');
    }

    #[Route("/about", name: "about")]
    public function about(): Response
    {
        return $this->render('about.html.twig');
    }

    #[Route("/lucky", name: "lucky")]
    public function number(): Response
    {
        $number = random_int(0, 100);

        $pic = "even";

        if ($number % 2 == 1) {
            $pic = "odd";
        }

        $data = [
            'number' => $number,
            'pic' =>$pic
        ];

        return $this->render('lucky.html.twig', $data, );
    }

    #[Route("/report", name: "report")]
    public function report(): Response
    {
        return $this->render('report.html.twig');
    }

    #[Route("/api", name: "api")]
    public function api(): Response
    {
        return $this->render('api.html.twig');
    }

    #[Route("/card", name: "card")]
    public function card(): Response
    {

        return $this->render('card.html.twig');
    }

    #[Route("/card/deck", name: "deck")]
    public function deck(
        SessionInterface $session
    ): Response {
        if ($session->has('deck') === false) {
            $deck = new DeckOfCards();
            $session->set('deck', $deck);
        };
        /**
         * @var DeckOfCards
         */
        $deck = $session->get('deck');
        $deck->sortDeck();
        $session->set('deck', $deck);

        $data = [
            "deckCards" =>  $deck->getString(),
            "numberOfCards" => $deck->getNumberCards()
        ];
        return $this->render('deck.html.twig', $data);
    }

    #[Route("/card/deck/shuffle", name: "shuffle")]
    public function shuffleCard(
        SessionInterface $session
    ): Response {
        $deck = new DeckOfCards();
        $deck->shuffleDeck();
        if ($session->has('deck')) {
            $session->remove('deck');
        }

        $data = [
            "deckCards" =>  $deck->getString(),
            "numberOfCards" => $deck->getNumberCards()
        ];
        return $this->render('shuffle.html.twig', $data);
    }

    #[Route("/card/deck/draw", name: "draw")]
    public function drawCard(
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
