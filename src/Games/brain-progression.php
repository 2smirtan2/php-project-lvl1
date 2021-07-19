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

function generateQuestion(array $numbers, int $index): string
{
    $length = count($numbers);
    $question = '';
    for ($i = 0; $i <= $length - 1; $i++) {
        if ($i === $index) {
            $question .= '.. ';
        } else {
            $question .= $numbers[$i] . ' ';
        }
    }
    return $question;
}

function run(): void
{
    $description = 'What number is missing in the progression?';

    $data = function (): array {
        $setNumbers = progression();
        $happyIndex = rand(0, count($setNumbers) - 1);
        $question = generateQuestion($setNumbers, $happyIndex);
        $answer = $setNumbers[$happyIndex];
        return ['question' => $question, 'answer' => $answer];
    };

    Engine\render($description, $data);
}
