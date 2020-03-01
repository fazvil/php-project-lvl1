<?php

namespace BrainGames\Games\Calc;

use BrainGames\Cli;

const RULES_GAME = 'What is the result of the expression?';
function gameCalc()
{
    $data = [];
    for ($i = 0; $i < \BrainGames\Cli\AMOUND_ROUNDS; $i++) {
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
    \BrainGames\Cli\run(RULES_GAME, $data);
}
