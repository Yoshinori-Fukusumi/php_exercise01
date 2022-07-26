<?php

$stylists = [
    'スタイリスト' => 'Takashi',
    'ハイスタイリスト' => 'Ken',
    'トップスタイリスト' => 'Kyoutaro'
];
$select_stylist = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $select_stylist = $_POST['stylists'];
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
    <h1>希望する美容師のランクを選んでください</h1>
    <form action="" method="post">
        <select name="stylists">
            <?php foreach ($stylists as $key => $name) : ?>
                <?= '<option value="' . $key . '">' . $key . '</option>'; ?>
            <?php endforeach; ?>
        </select>
        <br>
        <input type="submit" value="送信">
    </form>
    <br>

    <?php foreach ($stylists as $key => $name) : ?>
        <?php
        if ($select_stylist == $key) {
            echo "あなたの担当は{$name}です";
        }
        ?>
    <?php endforeach; ?>

</body>

</html>
