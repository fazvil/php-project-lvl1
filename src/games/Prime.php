<?php

namespace BrainGames\games\Prime;

use const BrainGames\Cli\AMOUND_ROUNDS;
use function BrainGames\Cli\run;

const RULES_GAME = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isPrime($num)
{
    for ($divider = 2; $divider < $num; $divider++) {
        if (
            $num === 1
            || $num % 2 === 0
            || $num % $divider === 0
        ) {
            return 'no';
        }
    }
    return 'yes';
}

function gamePrime()
{
    $data = [];
    for ($i = 0; $i < AMOUND_ROUNDS; $i++) {
        $question = rand(1, 100);
        $answer = isPrime($question);
        $data[] = [$question, $answer];
    }
    run(RULES_GAME, $data);
}
