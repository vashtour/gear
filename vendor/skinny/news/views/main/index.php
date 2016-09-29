<?php \skinny\news\assets\Articles::register( $this ); ?>

<h1>Новости от команды ТМ Арлекин</h1>

<div class="articles-list news-articles-list">
	<?php foreach( $articles as $article ) { ?>
		<?= \skinny\news\widgets\NewsArticle::widget([
			'article'	=> $article,
			'preview'	=> true,
		]); ?>
	<?php } ?>
</div>
