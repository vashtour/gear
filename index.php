<?php

//	enable errors
error_reporting(-1);
ini_set('display_errors',1);

//	environment params
define('YII_ENV', 'dev');
define('YII_DEBUG', YII_ENV == 'dev');

//	define pathes
define('ROOT_PATH', __DIR__);
define('VENDOR_PATH', ROOT_PATH . '/vendor');
define('RUNTIME_PATH', ROOT_PATH . '/runtime');
define('APPLICATION_PATH', ROOT_PATH . '/application');
define('MODULES_PATH', APPLICATION_PATH . '/modules');
define('CONFIG_PATH', APPLICATION_PATH . '/config');

//	include framework
require VENDOR_PATH . '/autoload.php';
require VENDOR_PATH . '/yiisoft/yii2/Yii.php';

//	include main config
$config = require CONFIG_PATH . '/main.php';

//	create application
$application = new \yii\web\Application( $config );

//	run application
$application->run();
