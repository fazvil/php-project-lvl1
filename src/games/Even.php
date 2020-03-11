<?php

namespace BrainGames\games\Even;

use const BrainGames\Cli\AMOUND_ROUNDS;
use function BrainGames\Cli\run;

const RULES_GAME = 'Answer "yes" if the number is even, otherwise answer "no".';
function gameEven()
{
    $data = [];
    for ($i = 0; $i < AMOUND_ROUNDS; $i++) {
        $question = rand(1, 100);
        $answer = ($question % 2 === 0) ? 'yes' : 'no';
        $data[] = [$question, $answer];
    }
    run(RULES_GAME, $data);
}
