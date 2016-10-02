<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
} ?>


<div class="documents">

	<div class="item__list">

		<?php foreach ( $atts['tabs'] as $tab ) : ?>
			<a href="<?php echo $tab['tab_title']; ?>" class="item">
				<figure style="<?php echo $tab['tab_image']['url']; ?>">
					<span></span>
				</figure>
				<article>
					<div>
						<?php echo $tab['tab_content']; ?>
					</div>
				</article>
			</a>						
		<?php endforeach; ?>
	</div>					

</div>
