<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'page_section__title' => array (
		'label' => __('Block Title', 'fw'),
		'type'  => 'text',
	),
	'page_section__background' => array (
		'type'  => 'checkbox',
	    'value' => false,
	    'label' => __('White background', 'fw'),
	    'text'  => __('Enable', '{domain}'),
	),
	'page_section__class' => array (
		'type'  => 'text',
	    'label' => __('Add class name', 'fw'),
	)
);
