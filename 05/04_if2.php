<?php

echo '血液型を入力して下さい: ';
$blood_type = trim(fgets(STDIN));

// ここに処理を記述
switch ($blood_type) {
    case 'A':
        echo 'A型の方は几帳面だけど優しいらしいです！';
        break;
    case 'B':
        echo 'B型の方は好奇心旺盛らしいです！';
        break;
    case 'O':
        echo 'O型の方はおおらからしいです！';
        break;
    case 'AB':
        echo 'AB型の方は先読み思考に優れた天才らしいです！';
        break;
    default:
        echo '判定不能です！ ';
        break;
}
