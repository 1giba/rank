<?php

namespace Amazon;

class RollerCoaster
{
    // Complete the minimumBribes function below.
    public function minimumBribes($q) {
        $tooChaotic = false;
        $bribes = 0;
        for ($i = 0; $i < count($q); $i++) {
            if ($q[$i] - ($i + 2) > 1) {
                $tooChaotic = true;
                break;
            }
            $startWith = $q[$i] - 2 > 0 ? $q[$i] - 2 : 0;
            for ($j = $startWith; $j < $i; $j++) {
                if ($q[$j] > $q[$i]) {
                    $bribes++;
                }
            }
        }
        return $tooChaotic === true ? 'Too chaotic' : $bribes;
    }
}
