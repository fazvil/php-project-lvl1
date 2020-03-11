<?php

namespace BrainGames\games\Gcd;

use const BrainGames\Cli\AMOUND_ROUNDS;
use function BrainGames\Cli\run;

const RULES_GAME = 'Find the greatest common divisor of given numbers.';

function nod($num1, $num2)
{
    while ($num1 != $num2) {
        if ($num1 > $num2) {
            $num1 -= $num2;
        } else {
            $num2 -= $num1;
        }
    }
    return $num1;
}

function gameGcd()
{
    $data = [];
    for ($i = 0; $i < AMOUND_ROUNDS; $i++) {
        $num1 = rand(1, 50);
        $num2 = rand(1, 50);
        $question = "{$num1} {$num2}";
        $answer = nod($num1, $num2);
        $data[] = [$question,(string) $answer];
    }
    run(RULES_GAME, $data);
}
