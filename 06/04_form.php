<?php

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$operator = $_GET['operator'];

$addition = ($num1 + $num2);
$subtraction = ($num1 - $num2);
$multiplication = ($num1 * $num2);
$division = ($num1 / $num2);

switch ($operator) {
    case 'addition':
        echo "{$num1} + {$num2} = {$addition}";
        break;
    case 'subtraction':
        echo "{$num1} - {$num2} = {$subtraction}";
        break;
    case 'multiplication':
        echo "{$num1} * {$num2} = {$multiplication}";
        break;
    case 'division':
        echo "{$num1} / {$num2} = {$division}";
        break;

    default:
        echo "正しい演算子を指定して下さい";
        break;
}
