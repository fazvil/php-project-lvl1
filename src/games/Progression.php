<?php

namespace BrainGames\Games\Progression;

// Описание игры
function rulesGame()
{
    return 'What number is missing in the progression?';
}

// Генерация массива данных для игры "Арифметическая прогрессия"
function getData()
{
    $amoundRounds = 3;                                      // Количество раундов
    $data = [];
    for ($i = 0; $i < $amoundRounds; $i++) {
        $startNum = rand(1, 5);  // Стартовое число
        $step = rand(1, 5);      // Шаг
        $empty = rand(1, 10);    // Позиция пустого значения
        $str = '';               // Получаемый вывод
        $value = $startNum;      // Добавляемое в $str значение
        for ($i = 1; $i < 11; $i++) {
            if ($i === $empty) {
                $str .= '.. ';
                $value += $step;
                $correct = $value;
            } else {
                $value += $step;
                $str .= (string) $value . ' ';
            }
        }
        $data = [$str, $correct];
    }
    return $data;
}
