<?php

namespace BrainGames\Games\Prime;

use BrainGames\Cli;

const RULES_GAME = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function gamePrime()
{
    $data = [];
    for ($i = 0; $i < \BrainGames\Cli\AMOUND_ROUNDS; $i++) {
        $guess = rand(2, 100);
        if ($guess == 2 || $guess == 3) {
            $correct = 'yes';
        }
        for ($divider = 2; $divider <= intdiv($guess, 2); $divider++) {
            if ($guess % $divider == 0) {
                $correct = 'no';
                break;
            } else {
                $correct = 'yes';
            }
        }
        $data[] = [$guess, $correct];
    }
    \BrainGames\Cli\run(RULES_GAME, $data);
}
