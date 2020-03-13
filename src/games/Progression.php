<?php

use const BrainGames\Cli\ROUNDS_COUNT;
use function BrainGames\Cli\run;

namespace BrainGames\games\Progression;

const GAME_DESCRIPTION = 'What number is missing in the progression?';

function gameProgression()
{
    $listLength = 10;
    $data = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $startNum = rand(1, 5);  // Стартовое число
        $step = rand(1, 5);      // Шаг
        $empty = rand(0, $listLength);    // Позиция пустого значения
        $question = '';          // Получаемый вывод
        for ($j = 0; $j < $listLength; $j++) {
            $value = $startNum + $step * $j;
            if ($j === $empty) {
                $question .= '.. ';
                $answer = $value;
            } else {
                $question .= (string) $value . ' ';
            }
        }
        $data[] = [$question,(string) $answer];
    }
    run(GAME_DESCRIPTION, $data);
}
