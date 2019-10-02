<?php

namespace Amazon\Tests;

use PHPUnit\Framework\TestCase;
use Amazon\Repeater;

class RepeaterTest extends TestCase
{
    /**
     * @test
     * @dataProvider additionProvider
     */
    public function it_is_a_testing_method($s, $n, $expected): void
    {
        $repeater = new Repeater;
        $actual = $repeater->repeatedString($s, $n);

        $this->assertEquals($expected, $actual);
    }

    /**
     * @return array[][]
     */
    public function additionProvider(): array
    {
        return [
            [
                'abcac',
                10,
                4,
            ],
            [
                'aba',
                10,
                7,
            ],
            [
                'a',
                1000000000000,
                1000000000000,
            ],
            [
                'ceebbcb',
                817723,
                0,
            ],
            [
                'gfcaaaecbg',
                547602,
                164280,
            ],
            [
                'x',
                970770,
                0,
            ],
            [
                'jdiacikk',
                899491,
                112436,
            ],
            [
                'epsxyyflvrrrxzvnoenvpegvuonodjoxfwdmcvwctmekpsnamchznsoxaklzjgrqruyzavshfbmuhdwwmpbkwcuomqhiyvuztwvq',
                549382313570,
                16481469408,
            ],
        ];
    }
}
