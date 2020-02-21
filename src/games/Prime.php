<?php

namespace BrainGames\Games\Prime;

// Описание игры
function rulesGame()
{
    return 'Answer "yes" if given number is prime. Otherwise answer "no".';
}

// Генерация массива данных для игры "Простое ли число?"
function getData()
{
    $amoundRounds = 3;                                      // Количество раундов
    $data = [];
    for ($i = 0; $i < $amoundRounds; $i++) {
        $guess = rand(2, 100);
        if ($guess == 2 || $guess == 3) {
            $correct = 'yes';
        }
        for ($divider = 2; $divider <= intdiv($guess, 2); $divider++) {
            if ($guess % $divider == 0) {
                $correct = 'no';
                break;
            } else {
                $correct = 'yes';
            }
        }
        $data[] = [$guess, $correct];
    }
    return $data;
}
