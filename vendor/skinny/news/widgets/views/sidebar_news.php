<?php skinny\news\assets\SidebarNewsAssets::register( $this ); ?>
<?php

//	resolve dependecies
use \yii\helpers\Url;

?>

<div class="news-list">
	<?php foreach( $news as $article ) { ?>
		<div class="news-article">
			<div class="news-date"><?= date( 'd.m', strtotime( $article->item_date ) ); ?></div>
			<div class="news-title">
				<a href="<?= Url::to([ '/news/article', 'article' => $article ]); ?>"><?= $article->news_name; ?></a>
			</div>
			<div class="news-descr"><?= $article->news_announce; ?></div>
		</div>
	<?php } ?>
</div>
