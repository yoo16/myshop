<?php
require_once('setting.php');
require_once('app.php');
require_once('app/controllers/HomeController.php');

$controller = new HomeController();
$controller->index();