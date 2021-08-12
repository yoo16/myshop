<?php
require_once('../setting.php');
require_once('app.php');
require_once('app/controllers/CartController.php');

$controller = new CartController();
$controller->add();
