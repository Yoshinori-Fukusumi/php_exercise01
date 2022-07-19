<?php

$poket_money = 1000;
$fund_raising = 101;

// ここに処理を記述
while ($poket_money >= $fund_raising) {
    echo "あなたの所持金は{$poket_money}円です｡" . PHP_EOL;
    $poket_money = $poket_money - $fund_raising;
    echo "{$fund_raising}円募金しました｡" . PHP_EOL;
    echo "残り残高は{$poket_money}円です。" . PHP_EOL;
}
echo "あなたはこれ以上募金できません｡";
