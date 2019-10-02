<?php

namespace Amazon\Tests;

use PHPUnit\Framework\TestCase;
use Amazon\Rotation;

class RotationTest extends TestCase
{
    /**
     * @test
     * @dataProvider additionProvider
     */
    public function it_is_a_testing_method($d, $a, $expected): void
    {
        $rotation = new Rotation;
        $actual = $rotation->rotLeft($a, $d);

        $this->assertEquals($expected, $actual);
    }

    /**
     * @return array[][]
     */
    public function additionProvider(): array
    {
        return [
            [
                4,
                [ 1, 2, 3, 4, 5, ],
                [ 5, 1, 2, 3, 4, ],
            ],
            [
                10,
                [ 141, 73, 89, 7, 10, 1, 59, 58, 84, 77, 77, 97, 58, 1, 86, 58, 26, 10, 86, 51, ],
                [ 77, 97, 58, 1, 86, 58, 26, 10, 86, 51, 141, 73, 89, 7, 10, 1, 59, 58, 84, 77, ],
            ],
            [
                13,
                [ 33, 47, 70, 37, 8, 53, 13, 93, 71, 72, 51, 100, 60, 87, 97, ],
                [ 87, 97, 33, 47, 70, 37, 8, 53, 13, 93, 71, 72, 51, 100, 60, ],
            ],
            [
                2,
                [ 344, 210, 102, ],
                [ 102, 344, 210, ],
            ],
            [
                7,
                [ 98, 67, 35, 1, 74, 79, 7, 26, 54, 63, 24, 17, 32, 81, ],
                [ 26, 54, 63, 24, 17, 32, 81, 98, 67, 35, 1, 74, 79, 7, ],
            ],
        ];
    }
}
