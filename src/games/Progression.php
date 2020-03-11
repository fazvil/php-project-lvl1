<?php

namespace BrainGames\games\Progression;

use const BrainGames\Cli\AMOUND_ROUNDS;
use function BrainGames\Cli\run;

const RULES_GAME = 'What number is missing in the progression?';
function gameProgression()
{
    $valueListLength = 10;
    $data = [];
    for ($i = 0; $i < AMOUND_ROUNDS; $i++) {
        $startNum = rand(1, 5);  // Стартовое число
        $step = rand(1, 5);      // Шаг
        $empty = rand(1, $valueListLength);    // Позиция пустого значения
        $str = '';               // Получаемый вывод
        $value = $startNum;      // Добавляемое в $str значение
        for ($j = 1; $j <= $valueListLength; $j++) {
            if ($j === $empty) {
                $str .= '.. ';
                $value += $step;
                $answer = $value;
            } else {
                $value += $step;
                $str .= (string) $value . ' ';
            }
        }
        $data[] = [$str,(string) $answer];
    }
    run(RULES_GAME, $data);
}
