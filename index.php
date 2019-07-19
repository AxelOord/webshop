<?php

/*
 * index.php is the bootstrap file, the router class parses the url to determine
 * the controller to use. If a controller has been found, a new instance of this
 * class will be created.
 */


require_once('config.inc.php');

error_reporting(0);
if (DEBUG_MODE) {
    error_reporting(E_ALL ^ E_NOTICE);
    ini_set('display_errors', 'on');
}

// Include libraries
require_once(LIBRARY_DIR . 'Smarty/libs/Smarty.class.php');

// Include classes
require_once(CLASS_DIR . 'fouten.class.php');
require_once(CLASS_DIR . 'mysql.class.php');
require_once(CLASS_DIR . 'base.class.php');

require_once(CLASS_DIR . 'model.class.php');
require_once(CLASS_DIR . 'view.class.php');
require_once(CLASS_DIR . 'controller.class.php');
require_once(CLASS_DIR . 'router.class.php');
require_once(CLASS_DIR . 'load.class.php');

// Include database models
require_once(MODEL_DIR . 'user.model.php');
require_once(MODEL_DIR . 'admin.model.php');

// Start session
session_start();

// Setup default classes
$oRouter = new router(); // URL parser and router to check controller and params


// Include functions
require_once(FUNCTION_DIR . 'fatalerror.php');
require_once(FUNCTION_DIR . 'url.php');

// Get controller
$sController = $oRouter->getController();
$sControllerFileName = $sController . '.controller.php';

if (DEBUG_MODE) echo '<br>Controller = '. $sController;
// Load controller and create instance
if (file_exists(CONTROLLER_DIR . $sControllerFileName)) {
    require_once(CONTROLLER_DIR . $sControllerFileName);
    $oController = new $sController;
}
else {
    if (DEBUG_MODE) fatalError('Controller ' . $sController . ' niet gevonden');
    header("Location: http://www.localhost/webshop/notfound");
}
if (DEBUG_MODE) $oRouter->printUrl();
?>