<?php

namespace Brain\Games\Even;

use Brain\Games\Engine;

function isEven(int $num): bool
{
    return $num % 2 === 0;
}

function check(int $num): string
{
    return isEven($num) ? "yes" : "no";
}

function run(): void
{
    $description = 'Answer "yes" if the number is even, otherwise answer "no".';

    $data = function (): array {
        $question = rand(1, 20);
        $answer = check($question);
        return ['question' => $question, 'answer' => $answer];
    };
    Engine\render($description, $data);
}
