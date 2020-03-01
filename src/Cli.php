<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

const AMOUND_ROUNDS = 3; // Число раундов
function run($rulesGame, $data)
{
    // Узнаем имя игрока и приветсвуем
    line('Welcome to the Brain Game!');
    line($rulesGame); // Описание игры, полученное в аргументе функции
    line();
    $name = prompt('May If have your name?');
    line("Hello, %s!", $name);

    // В цикле задаем вопрос и получаем ответ
    foreach ($data as $part) {
        [$guess, $correct] = $part; // Значение, и правильный вариант ответа
        line();
        line("Question: {$guess}");

        // Получаем ответ от игрока
        $answer = prompt('Your answer');
        if ($answer === $correct) {
            line('Correct!');
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correct}'");
            return;
        }
    }

    // Если игрок ответил верно на все 3 вопроса, выводится сообщение
    line();
    line("Congratulations, {$name}!");
}
