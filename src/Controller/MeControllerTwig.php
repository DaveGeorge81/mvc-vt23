<?php

namespace App\Controller;

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

        if ($number % 2 == 1) {
            $pic = "odd";
        } else {
            $pic = "even";
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

    #[Route("/kmom01", name: "kmom01")]
    public function kmom01(): Response
    {
        return $this->render('kmom01.html.twig');
    }

    #[Route("/card", name: "card")]
    public function card(): Response
    {
        $deck = new DeckOfCards(new CardGraphic());
        $card = new CardGraphic("clubs", "q", "black", 5);

        $data = [
        ];
        return $this->render('card.html.twig', $data);
    }

    #[Route("/card/deck", name: "deck")]
    public function deck(
        SessionInterface $session
    ): Response {
        if ($session->has('deck') == false) {
            $deck = new DeckOfCards(new CardGraphic());
            $session->set('deck', $deck);
            $ms = "deck set to session";
        } else {
            $ms ="deck already in session";
        };
        $deck = $session->get('deck');
        $deck->sortDeck();
        $session->set('deck', $deck);

        $data = [
            "deckCards" =>  $session->get('deck')->getString(),
            "ms" => $ms,
            "numberOfCards" => $session->get('deck')->getNumberCards()
        ];
        return $this->render('deck.html.twig', $data);
    }

    #[Route("/card/deck/shuffle", name: "shuffle")]
    public function shuffleCard(
        SessionInterface $session
    ): Response {
        $deck = new DeckOfCards(new CardGraphic());
        $deck->shuffleDeck();
        if ($session->has('deck')) {
            $session->remove('deck');
        }
        if ($session->has('drawn')) {
            $session->remove('drawn');
        }


        $data = [
            "deckCards" =>  $deck->getString()
        ];
        return $this->render('shuffle.html.twig', $data);
    }

    #[Route("/card/deck/draw", name: "draw")]
    public function drawCard(
        SessionInterface $session
    ): Response {
        if ($session->has('deck')) {
            $deck = $session->get('deck');
        } else {
            $deck = new DeckOfCards(new CardGraphic());
        }
        if ($session->has('drawn') == false) {
            $session->set('drawn', []);
        }

        $singleCard = $deck->drawSingle();
        if ($singleCard == "empty") {
            $this->addFlash(
                'warning',
                'No more cards'
            );
            $data = [
                "deckCards" =>  "face-sad",
                "numberOfCards" => $session->get('deck')->getNumberCards()
            ];
            return $this->render('draw.html.twig', $data);
        };
        $deck->removeCard($singleCard->cardNumber);
        $session->set('deck', $deck);

        $data = [
            "deckCards" =>  $singleCard->getAsString(),
            "numberOfCards" => $session->get('deck')->getNumberCards()
        ];
        return $this->render('draw.html.twig', $data);
    }

    #[Route("/card/deck/draw/{num<\d+>}", name: "draw_many")]
    public function drawMany(
        SessionInterface $session,
        int $num
    ): Response {
        if ($session->has('deck') == false) {
            $deck = new DeckOfCards(new CardGraphic());
            $session->set('deck', $deck);
        }
        $deck = $session->get('deck');
        if ($num > $session->get('deck')->getNumberCards()) {
            $maxCards = $session->get('deck')->getNumberCards();
            throw new \Exception("Drew too many cards. Only {$maxCards} cards left.");
        }
        // $deck = new DeckOfCards(new CardGraphic());

        $hand = new CardHand();
        for ($i = 1; $i <= $num; $i++) {
            $singleCard = $deck->drawSingle();
            $hand->Add($singleCard);
            $deck->removeCard($singleCard->cardNumber);
        }

        $data = [
            "deckCards" =>  $hand->getString(),
            "numberOfCards" => $deck->getNumberCards()
        ];
        return $this->render('draw-many.html.twig', $data);
    }

    // #[Route("/card/deck/test", name: "test")]
    // public function test(
    //     SessionInterface $session
    // ): Response
    // {
    //     // $card = new Card("spades", "A", Card::COLOR2, 0);
    //     if ($session->has('deck') == False) {
    //         $ms = "false";
    //         $deck = new DeckOfCards(new CardGraphic());
    //     } else {
    //         $ms ="true";
    //         $deck = $session->get('deck');

    //     };
    //     $test1 = [0, 1];
    //     $test2 = $deck->testar($test1);
    //     if ($test2 == null) {
    //         $this->addFlash(
    //             'warning',
    //             'No more cards'
    //         );
    //         $data = [
    //             "ms" => $ms,
    //             "deckCards" =>  "face-sad"
    //         ];
    //         return $this->render('test.html.twig', $data);
    //     };
    //     // $session->get('deck')->removeCard(0);

    //     $data = [
    //         "ms" => $ms,
    //         "deckCards" =>  $test2->getAsString()
    //     ];
    //     return $this->render('test.html.twig', $data);
    // }

}
