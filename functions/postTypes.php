<?php

//-----------------------------------------------------------------
// cours post type
//-----------------------------------------------------------------

// function register_courses_post_type() {
//
//     $labels = array(
//         'name'               => 'دروس',
//         'singular_name'      => 'دروس',
//         'menu_name'          => 'درس ها',
//         'name_admin_bar'     => 'درس',
//         'add_new'            => 'افزودن درس',
//         'add_new_item'       => 'افزودن درس جدید',
//         'new_item'           => 'درس جدید',
//         'edit_item'          => 'ویرایش درس',
//         'view_item'          => 'مشاهده درس',
//         'all_items'          => 'همه درس',
//         'search_items'       => 'جستجوی درس',
//         'parent_item_colon'  => 'درس والد:',
//         'not_found'          => 'درس پیدا نشد.',
//         'not_found_in_trash' => 'در زباله‌دان درس یافت نشد.'
//     );
//     register_taxonomy(
//         'courses_category',
//         'courses',
//         array(
//             'hierarchical'      => true,
//             'label'             => 'دسته بندی',
//             'show_ui'           => true,
//             'show_admin_column' => true,
//             'query_var'         => true,
//             'rewrite'           => array(
//                 'slug'       => 'learn_f',
//                 'with_front' => false
//             )
//         )
//     );
//     $args = array(
//         'labels'             => $labels,
//         'public'             => true,
//         'publicly_queryable' => true,
//         'show_ui'            => true,
//         'show_in_menu'       => true,
//         'query_var'          => true,
//         'rewrite'            => array(
//             'slug'       => 'courses',
//             'with_front' => false
//         ),
//         'capability_type'    => 'post',
//         'has_archive'        => true,
//         'hierarchical'       => false,
//         'menu_position'      => -1,
//         'supports'           => array('title', 'editor', 'thumbnail', 'excerpt'),
//         'menu_icon'          => 'dashicons-flag'
//     );
//     register_post_type('courses', $args);
//
//
// }
//
// add_action('init', 'register_courses_post_type');

