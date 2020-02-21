<?php

namespace BrainGames\Games\Gcd;

// Описание игры
function rulesGame()
{
    return 'Find the greatest common divisor of given numbers.';
}

// Генерация массива данных для игры "НОД"
function getData()
{
    $amoundRounds = 3;                                      // Количество раундов
    $data = [];
    for ($i = 0; $i < $amoundRounds; $i++) {
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
        $data[] = [$guess, $result];
    }
    return $data;
}
