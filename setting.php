<?php
define('BASE_DIR', __DIR__.'/');

define('APP_NAME', 'my_shopping');
define('SITE_TITLE', 'My Shopping');

define('BASE_URL', 'http://localhost/php/myshop/');

define('DATA_DIR', BASE_DIR.'data/');
// define('MODELS_DIR', BASE_DIR.'app/models/');
// define('VIEWS_DIR', BASE_DIR.'app/views/');
// define('CONTROLLERS_DIR', BASE_DIR.'app/controllers/');
define('FILE_BUFFER', 1000);

set_include_path(get_include_path() . PATH_SEPARATOR . BASE_DIR);