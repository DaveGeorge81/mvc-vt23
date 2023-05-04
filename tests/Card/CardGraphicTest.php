<?php

namespace App\Card;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class Card.
 */
class CardGraphicTest extends TestCase
{
    /**
     * Construct object without arguments and check default values.
     */
    public function testCreateCardGraphicCheckDefaults(): void
    {
        $card = new CardGraphic();
        $this->assertInstanceOf("\App\Card\CardGraphic", $card);

        $res = $card->getAsString();
        $exp = "2_of_spades";
        $this->assertEquals($exp, $res);
    }

    /**
     * Check card suit and name (JSON).
     */
    public function testSuitAndName(): void
    {
        $card = new CardGraphic();
        $card->suit = "♠";
        $card->cardName = "A";

        $res = $card->getAsStringJson();
        $exp = "[♠ A]";
        $this->assertEquals($exp, $res);
    }
}
