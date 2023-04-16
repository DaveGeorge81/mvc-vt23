<?php

namespace App\Controller;

use App\Card\Card;
use App\Card\CardGraphic;
use App\Card\CardHand;
use App\Card\DeckOfCards;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class MeControllerJson
{
    #[Route("/api/lucky/number")]
    public function jsonNumber(): Response
    {
        $number = random_int(0, 100);

        $data = [
            'lucky-number' => $number,
            'lucky-message' => 'Hi there!',
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }

    #[Route("/api/quote", name: "quote")]
    public function quote(): Response
    {
        $quotes = ["Today is the first day in your new life.",
            "Det lönar sig inte att springa om man är på fel väg.",
            "Man skådar icke given häst i munnen.",
            "Även den längsta resa börjar med ett enda steg.",
            "Bättre lite skit i hörnen än ett rent helvete."];
        $number = random_int(0, 4);

        $data = [
            'quote' => $quotes[$number],
            'date' => date("Y-m-d"),
            'timestamp' => time()
        ];
        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_UNESCAPED_UNICODE
        );
        return $response;
    }

    #[Route("/api/deck", name: "deck_api", methods: ['GET'])]
    public function deck(
        SessionInterface $session
    ): Response {
        if ($session->has('deck') == false) {
            $deck = new DeckOfCards(new CardGraphic());
            $session->set('deck', $deck);
        };
        $deck = $session->get('deck');
        $deck->sortDeck();
        $session->set('deck', $deck);

        $data = [
            "cardsInDeck" =>  $session->get('deck')->getStringJson(),
            "numberOfCards" => $session->get('deck')->getNumberCards()
        ];
        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_UNESCAPED_UNICODE
        );
        return $response;

    }

    #[Route("/api/deck/shuffle", name: "shuffle_api", methods: ['POST'])]
    public function shuffleCard(
        SessionInterface $session
    ): Response {
        $deck = new DeckOfCards(new CardGraphic());
        $deck->shuffleDeck();
        if ($session->has('deck')) {
            $session->remove('deck');
        }

        $data = [
            "cardsInDeck" =>  $deck->getStringJson()
        ];
        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_UNESCAPED_UNICODE
        );
        return $response;

    }

    #[Route("/api/deck/draw", name: "single_api", methods: ['POST'])]
    public function drawCard(
        SessionInterface $session
    ): Response {
        if ($session->has('deck')) {
            $deck = $session->get('deck');
        } else {
            $deck = new DeckOfCards();
        }
        if ($session->has('drawn') == false) {
            $session->set('drawn', []);
        }

        $singleCard = $deck->drawSingle();
        if ($singleCard == "empty") {
            $data = [
                "cardsLeft" => $session->get('deck')->getNumberCards()
            ];
            $response = new JsonResponse($data);
            $response->setEncodingOptions(
                $response->getEncodingOptions() | JSON_PRETTY_PRINT
            );
            $response->setEncodingOptions(
                $response->getEncodingOptions() | JSON_UNESCAPED_UNICODE
            );
            return $response;
        };
        $deck->removeCard($singleCard->cardNumber);
        $session->set('deck', $deck);

        $data = [
            "drawnCard" =>  $singleCard->getAsStringJson(),
            "cardsLeft" => $session->get('deck')->getNumberCards()
        ];
        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_UNESCAPED_UNICODE
        );
        return $response;

    }

    #[Route("/api/deck/draw/", name: "many_api", methods: ['POST'])]
    public function drawMany(
        Request $request,
        SessionInterface $session,
    ): Response {
        $num = $request->request->get('cards');
        // $num = $request->request->get('cards');
        if ($session->has('deck') == false) {
            $deck = new DeckOfCards();
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
            "drawnCards" =>  $hand->getStringJson(),
            "cardsLeft" => $deck->getNumberCards()
        ];
        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_UNESCAPED_UNICODE
        );
        return $response;

    }
}
