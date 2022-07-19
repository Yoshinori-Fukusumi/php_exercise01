<?php

$msg = $_POST['message'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "私の名前は、" . htmlspecialchars($msg, ENT_QUOTES, 'UTF-8') . "です。";
}
