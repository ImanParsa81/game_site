<?php if (!defined('ABSPATH')) {
    die;
} // Cannot access directly.

$prefix = 'seting_website';

CSF::createOptions($prefix, array(
    'menu_title' => 'تنظیمات قالب',
    'menu_slug' => 'op_roboyad',
    'theme' => 'light',
    'framework_title' => 'تنظیمات قالب',

));

CSF::createSection($prefix, array(
    'title' => 'header',
    'fields' => array(

        array(
            'id' => 'logo_roboyad',
            'type' => 'media',
            'title' => 'لوگوی هدر ',
        ),

        array(
            'id' => 'logo_roboyad_hambergerd_menu',
            'type' => 'media',
            'title' => 'لوگوی همبرگرد منو',
        ),

        array(
            'id' => 'logo_roboyad_login',
            'type' => 'media',
            'title' => 'لوگوی لاگین',
        ),

    )
));


