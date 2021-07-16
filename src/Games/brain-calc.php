<?php

namespace Brain\Games\Calc;

use Brain\Games\Engine;

function calcMath(int $num1, int $num2, string $mathOperation): int
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
        $randOperation = $mathOperations[rand(0, 2)];
        $randNum1 = rand(1, 10);
        $randNum2 = rand(1, 10);
        $question = "{$randNum1} {$randOperation} {$randNum2}";
        $answer = calcMath($randNum1, $randNum2, $randOperation);
        return ['question' => $question, 'answer' => $answer];
    };

    Engine\render($description, $data);
}
