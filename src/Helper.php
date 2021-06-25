<?php

namespace Brain\Games\Helper;

function isEven($num)
{
    return $num % 2 === 0 ? "yes" : "no";
}

function calc($num1, $num2, $mathSing)
{
    switch ($mathSing) {
        case '+':
            return $num1 + $num2;
            break;
        case '-':
            return $num1 - $num2;
            break;
        case '*':
            return $num1 * $num2;
            break;
    }
}
