<?php

namespace Brain\Games\Gcd;

use Brain\Games\Engine;
use Brain\Games\Helper;

function run()
{
    $description = 'Find the greatest common divisor of given numbers.';

    $data = function () {
        $randNum1 = rand(1, 10);
        $randNum2 = rand(1, 10);
        $question = "{$randNum1} {$randNum2}";
        $answer = Helper\gcd($randNum1, $randNum2);
        return [$question, $answer];
    };

    Engine\render($description, $data);
}
