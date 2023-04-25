<?php

namespace App\Card;

// class Card {
//     const SPADES = 0;   // Codes for the 4 suits, plus Joker.
//     const HEARTS = 1;
//     const DIAMONDS = 2;
//     const CLUBS = 3;

//     const ACE = 1;      // Codes for the non-numeric cards.
//     const JACK = 11;    //   Cards 2 through 10 have their
//     const QUEEN = 12;   //   numerical values for their codes.
//     const KING = 13;

// }
class Card
{
    public const COLOR1 ='red';
    public const COLOR2 = 'black';
    /**
     * @var string  suit of card
     */
    public $suit;

    /**
     * @var int  value of card
     */
    public $value;

    /**
     * @var string  name of card
     */
    public $cardName;

    /**
     * @var string  color of card
     */
    public $color;

    /**
     * @var int  number of card in deck
     */
    public $cardNumber;

    public function __construct(
        string $suit='',
        int $value=0,
        string $cardName='',
        string $color='',
        int $cardNumber=0
    ) {
        $this->suit = $suit;
        $this->value = $value;
        $this->cardName = $cardName;
        $this->color = $color;
        $this->cardNumber = $cardNumber;
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function getAsString(): string
    {
        return "[{$this->suit} {$this->cardName}]";
    }

    public function getAsStringJson(): string
    {
        return "[{$this->suit} {$this->cardName}]";
    }
}
