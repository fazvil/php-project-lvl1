<?php

namespace BrainGames\Games\Even;

// Описание игры
function rulesGame()
{
    return 'Answer "yes" if the number is even, otherwise answer "no".';
}

// Генерация данных для игры "Проверка на четность"
function getDataEven($amoundRounds)
{
    $data = [];
    for ($i = 0; $i < $amoundRounds; $i++) {
        $guessNumber = rand(1, 100);
        $correct = ($guessNumber % 2 === 0) ? 'yes' : 'no';
        $data[] = [$guessNumber, $correct];
    }
    return $data;
}
