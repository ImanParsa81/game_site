<?php

//add_action('init', function () {
//    global $wpdb;
//    $table_name = $wpdb->prefix . 'roboyad_verify_code_login';
//    $charset_collate = $wpdb->get_charset_collate();
//
//    // چک می‌کنیم آیا جدول وجود دارد یا نه
//    if ($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {
//        $sql = "CREATE TABLE $table_name (
//            id INT(11) NOT NULL AUTO_INCREMENT,
//            code VARCHAR(255) NOT NULL,
//            time_created DATETIME NOT NULL,
//            expire_time DATETIME NOT NULL,
//            user VARCHAR(255) NOT NULL,
//            user_ip VARCHAR(100) DEFAULT NULL,
//            PRIMARY KEY (id)
//        ) $charset_collate;";
//
//        require_once ABSPATH . 'wp-admin/includes/upgrade.php';
//        dbDelta($sql);
//    }
//});

