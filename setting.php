<?php
define('BASE_DIR', __DIR__.'/');
<<<<<<< HEAD

define('APP_NAME', 'my_shopping');
define('SITE_TITLE', 'My Shopping');

define('DATA_DIR', BASE_DIR.'data/');
define('MODELS_DIR', BASE_DIR.'app/models/');
define('VIEWS_DIR', BASE_DIR.'app/views/');
define('CONTROLLERS_DIR', BASE_DIR.'app/controllers/');
define('FILE_BUFFER', 1000);

set_include_path(get_include_path() . PATH_SEPARATOR . BASE_DIR);
=======
define('APP_NAME', 'my_shopping');
define('SITE_TITLE', 'My Shopping');

define('COMPONENTS_DIR', BASE_DIR.'components/');
define('DATA_DIR', BASE_DIR.'data/');
define('MODELS_DIR', BASE_DIR.'models/');
define('FILE_BUFFER', 1000);

require_once('common.php');
>>>>>>> cb5701d6e9eceeb91af0234fef9719d149f4e131
