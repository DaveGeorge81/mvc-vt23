<?php

namespace App\Card;

class Player
{
    /**
     * @var int  players money
     */
    private $money;


    public function __construct(
        int $money=100,

    ) {
        $this->money = $money;
    }

    public function getMoney(): int
    {
        return $this->money;
    }

    public function addMoney($money): void
    {
        $this->money += $money;
    }

    public function subMoney($money): void
    {
        $this->money -= $money;
    }
}
