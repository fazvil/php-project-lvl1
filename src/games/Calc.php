<?php

namespace BrainGames\games\Calc;

use const BrainGames\Cli\AMOUND_ROUNDS;
use function BrainGames\Cli\run;

const RULES_GAME = 'What is the result of the expression?';
function gameCalc()
{
    $data = [];
    for ($i = 0; $i < AMOUND_ROUNDS; $i++) {
        $number1 = rand(1, 10);
        $number2 = rand(1, 10);
        $operations = ['+', '-', '*'];
        $randOperation = $operations[array_rand($operations, 1)];
        $question = "{$number1} {$randOperation} {$number2}";
        switch ($randOperation) {
            case '+':
                $answer = $number1 + $number2;
                break;
            case '-':
                $answer = $number1 - $number2;
                break;
            case '*':
                $answer = $number1 * $number2;
        }
        $data[] = [$question,(string) $answer];
    }
    run(RULES_GAME, $data);
}
