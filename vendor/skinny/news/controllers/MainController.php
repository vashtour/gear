<?php

//	set namespace
namespace skinny\news\controllers;

//	resolving dependencies
use Yii;
use \skinny\news\Module;

/**
 * Main controller
 */
class MainController extends BaseController
{

	public function actionIndex()
	{
		$this->data['articles'] = Module::getInstance()->findArticles([
			'order'		=> 'item_date DESC',
			'pager'		=> [ 'limit' => 10 ]
		]);

		//	render page
		return $this->render();
	}

}
