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
    'title' => 'home page',
    'fields' => array(

        array(
            'id' => 'home_page_image_baner',
            'type' => 'media',
            'title' => 'عکس بنز',
        ),

        array(
            'id' => 'home_page_text_title',
            'type' => 'text',
            'title' => 'متن تاتل',
        ),

        array(
            'id' => 'home_page_text_description',
            'type' => 'text',
            'title' => 'متن توضیحات',
        ),



        array(
            'id'     => 'home_page_repeater_paye',
            'type'   => 'repeater',
            'title'  => 'پایه',
            'fields' => array(


                array(
                    'id' => 'home_page_image_paye',
                    'type' => 'media',
                    'title' => 'عکس پایه',
                ),
                array(
                    'id' => 'home_page_text_paye',
                    'type' => 'text',
                    'title' => 'متن پایه',
                ),


            ),
        ),






    )
));


