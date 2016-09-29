<?php

namespace skinny\tours\controllers;

/**
 * AdminCountryController
 */
class AdminCountryController extends BaseAdminController
{

	public function actionIndex()
	{
		Module::getInstance()->countries->find
	}

}

