<?php

namespace BrainGames\games\Progression;

use function BrainGames\Cli\run;

use const BrainGames\Cli\ROUNDS_COUNT;

const GAME_DESCRIPTION = 'What number is missing in the progression?';

function getProgressionList($progressionLength, $startNum, $step)
{
    $result = [];
    for ($j = 0; $j < $progressionLength; $j++) {
        $result[] = $startNum + $step * $j;
    }
    return $result;
}

function gameProgression()
{
    $progressionLength = 10;
    $hiddenElement = '..';
    $data = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $startNum = rand(1, 5);
        $step = rand(1, 5);
        $hiddenElementPosition = rand(0, $progressionLength);
        $question = '';
        $progressionList = getProgressionList($progressionLength, $startNum, $step);
        foreach ($progressionList as $key => $element) {
            if ($key === $hiddenElementPosition) {
                $answer = $element;
                $element = $hiddenElement;
            }
            $question = trim("{$question} {$element}");
        }
        $data[] = [$question, (string) $answer];
    }
    run(GAME_DESCRIPTION, $data);
}
