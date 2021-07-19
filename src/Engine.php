<?php

namespace Brain\Games\Engine;

use function cli\line;
use function cli\prompt;

function render(string $description, callable $data): ?string
{
    line("Welcome to the Brain Games!");
    $name = prompt('May I have you name?');
    line("Hello, %s!", $name);
    line($description);
    for ($i = 1; $i <= 3; $i++) {
        $gameData = $data();
        $question = $gameData['question'];
        $answer = $gameData['answer'];
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
