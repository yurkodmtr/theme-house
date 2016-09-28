<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$bg_color = '';
if ( ! empty( $atts['background_color'] ) ) {
	$bg_color = 'background-color:' . $atts['background_color'] . ';';
}

$bg_image = '';
if ( ! empty( $atts['background_image'] ) && ! empty( $atts['background_image']['data']['icon'] ) ) {
	$bg_image = 'background-image:url(' . $atts['background_image']['data']['icon'] . ');';
}

$bg_video_data_attr    = '';
$section_extra_classes = '';
if ( ! empty( $atts['video'] ) ) {
	$filetype           = wp_check_filetype( $atts['video'] );
	$filetypes          = array( 'mp4' => 'mp4', 'ogv' => 'ogg', 'webm' => 'webm', 'jpg' => 'poster' );
	$filetype           = array_key_exists( (string) $filetype['ext'], $filetypes ) ? $filetypes[ $filetype['ext'] ] : 'video';
	$data_name_attr = version_compare( fw_ext('shortcodes')->manifest->get_version(), '1.3.9', '>=' ) ? 'data-background-options' : 'data-wallpaper-options';
	$bg_video_data_attr = $data_name_attr.'="' . fw_htmlspecialchars( json_encode( array( 'source' => array( $filetype => $atts['video'] ) ) ) ) . '"';
	$section_extra_classes .= ' background-video';
}

$section_style   = ( $bg_color || $bg_image ) ? 'style="' . esc_attr($bg_color . $bg_image) . '"' : '';
$container_class = ( isset( $atts['is_fullwidth'] ) && $atts['is_fullwidth'] ) ? 'fw-container-fluid' : 'fw-container';

$block_class = ( isset( $atts['block_class'] ) && $atts['block_class'] ) ? $atts['block_class'] : '';
$white_bg = ( isset( $atts['white_bg'] ) && $atts['white_bg'] ) ? 'mainpage_block__white' : '';
$is_homepage = ( isset( $atts['is_homepage'] ) && $atts['is_homepage'] ) ? 'true' : 'false';
?>

<?php 
	if ( $is_homepage == 'false' ) {
?>

	<section class="fw-main-row <?php echo esc_attr($section_extra_classes) ?>" <?php echo $section_style; ?> <?php echo $bg_video_data_attr; ?>>
		<div class="<?php echo esc_attr($container_class); ?>">
			<?php echo do_shortcode( $content ); ?>
		</div>
	</section>

<?php } else { ?>

	<div class="mainpage_block <?php echo $block_class; ?> <?php echo $white_bg; ?>">
		<div class="center">
			<?php echo do_shortcode( $content ); ?>
		</div>
	</div>	

<?php } ?>

