<?php
namespace BrainGames\games\Prime;
use const BrainGames\Cli\ROUNDS_COUNT;
use function BrainGames\Cli\run;

const GAME_DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

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
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $question = rand(1, 100);
        $answer = isPrime($question);
        $data[] = [$question, $answer];
    }
    run(GAME_DESCRIPTION, $data);
}
