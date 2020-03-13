<?php

namespace BrainGames\games\Even;

use function BrainGames\Cli\run;

use const BrainGames\Cli\ROUNDS_COUNT;

const GAME_DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';

function gameEven()
{
    $data = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $question = rand(1, 100);
        $answer = ($question % 2 === 0) ? 'yes' : 'no';
        $data[] = [$question, $answer];
    }
    run(GAME_DESCRIPTION, $data);
}
