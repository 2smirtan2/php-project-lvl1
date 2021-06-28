<?php

namespace Brain\Games\Calc;

use Brain\Games\Engine;
use Brain\Games\Helper;

function run(): ?string
{
    $description = 'What is the result of the expression?';

    $data = function (): array {
        $mathSings = ['+', '-', '*'];
        $randSing = $mathSings[rand(0, 2)];
        $randNum1 = rand(1, 10);
        $randNum2 = rand(1, 10);
        $question = "{$randNum1} {$randSing} {$randNum2}";
        $answer = Helper\calc($randNum1, $randNum2, $randSing);
        return [$question, $answer];
    };

    Engine\render($description, $data);
}
