<?php
require_once('../setting.php');
require_once('app.php');
require_once('app/controllers/CartController.php');

<<<<<<< HEAD
$controller = new CartController();
$controller->clear();
=======
if (isset($_GET['item_id'])) {
    $item_id = $_GET['item_id'];
    unset($_SESSION[APP_NAME]['cart'][$item_id]);
}

header("Location: index.php");
>>>>>>> cb5701d6e9eceeb91af0234fef9719d149f4e131
