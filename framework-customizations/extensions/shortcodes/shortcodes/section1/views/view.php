<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

	$page_section__title = '';
	if ( ! empty( $atts['page_section__title'] ) ) {
		$page_section__title = $atts['page_section__title'];
	}

	$page_section__background = ( isset( $atts['page_section__background'] ) && $atts['page_section__background'] == 1 ) ? 'mainpage_block__white' : '';

	$page_section__class = '';
	if ( ! empty( $atts['page_section__class'] ) ) {
		$page_section__class = $atts['page_section__class'];
	}
	
?>



<div class="mainpage_block <?php echo $page_section__background; ?>  <?php echo $page_section__class; ?>">
	<div class="center">
		<h2><?php echo $page_section__title; ?></h2>
					
		<?php echo do_shortcode( $content ); ?>
	</div>
</div>
