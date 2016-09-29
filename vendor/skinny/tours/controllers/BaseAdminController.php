<?php

namespace skinny\tours\controllers;

/**
 * BaseAdminController
 */
class BaseAdminController extends Controller
{

	public function beforeAction()
	{
		$controllerName = $this->id;
		$actionName = $this->action->id;
		$moduleName = $this->module->id;
		$accessRule = $moduleName . '_' . $controllerName . '_' . $actionName;
		if( Yii::$app->user->can( $accessRule ) )
		{
		}
	}

}

