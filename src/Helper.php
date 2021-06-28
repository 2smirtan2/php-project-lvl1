<?php

namespace Brain\Games\Helper;

function isEven($num)
{
    return $num % 2 === 0;
}

function check($fn, $num)
{
    $result = $fn($num) ? "yes" : "no";
    return $result;
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

function progression($quantity = 10)
{
    $initValue = rand(0, 50);
    $step = rand(1, 10);
    $result[0] = $initValue;
    for ($i = 1; $i <= $quantity - 1; $i++) {
        $result[$i] = $result[$i - 1] + $step;
    }
    return $result;
}

function isPrime($num)
{
    if ($num < 2) {
        return false;
    } elseif ($num === 2) {
        return true;
    } else {
        for ($i = 3; $i < $num; $i++) {
            if ($num % $i === 0) {
                return false;
            }
        }
    }
    return true;
}
