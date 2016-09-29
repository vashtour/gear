<?php

namespace skinny\cms\controllers;

/**
 * Dashboard controller
 */
class DashboardController extends RestrictController
{

	/**
	 * Index action
	 */
	public function actionIndex()
	{
		return $this->render();
	}

}

