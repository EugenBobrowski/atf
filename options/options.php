<?php
define( 'AFT_OPTIONS_POST_INDEX', 'atfOptions');
define( 'AFT_OPTIONS_PREFIX', 'atfOptions_');
// here will be the geting options class
function getOptionsArray() {
	return array (
		'general' => array(
			'name' => 'General Settings',
			'desc' => __('General settings'),

			'items' => array(
				'headerImg' => array(
					'type' => 'addMedia',
					'title' => __('Header Logotype image', 'dfd'),
					'default' => '',
					'desc' => 'The optimal size for an image is 310x97'
				),
				'headerColor' => array(
					'type' => 'colorPicker',
					'title' => __('Header Logotype background color', 'dfd'),
					'default' => '',
				),
			)
		),
		'homePage' => array(
			'name' => 'Home Page Settings',
			'desc' => __('Here you can customize home page'),

			'items' => array(
				array(
					'type' => 'title',
					'title' => 'Layout settings'
				),
				'homePageLayout' => array(
					'type' => 'radioButtons',
					'horizontal' => true,
					'title' => __('Select the leyout of home page', 'dfd'),
					'desc' => __('You may add any other social share buttons to this field.', 'dfd'),
					'options' => array(
						'no_sidebars' => '<img src="'.get_template_directory_uri().'/atf/options/img/1col.png"> <span>No sidebars </span>',
						'sidebar_on_left' => '<img src="'.get_template_directory_uri().'/atf/options/img/2cl.png"> <span>Sidebar on left</span>',
						'sidebar_on_right' => '<img src="'.get_template_directory_uri().'/atf/options/img/2cr.png"> <span>Sidebar on right</span>',
						'2_left' => '<img src="'.get_template_directory_uri().'/atf/options/img/3cl.png"> <span>2 left sidebars</span>',
						'either' => '<img src="'.get_template_directory_uri().'/atf/options/img/3cc.png"> <span>Sidebar on either side</span>',
						'2_right' => '<img src="'.get_template_directory_uri().'/atf/options/img/3cr.png"> <span>2 right sidebars</span>',
					),
					'class' => 'radio-image',
					'default' => '2_right', // AtfOptions_homePage[items][thumb_width][default]
				),
				array(
					'type' => 'title',
					'title' => 'Thumbnail Options'
				),
				'thumb_width' => array(
					'type' => 'textField',
					'title' => __('Thumbnail width on homepage', 'dfd'),
					'desc' => __('You may add any other social share buttons to this field.', 'dfd'),
					'default' => '900', // AtfOptions_homePage[items][thumb_width][default]
				),
				'thumb_height' => array(
					'type' => 'textField',
					'title' => __('Thumbnail height on homepage', 'dfd'),
					'desc' => __('You may add any other social share buttons to this field.', 'dfd'),
					'default' => '400',
				),
				'textareafield' => array(
					'type' => 'textarea',
					'title' => __('Text Area', 'dfd'),
					'desc' => __('You may add any other social share buttons to this field.', 'dfd'),
				),

			)
		),
		'archivePageOpts' => array(
			'name' => 'Archive Options',
			'desc' => 'The archive settings',
			'items' => array(
				array(
					'type' => 'title',
					'title' => 'Layout settings'
				),
				'archiveLayout' => array(
					'type' => 'radioButtons',
					'title' => __('Select the leyout of home page', 'dfd'),
					'desc' => __('You may add any other social share buttons to this field.', 'dfd'),
					'options' => array(
						'no_sidebars' => '<img src="'.get_template_directory_uri().'/atf/options/img/1col.png"> <span>No sidebars </span>',
						'sidebar_on_left' => '<img src="'.get_template_directory_uri().'/atf/options/img/2cl.png"> <span>Sidebar on left</span>',
						'sidebar_on_right' => '<img src="'.get_template_directory_uri().'/atf/options/img/2cr.png"> <span>Sidebar on right</span>',
						'2_left' => '<img src="'.get_template_directory_uri().'/atf/options/img/3cl.png"> <span>2 left sidebars</span>',
						'either' => '<img src="'.get_template_directory_uri().'/atf/options/img/3cc.png"> <span>Sidebar on either side</span>',
						'2_right' => '<img src="'.get_template_directory_uri().'/atf/options/img/3cr.png"> <span>2 right sidebars</span>',
					),
					'class' => 'radio-image',
					'default' => '2_right', // AtfOptions_homePage[items][thumb_width][default]
				),
			),
		),
		'404PageOpts' => array(
			'name' => '404 Options',
			'desc' => 'Set as would show your 404 page',
			'incFile' => '', // The file that will be included on this section
			'items' => array(
				array(
					'type' => 'title',
					'title' => 'Layout settings'
				),
				'404Layout' => array(
					'type' => 'radioButtons',
					'title' => __('Select the leyout of home page', 'dfd'),
					'desc' => __('You may add any other social share buttons to this field.', 'dfd'),
					'options' => array(
						'no_sidebars' => '<img src="'.get_template_directory_uri().'/atf/options/img/1col.png"> <span>No sidebars </span>',
						'sidebar_on_left' => '<img src="'.get_template_directory_uri().'/atf/options/img/2cl.png"> <span>Sidebar on left</span>',
						'sidebar_on_right' => '<img src="'.get_template_directory_uri().'/atf/options/img/2cr.png"> <span>Sidebar on right</span>',
						'2_left' => '<img src="'.get_template_directory_uri().'/atf/options/img/3cl.png"> <span>2 left sidebars</span>',
						'either' => '<img src="'.get_template_directory_uri().'/atf/options/img/3cc.png"> <span>Sidebar on either side</span>',
						'2_right' => '<img src="'.get_template_directory_uri().'/atf/options/img/3cr.png"> <span>2 right sidebars</span>',
					),
					'class' => 'radio-image',
					'default' => 'no_sidebars', // AtfOptions_homePage[items][thumb_width][default]
				),
			),
		),
		'social' => array(
			'name' => 'Social',
			'desc' => 'Description',
			'content' => 'oiuOptional: Some text that will be show on the options section',
			'incFile' => '', // The file that will be included on this section
		),
		'appearence' => array(
			'name' => 'Appearence',
			'desc' => 'Description',
			'content' => ';lkjOptional: Some text that will be show on the options section',
			'incFile' => '', // The file that will be included on this section
		),
		'design' => array(
			'name' => 'Design',
			'desc' => 'Description',
			'content' => 'Optional: Some text that will be show on the options section',
			'incFile' => '', // The file that will be included on this section
		),
		'content' => array(
			'name' => 'Content',
			'desc' => 'Description',
			'content' => 'Optional: Some text that will be show on the options section',
			'incFile' => '', // The file that will be included on this section
		),
		'examples' => array(
			'name' => 'Examples',
			'desc' => 'The examples',
			'items' => array(
				array(
					'type' => 'title',
					'title' => 'The title H3'
				),
				'radioButtons' => array(
					'type' => 'radioButtons',
					'title' => __('\'type\' => \'radioButtons\'', 'dfd'),
					'desc' => __('You may add any other social share buttons to this field.', 'dfd'),
					'options' => array(
						'no_sidebars' => '<img src="'.get_template_directory_uri().'/atf/options/img/1col.png"> <span>No sidebars </span>',
						'sidebar_on_left' => '<img src="'.get_template_directory_uri().'/atf/options/img/2cl.png"> <span>Sidebar on left</span>',
						'sidebar_on_right' => '<img src="'.get_template_directory_uri().'/atf/options/img/2cr.png"> <span>Sidebar on right</span>',
						'2_left' => '<img src="'.get_template_directory_uri().'/atf/options/img/3cl.png"> <span>2 left sidebars</span>',
						'either' => '<img src="'.get_template_directory_uri().'/atf/options/img/3cc.png"> <span>Sidebar on either side</span>',
						'2_right' => '<img src="'.get_template_directory_uri().'/atf/options/img/3cr.png"> <span>2 right sidebars</span>',
					),
					'class' => 'radio-image',
					'default' => '2_right', // AtfOptions_homePage[items][thumb_width][default]
				),
				'onOffBox' => array(
					'type' => 'onOffBox',
					'title' => __('Enable Tweets', 'dfd'),
					'default' => 'true',
				),
			),
		),
	);
}

class AtfOptions {
	public $defaults;
	function __construct($optionsArray){
		$this->defaults = $optionsArray;
	}
	function get($sectionName) {
		var_dump($this->defaults[$sectionName]['items']);
		$options = get_option(AFT_OPTIONS_PREFIX.$sectionName);
		foreach ($this->defaults[$sectionName]['items'] as $itemId => $item ) {
			if(!isset($options[$itemId])) {
				$options[$itemId] = $item['default'];
			}
		}
	}
}
function getAtfOptions($sectionName) {
	$optionsArray = getOptionsArray();
	$options = get_option(AFT_OPTIONS_PREFIX.$sectionName);
	if (!is_array($options)) $options = array();
	foreach ($optionsArray[$sectionName]['items'] as $itemId => $item ) {
		if(!isset($options[$itemId]) && isset($item['default'])) {
			$options[$itemId] = $item['default'];
		}
	}
	return $options;
}

if ( is_admin() && ( ! defined( 'DOING_AJAX' ) || ! DOING_AJAX ) ) {
	require_once( plugin_dir_path( __FILE__ ) . 'admin/options_admin.php' );
	AtfOptionsAdmin::get_instance(getOptionsArray());
}


?>