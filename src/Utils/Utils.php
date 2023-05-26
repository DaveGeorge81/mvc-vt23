<?php

namespace App\Utils;

use App\Card\BlackJackDeck;
use App\Card\CardHand;

class Utils
{
    /**
     * @return array<CardHand|BlackJackDeck>
     */
    public static function dealersTurn(CardHand $dealer, BlackJackDeck $deck)
    {
        $points = 0;
        while ($points < 17) {
            if ($deck->getNumberCards() == 0) {
                $deck = new BlackJackDeck();
                $deck->shuffleDeck();
            }
            $dealer->add($deck->hitCard());

            $points = $dealer->points();
        }
        return [$dealer, $deck];
    }

    public static function checkWinnings(CardHand $hand, CardHand $dealer, int $bet): int
    {
        if ($hand->blackJackPoints() > $dealer->blacKJackPoints() && $hand->blackJackPoints() <= 21 ||
            $dealer->blackJackPoints() > 21 && $hand->blackJackPoints() <= 21) {
            if ($hand->blackJackPoints() == 21) {
                $bet = ceil($bet + ($bet * 1.5));
                $bet = (int) $bet;
                return $bet;
            }
            return $bet * 2;
        }
        if ($hand->blackJackPoints() == $dealer->blacKJackPoints() && $hand->blackJackPoints() <= 21) {
            return $bet;
        }
        return 0;
    }


}
