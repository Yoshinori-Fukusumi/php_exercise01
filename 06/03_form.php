<?php

$msg = '';
$err_msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $msg = $_POST['message'];

    // バリデーション
    if (empty($msg)) {
        $err_msg = '年齢を入力してください';
    } else {
        $msg = "私は" . $_POST['message'] . "歳です";
    }
}

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>フォーム課題3</title>
</head>

<body>
    <h1>POSTメソッド</h1>
    <form action="" method="POST">
        <div>
            <?php if (!empty($err_msg)) : ?>
                <ul>
                    <li><?= $err_msg ?></li>
                </ul>
            <?php endif; ?>
            <label for="">年齢</label><br>
            <input type="text" name="message">
        </div>
        <div>
            <input type="submit" value="送信">
        </div><br>
    </form>
    <div>
        <?= htmlspecialchars($msg, ENT_QUOTES, 'UTF-8') ?>
    </div>
</body>

</html>
