<?php
/**
 * User: Eugen Bobrowski (eugen)
 * Date: 9/17/13
 * Time: 1:45 PM
 * To change this template use File | Settings | File Templates.
 */
define('ATF_VERSION', '1.0');
define('ATF_PATH', get_template_directory() . '/atf/');

function atf_include_modals()
{
    if (file_exists(__DIR__ . '/_modal_shortcode/modal-shortcode.php')) {
        include_once __DIR__ . '/_modal_shortcode/modal-shortcode.php';
        Atf_Modals_Shortcode::get_instance();
    } else {
        wp_die('Include plese <em>atf-modals</em> in Atf');
    }

}

function atf_include_bootstrap_navwalker()
{
    if (file_exists(__DIR__ . '/wp-bootstrap-navwalker/wp_bootstrap_navwalker.php')) {
        include_once __DIR__ . '/wp-bootstrap-navwalker/wp_bootstrap_navwalker.php';
    } else {
        wp_die('Include please <em>wp_bootstrap_navwalker</em> in Atf');
    }
}

function atf_include_pagination()
{
    if (file_exists(__DIR__ . '/atf-pagination/pagination.php')) {
        include_once __DIR__ . '/atf-pagination/pagination.php';
    } else {
        wp_die('Include please <em>atf-pagination</em> in Atf');
    }
}

function atf_include_breadcrumbs()
{
    if (file_exists(__DIR__ . '/wp-breadcrumbs/wp-breadcrumbs.php')) {
        include_once __DIR__ . '/wp-breadcrumbs/wp-breadcrumbs.php';
    } else {
        wp_die('Include please <em>atf-breadcrumbs</em> in Atf');
    }
}

function atf_include_pagination()
{
    if (file_exists(__DIR__ . '/atf-pagination/pagination.php')) {
        include_once __DIR__ . '/atf-pagination/pagination.php';
    } else {
        wp_die('Include please <em>atf-pagination</em> in Atf');
    }
}