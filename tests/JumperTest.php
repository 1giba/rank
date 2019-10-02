<?php

namespace Amazon\Tests;

use PHPUnit\Framework\TestCase;
use Amazon\Jumper;

class JumperTest extends TestCase
{
    /**
     * @test
     * @dataProvider additionProvider
     */
    public function it_is_a_testing_method($clouds, $expected): void
    {
        $jumper = new Jumper;
        $actual = $jumper->jumpingOnClouds($clouds);

        $this->assertEquals($expected, $actual);
    }

    /**
     * @return array[][]
     */
    public function additionProvider(): array
    {
        return [
            [
                array_map('intval', preg_split('/ /', '0 0 1 0 0 1 0', -1, PREG_SPLIT_NO_EMPTY)),
                4,
            ],
            [
                array_map('intval', preg_split('/ /', '0 0 0 0 1 0', -1, PREG_SPLIT_NO_EMPTY)),
                3,
            ],
            [
                array_map('intval', preg_split('/ /', '0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0 0 1 0 1 0 0 0 1 0 0 1 0 0 0 1 0 1 0 0 0 0 0 0 0 0 1 0 0 1 0 1 0 0', -1, PREG_SPLIT_NO_EMPTY)),
                28,
            ],
            [
                array_map('intval', preg_split('/ /', '0 1 0 0 0 0 0 1 0 1 0 0 0 1 0 0 1 0 1 0 0 0 0 1 0 0 1 0 0 1 0 1 0 1 0 1 0 0 0 1 0 1 0 0 0 1 0 1 0 1 0 0 0 1 0 1 0 0 0 1 0 1 0 0 0 1 0 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 0 1 0 1 0 1 0 1 0 0 0 0 0 0 1 0 0 0', -1, PREG_SPLIT_NO_EMPTY)),
                53,
            ],
            [
                array_map('intval', preg_split('/ /', '0 1 0 1 0 1 0 1 0 1 0 0 0 1 0 0 0 1 0 0 0 0 0 0 1 0 1 0 1 0 0 0 0 0 1 0 0 1 0 1 0 0 1 0 1 0 1 0 0 0 0 1 0 0 1 0 0 1 0 1 0 0 1 0 1 0 0 1 0 1 0 1 0 1 0 0 0 1 0 1 0 0 0 1 0 1 0 0 0 1 0 1 0 1 0 0 0 0 1 0', -1, PREG_SPLIT_NO_EMPTY)),
                54,
            ],
            [
                array_map('intval', preg_split('/ /', '0 1 0 1 0 1 0 0 0 0 0 0 0 0 1 0 1 0 0 0 0 1 0 1 0 0 1 0 0 0 1 0 1 0 0 0 1 0 1 0 1 0 1 0 0 0 1 0 0 0 0 0 1 0 1 0 1 0 0 1 0 1 0 1 0 0 1 0 0 0 0 1 0 0 1 0 0 0 1 0 0 1 0 1 0', -1, PREG_SPLIT_NO_EMPTY)),
                46,
            ],
        ];
    }
}
