<?php

namespace BrainGames\Games\Even;

// Описание игры
function rulesGame()
{
    return 'Answer "yes" if the number is even, otherwise answer "no".';
}

// Генерация массива данных для игры "Проверка на четность"
function getData()
{
    $amoundRounds = 3;                                      // Количество раундов
    $data = [];
    for ($i = 0; $i < $amoundRounds; $i++) {
        $guessNumber = rand(1, 100);                        // Загаданное число
        $correct = ($guessNumber % 2 === 0) ? 'yes' : 'no'; // Правильный ответ
        $data[] = [$guessNumber, $correct];
    }
    return $data;
}
