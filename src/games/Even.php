<?php

namespace BrainGames\Games\Even;

use BrainGames\Cli;

const RULES_GAME = 'Answer "yes" if the number is even, otherwise answer "no".';
function gameEven()
{
    $data = [];
    for ($i = 0; $i < \BrainGames\Cli\AMOUND_ROUNDS; $i++) {
        $guessNumber = rand(1, 100);             
        $correct = ($guessNumber % 2 === 0) ? 'yes' : 'no';
        $data[] = [$guessNumber, $correct];
    }
    \BrainGames\Cli\run(RULES_GAME, $data);
}
