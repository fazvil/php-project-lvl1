<?php

namespace BrainGames\games\Calc;

use function BrainGames\Engine\run;

use const BrainGames\Engine\ROUNDS_COUNT;

const GAME_DESCRIPTION = 'What is the result of the expression?';

function gameCalc()
{
    $data = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $num1 = rand(1, 10);
        $num2 = rand(1, 10);
        $operations = ['+', '-', '*'];
        $randOperation = $operations[array_rand($operations, 1)];
        $question = "{$num1} {$randOperation} {$num2}";
        switch ($randOperation) {
            case '+':
                $answer = $num1 + $num2;
                break;
            case '-':
                $answer = $num1 - $num2;
                break;
            case '*':
                $answer = $num1 * $num2;
        }
        $data[] = [$question, (string) $answer];
    }
    run(GAME_DESCRIPTION, $data);
}
