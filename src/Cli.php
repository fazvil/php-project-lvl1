<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;
use function BrainGames\Games\Even\even;
use function BrainGames\Games\Calc\calc;

// Запускаем нунжную игру, в зависимости от принятого аргумента
function run($game, $greet)
{
    $result = 0;

    // Узнаем имя игрока и приветсвуем
    line('Welcome to the Brain Game!');
    line($greet);
    line();
    $name = prompt('May If have your name?');
    line("Hello, %s!", $name);

    // Задаем вопрос в цикле, в зависимости от входных аргументов
    while ($result !== 3) {
        if ($game === 'even') {
            [$gues, $correct] = even();
        } elseif ($game === 'calc') {
            [$gues, $correct] = calc();
        }
        line();
        line("Question: {$gues}");

        // Получаем ответ от игрока
        $answer = prompt('Your answer');
        if ((int) $answer === $correct) {
            line('Correct!');
            $result += 1;
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correct}'");
            return;
        }
    }

    // Если игрок 3 раза подряд ответил верно, выводим сообщение
    line();
    line("Congratulations, {$name}!");
}
