<?php

echo '$numの値を入力して下さい: ';
$num = trim(fgets(STDIN));

// ここに処理を記述

$check = true;

if ($num == 1) {
    echo $num . "は素数ではありません。";
} else {
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            $check = false;
            break;
        }
    }
    if ($check) {
        echo $num . "は素数です。";
    } else {
        echo $num . "は素数ではありません。";
    }
}
