<?php

namespace App\Card;

use App\Card\Card;

class CardHand
{
    /**
     * @var array<Card>  array of cards
     */
    private $hand = [];

    public function add(Card $card): void
    {
        $this->hand[] = $card;
    }

    public function getNumberCards(): int
    {
        return count($this->hand);
    }


    /**
     *@return array<int>
     */
    public function getValues(): array
    {
        $values = [];
        foreach ($this->hand as $card) {
            $values[] = $card->getValue();
        }
        return $values;
    }

    /**
     *@return array<string>
     */
    public function getString(): array
    {
        $values = [];
        foreach ($this->hand as $card) {
            $values[] = $card->getAsString();
        }
        return $values;
    }

    /**
     *@return array<string>
     */
    public function getStringJson(): array
    {
        $values = [];
        foreach ($this->hand as $card) {
            $values[] = $card->getAsStringJson();
        }
        return $values;
    }


    public function points(): int
    {
        $points = 0;
        $aces = 0;
        foreach ($this->hand as $card) {
            $points += $card->getValue();
            if ($card->getName() == 'A') {
                $aces += 1;
            }
        }
        while (($aces > 0) && ($points > 21)) {
            $points -= 13;
            $aces -= 1;
        }
        return $points;
    }

        /**
     *@return array<string>
     */
    public function getNames(): array
    {
        $values = [];
        foreach ($this->hand as $card) {
            $values[] = $card->getName();
        }
        return $values;
    }
}
