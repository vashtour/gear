<?php

namespace skinny\cms;

use Yii;
use yii\base\Object;
use yii\web\UrlRuleInterface;

class CmsUrlManager extends Object implements UrlRuleInterface
{

	/**
	 * Layout name
	 */
	const CMS_LAYOUT = 'cms';

	/**
	 * Url prefix
	 */
	public $urlPrefix = 'cms';

	/**
	 * Parse request
	 *
	 * @param	$manager
	 * @param	$request
	 *
	 * @return	bool|array
	 */
	public function parseRequest( $manager, $request )
	{
		$path = $request->getPathInfo();
		$args = explode( '/', $path );
		$count = count( $args );

		if( $count > 0 && $args[0] == $this->urlPrefix )
		{
			if( $count > 1 )
			{
			}
			else
			{
				CmsModule::getInstance()->layout = self::CMS_LAYOUT;
				return [ 'cms/dashboard', [] ];
			}
		}

		return false;
	}

	/**
	 * Create url
	 *
	 * @param	$manager
	 * @param	$route
	 * @param	array	$params
	 *
	 * @return	bool|string
	 */
	public function createUrl( $manager, $route, $params=[] )
	{
	}

}

