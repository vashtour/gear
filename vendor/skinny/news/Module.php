<?php

//	set namespace
namespace skinny\news;

//	resolve dependencies
use skinny\news\models\NewsModel;

use Yii;
use yii\caching\TagDependency;
use yii\console\Application as ConsoleApplication;
use yii\web\Application as WebApplication;
use yii\base\Module as BaseModule;
use yii\base\BootstrapInterface;


/**
 * News module
 */
class Module extends BaseModule implements BootstrapInterface
{

	/**
	 * Controller namespace
	 */
	public $controllerNamespace = 'skinny\news\controllers';

	/**
	 * Url prefix
	 */
	public $urlPrefix = 'news2';

	/**
	 * Cache enabled
	 */
	public $cacheEnabled = false;

	/**
	 * Init
	 */
	public function init()
	{
		parent::init();
		$this->setAliases([ 'skinny' => '@vendor/skinny' ]);
	}

	public function bootstrap( $app )
	{
		if( $app instanceof WebApplication )
		{
			$this->addUrlRules( $app );
		}
		elseif( $app instanceof ConsoleApplication )
		{
			$this->controllerNamespace = 'skinny\news\console';
		}
	}

	protected function addUrlRules( $app )
	{
		$app->urlManager->addRules([
			['class'		=> 'skinny\news\ModuleRule'],
		],false);
	}

	#==============================================================================================>
	#
	#	News section
	#
	#==============================================================================================>

	/**
	 * Find articles
	 */
	public function findArticles( $params )
	{
		//	create query
		$itemsQuery = NewsModel::find();

		//	check filters
		if( !empty( $params['filter'] ) )
		{
			$itemsQuery->where( $params['filter'] );
		}

		//	check pager
		if( !empty( $params['pager'] ) )
		{
			$itemsQuery->limit( $params['pager']['limit'] );
		}

		//	check order
		if( !empty( $params['order'] ) )
		{
			$itemsQuery->orderBy( $params['order'] );
		}

		//	reset news array
		$news = [];

		//	fetch items
		foreach( $itemsQuery->each() as $item )
		{
			$news[ $item->news_id ] = $item;
		}

		//	return result
		return $news;
	}

	/**
	 * Get article by url
	 */
	public function getArticleByUrl( $url )
	{
		return NewsModel::find()->where([ 'news_shortname' => $url ])->one();
	}

	#==============================================================================================>
	#
	#	Helper section
	#
	#==============================================================================================>

	/**
	 * Get cache state
	 */
	public function getCacheState()
	{
		return $this->cacheEnabled;
	}

}
