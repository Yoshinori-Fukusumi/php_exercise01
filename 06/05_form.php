<?php

$num1 = '';
$num2 = '';
$num3 = '';
$sum = '';
$err_msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];


    // バリデーション
    if (empty($num1) || empty($num2) || empty($num3)) {
        $err_msg = '全てに数字を入力してください';
    } else {
        $sum = ($num1 + $num2 + $num3);
    }
}

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>フォーム課題5</title>
</head>

<body>
    <h1>数字を入力してください</h1>
    <form action="" method="POST">
        <div>
            <?php if (!empty($err_msg)) : ?>
                <ul>
                    <li><?= $err_msg ?></li>
                </ul>
            <?php endif; ?>
            <label for="">1つめの数字</label><br>
            <input type="text" name="num1"><br>
            <label for="">2つめの数字</label><br>
            <input type="text" name="num2"><br>
            <label for="">3つめの数字</label><br>
            <input type="text" name="num3"><br>
        </div>
        <div>
            <input type="submit" value="送信">
        </div><br>
    </form>
    <div>
        <?= htmlspecialchars($sum, ENT_QUOTES, 'UTF-8') ?>
    </div>
</body>

</html>
