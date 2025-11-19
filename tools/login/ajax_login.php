<?php

//---------------------------------------------------
// login code

function creat_code_verify()
{

    $get_phone_number = $_POST["phone_number"];
    $get_status = roboyad_create_verify_code($get_phone_number);
    wp_send_json($get_status);
    wp_die();
}

add_action('wp_ajax_creat_code_verify', 'creat_code_verify');
add_action('wp_ajax_nopriv_creat_code_verify', 'creat_code_verify');

function check_code_verify()
{

    $get_phone_number = $_POST["phone_number"];
    $code_verify = $_POST["code_verify"];
    $name_desplay = $_POST["name_desplay"];
    $get_status = roboyad_check_code_verify($get_phone_number, $code_verify, $name_desplay);
    wp_send_json($get_status);
    wp_die();
}

add_action('wp_ajax_check_code_verify', 'check_code_verify');
add_action('wp_ajax_nopriv_check_code_verify', 'check_code_verify');

function ajax_logout_handler()
{
    if (is_user_logged_in()) {
        wp_logout();
        wp_send_json_success();
    } else {
        wp_send_json_error('کاربر لاگین نیست');
    }
}
add_action('wp_ajax_ajax_logout', 'ajax_logout_handler');
