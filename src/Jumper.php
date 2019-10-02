<?php

namespace Amazon;

class Jumper
{
    public function jumpingOnClouds($c)
    {
        $jumps = 0;
        $max   = count($c);
        $pos   = 0;
        for ($i = 0; $i < $max; $i++) {
            if ($i < $pos) {
                continue;
            }
            if ($i + 2 < $max && $c[$i + 2] === 0) {
                $jumps++;
                $pos = $i + 2;
                continue;
            }
            if ($i + 1 < $max && $c[$i + 1] === 0) {
                $jumps++;
                $pos = $i + 1;
            }
        }
        return $jumps;
    }
}
