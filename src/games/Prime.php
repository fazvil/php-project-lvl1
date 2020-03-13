<?php

namespace BrainGames\games\Prime;

use function BrainGames\Cli\run;

use const BrainGames\Cli\ROUNDS_COUNT;

const GAME_DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isPrime($num)
{
    if ($num < 2) {
        return 'no';
    }
    for ($i = 2; $i <= $num / 2; $i++) {
        if ($num % $i == 0) {
            return 'no';
        }
    }
    return 'yes';
}

function gamePrime()
{
    $data = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $question = rand(1, 100);
        $answer = isPrime($question);
        $data[] = [$question, $answer];
    }
    run(GAME_DESCRIPTION, $data);
}
