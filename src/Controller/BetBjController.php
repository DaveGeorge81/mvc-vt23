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

class BetBjController extends AbstractController
{

    #[Route("/proj/bet", name: "bj_bet")]
    public function bet(
        SessionInterface $session
    ): Response {
        /**
         * @var array<CardHand>
         */
        $hands = $session->get('hands');
        /**
         * @var CardPlayer
         */
        $player = $session->get('player');
        $i = 0;


        $data = [
            'money' => $player->getMoney(),
            'hands' => $hands,
            'i' => $i
        ];
        return $this->render('proj/bet.html.twig', $data);
    }

    #[Route("/proj/set-bet", name: "set_bet", methods: ['POST'])]
    public function setBet(
        SessionInterface $session,
        Request $request
    ): Response {
        $bets = [];
        /**
         * @var CardPlayer
         */
        $player = $session->get('player');
        $numberOfHands = $session->get('number');
        for ($i = 0; $i < $numberOfHands; $i++) {
            $name = (string) $i;
            $bet = $request->request->get($name);
            $bet = (int) $bet;
            array_push($bets, $bet);
            $player->subMoney($bet);
        }

        $session->set('player', $player);
        $session->set('bets', $bets);

        return $this->redirectToRoute('bj_winnings');
    }

    #[Route("/proj/winnings", name: "bj_winnings")]
    public function winnings(
        SessionInterface $session
    ): Response {
        /**
         * @var Dealer
         */
        $dbDealer = $session->get('db-dealer');
        /**
         * @var int
         */
        $numberOfHands = $session->get('number');
        /**
         * @var CardHand
         */
        $dealer = $session->get('dealer');
        /**
         * @var array<CardHand>
         */
        $hands = $session->get('hands');
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
        $gamesPlayed = $session->get('games');

        $util = new Utils();
        if (in_array("no", $done) === false) {
            for ($i = 0; $i < $numberOfHands; $i++) {
                $bet = $util->checkWinnings($hands[$i], $dealer, $bets[$i]);
                $player->addMoney($bet);
                if ($bet >= ($bets[$i] * 2)) {
                    $this->addFlash(
                        'warning',
                        'You win $'.$bet
                    );
                    $dbDealer->setHandsLost(($dbDealer->getHandsLost() + 1));
                }
                if ($bet == $bets[$i]) {
                    $this->addFlash(
                        'warning',
                        'Push!'
                    );
                    $dbDealer->setHandsPush(($dbDealer->getHandsPush() + 1));
                }
                if ($bet == 0) {
                    $this->addFlash(
                        'warning',
                        'Dealer wins!'
                    );
                    $dbDealer->setHandsWon(($dbDealer->getHandsWon() + 1));
                }
            }
            $dbDealer->setHandsPlayed(($dbDealer->getHandsPlayed() + $numberOfHands));
            $gameFinished = "yes";
            $gamesPlayed += 1;
            $session->set('finished', $gameFinished);
            $session->set('games', $gamesPlayed);
            $session->set('db-dealer', $dbDealer);
        };

        return $this->redirectToRoute('black_jack');
    }
}
