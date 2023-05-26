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
use App\Repository\PlayerRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class ProjectControllerJson extends AbstractController
{
    #[Route("/proj/api/search/", name: "search_name", methods: ['POST'])]
    public function searchName(
        PlayerRepository $playerRepository,
        Request $request
    ): Response {
        /**
         * @var string
         */
        $name = $request->request->get('name');
        $players = $playerRepository
        ->findByName($name);

        $response = $this->json($players);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_UNESCAPED_UNICODE
        );
        return $response;
    }

    #[Route("/proj/api/players", name: "api_players")]
    public function apiPlayers(
        PlayerRepository $playerRepository
    ): Response {
        $players = $playerRepository
        ->findAll();

        $response = $this->json($players);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_UNESCAPED_UNICODE
        );
        return $response;
    }

    #[Route("/proj/api/dealer", name: "api_dealer")]
    public function apiDealer(
        DealerRepository $dealerRepository
    ): Response {
        $dealer = $dealerRepository
        ->find(1);

        $response = $this->json($dealer);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_UNESCAPED_UNICODE
        );
        return $response;
    }

    #[Route("/proj/api/card-stat", name: "api_card_stat")]
    public function apiCardStat(
        SessionInterface $session
    ): Response {
        if ($session->has('deck') === false) {
            $deck = new BlackJackDeck();
            $session->set('deck', $deck);
        };
        /**
         * @var BlackJackDeck
         */
        $deck = $session->get('deck');
        /**
         * @var float
         */
        $stat = $deck->countingCards();

        $data = [
            "Face card chance (%)" => $stat
        ];
        $response = $this->json($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_UNESCAPED_UNICODE
        );
        return $response;
    }

    #[Route("/proj/api/show-hands", name: "api_show_hands")]
    public function apiShowHands(
        SessionInterface $session
    ): Response {
        if ($session->has('hands') === false) {
            $deck = new BlackJackDeck();
            $hand = new CardHand();
            $deck->shuffleDeck();
            $hand->add($deck->hitCard());
            $hand->add($deck->hitCard());
            $hands = [];
            array_push($hands, $hand);
            $session->set('hands', $hands);
        };
        /**
         * @var array<CardHand>
         */
        $hands = $session->get('hands');
        $newHands = [];
        foreach ($hands as $hand) {
            $newHands[] = $hand->getStringJson();
        }

        $data = [
            "Hands" => $newHands
        ];
        $response = $this->json($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_UNESCAPED_UNICODE
        );
        return $response;
    }
}
