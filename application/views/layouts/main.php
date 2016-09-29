<?php require __DIR__ . '/head.php'; ?>
<?php

use widgets\SidebarWidget;
use skinny\news\widgets\SidebarNews;
use skinny\catalog\widgets\SidebarCategories;

?>

<section>
	<div class="wrap">

		<div class="main-section">
			<div class="main-content">

				<?= $content; ?>

			</div>
		</div>

		<div class="sidebar lsbar">
			<div class="lsbar-content">
				Sidebar
			</div>
		</div>

	</div>
</section>

<?php require __DIR__ . '/foot.php'; ?>
