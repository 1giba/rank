<?php

namespace Amazon\Tests;

use PHPUnit\Framework\TestCase;
use Amazon\HourGlass;

class HourGlassTest extends TestCase
{
    /**
     * @test
     * @dataProvider additionProvider
     */
    public function it_is_a_testing_method($arr, $expected): void
    {
        $hourGlass = new HourGlass;
        $actual = $hourGlass->hourglassSum($arr);

        $this->assertEquals($expected, $actual);
    }

    /**
     * @return array[][]
     */
    public function additionProvider(): array
    {
        return [
            [
                [
                    [ 1, 1, 1, 0, 0, 0 ],
                    [ 0, 1, 0, 0, 0, 0 ],
                    [ 1, 1, 1, 0, 0, 0 ],
                    [ 0, 0, 2, 4, 4, 0 ],
                    [ 0, 0, 0, 2, 0, 0 ],
                    [ 0, 0, 1, 2, 4, 0 ],
                ],
                19,
            ],
        ];
    }
}
