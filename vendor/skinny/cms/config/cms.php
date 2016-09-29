<?php

return [
	'aliases' => [
		'skinny' => '@vendor/skinny',
		'cms' => '@vendor/skinny/cms',
	],
	'modules' => [
		'cms' => [
			'class' => 'skinny\cms\CmsModule',
		],
	],
	'components' => [
		'urlManager' => [
			'rules' => [
				[
					'class' => 'skinny\cms\CmsUrlManager',
					'urlPrefix' => 'admin',
				],
			],
		],
		'i18n' => [
			'translations' => [
				'cms' => [
					'class' => 'yii\i18n\PhpMessageSource',
					'sourceLanguage' => 'ru-RU',
					'basePath' => '@cms/messages',
					'fileMap' => [
						'cms' => 'cms.php',
					]
				]
			],
		],
	],
	'bootstrap' => ['cms']
];

