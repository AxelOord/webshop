<?php
setlocale(LC_ALL, 'nl_NL');

// Define constants

define('DEBUG_MODE', FALSE);

// Define DB settings
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'webshop');
define('DB_HOST', 'localhost');

// File system directories
define('DOCUMENT_ROOT', $_SERVER['DOCUMENT_ROOT'] . '/webshop/');
define('BASE_URL', '/webshop/');
define('WEB_ADRES', 'localhost');

// Define file directories
define('SYSTEM_DIR', DOCUMENT_ROOT . 'system/');
define('CLASS_DIR', SYSTEM_DIR . 'classes/');
define('CONTROLLER_DIR', SYSTEM_DIR . 'controllers/');
define('MODEL_DIR', SYSTEM_DIR . 'models/');
define('LIBRARY_DIR', SYSTEM_DIR . 'libraries/');
define('TEMPLATE_DIR', DOCUMENT_ROOT . 'templates/');
define('TEMPLATE_C_DIR', TEMPLATE_DIR . 'compiled/');
define('FUNCTION_DIR', SYSTEM_DIR . 'functions/');

// Define master template
define('MASTER_TEMPLATE', TEMPLATE_DIR . 'index');

// Define JavaScript, CSS and Image directories
define('JS_URL', BASE_URL . 'js/');
define('CSS_URL', BASE_URL . 'css/');
define('IMG_URL', BASE_URL . 'images/');

define('SELF', pathinfo(__FILE__, PATHINFO_BASENAME));  // the name of this file
define('DEFAULT_CONTROLLER', 'home');

?>
