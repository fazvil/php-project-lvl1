<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Cli\run;

// Получаем данные для игры "Калькулятор"
function calc()
{
    $gues1 = rand(1, 10);
    $gues2 = rand(1, 10);
    $randOperation = rand(1, 3);
    if ($randOperation === 1) {
        $result = $gues1 + $gues2;
        $gues = "{$gues1} + {$gues2}";
    } elseif ($randOperation === 2) {
        $result = $gues1 - $gues2;
        $gues = "{$gues1} - {$gues2}";
    } elseif ($randOperation === 3) {
        $result = $gues1 * $gues2;
        $gues = "{$gues1} * {$gues2}";
    }
    return [$gues, $result];
}

function runi()
{
    $greet = 'What is the result of the expression?';
    $data = [];
    for ($i = 0; $i < 3; $i++) {
        $data[] = calc();
    }
    run($greet, $data);
}
