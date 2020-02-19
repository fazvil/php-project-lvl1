<?php

namespace BrainGames\Games\Calc;

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
