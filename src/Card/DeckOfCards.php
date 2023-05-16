<?php

namespace App\Card;

use App\Card\Card;

class DeckOfCards
{
    /**
     * @var array<Card>  deck of cards
     */
    private $deck = [];

    /**
     * @var array<string>  suits
     */
    public $suits = array('s' =>"♠", 'h' => "♡", 'd' => "♢", 'c' => "♣");

    /**
     * @var array<string>  card types
     */
    private $suitsCards = array('2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A');

    /**
     * @var array<int>  card values
     */
    private $points = array(2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14);

    /**
     * @var array<string>  card colors
     */
    private $suit2Color = array("♠" => Card::COLOR2, "♡" => Card::COLOR1, "♢" => Card::COLOR1, "♣" => Card::COLOR2);

    public function __construct()
    {
        $cardNum = 0;
        foreach ($this->suits as $suit) {
            foreach (array_combine($this->suitsCards, $this->points) as $cardType => $point) {
                $tempcard = new CardGraphic();
                $tempcard->suit = $suit;
                $tempcard->value = $point;
                $tempcard->cardName = $cardType;
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

    /**
     *@return array<string>
     */
    public function getString(): array
    {
        $values = [];
        foreach ($this->deck as $card) {
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
        foreach ($this->deck as $card) {
            $values[] = $card->getAsStringJson();
        }
        return $values;
    }

    /**
     *@return array<Card>
     */
    public function shuffleDeck()
    {
        shuffle($this->deck);
        return $this->deck;
    }


    /**
     *@return array<Card>
     */
    public function removeCard()
    {
        unset($this->deck[0]);
        return $this->deck;
    }


    /**
     *@return Card
     */
    public function drawSingle()
    {
        // shuffle($this->deck);
        if (empty($this->deck)) {
            return new Card("empty");
        }
        return $this->deck[0];
    }

    /**
     *@return array<Card>
     */
    public function sortDeck()
    {
        sort($this->deck);
        return $this->deck;
    }

    /**
     *@return Card
     */
    public function hitCard()
    {
        $hit = $this->deck[0];
        array_splice($this->deck, 0, 1);
        return $hit;
    }

}
