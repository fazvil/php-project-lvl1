<?php

namespace BrainGames\games\Prime;

use const BrainGames\Cli\AMOUND_ROUNDS;
use function BrainGames\Cli\run;

const RULES_GAME = 'Answer "yes" if given number is prime. Otherwise answer "no".';
function gamePrime()
{
    $data = [];
    for ($i = 0; $i < AMOUND_ROUNDS; $i++) {
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
    run(RULES_GAME, $data);
}
