<?php

$judge_ment = $_GET['judge_ment'];

switch ($judge_ment) {
    case '合格':
        $result = '合格です';
        break;

    case '不合格':
        $result = '不合格です';
        break;
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1><?= $result ?></h1>
    <a href="form2_3.php">戻る</a>
</body>

</html>
