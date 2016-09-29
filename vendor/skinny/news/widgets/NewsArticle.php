<?php

//	set namespace
namespace skinny\news\widgets;

//	resolve dependecies
use \Yii;

/**
 * NewsArticle widget
 */
class NewsArticle extends CommonWidget
{

	/**
	 * Is preview
	 */
	public $preview = false;

	/**
	 * Article
	 */
	public $article = null;

	/**
	 * Run widget
	 */
	public function run()
	{
		//	set template data
		$this->data['preview'] = $this->preview;
		$this->data['article'] = $this->article;

		//	render widget
		return $this->render( 'news-article', $this->data );
	}

}
