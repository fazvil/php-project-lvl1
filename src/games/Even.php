<?php

namespace BrainGames\games\Even;

use function BrainGames\Engine\run;

use const BrainGames\Engine\ROUNDS_COUNT;

const GAME_DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';

function isEven($num)
{
    return ($num % 2 === 0);
}

function gameEven()
{
    $data = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $question = rand(1, 100);
        $answer = isEven($question) ? 'yes' : 'no';
        $data[] = [$question, $answer];
    }
    run(GAME_DESCRIPTION, $data);
}
