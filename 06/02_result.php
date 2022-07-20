<?php

$msg = $_POST['message'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "私の名前は、" . htmlspecialchars($msg, ENT_QUOTES, 'UTF-8') . "です。";
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>フォーム課題2</title>
</head>

<body>
    <br>
    <br>
    <a href="02_form.php">戻る</a>
</body>

</html>
