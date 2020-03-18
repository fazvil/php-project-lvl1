<?php

namespace BrainGames\games\Progression;

use function BrainGames\Cli\run;

use const BrainGames\Cli\ROUNDS_COUNT;

const GAME_DESCRIPTION = 'What number is missing in the progression?';

function gameProgression()
{
    $progressionLength = 10;
    $data = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $startNum = rand(1, 5);
        $step = rand(1, 5);
        $hiddenElementPosition = rand(0, $progressionLength);
        $hiddenElement = '..';
        $question = '';
        for ($j = 0; $j < $progressionLength; $j++) {
            $addedElement = $startNum + $step * $j;
            if ($j === $hiddenElementPosition) {
                $answer = $addedElement;
                $addedElement = $hiddenElement;
            }
            $question = trim("{$question} {$addedElement}");
        }
        $data[] = [$question, (string) $answer];
    }
    run(GAME_DESCRIPTION, $data);
}
