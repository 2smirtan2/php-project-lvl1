<?php

namespace Brain\Games\Even;

use Brain\Games\Engine;

function isEven(int $num): bool
{
    return $num % 2 === 0;
}

function generateAnswer(int $num): string
{
    return isEven($num) ? "yes" : "no";
}

function run(): void
{
    $description = 'Answer "yes" if the number is even, otherwise answer "no".';

    $data = function (): array {
        $randValue = rand(1, 20);
        $answer = generateAnswer($randValue);
        return ['question' => $randValue, 'answer' => $answer];
    };
    Engine\render($description, $data);
}
