<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$classname = ( isset( $atts['classname'] ) && $atts['classname'] ) ? $atts['classname'] : '';

?>
<div class="<?php echo $classname; ?>">
	<?php echo do_shortcode( $atts['text'] ); ?>
</div>