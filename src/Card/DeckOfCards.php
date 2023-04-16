<?php

namespace App\Card;

use App\Card\Card;

class DeckOfCards
{
    private $deck = [];
    public $suits = array('s' =>"♠", 'h' => "♡", 'd' => "♢", 'c' => "♣");
    private $suitsCards = array('2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A');
    private $points = array('2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14');
    private $suit2Color = array("♠" => Card::COLOR2, "♡" => Card::COLOR1, "♢" => Card::COLOR1, "♣" => Card::COLOR2);

    public function __construct()
    {
        $cardNum = 0;
        foreach ($this->suits as $suitAbbrev => $suit) {
            foreach (array_combine($this->suitsCards, $this->points) as $cardValue => $point) {
                $tempcard = new CardGraphic();
                $tempcard->suit = $suit;
                $tempcard->value = $point;
                $tempcard->cardName = $cardValue;
                $tempcard->color = $this->suit2Color[$suit];
                $tempcard->cardNumber = $cardNum++;


                $this->deck[] = $tempcard;
            }
        }
    }

    public function getNumberCards(): int
    {
        return count($this->deck);
    }

    public function getString(): array
    {
        $values = [];
        foreach ($this->deck as $card) {
            $values[] = $card->getAsString();
        }
        return $values;
    }

    public function getStringJson(): array
    {
        $values = [];
        foreach ($this->deck as $card) {
            $values[] = $card->getAsStringJson();
        }
        return $values;
    }

    public function shuffleDeck()
    {
        shuffle($this->deck);
    }

    public function removeCard()
    {
        unset($this->deck[0]);
        return $this->deck;
    }

    public function drawSingle()
    {
        shuffle($this->deck);
        if (empty($this->deck)) {
            return "empty";
        }
        return $this->deck[0];
    }

    public function sortDeck()
    {
        sort($this->deck);
        return $this->deck;
    }

}
