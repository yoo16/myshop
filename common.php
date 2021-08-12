<?php
//セッションスタート
session_start();

require_once(MODELS_DIR.'User.php');
require_once(MODELS_DIR.'Item.php');
require_once(MODELS_DIR.'Cart.php');
require_once(MODELS_DIR.'Information.php');

//ログインユーザ
$user = new User();
$user->authUser();