<?php

namespace BrainGames\games\Gcd;

use BrainGames\Cli;
use function BrainGames\Cli\run;

const RULES_GAME = 'Find the greatest common divisor of given numbers.';
function gameGcd()
{
    $data = [];
    for ($i = 0; $i < \BrainGames\Cli\AMOUND_ROUNDS; $i++) {
        $num1 = rand(1, 50);
        $num2 = rand(1, 50);
        $guess = "{$num1} {$num2}";

        while ($num1 != $num2) {
            if ($num1 > $num2) {
                $num1 -= $num2;
            } else {
                $num2 -= $num1;
            }
        }
        $result = $num1;
        $data[] = [$guess,(string) $result];
    }
    run(RULES_GAME, $data);
}
