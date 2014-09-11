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
					'title' => __('Header Logotype image', 'atf'),
					'default' => '',
					'desc' => 'The optimal size for an image is 310x97'
				),
			)
		),
		'homePage' => array(
			'name' => 'Home Page Settings',
			'desc' => __('Here you can customize home page'),

			'items' => array(
				'hide_empty' => array(
					'type' => 'onOffBox',
					'title' => __('Hide empty category', 'atf'),
					'default' => 'true',
				),
				'itemsInLine' => array(
					'type' => 'textField',
					'title' => __('Items in line', 'atf'),
					'default' => '3', // AtfOptions_homePage[items][thumb_width][default]
				),
				'itemsNum' => array(
					'type' => 'textField',
					'title' => __('How many items must be on home page', 'atf'),
					'default' => '6', // AtfOptions_homePage[items][thumb_width][default]
				),
				array(
					'type' => 'title',
					'title' => 'Thumbnail Options'
				),
				'thumb_width' => array(
					'type' => 'textField',
					'title' => __('Thumbnail width on homepage', 'atf'),
					'desc' => __('You may add any other social share buttons to this field.', 'atf'),
					'default' => '500', // AtfOptions_homePage[items][thumb_width][default]
				),
				'thumb_height' => array(
					'type' => 'textField',
					'title' => __('Thumbnail height on homepage', 'atf'),
					'desc' => __('You may add any other social share buttons to this field.', 'atf'),
					'default' => '360',
				),
				'textareafield' => array(
					'type' => 'textarea',
					'title' => __('Text Area', 'atf'),
					'desc' => __('You may add any other social share buttons to this field.', 'atf'),
				),

			)
		),
		'portfolioSidebar' => array(
			'name' => 'Portfolio Sidebar',
			'desc' => 'Portfolio Sidebar Settings',
			'items' => array(
				'items_pro_year' => array(
					'type' => 'textField',
					'title' => __('Portfolios pro year', 'atf'),
					'desc' => __('How many items will be showed in one year section', 'atf'),
					'default' => '2',
				),
//				'items_pro_single_year' => array(
//					'type' => 'textField',
//					'title' => __('Portfolios pro single year', 'atf'),
//					'desc' => __('How many items will be showed in single year section', 'atf'),
//					'default' => '6',
//				),

				array(
					'type' => 'title',
					'title' => 'Carousel settings'
				),
				'interval' => array(
					'type' => 'textField',
					'title' => __('Carousel interval', 'atf'),
					'desc' => __('In seconds', 'atf'),
					'default' => '10', // AtfOptions_homePage[items][thumb_width][default]
				),
				'img_width' => array(
					'type' => 'textField',
					'title' => __('Picture width in the gallery', 'atf'),
					'desc' => __('You may add any other social share buttons to this field.', 'atf'),
					'default' => '500', // AtfOptions_homePage[items][thumb_width][default]
				),
				'img_height' => array(
					'type' => 'textField',
					'title' => __('Picture height in the gallery', 'atf'),
					'desc' => __('You may add any other social share buttons to this field.', 'atf'),
					'default' => '360',
				),
				'thumb_width' => array(
					'type' => 'textField',
					'title' => __('Thumbnail width in the gallery', 'atf'),
					'desc' => __('You may add any other social share buttons to this field.', 'atf'),
					'default' => '64', // AtfOptions_homePage[items][thumb_width][default]
				),
				'thumb_height' => array(
					'type' => 'textField',
					'title' => __('Thumbnail height in the gallery', 'atf'),
					'desc' => __('You may add any other social share buttons to this field.', 'atf'),
					'default' => '44',
				),
			),
		),
		'product' => array(
			'name' => 'Product Settings',
			'desc' => __('Product settings'),

			'items' => array(
				'crop_category_img' => array(
					'type' => 'onOffBox',
					'title' => __('Crop category images', 'atf'),
					'default' => false,
				),
				'img_width' => array(
					'type' => 'textField',
					'title' => __('Picture width in the gallery', 'atf'),
					'desc' => __('You may add any other social share buttons to this field.', 'atf'),
					'default' => '1200', // AtfOptions_homePage[items][thumb_width][default]
				),
				'img_height' => array(
					'type' => 'textField',
					'title' => __('Picture height in the gallery', 'atf'),
					'desc' => __('You may add any other social share buttons to this field.', 'atf'),
					'default' => '600',
				),
			)
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