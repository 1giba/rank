<?php

namespace Amazon;

class Rotation
{
    public function rotLeft($a, $d) {
        $result = [];
        $max = count($a);
        $i = 0;
        for ($j = $d; $j < $max; $j++) {
            $result[$i] = $a[$j];
            $i++;
        }
        $count = count($result);
        for ($k = 0; $k < ($max - $count); $k++) {
            $result[$i] = $a[$k];
            $i++;
        }
        return $result;
    }
}
