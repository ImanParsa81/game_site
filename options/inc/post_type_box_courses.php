<?php

//function select_single_cours ()
//{
//    $posts = get_posts(array(
//        'post_type' => 'single_courses',
//        'posts_per_page' => -1,
//        'post_status' => 'publish',
//    ));
//    $options = array();
//    foreach ($posts as $post) {
//        $options[$post->ID] = $post->post_title;
//    }
//    return $options;
//}
//
//
//if (class_exists('CSF')) {
//
//    $prefix = 'teacher_term_options_';
//
//    CSF::createMetabox($prefix, array(
//        'title' => 'پکیج دروس',
//        'post_type' => 'box_courses',
//    ));
//
//    CSF::createSection($prefix, array(
//        'fields' => array(
//            array(
//                'id' => 'repeater_definition_courses',
//                'type' => 'repeater',
//                'title' => 'دروس ',
//                'fields' => array(
//
//                    array(
//                        'id' => 'select_single_cours_select',
//                        'type' => 'select',
//                        'title' => 'انتخاب تک درس',
//                        'options' => 'select_single_cours',
//                        'chosen' => true,
//                        'placeholder' => 'یک درس انتخاب کنید...',
//                    ),
//                )),
//
//            array(
//                'id' => 'discout_package',
//                'type' => 'number',
//                'title' => 'چند درصد تخفیف :',
//            ),
//
//            array(
//                'id' => 'definition_term_capacity_package_mode_face_to_face',
//                'type' => 'number',
//                'title' => 'تعریف ظرفیت کلاس های حضوری :',
//            ),
//
//            array(
//                'id' => 'definition_term_capacity_package_mode_online',
//                'type' => 'number',
//                'title' => 'تعریف ظرفیت کلاس های غیر حضوری :',
//            ),
//
//            array(
//                'id' => 'allow_to_show_box',
//                'type' => 'checkbox',
//                'title' => 'ایا نمایش داده شود :',
//            ),
//
//        )
//    ),
//    );
//
//}
//



