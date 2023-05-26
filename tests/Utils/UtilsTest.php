<?php

namespace App\Utils;

use App\Card\BlackJackDeck;
use App\Card\Card;
use App\Card\CardHand;
use PHPUnit\Framework\TestCase;

/**
 * Test cases for class Utils.
 */
class UtilsTest extends TestCase
{
    /**
     * Construct object without arguments and check default values.
     */
    public function testCreateUtilsCheckDefaults(): void
    {
        $utils = new Utils();
        $this->assertInstanceOf("\App\Utils\Utils", $utils);
    }

    /**
     * Test if dealer draws card when score is less than 17
     */
    public function testDealersTurnDrawsCard(): void
    {
        $deck = new BlackJackDeck();
        $testHand = new CardHand();
        $hand = new CardHand();

        for ($i = 0; $i < 52; $i++) {
            $testHand->add($deck->hitCard());
        }

        $hand->add(new Card("♠", 2, "2"));
        $hand->add(new Card("♠", 10, "10"));
        $hand->add(new Card("♠", 4, "4"));

        $util = new Utils();
        $res = $util->dealersTurn($hand, $deck);

        $exp = 4;

        $this->assertEquals($exp, $res[0]->getNumberCards());
    }

    /**
     * Test if winning returns correct amount
     */
    public function testCheckWinningsCorrectAmountOnBlackJack(): void
    {
        $bet = 20;
        $hand = new CardHand();
        $dealer = new CardHand();

        $hand->add(new Card("♠", 11, "A"));
        $hand->add(new Card("♠", 10, "10"));

        $dealer->add(new Card("♠", 9, "9"));
        $dealer->add(new Card("♠", 8, "8"));

        $util = new Utils();
        $res = $util->checkWinnings($hand, $dealer, $bet);
        $exp = 50;

        $this->assertEquals($exp, $res);
    }

        /**
     * Test if winning returns correct amount
     */
    public function testCheckWinningsCorrectAmountOnWin(): void
    {
        $bet = 20;
        $hand = new CardHand();
        $dealer = new CardHand();

        $hand->add(new Card("♠", 10, "K"));
        $hand->add(new Card("♠", 10, "10"));

        $dealer->add(new Card("♠", 9, "9"));
        $dealer->add(new Card("♠", 8, "8"));

        $util = new Utils();
        $res = $util->checkWinnings($hand, $dealer, $bet);
        $exp = 40;

        $this->assertEquals($exp, $res);
    }

        /**
     * Test if winning returns correct amount
     */
    public function testCheckWinningsCorrectAmountOnPush(): void
    {
        $bet = 20;
        $hand = new CardHand();
        $dealer = new CardHand();

        $hand->add(new Card("♠", 10, "K"));
        $hand->add(new Card("♠", 7, "7"));

        $dealer->add(new Card("♠", 9, "9"));
        $dealer->add(new Card("♠", 8, "8"));

        $util = new Utils();
        $res = $util->checkWinnings($hand, $dealer, $bet);
        $exp = 20;

        $this->assertEquals($exp, $res);
    }

        /**
     * Test if winning returns correct amount
     */
    public function testCheckWinningsCorrectAmountOnLoose(): void
    {
        $bet = 20;
        $hand = new CardHand();
        $dealer = new CardHand();

        $hand->add(new Card("♠", 2, "2"));
        $hand->add(new Card("♠", 10, "10"));

        $dealer->add(new Card("♠", 9, "9"));
        $dealer->add(new Card("♠", 8, "8"));

        $util = new Utils();
        $res = $util->checkWinnings($hand, $dealer, $bet);
        $exp = 0;

        $this->assertEquals($exp, $res);
    }
}
