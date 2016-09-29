<?php

namespace app\controllers;

class ErrorController extends BaseController
{

	public function action404()
	{
		//	render page
		return $this->render();
	}
}
