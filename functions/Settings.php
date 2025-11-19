<?php


/*********************************************
اجازه آپلود SVG برای مدیر سایت
 *********************************************/

function nirweb_allow_svg_upload($upload_mimes) {
    if (current_user_can('administrator')) {
        $upload_mimes['svg'] = 'image/svg+xml';
    }
    return $upload_mimes;
}
add_filter('upload_mimes', 'nirweb_allow_svg_upload');


/*********************************************
 * فیلتر بررسی دقیق‌تر MIME برای SVG
 *********************************************/

function nirweb_fix_svg_mime_type($data, $file, $filename, $mimes) {
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    if ($ext === 'svg') {
        $data['ext']  = 'svg';
        $data['type'] = 'image/svg+xml';
    }
    return $data;
}
add_filter('wp_check_filetype_and_ext', 'nirweb_fix_svg_mime_type', 10, 4);


/*********************************************
حذف ادمین بار برای یوزر های عادی
 *********************************************/

add_action('after_setup_theme', 'remove_admin_bar_for_non_admins');
function remove_admin_bar_for_non_admins() {
    if (!current_user_can('administrator') && !is_admin()) {
        show_admin_bar(false);
    }
}






