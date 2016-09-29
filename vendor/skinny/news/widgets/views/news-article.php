<?php

use \yii\helpers\Url;

?>

<div class="article news-article">
	<div class="article-header">
		<?php if( $preview ) { ?>
			<h2><a href="<?= Url::to([ '/news/article', 'article' => $article ]); ?>"><?= $article->news_name; ?></a></h2>
		<?php } else { ?>
			<h1><?= $article->news_name; ?></h1>
		<?php } ?>
		<div class="article-date"><?= Yii::$app->formatter->asDate( $article->item_date ); ?></div>
	</div>
	<div class="article-content">
		<?= $preview ? $article->news_announce : $article->news_text; ?>
	</div>
</div>
