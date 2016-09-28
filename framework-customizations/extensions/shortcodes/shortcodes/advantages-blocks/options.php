<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'tabs' => array (
		'type'          => 'addable-popup',
		'label'         => __( 'Tabs', 'fw' ),
		'popup-title'   => __( 'Add/Edit Tabs', 'fw' ),
		'desc'          => __( 'Create your tabs', 'fw' ),
		'template'      => '{{=tab_title}}',
		'popup-options' => array(
			'tab_image'   => array(
			    'type'  => 'upload',
			    'label' => __('Image', '{domain}'),
			    'desc'  => __('Description', '{domain}'),
			    'images_only' => true,
			),
			'tab_title'   => array(
				'type'  => 'text',
				'label' => __('Title', 'fw')
			),
			'tab_content' => array(
				'type'  => 'textarea',
				'label' => __('Content', 'fw')
			)
		)
	)
);
