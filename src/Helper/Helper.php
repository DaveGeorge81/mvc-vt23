<?php

namespace App\Helper;

use App\Card\CardHand;
use App\Card\DeckOfCards;

class Helper
{
    public cardHand $cpuHand;
    public int $cpuPoints;
    public DeckOfCards $deck;
    public string $done;

    public function __construct(
        CardHand $cpuHand = new CardHand(),
        int $cpuPoints = 0,
        DeckOfCards $deck = new DeckOfCards(),
        string $done = "no"
    ) {
        $this->cpuHand = $cpuHand;
        $this->cpuPoints = $cpuPoints;
        $this->deck = $deck;
        $this->done = $done;
    }

    public function cpuRound(DeckOfCards $deck): Helper
    {
        $this->deck = $deck;
        while ($this->cpuPoints < 17) {
            $this->cpuHand->add($deck->hitCard());

            $this->cpuPoints = $this->cpuHand->points();
        };
        $this->done = "yes";
        return $this;
    }
}
