<?php

namespace App\Card;

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

    public function getName(): string
    {
        return $this->cardName;
    }
}
