<?php

namespace App\Card;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class CardPlayer.
 */
class CardPlayerTest extends TestCase
{
    /**
     * Construct object without arguments and check default number of cards.
     */
    public function testCreatePlayerCheckDefaults(): void
    {
        $player = new CardPlayer();
        $this->assertInstanceOf("\App\Card\CardPlayer", $player);

        $res = $player->getMoney();
        $exp = 100;
        $this->assertEquals($exp, $res);
    }

    /**
     * Add money to players balance.
     */
    public function testAddMoney(): void
    {
        $player = new CardPlayer();

        $player->addMoney(100);
        $res = $player->getMoney();
        $exp = 200;
        $this->assertEquals($exp, $res);
    }

    /**
     * Subtract money from players balance.
     */
    public function testSubMoney(): void
    {
        $player = new CardPlayer();

        $player->subMoney(100);
        $res = $player->getMoney();
        $exp = 0;
        $this->assertEquals($exp, $res);
    }
}
