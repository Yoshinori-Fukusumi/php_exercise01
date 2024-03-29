<?php

$score = '';
$err_msg = '';
$txt = '点数を入力してください';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $score = $_POST['score'];
    if (empty($score)) {
        $err_msg = '点数が入力されていません。';
    } elseif (!empty($score) && $score >= 60) {
        header('Location: judge_ment.php?judge_ment=合格');
        exit;
    } else {
        header('Location: judge_ment.php?judge_ment=不合格');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>埋め込み</title>
</head>

<body>
    <h1><?= $txt ?></h1>

    <?php if (!empty($err_msg)) : ?>
        <ul>
            <li><?= $err_msg ?></li>
        </ul>
    <?php endif; ?>
    <form action="" method="post">
        <input type="number" name="score">
        <input type="submit" value="送信">
    </form>
</body>

</html>
