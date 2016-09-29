<?php

//  define namespace
namespace skinny\news;

//  resolve dependencies
use Yii;
use yii\base\Object;
use yii\web\UrlRuleInterface;

/**
 * ModuleRule class
 */
class ModuleRule extends Object implements UrlRuleInterface
{

	/**
	 * Url prefix
	 */
	public $urlPrefix = 'news2';

	/**
	 * Parse request
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
				$enabled = 1;
				$articles = [];
				array_shift( $args );
				array_reverse( $args );
				foreach( $args as $url )
				{
					$article = Module::getInstance()->getArticleByUrl( $url );
					$enabled = $enabled && $article->enabled;
					$articles[] = $article;
				}
				if( $enabled )
				{
					$route = 'news/article';//$articles[0]->type == 'article' ? 'article' : 'category';
					$params = [ 'articles' => $articles ];
					return [ $route, $params ];
				}
			}
			else
			{
				return [ 'news/main', [] ];
			}
		}

		return false;
	}

	/**
	 * Create url
	 */
	public function createUrl( $manager, $route, $params=[] )
	{
		//	parse routes
		switch( $route )
		{
			//	front-end routes
			case 'news/article':
				$path = [
					$this->urlPrefix,
					$params['article']->news_shortname,
				];
				return join( '/', $path );
				break;
		}
		return false;
	}

}

