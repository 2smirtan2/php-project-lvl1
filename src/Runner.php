<?php

namespace Brain\Games\Raner;

use function cli\line;
use function cli\prompt;

function salut()
{
    line("Welcome to the Brain Games!");
    $name = prompt('May I have you name?');
    line("Hello, %s!", $name);
    return $name;
}

function isEven($num)
{
    return $num % 2 === 0 ? "yes" : "no";
}

function run()
{
    $name = salut();
    line('Answer "yes" if the number is even, otherwise answer "no".');
    for ($i = 1; $i <= 3; $i++) {
        $randNumber = rand(1, 20);
        line("Question: %s", $randNumber);
        $userAnswer = prompt('Your answer:');
        $answer = isEven($randNumber);
        if ($userAnswer === $answer) {
            line("Correct!");
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $userAnswer, $answer);
            return line('Let`s try again, %s', $name);
        }
    }
    return line("Congratulations, %s!", $name);
}
