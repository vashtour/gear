<?php

return [
	'bootstrap' => [ 'debug', 'gii' ],
	'modules' => [
		'debug' => [
			'class' => 'yii\debug\Module',
			'allowedIPs'	=> ['81.95.186.1','*'],
		],
		'gii' => [
			'class' => 'yii\gii\Module',
			'allowedIPs'	=> ['81.95.186.1','*'],
		],
	],
	'components' => [
		'db' => [
			'enableSchemaCache' => false,
		],
		'log' => [
			'targets' => [
				[
					'class' => 'yii\log\FileTarget',
					'levels' => ['info'],
					'categories' => ['request'],
					'logFile' => '@runtime/logs/requests.log',
					'maxFileSize' => 1024 * 2,
					'maxLogFiles' => 20,
				],
				[
					'class' => 'yii\log\FileTarget',
					'levels' => ['info'],
					'categories' => ['response'],
					'logFile' => '@runtime/logs/response.log',
					'maxFileSize' => 1024 * 2,
					'maxLogFiles' => 20,
				],
			]
		]
	]
];
