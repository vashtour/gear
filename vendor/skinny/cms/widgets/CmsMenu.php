<?php

namespace skinny\cms\widgets;

use Yii;
use yii\widgets\Menu;

class CmsMenu extends Menu
{

	const EVENT_CMS_MENU_CREATE = 'cmsMenuCreate';

	/**
	 * Run widget
	 */
	public function run()
	{
		$event = new Event();
		$this->trigger( self::EVENT_CMS_MENU_CREATE, $event );
		return $this->render( 'cms-menu', [ 'content' => parent::run() ] );
	}

}

