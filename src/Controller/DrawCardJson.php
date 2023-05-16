<?php

namespace App\Controller;

use Exception;

use App\Card\CardHand;
use App\Card\DeckOfCards;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class DrawCardJson
{
    #[Route("/api/deck/draw", name: "single_api", methods: ['POST'])]
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
            $data = [
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
        };
        $deck->removeCard();
        $session->set('deck', $deck);

        $data = [
            "drawnCard" =>  $singleCard->getAsStringJson(),
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

    #[Route("/api/deck/draw/", name: "many_api", methods: ['POST'])]
    public function drawMany(
        Request $request,
        SessionInterface $session,
    ): Response {
        $num = $request->request->get('cards');
        // $num = $request->request->get('cards');
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
        // $deck = new DeckOfCards(new CardGraphic());

        $hand = new CardHand();
        for ($i = 1; $i <= $num; $i++) {
            $deck->shuffleDeck();
            $singleCard = $deck->drawSingle();
            $hand->Add($singleCard);
            $deck->removeCard();
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
