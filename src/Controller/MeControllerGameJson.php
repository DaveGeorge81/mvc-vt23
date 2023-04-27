<?php

namespace App\Controller;

use Exception;
use App\Card\Card;
use App\Card\CardGraphic;
use App\Card\CardHand;
use App\Card\DeckOfCards;
use App\Card\Player;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class MeControllerGameJson
{
    #[Route("/api/game", name: "game_api")]
    public function gameApi(
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
                "Player hand:" =>  $playerHand->getStringJson(),
                "Dealer hand:" =>  $cpuHand->getStringJson(),
                "Cards left in deck;" => $deck->getNumberCards(),
                "Player points:" => $playerPoints,
                "Dealer points" => $cpuPoints,
                "Is round done:" => $done
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

        $data = [
            "Player hand:" =>  $playerHand->getStringJson(),
            "Dealer hand:" =>  "",
            "Cards left in deck;" => $deck->getNumberCards(),
            "Player points:" => $playerPoints,
            "Dealer points" => "",
            "Is round done:" => $done
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
