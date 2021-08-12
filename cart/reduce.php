<?php
require_once('../setting.php');

if (isset($_GET['item_id'])) {
    $cart = new Cart();
    $cart->reduce($_GET['item_id']);
}

header("Location: index.php");