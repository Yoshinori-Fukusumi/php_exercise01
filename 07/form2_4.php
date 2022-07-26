<?php

$name = '';
$tel = '';
$email = '';
$item_key = '';
$err_msgs = [];

$items = ['バッグ', '靴', '時計', 'ネックレス', 'ピアス'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $item_key = $_POST['item_key'];

    if (empty($name)) {
        $err_msgs[] = '氏名を入力して下さい';
    }

    if (empty($tel)) {
        $err_msgs[] = '電話番号を入力して下さい';
    }

    if (empty($email)) {
        $err_msgs[] = 'メールアドレスを入力して下さい';
    }
}

$selects = [
    '氏名　　　　　:' => $name,
    '電話番号　　　:' => $tel,
    'メールアドレス:' => $email,
    '購入するもの　:' => $item_key
];

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
    <h3>個人情報を入力してください</h3>

    <?php if (!empty($err_msgs)) : ?>
        <h2>エラーメッセージ</h2>
        <?php foreach ($err_msgs as $err_msg) : ?>
            <ul>
                <li><?= $err_msg ?></li>
            </ul>
        <?php endforeach; ?>
    <?php endif; ?>

    <form action="" method="post">
        <span>氏名</span><br>
        <input type="text" name="name"><br>
        <span>電話番号</span><br>
        <input type="text" name="tel"><br>
        <span>メールアドレス</span><br>
        <input type="text" name="email"><br>

        <h3>購入するものを選択してください</h3>

        <select name="item_key">
            <option value="バッグ">バッグ</option>
            <option value="靴">靴</option>
            <option value="時計">時計</option>
            <option value="ネックレス">ネックレス</option>
            <option value="ピアス">ピアス</option>
        </select><br>
        <br>
        <div class=" submit">
            <input type="submit" value="送信">
        </div>
    </form>

    <?php if ($name && $tel && $email) : ?>
        <h2><?= '以下の内容が送信されました' ?></h2>
        <?php foreach ($selects as $key => $select) : ?>
            <p><?= $key . $select ?></p>
        <?php endforeach; ?>
    <?php endif; ?>

</body>

</html>
