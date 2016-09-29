<?php

//	set namespace
namespace app\controllers;

//	resolving dependencies
use yii\base\Controller;

/**
 * Base controller
 */
class BaseController extends Controller
{

	/**
	 * Template data
	 */
	public $data = [];

	/**
	 * Render
	 *
	 * @param	string	$view	(optional)
	 * @param	array	$data	(optional) template output data
	 *
	 * @return	string	rendered result
	 */
	public function render( $view=null, $data=[] )
	{
		$view = $view ? $view : $this->action->id;
		$data = empty( $data ) ? $this->data : $data;
		return parent::render( $view, $data );
	}

}
