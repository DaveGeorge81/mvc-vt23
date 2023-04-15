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

    public $suit;
    public $value;
    public $cardName;
    public $color;
    public $cardNumber;

    public function __construct($suit='', $value='', $cardName='', $color='', int $cardNumber=0)
    {
        $this->suit = $suit;
        $this->value = $value;
        $this->cardName = $cardName;
        $this->color = $color;
        $this->cardNumber = $cardNumber;
    }

    // public function roll(): int
    // {
    //     $this->value = random_int(1, 6);
    //     return $this->value;
    // }

    public function getValue(): int
    {
        return $this->value;
    }

    public function getAsString(): string
    {
        return "[{$this->suit} {$this->value}]";
    }
}
