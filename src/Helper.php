<?php

namespace Brain\Games\Helper;

function isEven(int $num): bool
{
    return $num % 2 === 0;
}

function check(callable $fn, int $num): string
{
    $result = $fn($num) ? "yes" : "no";
    return $result;
}

function calc(int $num1, int $num2, string $mathSing): int
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

function progression(int $quantity = 10): array
{
    $initValue = rand(0, 50);
    $step = rand(1, 10);
    $result[0] = $initValue;
    for ($i = 1; $i <= $quantity - 1; $i++) {
        $result[$i] = $result[$i - 1] + $step;
    }
    return $result;
}

function isPrime(int $num): bool
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
