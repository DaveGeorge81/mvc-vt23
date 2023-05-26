<?php

namespace App\Card;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class Card.
 */
class BlackJackDeckTest extends TestCase
{
    /**
     * Construct object without arguments and check default number of cards.
     */
    public function testCreateBlackJackDeckCheckDefaults(): void
    {
        $deck = new BlackJackDeck();
        $this->assertInstanceOf("\App\Card\BlackJackDeck", $deck);

        $res = $deck->getNumberCards();
        $exp = 52;
        $this->assertEquals($exp, $res);
    }

    /**
     * Check get cards in deck as string
     */
    public function testDeckAsString(): void
    {
        $deck = new BlackJackDeck();

        $exp = [
            '2_of_spades',
            '3_of_spades',
            '4_of_spades',
            '5_of_spades',
            '6_of_spades',
            '7_of_spades',
            '8_of_spades',
            '9_of_spades',
            '10_of_spades',
            'jack_of_spades',
            'queen_of_spades',
            'king_of_spades',
            'ace_of_spades',
            '2_of_hearts',
            '3_of_hearts',
            '4_of_hearts',
            '5_of_hearts',
            '6_of_hearts',
            '7_of_hearts',
            '8_of_hearts',
            '9_of_hearts',
            '10_of_hearts',
            'jack_of_hearts',
            'queen_of_hearts',
            'king_of_hearts',
            'ace_of_hearts',
            '2_of_diamonds',
            '3_of_diamonds',
            '4_of_diamonds',
            '5_of_diamonds',
            '6_of_diamonds',
            '7_of_diamonds',
            '8_of_diamonds',
            '9_of_diamonds',
            '10_of_diamonds',
            'jack_of_diamonds',
            'queen_of_diamonds',
            'king_of_diamonds',
            'ace_of_diamonds',
            '2_of_clubs',
            '3_of_clubs',
            '4_of_clubs',
            '5_of_clubs',
            '6_of_clubs',
            '7_of_clubs',
            '8_of_clubs',
            '9_of_clubs',
            '10_of_clubs',
            'jack_of_clubs',
            'queen_of_clubs',
            'king_of_clubs',
            'ace_of_clubs',
        ];
        $res = $deck->getString();

        $this->assertEquals($exp, $res);
    }

    /**
     * Check get cards in deck as string
     */
    public function testDeckAsStringJson(): void
    {
        $deck = new BlackJackDeck();

        $exp = [
            "[♠ 2]",
            "[♠ 3]",
            "[♠ 4]",
            "[♠ 5]",
            "[♠ 6]",
            "[♠ 7]",
            "[♠ 8]",
            "[♠ 9]",
            "[♠ 10]",
            "[♠ J]",
            "[♠ Q]",
            "[♠ K]",
            "[♠ A]",
            "[♡ 2]",
            "[♡ 3]",
            "[♡ 4]",
            "[♡ 5]",
            "[♡ 6]",
            "[♡ 7]",
            "[♡ 8]",
            "[♡ 9]",
            "[♡ 10]",
            "[♡ J]",
            "[♡ Q]",
            "[♡ K]",
            "[♡ A]",
            "[♢ 2]",
            "[♢ 3]",
            "[♢ 4]",
            "[♢ 5]",
            "[♢ 6]",
            "[♢ 7]",
            "[♢ 8]",
            "[♢ 9]",
            "[♢ 10]",
            "[♢ J]",
            "[♢ Q]",
            "[♢ K]",
            "[♢ A]",
            "[♣ 2]",
            "[♣ 3]",
            "[♣ 4]",
            "[♣ 5]",
            "[♣ 6]",
            "[♣ 7]",
            "[♣ 8]",
            "[♣ 9]",
            "[♣ 10]",
            "[♣ J]",
            "[♣ Q]",
            "[♣ K]",
            "[♣ A]"
        ];
        $res = $deck->getStringJson();

        $this->assertEquals($exp, $res);
    }


    /**
     * Shuffle the deck and sort in order of suit and value
     */
    public function testSortDeck(): void
    {
        $deck = new BlackJackDeck();

        $deck->shuffleDeck();
        $deck->sortDeck();
        $singleCard = $deck->hitCard();
        $res = $singleCard->getAsString();
        $exp = '2_of_spades';
        $this->assertEquals($exp, $res);
    }

    /**
     * Draw top card from deck
     */
    public function testTopCard(): void
    {
        $deck = new BlackJackDeck();

        $singleCard = $deck->hitCard();
        $res = $singleCard->getAsString();
        $exp = '2_of_spades';
        $this->assertEquals($exp, $res);
    }

    /**
     * Get percentage of cards with value >= 10 in deck
     */
    public function testCountingCards(): void
    {
        $deck = new BlackJackDeck();

        $res = $deck->countingCards();
        $exp = 30.8;
        $this->assertEquals($exp, $res);
    }
}
