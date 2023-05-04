<?php

namespace App\Card;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class Player.
 */
class PlayerTest extends TestCase
{
    /**
     * Construct object without arguments and check default number of cards.
     */
    public function testCreatePlayerCheckDefaults(): void
    {
        $player = new Player();
        $this->assertInstanceOf("\App\Card\Player", $player);

        $res = $player->getMoney();
        $exp = 100;
        $this->assertEquals($exp, $res);
    }

    /**
     * Add money to players balance.
     */
    public function testAddMoney(): void
    {
        $player = new Player();

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
        $player = new Player();

        $player->subMoney(100);
        $res = $player->getMoney();
        $exp = 0;
        $this->assertEquals($exp, $res);
    }
}
