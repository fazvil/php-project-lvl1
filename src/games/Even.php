<?php

namespace BrainGames\Games\Even;

use function BrainGames\Cli\run;

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

function runi()
{
    $greet = 'Answer "yes" if the number is even, otherwise answer "no".';
    $data = [];
    for ($i = 0; $i < 3; $i++) {
        $data[] = even();
    }
    run($greet, $data);
}
