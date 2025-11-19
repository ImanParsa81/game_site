<?php

function convertPersianToEnglishNirwebPanel($string)
{
    $persian = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
    $english = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];

    $output = str_replace($persian, $english, $string);
    return $output;
}


// درجه کد در دیتا بیس
function insercode_database($time, $code, $phone_number, $ip, $wpdb, $table_name, $massage)
{
    // تبدیل زمان یونیکس به فرمت وردپرسی با تایم‌زون مناسب
    $expire_time = wp_date("Y-m-d H:i:s", $time);

    $frm_ary_elements = array(
        'time_created' => current_time("Y-m-d H:i:s"), // تایم‌زون وردپرس
        'expire_time' => $expire_time,
        'code' => $code,
        'user' => $phone_number,
        'user_ip' => $ip,
    );
    $result = $wpdb->insert($table_name, $frm_ary_elements);



    $send_sms = false;
    if( ! empty(op_roboyad["roboyad_pattern_send_sms"]) ) {
        if ( op_roboyad["roboyad_pattern_send_sms"] == 1 ) {
            $send_sms = true;
        }
    }


    if( $send_sms == true ) {
        $get_status = nirweb_send_sms_to_farmer($phone_number, $code);
        if($get_status == false)
        {
            return [
                'status' => 'sms_fail',
                'message' => "اس ام اس به مشکل خورد",
            ];
        }
    }

    $time_now =  strtotime( current_time("Y-m-d H:i:s") );
    $time_stamp_expire = strtotime( current_time($expire_time) );
    $time_dei_line = $time_stamp_expire - $time_now;


    $show_name_fild_or_no = true;
    $user = get_user_by('login', $phone_number);
    if ( $user ) {
        $show_name_fild_or_no = false;
    }

    return [
        'status' => 'dont_has',
        'message' => $massage,
        'expired' => $expire_time,
        'start_time_dei_line' => $time_dei_line,
        'show_fild_name' => $show_name_fild_or_no,
    ];
}

// ساخت کد یونیک
function create_unique_code()
{
    global $wpdb;
    $table_name = $wpdb->prefix . 'roboyad_verify_code_login';
    do {
        $new_code = str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT);
        $exists = $wpdb->get_var(
            $wpdb->prepare("SELECT COUNT(*) FROM $table_name WHERE code = %s", $new_code)
        );
    } while ($exists > 0);
    return $new_code;
}

// تمیز کردن دیتابیس verify
function clear_verify_database()
{
    global $wpdb;
    $table_name = $wpdb->prefix . 'roboyad_verify_code_login';
    $now = current_time('mysql');
    $wpdb->query(
        $wpdb->prepare(
            "DELETE FROM $table_name WHERE expire_time < %s",
            $now
        )
    );
}

// ساخت کد
function roboyad_create_verify_code($phone_number)
{

    clear_verify_database();
    $phone_number = convertPersianToEnglishNirwebPanel($phone_number);

    global $wpdb;
    $table_name = $wpdb->prefix . 'roboyad_verify_code_login';
    $min = 2;
    $time = strtotime("+$min minute");
    $ip = $_SERVER['REMOTE_ADDR'];
    $code = create_unique_code();




    $check_exist = $wpdb->get_row("SELECT * FROM $table_name WHERE user='$phone_number'");
    if ($check_exist) {
        if (strtotime($check_exist->expire_time) > time()) {

            $time_now = strtotime( current_time("Y-m-d H:i:s") );
            $time_stamp_expire = strtotime( current_time($check_exist->expire_time) );
            $time_dei_line = $time_stamp_expire - $time_now;

            $show_name_fild_or_no = true;
            $user = get_user_by('login', $phone_number);
            if ( $user ) {
                $show_name_fild_or_no = false;
            }

            return [
                'status' => 'has',
                'message' => 'کد قبلی معتبر است',
                'expired' => $check_exist->expire_time,
                'start_time_dei_line' => $time_dei_line,
                'show_fild_name' => $show_name_fild_or_no,
            ];

        } else {
            return insercode_database($time, $code, $phone_number, $ip, $wpdb, $table_name, "تاریخ مصرف کد گذسته است");
        }
    } else {
        return insercode_database($time, $code, $phone_number, $ip, $wpdb, $table_name, "شماره مبایل وجود نداشت");
    }
}

// ارسال sms
function nirweb_send_sms_to_farmer($phone, $code)
{
    $pattern_code = op_roboyad["roboyad_pattern_login"];
    $username = op_roboyad["roboyad_sms_username"];
    $password = op_roboyad["roboyad_sms_password"];
    $from = op_roboyad["roboyad_sms_from"];

    $to = $phone;
    $var_1 = 'code';
    $input_data = array($var_1 => $code);

    $url = "https://ippanel.com/patterns/pattern?username=" . $username .
        "&password=" . urlencode($password) .
        "&from=$from" .
        "&to=" . json_encode($to) .
        "&input_data=" . urlencode(json_encode($input_data)) .
        "&pattern_code=$pattern_code";

    $response = wp_remote_get($url, array('sslverify' => FALSE,));

    $response = $response['body'];
    if (is_numeric($response)) {
        return true;
    } else {
        return false;
//        var_dump($response);
    }

}


