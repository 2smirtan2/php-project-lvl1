<?php

namespace Brain\Games\Progression;

use Brain\Games\Engine;

function progression(int $quantity = 10): array
{
    $initValue = rand(0, 50);
    $step = rand(1, 10);
    $result = [];
    $result[0] = $initValue;
    for ($i = 1; $i <= $quantity - 1; $i++) {
        $result[$i] = $result[$i - 1] + $step;
    }
    return $result;
}

function run(): void
{
    $description = 'What number is missing in the progression?';

    $data = function (): array {
        $setNumbers = progression();
        $length = count($setNumbers);
        $happyIndex = rand(0, $length - 1);
        $question = '';
        for ($i = 0; $i <= $length - 1; $i++) {
            if ($i === $happyIndex) {
                $question .= '.. ';
            } else {
                $question .= $setNumbers[$i] . ' ';
            }
        }
        $answer = $setNumbers[$happyIndex];
        return [$question, $answer];
    };

    Engine\render($description, $data);
}
