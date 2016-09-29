
<?php if( $widgetContent ) { ?>
	<div class="widget sbar-widget<?= $widgetClass ? ' ' . $widgetClass : ''; ?>">
		<?php if( $headerTitle ) { ?>
			<div class="widget-title">
				<?php if( $headerIcon ) { ?>
					<div class="title-icon">
						<span class="icon <?= $headerIcon; ?>"></span>
					</div>
				<?php } ?>
				<div class="title-text"><?= $headerTitle; ?></div>
			</div>
		<?php } ?>
		<div class="widget-content">
			<?= $widgetContent; ?>
		</div>
	</div>
<?php } ?>