//check code verify
function roboyad_check_code_verify( $phone_number , $code_verify , $name_desplay ) {

    global $wpdb;
    $table_name = $wpdb->prefix . 'roboyad_verify_code_login';

    $check_exist = $wpdb->get_row( $wpdb->prepare(
        "SELECT * FROM $table_name WHERE user = %s AND code = %s",
        $phone_number,
        $code_verify
    ) );

    if ( $check_exist ) {

        // حذف کد از دیتابیس

        $deleted = $wpdb->delete(
            $table_name,
            array(
                'user' => $phone_number,
                'code' => $code_verify,
            ),
            array(
                '%s',
                '%s'
            )
        );



        $user = get_user_by('login', $phone_number);
        if ( ! $user ) {
            $user_id = wp_insert_user([
                'user_login'    => $phone_number,
                'user_pass'     => wp_generate_password(),
                'user_email'    => $phone_number . '@example.com',
                'display_name'  => $name_desplay,
                'first_name'    => "",
            ]);

            if ( is_wp_error($user_id) ) {
                wp_send_json_error('خطا در ساخت حساب کاربری.');
            }
            $user = get_user_by('id', $user_id);
        }

        wp_set_current_user( $user->ID );
        wp_set_auth_cookie( $user->ID , true );

        return [
            'status' => 'creat_user',
            'message' => 'یوزر ساخته شد',
        ];

    } else {

        return [
            'status' => 'not_find_code',
            'message' => 'کد تا معتبر است',
        ];

    }
}


































