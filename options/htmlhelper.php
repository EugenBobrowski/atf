<?php

class AtfHtmlHelper {
	public static function textField ($args = array()) {
		$default = array(
			'value' => '',
			'class' => 'regular-text',
			'addClass' => '',
		);

		foreach ($default as $key => $value) {
			if (!isset($args[$key])) {
				$args[$key] = $value;
			}
		}
		$result = '<input type="text" id="'.$args['id'].'" name="'.$args['name'].'" value="'.$args['value'].'" class="'.$args['class'].$args['addClass'].'" />';
		if (isset($args['desc'])) {
			$result .= '<p class="description">'.$args['desc'].'</p>';
		}

		return $result;
	}
	public static function addMedia ($args = array()) {
		$default = array(
			'value' => '',
			'class' => 'regular-text',
			'addClass' => '',
		);

		foreach ($default as $key => $value) {
			if (!isset($args[$key])) {
				$args[$key] = $value;
			}
		}

		$result = '<div class="uploader">';
		$result .= '<input type="hidden" id="'.$args['id'].'" name="'.$args['name'].'" value="'.$args['value'].'" class="'.$args['class'].$args['addClass'].'" />';
		$result .= '<img class="atf-options-upload-screenshot" id="screenshot-'.$args['id'].'" src="'.$args['value'].'" />';
		if($args['value'] == '') {$remove = ' style="display:none;"'; $upload = ''; } else {$remove = ''; $upload = ' style="display:none;"'; }
		$result .= ' <a data-update="Select File" data-choose="Choose a File" href="javascript:void(0);"class="atf-options-upload button-secondary"' . $upload . ' rel-id="'.$args['id'].'">' . __('Upload', 'atf') . '</a>';
		$result .= ' <a href="javascript:void(0);" class="atf-options-upload-remove"' . $remove . ' rel-id="'.$args['id'].'">' . __('Remove Upload', 'atf') . '</a>';
		$result .= '</div>';


		if (isset($args['desc'])) {
			$result .= '<p class="description">'.$args['desc'].'</p>';
		}

		return $result;
	}
	public static function colorPicker ($args = array()) {
		$default = array(
			'value' => '',
			'class' => 'color-picker-hex',
			'addClass' => '',
		);

		foreach ($default as $key => $value) {
			if (!isset($args[$key])) {
				$args[$key] = $value;
			}
		}
		$result = '<div class="customize-control-content"><input type="text" id="'.$args['id'].'" name="'.$args['name'].'" value="'.$args['value'].'" class="'.$args['class'].$args['addClass'].'" /></div>';
		if (isset($args['desc'])) {
			$result .= '<p class="description">'.$args['desc'].'</p>';
		}

		return $result;
	}
	public static function textarea ($args  = array()) {
		$default = array(
			'value'     => '',
			'class'     => 'regular-text',
			'addClass'  => '',
			'rows'      => 10,
			'cols'      => 50,
		);
		foreach ($default as $key => $value) {
			if (!isset($args[$key])) {
				$args[$key] = $value;
			}
		}
		$result = '<textarea id="'.$args['id'].'" name="'.$args['name'].'" rows="'.$args['rows'].'" cols="'.$args['cols'].'" class="'.$args['class'].$args['addClass'].'" >'.$args['value'].'</textarea>';
		return $result;
	}
	public static function radioButtons ($args  = array()) {

		$default = array(
			'value' => '',
			'class' => '',
			'addClass' => '',
		);

		foreach ($default as $key => $value) {
			if (!isset($args[$key])) {
				$args[$key] = $value;
			}
		}

		$result = '';
		$result .= '<fieldset class="'.$args['class'].$args['addClass'].'" >';
		foreach ($args['options'] as $value=>$label) {
			$checked = '';
			if ($value == $args['value']) {
				$checked = "checked";
			}


			$result .= '<label class="'.$checked.'" >';
			$result .= '<input type="radio" id="'.$args['id'].'" name="'.$args['name'].'" value="'.$value.'" '.checked($args['value'], $value, false).' />';
			$result .= $label;
			$result .= '</label>';
		}
		$result .= '</fieldset>';

		return $result;
	}
	public static function onOffBox ($args  = array()) {



		$on = '';
		if ($args['value'] == 'true'){
			$on = 'on';
		}
		$result = '<a class="on-off-box '.$on.'" href="#">';
		$result .= '<span class="tumbler"></span>';
		$result .= '<span class="text on">on</span>';
		$result .= '<span class="text off">off</span>';
		$result .= '<input type="radio" class="on" name="'.$args['name'].'" value="1"  '.checked($args['value'], '1', false).' >';
		$result .= '<input type="radio" class="off" name="'.$args['name'].'" value="0" '.checked($args['value'], '0', false).' >';
		$result .= '<span class="text off">off</span>';
		$result .= '</a>';

		if (isset($args['desc'])) {
			$result .= '<p class="description">'.$args['desc'].'</p>';
		}

		return $result;
	}
	public static function select ($args) {
		$result = '<select name="'.$args['name'].'">';

		foreach ($args['values'] as $value=>$text) {
			$result .= '<option value="'.$value.'" '.selected($value, $args['value'], false).' > '.$text.' </option>';
		}

		$result .= '</select>';

		return $result;
	}
	public static function selectFromTaxonomy ($args) {


		$cats = get_terms($args['taxonomy'],
			array(
				'hide_empty' => $args['hide_empty'],
			));

		$result = '<select name="'.$args['name'].'">';

		foreach ($cats as $cat) {
			$result .= '<option value="'.$cat->term_id.'" '.selected($cat->term_id, $args['value'], false).' > '.$cat->name.' </option>';
		}

		$result .= '</select>';

		return $result;
	}
	public static function info ($args  = array()) {
		echo 'info';
	}

}