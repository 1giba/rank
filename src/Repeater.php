<?php

namespace Amazon;

class Repeater
{
    // Complete the repeatedString function below.
    public function repeatedString($s, $n) {
        $length = strlen($s);

        $divisor = floor($n / $length);
        $rest    = $n % $length;

        $letterA = 0;
        for ($i = 0; $i < $length; $i++) {
            if ($s[$i] !== 'a') {
                continue;
            }
            $letterA += $divisor;
        }
        for ($i = 0; $i < $rest; $i++) {
            if ($s[$i] !== 'a') {
                continue;
            }
            $letterA++;
        }
        return $letterA;
    }
}
