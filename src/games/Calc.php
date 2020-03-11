<?php

namespace BrainGames\games\Calc;

use const BrainGames\Cli\AMOUND_ROUNDS;
use function BrainGames\Cli\run;

const RULES_GAME = 'What is the result of the expression?';
function gameCalc()
{
    $data = [];
    for ($i = 0; $i < AMOUND_ROUNDS; $i++) {
        $guessNum1 = rand(1, 10);
        $guessNum2 = rand(1, 10);
        $operation = ['+', '-', '*'];
        $randOperation = $operation[array_rand($operation, 1)];
        switch ($randOperation) {
            case '+':
                $task = "{$guessNum1} + {$guessNum2}";
                $correct = $guessNum1 + $guessNum2;
                break;
            case '-':
                $task = "{$guessNum1} - {$guessNum2}";
                $correct = $guessNum1 - $guessNum2;
                break;
            case '*':
                $task = "{$guessNum1} * {$guessNum2}";
                $correct = $guessNum1 * $guessNum2;
        }
        $data[] = [$task,(string) $correct];
    }
    run(RULES_GAME, $data);
}
