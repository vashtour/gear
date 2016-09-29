<?php

$config = [
	'id' => 'wave',
	'basePath' => APPLICATION_PATH,
	'runtimePath' => RUNTIME_PATH,
	'vendorPath' => ROOT_PATH . '/vendor',
	'params' => require __DIR__ . '/params.php',
	'modules' => require __DIR__ . '/modules.php',
	'components' => require __DIR__ . '/components.php',
	'extensions' => require VENDOR_PATH . '/yiisoft/extensions.php',
	'timeZone' => 'Europe/Kiev',
	'charset' => 'UTF-8',
	'aliases' => [
		'assets' => APPLICATION_PATH . '/assets',
		'components' => APPLICATION_PATH . '/components',
	]
];

$envConfigFile = CONFIG_PATH . '/' . YII_ENV . '.php';
if( file_exists( $envConfigFile ) )
{
	$config = array_merge_recursive( $config, require $envConfigFile );
}

$cmsConfigFile = VENDOR_PATH . '/skinny/cms/config/cms.php';
if( file_exists( $cmsConfigFile ) )
{
	$config = array_merge_recursive( $config, require $cmsConfigFile );
}

return $config;
