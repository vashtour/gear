<?php

//	set namespace
namespace skinny\news\controllers;

//	resolving dependencies
use Yii;

/**
 * Article controller
 */
class ArticleController extends BaseController
{

	public function actionIndex()
	{
		//	set template data
		$this->data['articles'] = Yii::$app->request->get('articles');

		//	render page
		return $this->render();
	}

}
