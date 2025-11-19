<?php

define('PATH', get_template_directory() . '/');
define('URL', get_template_directory_uri() . '/');
define("op_roboyad", get_option('seting_website'));
define("image_url", URL."/assets/image/");

/***************************************************************************
 *#----- General -----
 ***************************************************************************/

add_action('after_setup_theme', function () {

    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('widgets');
    add_theme_support('widgets-block-editor');
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');

    // ثبت منو
    register_nav_menus(array(
        'menuHeader' => __('menuHeader'),
    ));

    register_nav_menus(array(
        'hamburger_menu' => __('hamburger_menu'),
    ));

    register_nav_menus(array(
        'drop_down' => __('drop_down'),
    ));

    register_nav_menus(array(
        'footer_1' => __('footer_1'),
    ));

    register_nav_menus(array(
        'footer_2' => __('footer_2'),
    ));

});


/*******************************************************************************
 *# require
 ********************************************************************************/

require_once PATH . 'functions/functions.php';
require_once PATH . 'functions/ajax.php';
require_once PATH . 'functions/user_meta.php';
require_once PATH . 'functions/create_db.php';
require_once PATH . 'functions/include.php';
require_once PATH . 'functions/widgets.php';
require_once PATH . 'functions/menus.php';

require_once PATH . 'functions/postTypes.php';

require_once PATH . 'functions/Settings.php';
require_once PATH . 'functions/date.php';
require_once PATH . "pages/basic_template.php";
require_once PATH . 'options/codestar-framework.php';
require_once PATH . 'options/inc/admin-options.php';


require_once PATH . 'options/inc/users.php';
require_once PATH . 'options/inc/post_type_box_courses.php';
require_once PATH . "inc/article.php";
require_once PATH . 'tools/login/login_func.php';
require_once PATH . 'tools/login/ajax_login.php';



























