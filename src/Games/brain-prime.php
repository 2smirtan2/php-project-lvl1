<?php

namespace Brain\Games\Prime;

use Brain\Games\Engine;

function isPrime(int $num): bool
{
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i <= $num / 2; $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}

function generateAnswer(int $num): string
{
    return isPrime($num) ? "yes" : "no";
}

function run(): void
{
    $description = 'Answer "yes" if given number is prime. Otherwise answer "no".';

    $data = function (): array {
        $randValue = rand(0, 21);
        $answer = generateAnswer($randValue);
        return ['question' => $randValue, 'answer' => $answer];
    };

    Engine\render($description, $data);
}
