<?php

namespace Brain\Games\Even;

use Brain\Games\Engine;

function isEven(int $num): bool
{
    return $num % 2 === 0;
}

function check(int $num): string
{
    $result = isEven($num) ? "yes" : "no";
    return $result;
}

function run(): void
{
    $description = 'Answer "yes" if the number is even, otherwise answer "no".';

    $data = function (): array {
        $question = rand(1, 20);
        $answer = check($question);
        return [$question, $answer];
    };
    Engine\render($description, $data);
}
