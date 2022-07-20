<?php

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$operator = $_GET['operator'];

switch ($operator) {
    case 'addition':
        $result = $num1 . ' + ' . $num2 . ' = ' . $num1 + $num2;
        break;
    case 'subtraction':
        $result = $num1 . ' - ' . $num2 . ' = ' . $num1 - $num2;
        break;
    case 'multiplication':
        $result = $num1 . ' * ' . $num2 . ' = ' . $num1 * $num2;
        break;
    case 'division':
        $result = $num1 . ' / ' . $num2 . ' = ' . $num1 / $num2;
        break;

    default:
        $result = "正しい演算子を指定して下さい";
        break;
}
echo $result;
