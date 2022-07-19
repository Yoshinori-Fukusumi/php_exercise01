<?php

$msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $msg = "私は" . $_POST['message'] . "歳です";
}

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>フォーム課題1</title>
</head>

<body>
    <h1>POSTメソッド</h1>
    <form action="" method="POST">
        <div>
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
