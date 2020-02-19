<?php

namespace BrainGames\Games\Even;

// Получаем данные для игры "Проверка на четность"
function even()
{
    $gues = rand(1, 100);
    if ($gues % 2 === 0) {
        $correct = 'yes';
    } else {
        $correct = 'no';
    }
    return [$gues, $correct];
}
