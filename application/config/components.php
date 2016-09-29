<?php

return [
	'request' => [
		'cookieValidationKey' => '8tr3XzUX3V7au8JSAJNvLN',
		'enableCsrfValidation' => true,
		'enableCookieValidation' => true,
	],
	'cache' => [
		'class' => 'yii\caching\FileCache',
	],
/*
	'user' => [
		'identityClass' => 'app\models\User',
		'enableAutoLogin' => true,
	],
*/
	'errorHandler' => [
		'errorAction' => 'error/404',
	],
	'urlManager' => [
		'class' => 'yii\web\UrlManager',
		'enablePrettyUrl' => true,
		'showScriptName' => false,
	],
/*
	'mailer' => [
		'class' => 'yii\swiftmailer\Mailer',
		'useFileTransport' => true,
	],
*/
	'log' => [
		'traceLevel' => YII_DEBUG ? 3 : 0,
		'targets' => [
			[
				'class' => 'yii\log\FileTarget',
				'levels' => ['error', 'warning'],
				'logFile' => '@runtime/logs/common.log',
			],
		],
	],
	'assetManager' => [
		'class' => 'yii\web\AssetManager',
		'forceCopy' => true,
		'linkAssets' => true,
		'appendTimestamp' => true,
	],
	'formatter'		=> [
		'dateFormat' => 'dd.MM.yy',
		'datetimeFormat' => 'd.M.Y H:m:s',
		'defaultTimeZone' => 'Europe/Kiev',
	],
	'db' => require __DIR__ . '/db.php',
];

