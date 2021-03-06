<?php

namespace BrainGames\games\Gcd;

use function BrainGames\Engine\run;

use const BrainGames\Engine\ROUNDS_COUNT;

const GAME_DESCRIPTION = 'Find the greatest common divisor of given numbers.';

function getGcd($num1, $num2)
{
    while ($num1 !== $num2) {
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
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $num1 = rand(1, 50);
        $num2 = rand(1, 50);
        $question = "{$num1} {$num2}";
        $answer = getGcd($num1, $num2);
        $data[] = [$question, (string) $answer];
    }
    run(GAME_DESCRIPTION, $data);
}
