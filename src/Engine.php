<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const ROUNDS_COUNT = 3; // Число раундов

function run($gameDescription, $data)
{
    // Узнаем имя игрока и приветсвуем
    line('Welcome to the Brain Game!');
    line($gameDescription); // Описание игры, полученное в аргументе функции
    line();
    $name = prompt('May If have your name?');
    line("Hello, %s!", $name);

    // В цикле задаем вопрос и получаем ответ
    foreach ($data as [$question, $correctAnswer]) {
        line();
        line("Question: {$question}");
        // Получаем ответ от игрока
        $answer = prompt('Your answer');
        if ($answer === $correctAnswer) {
            line('Correct!');
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'");
            line("Let's try again, {$name}!");
            return;
        }
    }
    // Если игрок ответил верно на все 3 вопроса, выводится сообщение
    line();
    line("Congratulations, {$name}!");
}
