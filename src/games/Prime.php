<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Cli\run;

function prime()
{
    $gues = rand(4, 100);
    if ($gues === 2 || $gues === 3) {
        $result = 'yes';
    }
    for ($i = 2; $i <= intdiv($gues, 2); $i++) {
        if ($gues % $i === 0) {
            $result = 'no';
            break;
        } else {
            $result = 'yes';
        }
    }
    return [$gues, $result];
}

function runi()
{
    $greet = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $data = [];
    for ($i = 0; $i < 3; $i++) {
        $data[] = prime();
    }
    run($greet, $data);
}
