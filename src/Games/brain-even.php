<?php

namespace Brain\Games\Even;

use Brain\Games\Engine;
use Brain\Games\Helper;

function run(): mixed
{
    $description = 'Answer "yes" if the number is even, otherwise answer "no".';

    $data = function (): array {
        $question = rand(1, 20);
        $answer = Helper\check('Brain\Games\Helper\isEven', $question);
        return [$question, $answer];
    };
    Engine\render($description, $data);
}
