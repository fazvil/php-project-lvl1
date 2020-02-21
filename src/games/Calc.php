<?php

namespace BrainGames\Games\Calc;

// Описание игры
function rulesGame()
{
    return 'What is the result of the expression?';
}

// // Генерация массива данных для игры "Калькулятор"
function getData()
{
    $amoundRounds = 3;                                      // Количество раундов
    $data = [];
    for ($i = 0; $i < $amoundRounds; $i++) {
        $guess1 = rand(1, 10);
        $guess2 = rand(1, 10);
        $operation = rand(1, 3);
        switch ($operation) {
            case 1:
                $task = "{$guess1} + {$guess2}";
                $correct = $guess1 + $guess2;
                break;
            case 2:
                $task = "{$guess1} - {$guess2}";
                $correct = $guess1 - $guess2;
                break;
            case 3:
                $task = "{$guess1} * {$guess2}";
                $correct = $guess1 * $guess2;
        }
        $data[] = [$task, $correct];
    }
    return $data;
}
