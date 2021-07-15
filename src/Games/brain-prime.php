<?php

namespace Brain\Games\Prime;

use Brain\Games\Engine;

function isPrime(int $num): bool
{
    if ($num < 2) {
        return false;
    } elseif ($num === 2) {
        return true;
    } else {
        for ($i = 2; $i < $num; $i++) {
            if ($num % $i === 0) {
                return false;
            }
        }
    }
    return true;
}

function check(int $num): string
{
    $result = isPrime($num) ? "yes" : "no";
    return $result;
}

function run(): void
{
    $description = 'Answer "yes" if given number is prime. Otherwise answer "no".';

    $data = function (): array {
        $question = rand(0, 21);
        $answer = check($question);
        return [$question, $answer];
    };

    Engine\render($description, $data);
}
