<?php

namespace Brain\Games\Engine;

use Brain\Games\Even;
use Brain\Games\Calc;

use function cli\line;
use function cli\prompt;

function salut()
{
    line("Welcome to the Brain Games!");
    $name = prompt('May I have you name?');
    line("Hello, %s!", $name);
    return $name;
}

function render($description, $data) : string
{
    $name = salut();
    line($description);
    for ($i = 1; $i <= 3; $i++) {
        [$question, $answer] = $data();
        line("Question: %s", $question);
        $userAnswer = prompt('Your answer');
        if ($userAnswer == $answer) {
            line("Correct!");
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $userAnswer, $answer);
            return line('Let\'s try again, %s!', $name);
        }
    }
    return line("Congratulations, %s!", $name);
}
