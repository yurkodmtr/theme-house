<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
} ?>

<div class="item__list">

	<?php foreach ( $atts['tabs'] as $tab ) : ?>
		<div class="item">
			<figure>
				<img src="<?php echo $tab['tab_image']['url']; ?>" alt="">
			</figure>
			<div class="descr">
				<span><?php echo $tab['tab_title']; ?></span>
				<?php echo do_shortcode( $tab['tab_content'] ); ?>
			</div>
		</div>
	<?php endforeach; ?> 

</div>


	

