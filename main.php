<?php
/**
 * User: Eugen Bobrowski (eugen)
 * Date: 9/17/13
 * Time: 1:45 PM
 * To change this template use File | Settings | File Templates.
 */






function atf_admin_notice($message) {
	echo $message;
}

include 'components/atf-less.php';

include 'options/options.php';





// Register Custom Navigation Walker

register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );

/**
 * Adds custom post types
 */

include 'components/atf-portfolio-posttype.php';


/**
 * ...
 */

//include 'components/user-frontend/user-frontend.php';
include 'components/jcarousel-gallery.php';
include 'components/thumb-getting.php';
include 'components/wp_bootstrap_navwalker.php';


/**
 * Adds support for a custom header image.
 */
require( get_template_directory() . '/atf/components/custom-header.php' );


if ( ! function_exists( 'pagination' ) ) :
	include 'components/bootstrap_pagination.php';
endif;


include 'components/bootstrap_comments.php';

//include 'inc/background.php';


if ( ! function_exists( 'pagination' ) ) :
	include 'inc/bootstrap_pagination.php';
endif;

function custom_login_logo() {

	$headerOpt = getAtfOptions('general');

	if( $headerOpt['headerImg'] !=''){

		$custom_logo = $headerOpt['headerImg'];

		echo '<style type="text/css">
	    body.login{background:#fff;}
	    h1 a { background-image:url('. $custom_logo .') !important; height: auto !important; min-height: 70px !important; width: 160px !important; background-size: contain !important;} </style>';
	}


}

add_action('login_head', 'custom_login_logo');