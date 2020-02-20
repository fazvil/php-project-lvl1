<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Cli\run;

function gcd()
{
    $a = rand(1, 50);
    $b = rand(1, 50);
    $gues = "{$a} {$b}";

    while ($a != $b) {
        if ($a > $b) {
            $a -= $b;
        } else {
            $b -= $a;
        }
    }
    $result = $a;
    return [$gues, $result];
}

function runi()
{
    $greet = 'Find the greatest common divisor of given numbers.';
    $data = [];
    for ($i = 0; $i < 3; $i++) {
        $data[] = gcd();
    }
    run($greet, $data);
}
