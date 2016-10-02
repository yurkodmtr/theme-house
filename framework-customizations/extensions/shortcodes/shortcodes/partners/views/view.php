<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
} ?>


<div class="partners">
	<div class="item__list">
		<?php foreach ( $atts['tabs'] as $tab ) : ?>
			<a href="<?php echo $tab['tab_title']; ?>" class="item">
				<figure>
					<img src="<?php echo $tab['tab_image']['url']; ?>" alt="">
				</figure>
			</a>						
		<?php endforeach; ?>
	</div>

</div>
