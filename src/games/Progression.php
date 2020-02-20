<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Cli\run;

function progression()
{
    $startNum = rand(1, 5);
    $step = rand(1, 5);
    $empty = rand(1, 10);
    $str = '';
    $temp = $startNum;
    for ($i = 1; $i < 11; $i++) {
        if ($i === $empty) {
            $str .= '.. ';
            $temp += $step;
            $gues = $temp;
        } else {
            $temp += $step;
            $str .= (string) $temp . ' ';
        }
    }
    return [$str, $gues];
}

function runi()
{
    $greet = 'What number is missing in the progression?';
    $data = [];
    for ($i = 0; $i < 3; $i++) {
        $data[] = progression();
    }
    run($greet, $data);
}
