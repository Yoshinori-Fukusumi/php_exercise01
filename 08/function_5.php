<?php

$date = date('Y年m月d日');
$week_num = date('w');
$week_array = ['月', '火', '水', '木', '金',];
$week = $week_array[$week_num];
$msg = '今日は、' . $date . $week . '曜日です';

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function_5</title>
</head>

<body>
    <?php if (isset($_POST['confirm'])) : ?>
        <h1><?= $msg; ?></h1>
    <?php else : ?>
        <h2><?= '本日の日付、曜日を確認しますか？' ?></h2>
        <form action="" method="post">
            <input type="submit" name="confirm" value="はい">
        </form>
    <?php endif; ?>
    <?php if (isset($_POST['confirm'])) : ?>
        <a href="function_5.php">戻る</a>
    <?php endif; ?>
</body>

</html>
