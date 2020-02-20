<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

// Движок Brain Games
function run($greet, $data)
{
    // Узнаем имя игрока и приветсвуем
    line('Welcome to the Brain Game!');
    line($greet);
    line();
    $name = prompt('May If have your name?');
    line("Hello, %s!", $name);

    // В цикле задаем вопрос и узнаем ответ
    foreach ($data as $part) {
        [$gues, $correct] = $part; // Значение, и правильный вариант ответа
        line();
        line("Question: {$gues}");

        // Получаем ответ от игрока
        $answer = prompt('Your answer');
        if ($answer === (string) $correct) {
            line('Correct!');
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correct}'");
            return;
        }
    }

    // Если игрок 3 раза подряд ответил верно, выводим сообщение
    line();
    line("Congratulations, {$name}!");
}
