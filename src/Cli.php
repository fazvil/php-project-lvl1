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
    foreach ($data as $round) {
        [$question, $correctAnswer] = $round; // Значение, и правильный вариант ответа
        line();
        line("Question: {$question}");

        // Получаем ответ от игрока
        $answer = prompt('Your answer');
        if ($answer === $correctAnswer) {
            line('Correct!');
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'");
            return;
        }
    }

    // Если игрок ответил верно на все 3 вопроса, выводится сообщение
    line();
    line("Congratulations, {$name}!");
}
