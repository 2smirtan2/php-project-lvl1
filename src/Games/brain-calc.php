<?php

namespace Brain\Games\Calc;

use Brain\Games\Engine;

function calc(int $num1, int $num2, string $mathOperation): int
{
    switch ($mathOperation) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        default:
            return $num1 * $num2;
    }
}

function run(): void
{
    $description = 'What is the result of the expression?';

    $data = function (): array {
        $mathOperations = ['+', '-', '*'];
        $randSing = $mathOperations[rand(0, 2)];
        $randNum1 = rand(1, 10);
        $randNum2 = rand(1, 10);
        $question = "{$randNum1} {$randSing} {$randNum2}";
        $answer = calc($randNum1, $randNum2, $randSing);
        return [$question, $answer];
    };

    Engine\render($description, $data);
}
