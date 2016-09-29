<?php

//	set namespace
namespace skinny\news\widgets;

//	resolve dependecies
use \Yii;

/**
 * SidebarNews widget
 */
class SidebarNews extends CommonWidget
{

	/**
	 * Cache name
	 */
	public $cacheName = 'sidebar_news';

	/**
	 * Init
	 */
	public function init()
	{
		//	call parent
		parent::init();

		//	set cache params
		$this->cacheTags = [
			'news_latest',
		];
	}

	/**
	 * Run widget
	 */
	public function run()
	{
		if( !$this->data['news'] = $this->getCache() )
		{
			$this->data['news'] = Yii::$app->getModule('news')->findArticles([
				'order'		=> 'item_date DESC',
				'pager'		=> [ 'limit' => 3 ]
			]);

			//	set cache
			$this->setCache( $this->data['news'] );
		}

		//	render widget
		return $this->render( 'sidebar_news', $this->data );
	}

}
