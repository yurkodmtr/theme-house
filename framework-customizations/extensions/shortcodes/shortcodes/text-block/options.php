<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'classname' => array (
		'type'	=> 'text',
		'label' => __('Add class name', 'fw' ),
		'help'  => __('Available classes:<br/> text_padding_20', 'fw'),
	),
	'text' => array(
		'type'   => 'wp-editor',
		'label'  => __( 'Content', 'fw' ),
		'desc'   => __( 'Enter some content for this texblock', 'fw' )
	)	
);
