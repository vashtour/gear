<?php

//	set namespace
namespace skinny\news\controllers;

//	resolving dependencies
use Yii;
use yii\base\Controller;
use skinny\news\Module;

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
	 * Init
	 */
	public function init()
	{
		//	call parent
		parent::init();

		//	set cache flag
		$this->data['cacheEnabled'] = Module::getInstance()->getCacheState();
	}

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
