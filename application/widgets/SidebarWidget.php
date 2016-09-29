<?php

//	set namespace
namespace widgets;

//	resolve dependecies
use \Yii;

/**
 * Sidebar widget
 */
class SidebarWidget extends CommonWidget
{

	/**
	 * Icon
	 */
	public $headerIcon = '';

	/**
	 * Title
	 */
	public $headerTitle = '';

	/**
	 * Class
	 */
	public $widgetClass = '';

	/**
	 * Content
	 */
	public $widgetContent = '';

	/**
	 * Run widget
	 */
	public function run()
	{
		//	set template data
		$this->data['headerIcon'] = $this->headerIcon;
		$this->data['headerTitle'] = $this->headerTitle;
		$this->data['widgetClass'] = $this->widgetClass;
		$this->data['widgetContent'] = $this->widgetContent;

		//	render widget
		return $this->render( 'sidebar_widget', $this->data );
	}

}
