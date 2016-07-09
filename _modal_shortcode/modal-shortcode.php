<?php

/**
 * Created by PhpStorm.
 * User: eugen
 * Date: 02.07.16
 * Time: 14:37
 */
class Atf_Modals_Shortcode
{
	public $modals_html;
	protected static $instance;

	private function __construct()
	{
		add_shortcode('modal', array($this, 'modal_shortcode'));

		$this->modals_html = array();

		add_action('wp_footer', array($this, 'print_modals'));
	}

	public function modal_shortcode($attr, $content = null)
	{
		$attr = wp_parse_args($attr, apply_filters('atf_modal_defaults', array(
			'link-class' => 'btn btn-primary',
			'link-text' => 'Lounch modal',
			'close-text' => 'Close',
		)));

		$output = '';

		if (!isset($attr['id'])) {
			$attr['id'] = uniqid();
			$link = '<a href="#' . $attr['id'] . '" data-toggle="modal" >' . ((!isset($attr['title'])) ? ('Launch Modal ' . $attr['id']) : $attr['title']) . '</a>';
		}

		$link = '<a href="#' . $attr['id'] . '" class="' . $attr['link-class'] . '" data-toggle="modal" >' . $attr['link-text'] . '</a>';
		$output .= $link;


		$modal = '<!-- Modal ' . $attr['id'] . '-->';
		$modal .= '<div class="modal fade" id="' . $attr['id'] . '" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">'.
			'<div class="modal-dialog" role="document">'.
			'<div class="modal-content">';
		if (isset($attr['title']) && !in_array('no_title', $attr)) {
			$modal .= '<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">' . $attr['title'] . '</h4>
      </div>';
		}
		

		$modal .= '<div class="modal-body">'.apply_filters('the_content', $content).'</div>';

		if (isset($attr['close-text']) && !in_array('no_footer', $attr)) {
			$modal .= '<div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">'.$attr['close-text'].'</button></div>';
		}


		$modal .= '</div>
  </div>
</div>';

		$this->modals_html[$attr['id']] = $modal;


		return $output;

	}

	//add scripts for modals

	public function print_modals()
	{
		echo implode('', $this->modals_html);
	}

	// foter of modal shortcode

	//

	public static function get_instance()
	{
		if (null === self::$instance) {
			self::$instance = new self();
		}
		return self::$instance;
	}
}
