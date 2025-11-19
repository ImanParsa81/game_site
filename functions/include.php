<?php

/*******************************************************************************
 * style and js
 ********************************************************************************/

$test_mode = false;

function b2wall_css()
{
    $version = "1.3";

    wp_enqueue_style("classto_css_style", get_stylesheet_uri(), array(), $version);
    wp_enqueue_style("classto_css_swiper", URL . "assets/css/general/swiper-bundle.min.css", array(), $version, false);
    wp_enqueue_style('classto_css_bootstrap-grid-shserpo', URL . '/assets/css/general/bootstrap-grid.min.css', false);
    wp_enqueue_style('classto_login', URL . '/tools/login/login.css', false);

    if (home_url()) {
        wp_enqueue_style("classto_css_home_page", URL . "assets/css/home.css", array(), $version, false);
    }

    $template = "";
    if (is_page()) {
        global $post;
        $template = get_post_meta($post->ID, '_wp_page_template', true);
    }

    if (is_page() && ( $template == 'user_panel.php')  ) {
//        wp_enqueue_style("user_panel_css", URL . "assets/css/panel/user_panel.css", array(), $version, false);
    }


}

function b2wall_js()
{
    $version = "1.3";

    wp_enqueue_script('jquery');
    wp_enqueue_script("classto_js_toast", URL . "tools/toast/toast.js", array(), $version, true);
    wp_enqueue_script("classto_js_swiper-bundle", URL . "assets/js/general/swiper-bundle.min.js", array(), $version, false);
    wp_enqueue_script("classto_js_bootstrap_bundle_min", URL . "assets/js/general/bootstrap.bundle.min.js", array(), $version, true);
    wp_enqueue_script("classto_js_mean", URL . "assets/js/mean.js", array(), $version, true);
    wp_localize_script('classto_js_mean', 'ajax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('logout_nonce'),
    ));

    if (is_front_page()) {
        wp_enqueue_script("classto_home_js", URL . "assets/js/home.js", array(), $version, true);
    }

    $template = "";
    if (is_page()) {
        global $post;
        $template = get_post_meta($post->ID, '_wp_page_template', true);
    }



}

function load_admin_scripts()
{
    $version_admin = "1.2";

    wp_enqueue_style("classto_css_admin_style", URL . "assets/css/admin_style.css", array(), $version_admin, false);
    wp_enqueue_style("nirweb_b2wall_css_fontawesome", URL . "assets/css/all.min.css", array(), $version_admin, false);
    wp_enqueue_script("nirweb_b2wall_js_fontawesome", URL . "assets/js/all.min.js", array(), $version_admin, true);


    // contact us
//    wp_enqueue_script("roboyad_js_contact_us_", URL . "assets/js/contact_us/contact_us.js", array(), $version_admin, true);
//    wp_localize_script('roboyad_js_contact_us_', 'roboyad', array(
//        'ajax_url' => admin_url('admin-ajax.php'),
//    ));

}

add_action('wp_enqueue_scripts', 'b2wall_css');
add_action('wp_enqueue_scripts', 'b2wall_js');
add_action('admin_enqueue_scripts', 'load_admin_scripts');








