<?php

namespace App\Helper;

use App\Card\DeckOfCards;
use PHPUnit\Framework\TestCase;
use PHPUnit\TextUI\Help;

/**
 * Test cases for class Card.
 */
class HelperTest extends TestCase
{
    /**
     * Construct object without arguments and check default values.
     */
    public function testCreateHelperCheckDefaults(): void
    {
        $helper = new Helper();
        $this->assertInstanceOf("\App\Helper\Helper", $helper);
    }

    /**
     * Check that points are >= 17
     */
    public function testCpuRound(): void
    {
        $deck = new DeckOfCards();
        $helper = new Helper();
        $res = $helper->cpuRound($deck);

        $this->assertGreaterThanOrEqual(17, $res->cpuPoints);
    }
}
