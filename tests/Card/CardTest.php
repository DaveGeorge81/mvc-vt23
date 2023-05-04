<?php

namespace App\Card;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class Card.
 */
class CardTest extends TestCase
{
    /**
     * Construct object without arguments and check default values.
     */
    public function testCreateDiceCheckDefaults(): void
    {
        $card = new Card();
        $this->assertInstanceOf("\App\Card\Card", $card);

        $res = $card->getValue();
        $exp = 0;
        $this->assertEquals($res, $exp);
    }

    /**
     * Check card suit and name
     */
    public function testSuitAndNameAsString(): void
    {
        $card = new Card("♠", 2, "2");

        $exp = "[♠ 2]";
        $res = $card->getAsString();

        $this->assertEquals($res, $exp);
    }

    /**
     * Check card suit and name (JSON)
     */
    public function testSuitAndNameAsStringJson(): void
    {
        $card = new Card("♠", 14, "A");

        $exp = "[♠ A]";
        $res = $card->getAsStringJson();

        $this->assertEquals($res, $exp);
    }

    /**
     * Check Card name
     */
    public function testName(): void
    {
        $card = new Card("♠", 14, "A");

        $exp = "A";
        $res = $card->getName();

        $this->assertEquals($res, $exp);
    }
}