//// اگر یوزر وجود داشت
//function roboyad_check_username_exists($username)
//{
//    $username = convertPersianToEnglishNirwebPanel($username);
//
//    if (username_exists($username)) {
//        return true;
//    }
//
//    if (is_email($username)) {
//        if (email_exists($username)) {
//            return true;
//        }
//    } else {
//        $users = get_users(array(
//            'meta_key' => 'wpyarud_phone',
//            'meta_value' => $username,
//        ));
//
//        if (!empty($users)) {
//            return true;
//        }
//    }
//
//    return false;
//}
//
//// ارسال کد
//function roboyad_send_sms_to_user($phone, $method, $code = '')
//{
//    global $nirweb_errors;
//
//
//    $phone = convertPersianToEnglishNirwebPanel($phone);
//    $phone = sanitize_text_field($phone);
//    $ar_pass = array();
//    for ($i = 1; $i <= 4; $i++) {
//        $ar_pass[] = rand(1, 9);
//    }
//    $code = implode("", $ar_pass);
//    $end_date = nirweb_create_verify_code($phone, $code);
//    if (is_array($end_date)) {
//        return $end_date;
//    }
//    $var = $code;
//    $method = $method;
//    $To = $phone;
//
//    $response = require_once PATH . 'inc/nirsms.php';
//    $data = array('status' => $response,
//        'expired' => $end_date
//    );
//    if (!$response) {
//        global $wpdb;
//        $table_name = $wpdb->prefix . 'wpyarud_verify_code';
//        $phone = convertPersianToEnglishNirwebPanel($phone);
//
//        $check = $wpdb->get_row("SELECT * FROM $table_name WHERE user='$phone' ");
//
//        if ($check) {
//        }
//
//        $data = array('status' => false,
//            'message' => __('در ارسال پیامک مشکلی به وجود آمده است.', 'wpyar_panel')
//        );
//    }
//    return $data;
//}
//
//// ساخت کد
//function roboyad_create_verify_code($user_name, $code)
//{
//    global $wpdb;
//    $table_name = $wpdb->prefix . 'roboyad_verify_code_login';
//    $min = 2;
//    $time = strtotime("+$min minute");
//    $ip = $_SERVER['REMOTE_ADDR'];
//
//    $check_exist = $wpdb->get_row("SELECT * FROM $table_name WHERE user='$user_name'");
//
//    if ($check_exist) {
//        if (strtotime($check_exist->expire_time) > time()) {
//            if (is_email($user_name)) {
//                return [
//                    'status' => 'has',
//                    'message' => 'کد تایید قبلی معتبر است',
//                    'expired' => $check_exist->expire_time
//                ];
//
//            } else {
//                return [
//                    'status' => 'has',
//                    'message' => 'کد تایید قبلی معتبر است',
//                    'expired' => $check_exist->expire_time
//                ];
//            }
//        }
//
//        $wpdb->update($table_name, array(
//            'code_v' => $code,
//            'time_create' => current_time("Y-m-d H:i:s"),
//            'expire_time' => date("Y-m-d H:i:s", $time),
//            'user_ip' => $ip,
//        ), array('user' => $user_name));
//        return date("Y-m-d H:i:s", $time);
//    } else {
//
//        $frm_ary_elements = array(
//            'time_create' => current_time("Y-m-d H:i:s"),
//            'expire_time' => date("Y-m-d H:i:s", $time),
//            'code_v' => $code,
//            'user' => $user_name,
//            'user_ip' => $ip,
//        );
//        $res = $wpdb->insert($table_name, $frm_ary_elements);
//        return date("Y-m-d H:i:s", $time);
//    }
//}
//
//function nirweb_get_username_exists($username)
//{
//    $username = convertPersianToEnglishNirwebPanel($username);
//
//    if (username_exists($username)) {
//        return username_exists($username);
//    }
//    if (is_email($username)) {
//        if (email_exists($username)) {
//            return email_exists($username);
//        }
//    } else {
//        $users = get_users(array(
//            'meta_key' => 'wpyarud_phone',
//            'meta_value' => $username,
//        ));
//
//        if (!empty($users)) {
//            return $users[0]->id;
//        }
//    }
//
//
//    return false;
//
//}
//
//function check_verify_code($phone, $code)
//{
//    global $wpdb;
//    $table_name = $wpdb->prefix . 'wpyarud_verify_code';
//    $phone = convertPersianToEnglishNirwebPanel($phone);
//    $code = convertPersianToEnglishNirwebPanel($code);
//    $check = $wpdb->get_row("SELECT * FROM $table_name WHERE user='$phone' AND code_v ='$code'");
//
//    if ($check) {
//        if (strtotime($check->expire_time) > time()) {
//            $wpdb->delete($table_name, array('id_v' => $check->id_v));
//            return true;
//
//        }
//
//    }
//    return false;
//
//
//}
//
//function nirweb_login_user_width_code($username, $code, $remember = false, $redirect_to = '', $method = 'simple')
//{
//    global $nirweb_errors;
//    $username = convertPersianToEnglishNirwebPanel($username);
//    $code = convertPersianToEnglishNirwebPanel($code);
//    $username = sanitize_text_field($username);
//    $code = sanitize_text_field($code);
//    $user_id = nirweb_get_username_exists($username);
//    $user = get_userdata($user_id);
//
//    $check = check_verify_code($username, $code);
//
//    if (!$check) {
//        $message = 'کد تایید اشتباه است، مجدد بررسی کنید.';
//
//        if ($method == 'ajax') {
//            nirweb_return_data_ajax('error', $message);
//            exit();
//        } else {
//            $nirweb_errors[] = $message;
//
//        }
//    } else {
//        wp_clear_auth_cookie();
//        wp_set_current_user($user->ID);
//        wp_set_auth_cookie($user->ID,true);
//
//        $url = $redirect_to;
//
//        nirweb_return_data_ajax('ok');
//        exit();
//
//    }
//}
//
//function nirweb_register_user_width_code($username, $code ,$redirect_to = '', $method = 'simple',$display_name)
//{
//
//    global $nirweb_errors;
//    $username = convertPersianToEnglishNirwebPanel($username);
//    $code = convertPersianToEnglishNirwebPanel($code);
//    $username = sanitize_text_field($username);
//    $code = sanitize_text_field($code);
//
//    $check = check_verify_code($username, $code);
//
//    if (!$check) {
//        $message = 'کد تایید اشتباه است، مجدد بررسی کنید.';
//
//        nirweb_return_data_ajax('error', $message);
//        exit();
//
//    } else {
//        $password = hash('sha256', rand(00000, 999999) . '%password@' . rand(00000, 999999));
//        $user_data = array(
//            'user_login' => $username,
//            'user_pass' => $password,
//
//        );
//        $user_id = wp_insert_user($user_data);
//
//        if (!is_wp_error($user_id)) {
//            if (!is_email($username) && is_numeric($username)) {
//                update_user_meta($user_id, 'wpyarud_phone', $username);
//            } elseif(is_email($username)) {
//                wp_update_user( array( 'ID' => $user_id, 'user_email' => $username ) );
//            }
//
//            wp_update_user( array( 'ID' => $user_id, 'display_name' => $display_name ) );
//
//            wp_clear_auth_cookie();
//            wp_set_current_user($user_id);
//            wp_set_auth_cookie($user_id,true);
//
//            nirweb_return_data_ajax('ok');
//                exit();
//
//        } else {
//            $message = $user_id->get_error_message();
//            $message = preg_replace('/<a href="[^"]*">[^<]*<\/a>/', '', $message);
//            $message = strip_tags($message);
//
//            nirweb_return_data_ajax('error', $message);
//            exit();
//
//        }
//
//    }
//
//}
//
//function nirweb_return_data_ajax($type = 'error', $data = '')
//{
//    global $nirweb_errors;
//    if ($type == 'ok') {
//
//        wp_send_json([
//            'status' => 'ok',
//            'message' => $data,
//        ]);
//        exit();
//
//    } else {
//
//        wp_send_json([
//            'status' => 'error',
//            'message' => $data,
//        ]);
//        exit();
//
//    }
//}


