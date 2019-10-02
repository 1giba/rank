<?php

namespace Amazon;

class Swap
{
    public function minimumSwaps($arr)
    {
        $swaps = 0;
        $max = count($arr);
        $aux = $arr;
        asort($final);
        for ($i = 0; $i < $max; $i++) { // 4, 3, 1, 2
            if (array_values($aux) === array_values($final)) {
                break;
            }
            if ($arr[$i] === $i + 1) {
                continue;
            }

            $index = array_search($i + 1, $aux);
            $aux[$i]     = $arr[$index]; // 3 => 1
            $aux[$index] = $arr[$i];  // 0 => 4
            print_r($aux); exit;
            $swaps++;
        }
        return $swaps;
    }
}
/*
0  1  2  3
4, 3, 2, 1
*/