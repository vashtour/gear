<?php

namespace skinny\cms\assets;

use yii\web\AssetBundle;

class CmsAssets extends AssetBundle
{

	public $sourcePath = '@cms/assets/cms';

	public $css = [
		'css/bootstrap.min.css',
		'css/awesome.min.css',
		'css/cms.min.css',
	];

	public $js = [
		'js/jquery-1.10.2.min.js',
		'js/bootstrap.min.js',
		'js/scripts.min.js',
	];

	public function init()
	{
		parent::init();
		$this->publishOptions['beforeCopy'] = [ $this, 'beforeCopy' ];
	}

	public function beforeCopy( $from, $to )
	{
		return preg_match( '%(/|\\\\)(fonts|css|js)%', $from );
	}

}
