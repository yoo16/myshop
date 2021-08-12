<?php
require_once('../setting.php');

unset($_SESSION[APP_NAME]['cart']);

header("Location: index.php");
