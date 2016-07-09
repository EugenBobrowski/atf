<?php
/**
 * User: Eugen Bobrowski (eugen)
 * Date: 9/17/13
 * Time: 1:45 PM
 * To change this template use File | Settings | File Templates.
 */
//define ('ATF_VERSION', '1.0');
//define ('ATF_PATH', get_template_directory() . '/atf/' );
//
//
//function atf_admin_notice($message) {
//	echo $message;
//}
//
//include 'components/atf-less.php';
//include 'components/atf-tgmpa.php';
//
///**
// * ...
// */
//
///**
// * Customize Woocommerce and integrate.
// *
// * @since Twenty Fifteen 1.0
// */
//
//
//include 'components/shortcode-gallery-views.php';
//include 'components/thumb-getting.php';
//
//
//if ( ! function_exists( 'pagination' ) ) :
//	include 'components/bootstrap_pagination.php';
//endif;
//
//include_once 'components/login-page.php';
//
//if (is_admin()) {
//	include_once 'components/link-plugins.php';
//}



function atf_include_modals() {
	if (file_exists(__DIR__.'/_modal_shortcode/modal-shortcode.php')) {
		include_once __DIR__.'/_modal_shortcode/modal-shortcode.php';
		Atf_Modals_Shortcode::get_instance();
	} else {
		wp_die('Include plese <em>atf-modals</em> in Atf');
	}

}

function atf_include_bootstrap_navwalker(){
	if (file_exists(__DIR__.'/wp-bootstrap-navwalker/wp_bootstrap_navwalker.php')) {
		include_once __DIR__.'/wp-bootstrap-navwalker/wp_bootstrap_navwalker.php';
	} else {
		wp_die('Include plese <em>wp_bootstrap_navwalker</em> in Atf');
	}
}