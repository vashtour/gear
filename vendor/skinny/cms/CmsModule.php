<?php

namespace skinny\cms;

use yii\base\Module;
use yii\base\BootstrapInterface;

/**
 * CmsModule
 */
class CmsModule extends Module implements BootstrapInterface
{

	public $layout = null;

	/**
	 * Bootstrap
	 */
	public function bootstrap( $app )
	{
	}

}

