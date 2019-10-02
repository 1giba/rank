<?php

namespace Amazon\Tests;

use PHPUnit\Framework\TestCase;
use Amazon\RollerCoaster;

class RollerCoasterTest extends TestCase
{
    /**
     * @test
     * @dataProvider additionProvider
     */
    public function it_is_a_testing_method($q, $expected): void
    {
        $rollerCoaster = new RollerCoaster;
        $actual = $rollerCoaster->minimumBribes($q);

        $this->assertEquals($expected, $actual);
    }

    /**
     * @return array[][]
     */
    public function additionProvider(): array
    {
        return [
            [
                [ 2, 1, 5, 3, 4, ],
                3,
            ],
            [
                [ 2, 5, 1, 3, 4, ],
                'Too chaotic',
            ],
            [
                [ 5, 1, 2, 3, 7, 8, 6, 4, ],
                7,
            ],
            [
                [ 1, 2, 5, 3, 7, 8, 6, 4, ],
                'Too chaotic',
            ],
            [
                [ 1, 2, 5, 3, 4, 7, 8, 6, ],
                4,
            ],
        ];
    }
}
