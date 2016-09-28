<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'is_homepage' => array(
		'label'        => __('Is home page?', 'fw'),
		'type'         => 'switch',
	),
	'white_bg' => array(
		'label'        => __('White background', 'fw'),
		'type'         => 'switch',
	),
	'block_class' => array(
		'label'        => __('Add block class', 'fw'),
		'type'         => 'text',
		'help'  => __('Available classes:<br/> advantages, about', 'fw'),
	),
	'is_fullwidth' => array(
		'label'        => __('Full Width', 'fw'),
		'type'         => 'switch',
	),
	'background_color' => array(
		'label' => __('Background Color', 'fw'),
		'desc'  => __('Please select the background color', 'fw'),
		'type'  => 'color-picker',
	),
	'background_image' => array(
		'label'   => __('Background Image', 'fw'),
		'desc'    => __('Please select the background image', 'fw'),
		'type'    => 'background-image',
		'choices' => array(//	in future may will set predefined images
		)
	),
	'video' => array(
		'label' => __('Background Video', 'fw'),
		'desc'  => __('Insert Video URL to embed this video', 'fw'),
		'type'  => 'text',
	)
);
