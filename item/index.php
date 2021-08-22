<?php
require_once('../setting.php');
require_once('app.php');
require_once('app/controllers/ItemController.php');

$controller = new ItemController();
$controller->index();