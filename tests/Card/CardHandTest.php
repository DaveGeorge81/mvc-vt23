<?php

namespace App\Card;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class CardHand.
 */
class CardHandTest extends TestCase
{
    /**
     * Construct object without arguments and check default values.
     */
    public function testCreateCardHandCheckDefaults(): void
    {
        $hand = new CardHand();
        $this->assertInstanceOf("\App\Card\CardHand", $hand);

        $hand->add(new Card());
        $res = $hand->getValues();
        $exp = [0];
        $this->assertEquals($exp, $res);
    }

    /**
     * Test counting cards in hand.
     */
    public function testCountCards(): void
    {
        $hand = new CardHand();

        $hand->add(new Card());
        $res = $hand->getNumberCards();
        $exp = 1;
        $this->assertEquals($exp, $res);
    }

    /**
     * Check suits and name of all cards in hand
     */
    public function testSuitsAndNamesAsString(): void
    {
        $hand = new CardHand();
        $card1 = new Card("♠", 2, "2");
        $card2 = new Card("♠", 14, "A");

        $hand->add($card1);
        $hand->add($card2);
        $exp = ["[♠ 2]", "[♠ A]"];
        $res = $hand->getString();

        $this->assertEquals($exp, $res);
    }

    /**
     * Check suits and name of all cards in hand (Json)
     */
    public function testSuitsAndNamesAsStringJson(): void
    {
        $hand = new CardHand();
        $card1 = new Card("♠", 2, "2");
        $card2 = new Card("♠", 14, "A");

        $hand->add($card1);
        $hand->add($card2);
        $exp = ["[♠ 2]", "[♠ A]"];
        $res = $hand->getStringJson();

        $this->assertEquals($exp, $res);
    }

    /**
     * Test that Ace is valued 1 if Hand total is
     * more than 21
     */
    public function testAceValuedAsOne(): void
    {
        $hand = new CardHand();
        $card1 = new Card("♠", 2, "2");
        $card2 = new Card("♠", 14, "A");
        $card3 = new Card("♠", 13, "K");

        $hand->add($card1);
        $hand->add($card2);
        $hand->add($card3);
        $exp = 16;
        $res = $hand->points();

        $this->assertEquals($exp, $res);
    }

    /**
     * Check name of cards in hand
     */
    public function testNameOfCardsInHand(): void
    {
        $hand = new CardHand();
        $card1 = new Card("♠", 2, "2");
        $card2 = new Card("♠", 14, "A");
        $card3 = new Card("♠", 13, "K");

        $hand->add($card1);
        $hand->add($card2);
        $hand->add($card3);
        $exp = ["2", "A", "K"];
        $res = $hand->getNames();

        $this->assertEquals($exp, $res);
    }
}
