<?php

namespace Amazon;

class HourGlass
{
    // Complete the hourglassSum function below.
    public function hourglassSum($arr) {
        $hourGlasses = [];
        for ($i = 0; $i < 4; $i++) {
            for ($j = 0; $j < 4; $j++) {
                $hourGlasses[] = ($arr[$i][$j] + $arr[$i][$j + 1] + $arr[$i][$j + 2]) +
                   ($arr[$i + 1][$j + 1]) +
                   ($arr[$i + 2][$j] + $arr[$i + 2][$j + 1] + $arr[$i + 2][$j + 2]);
            }
        }
        asort($hourGlasses);
        return end($hourGlasses);
    }
}