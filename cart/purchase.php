<?php
require_once('../setting.php');

$user = new User();
if (!$user->isLogined()) {
    header('Location: ../index.php');
}

if (isset($_POST)) {
    $cart = new Cart();
    $cart->purchase($user);
    $cart->clearAll();
}

header("Location: result.php");