<?php

//	set namespace
namespace skinny\news\assets;

//	resolve dependencies
use \yii\web\AssetBundle;

/**
 * Assets
 */
class SidebarNewsAssets extends AssetBundle
{
	/**
	 * @var string
	 */
	public $sourcePath = '@skinny/news/assets';

	/**
	 * @var array
	 */
	public $css = [
		'css/sbarnews.css',
	];

	/**
	 * @var array
	 */
	public $js = [];

	/**
	 * @var array depends
	 */
	public $depends = [];

}
