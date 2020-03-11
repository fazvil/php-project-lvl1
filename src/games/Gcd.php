<?php

namespace BrainGames\games\Gcd;

use const BrainGames\Cli\AMOUND_ROUNDS;
use function BrainGames\Cli\run;

const RULES_GAME = 'Find the greatest common divisor of given numbers.';
function gameGcd()
{
    $data = [];
    for ($i = 0; $i < AMOUND_ROUNDS; $i++) {
        $number1 = rand(1, 50);
        $number2 = rand(1, 50);
        $question = "{$number1} {$number2}";

        while ($number1 != $number2) {
            if ($number1 > $number2) {
                $number1 -= $number2;
            } else {
                $number2 -= $number1;
            }
        }
        $answer = $number1;
        $data[] = [$question,(string) $answer];
    }
    run(RULES_GAME, $data);
}
