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

class BlackJackController extends AbstractController
{
    #[Route("/proj/start", name: "start")]
    public function start(
    ): Response {
        return $this->render('proj/start.html.twig');
    }

    #[Route("/proj/init", name: "bj_init", methods: ['POST'])]
    public function init(
        SessionInterface $session,
        Request $request,
        DealerRepository $dealerRepository
    ): Response {
        $dealer = $dealerRepository
        ->find(1);

        $player = new CardPlayer();
        $deck = new BlackJackDeck();
        $deck->shuffleDeck();
        $name = $request->request->get('name');
        $numberOfHands = $request->request->get('hands');
        $gamesPlayed = 0;

        $session->set('deck', $deck);

        $session->set('name', $name);
        $session->set('player', $player);

        $session->set('number', $numberOfHands);
        $session->set('games', $gamesPlayed);
        $session->set('db-dealer', $dealer);

        return $this->redirectToRoute('set_up');
    }

    #[Route("/proj/setup", name: "set_up")]
    public function setup(
        SessionInterface $session
    ): Response {
        /**
         * @var BlackJackDeck
         */
        $deck = $session->get('deck');
        $numberOfHands = $session->get('number');

        $gameFinished = "no";
        $hands = [];
        $done = [];

        for ($i = 0; $i < $numberOfHands; $i++) {
            array_push($done, "no");
        }

        for ($i = 0; $i < $numberOfHands; $i++) {
            array_push($hands, new CardHand());
        }

        foreach($hands as $hand) {
            if ($deck->getNumberCards() == 0) {
                $deck = new BlackJackDeck();
                $deck->shuffleDeck();
            }
            $hand->add($deck->hitCard());
        }

        $dealer = new CardHand();
        if ($deck->getNumberCards() == 0) {
            $deck = new BlackJackDeck();
            $deck->shuffleDeck();
        }
        $dealer->add($deck->hitCard());
        $session->set('dealer', $dealer);

        for ($i = 0; $i < $numberOfHands; $i++) {
            if ($deck->getNumberCards() == 0) {
                $deck = new BlackJackDeck();
                $deck->shuffleDeck();
            }
            $hands[$i]->add($deck->hitCard());
            if ($hands[$i]->blackJackPoints() == 21) {
                $done[$i] = "yes";
            }
        }

        $session->set('done', $done);
        $session->set('deck', $deck);
        $session->set('hands', $hands);
        $session->set('finished', $gameFinished);

        return $this->redirectToRoute('bj_bet');
    }

    #[Route("/proj/game", name: "black_jack")]
    public function game(
        SessionInterface $session
    ): Response {
        $name = $session->get('name');
        /**
         * @var array<CardHand>
         */
        $hands = $session->get('hands');
        /**
         * @var CardHand
         */
        $dealer = $session->get('dealer');
        /**
         * @var BlackJackDeck
         */
        $deck = $session->get('deck');
        /**
         * @var array<int>
         */
        $bets = $session->get('bets');
        /**
         * @var CardPlayer
         */
        $player = $session->get('player');
        /**
         * @var array<string>
         */
        $done = $session->get('done');
        /**
         * @var string
         */
        $gameFinished = $session->get('finished');
        /**
         * @var int
         */
        $numberOfHands = $session->get('number');
        /**
         * @var int
         */
        $gamesPlayed = $session->get('games');
        $cards = [];
        foreach($hands as $hand) {
            $card = $hand->getString();
            array_push($cards, $card);
        }

        $i = 0;
        /**
         * @var float
         */
        $stat = $deck->countingCards();

        $data = [
            "name" => $name,
            "hands" => $hands,
            "cards" => $cards,
            "i" => $i,
            "dealer" => $dealer->getString(),
            "dealerHand" => $dealer,
            "done" => $done,
            "bets" => $bets,
            "left" => $deck->getNumberCards(),
            "money" => $player->getMoney(),
            "stat" => $stat,
            "finished" => $gameFinished,
            "number_of_hands" => $numberOfHands,
            "games_played" => $gamesPlayed
        ];
        return $this->render('proj/blackjack.html.twig', $data);
    }

    #[Route("/proj/dealer", name: "bj_dealer")]
    public function dealer(
        SessionInterface $session
    ): Response {
        /**
         * @var array<string>
         */
        $done = $session->get('done');
        /**
         * @var CardHand
         */
        $dealer = $session->get('dealer');
        /**
         * @var BlackJackDeck
         */
        $deck = $session->get('deck');

        if (in_array("no", $done) === false) {
            $dealersTurn = new Utils();
            $dealersTurn = $dealersTurn->dealersTurn($dealer, $deck);
            $session->set('dealer', $dealersTurn[0]);
            $session->set('deck', $dealersTurn[1]);
        }
        return $this->redirectToRoute('bj_winnings');
    }
}
