<?php

//	set namespace
namespace skinny\news\widgets;

//	resolve dependecies
use \Yii;
use \yii\caching\TagDependency;

/**
 * Common widget
 */
class CommonWidget extends \yii\base\Widget
{

	/**
	 * Data
	 */
	public $data = [];

	/**
	 * Cache flag
	 */
	public $cacheEnabled = false;

	/**
	 * Cache name
	 */
	public $cacheName = '';

	/**
	 * Cache tags
	 */
	public $cacheTags = [];

	/**
	 * Cache time
	 */
	public $cacheTime = 0;

	/**
	 * Init
	 */
	public function init()
	{
		//	call parent
		parent::init();

		//	set cache params
		$this->cacheEnabled = Yii::$app->getModule('news')->getCacheState();
	}

	/**
	 * Get cache
	 */
	public function getCache( $suffix='' )
	{
		return $this->cacheEnabled ? Yii::$app->cache->get( $this->cacheName . $suffix ) : null;
	}

	/**
	 * Set cache
	 */
	public function setCache( $value, $suffix='' )
	{
		if( $this->cacheEnabled )
		{
			//	reset dependency
			$dependency = null;

			//	check tags
			if( !empty( $this->cacheTags ) )
			{
				$dependency = new TagDependency([ 'tags' => $this->cacheTags ]);
			}

			//	set cache value
			Yii::$app->cache->set( $this->cacheName . $suffix, $value, $this->cacheTime, $dependency );
		}
	}

}
