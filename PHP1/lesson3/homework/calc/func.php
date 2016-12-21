<?php

//одна подзадача - одна функция
function calculate($a, $b, $op)
{
    switch ($op) {
        case "+":
            return $a + $b;
            break;
        case "-":
            return $a - $b;
            break;
        case "*":
            return $a * $b;
            break;
        case "/":
            return $a / $b;
            break;
        default:
            return null;
    }
}

//тесты для функции
assert(4 == calculate(2, 2, '+'));
assert(6 == calculate(2, 3, '*'));
assert(3 == calculate(5, 2, '-'));
assert(2 == calculate(8, 4, '/'));
assert(null == calculate(8, 4, '&&&'));
