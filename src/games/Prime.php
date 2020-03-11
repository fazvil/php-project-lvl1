<?php

namespace BrainGames\games\Prime;

use const BrainGames\Cli\AMOUND_ROUNDS;
use function BrainGames\Cli\run;

const RULES_GAME = 'Answer "yes" if given number is prime. Otherwise answer "no".';
function gamePrime()
{
    $data = [];
    for ($i = 0; $i < AMOUND_ROUNDS; $i++) {
        $question = rand(2, 100);
        if ($question == 2 || $question == 3) {
            $answer = 'yes';
        }
        for ($divider = 2; $divider <= intdiv($question, 2); $divider++) {
            if ($question % $divider == 0) {
                $answer = 'no';
                break;
            } else {
                $answer = 'yes';
            }
        }
        $data[] = [$question, $answer];
    }
    run(RULES_GAME, $data);
}
