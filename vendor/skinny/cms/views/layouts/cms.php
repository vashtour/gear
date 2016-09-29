<?php skinny\cms\assets\CmsAssets::register( $this ); ?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Cube - Bootstrap Admin Template</title>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
	<?php $this->head(); ?>
</head>
<body class="theme-blue-gradient fixed-header fixed-leftmenu pace-done">

<?php $this->beginBody(); ?>

<div id="theme-wrapper">

<?php require __DIR__ . '/header.php'; ?>

<div id="page-wrapper" class="container">
	<div class="row">

		<div id="nav-col">
			<?php include __DIR__ . '/nav-bar.php'; ?>
		</div>

		<div id="content-wrapper">
			<?= $content; ?>
		</div>

	</div>
</div>

<?php $this->endBody(); ?>

</body>
</html>
<?php $this->endPage(); ?>