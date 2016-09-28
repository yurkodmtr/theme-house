<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
} ?>

<section class="mainheader__bottom">
	<div class="slideshow">

		<?php foreach ( $atts['tabs'] as $tab ) : ?>

			<div class="slide" style="background-image:url(<?php echo $tab['tab_image']['url']; ?>)">
				<div class="table">
					<div class="table-cell">
						<blockquote>
							<div class="title">
								<?php echo $tab['tab_title']; ?>
							</div>
							<div class="descr">
								<?php echo do_shortcode( $tab['tab_content'] ); ?>
						</blockquote>
					</div>
				</div>					
			</div>

		<?php endforeach; ?>

	</div>
</section>
