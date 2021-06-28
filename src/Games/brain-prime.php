<?php

namespace Brain\Games\Prime;

use Brain\Games\Engine;
use Brain\Games\Helper;

function run(): void
{
    $description = 'Answer "yes" if given number is prime. Otherwise answer "no".';

    $data = function (): array {
        $question = rand(0, 19);
        $answer = Helper\check('Brain\Games\Helper\isPrime', $question);
        return [$question, $answer];
    };

    Engine\render($description, $data);
}
