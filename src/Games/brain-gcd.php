<?php

namespace Brain\Games\Gcd;

use Brain\Games\Engine;

function gcd(int $num1, int $num2): int
{
    $result = 1;
    $limit = $num1 < $num2 ? $num1 : $num2;
    for ($i = 2; $i <= $limit; $i++) {
        if ($num1 % $i === 0 && $num2 % $i === 0) {
            $result = $i;
        }
    }
    return $result;
}

function run(): void
{
    $description = 'Find the greatest common divisor of given numbers.';

    $data = function (): array {
        $randNum1 = rand(1, 10);
        $randNum2 = rand(1, 10);
        $question = "{$randNum1} {$randNum2}";
        $answer = gcd($randNum1, $randNum2);
        $gameData = [];
        $gameData['question'] = $question;
        $gameData['answer'] = $answer;
        return $gameData;
    };

    Engine\render($description, $data);
}
