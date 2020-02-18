<?php

namespace BrainGames\Even;

use function cli\line;
use function cli\prompt;

function run()
{
    $result = 0; // Количество правильных ответов
    $even = '';  // Четность числа

    // Приветсвуем пользователя
    line('Welcome to the Brain Game!');
    line('Answer "yes" if the number is even, otherwise answer "no".');
    line();
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    // Главный цикл игры
    while ($result !== 3) {
        $guesNum = rand(1, 100); // Загаданное число
        line();
        line("Question: {$guesNum}");

        // Определяем четность числа
        if ($guesNum % 2 === 0) {
            $even = 'yes';
        } else {
            $even = 'no';
        }

        // Запрашивам ответ
        $answer = prompt('Your answer');
        if ($answer === $even) {
            line('Correct!');
            $result += 1;
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$even}'");
            return;
        }
    }

    // Игрок ответил на 3 вопроса подряд
    line("Congratulations, {$name}!");
}
