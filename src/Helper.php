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

function gcd($num1, $num2)
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
