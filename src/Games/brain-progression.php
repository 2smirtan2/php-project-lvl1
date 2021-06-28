<?php

namespace Brain\Games\Progression;

use Brain\Games\Engine;
use Brain\Games\Helper;

function run()
{
    $description = 'What number is missing in the progression?';

    $data = function (): array {
        $setNumbers = Helper\progression();
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
