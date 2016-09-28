<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
} ?>

<div class="item__list">

	<?php foreach ( $atts['tabs'] as $tab ) : ?>
		<div class="item">
			<figure>
				<span>
					<img src="<?php echo $tab['tab_image']['url']; ?>" alt="">
				</span>							
			</figure>

			<div class="title">
				<?php echo $tab['tab_title']; ?>
			</div>
			<div class="descr">
				<?php echo do_shortcode( $tab['tab_content'] ); ?>
			</div>
		</div>
	<?php endforeach; ?>

</div>
