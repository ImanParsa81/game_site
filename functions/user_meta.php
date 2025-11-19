<?php

//--------------------------------
// get all user meta
//--------------------------------

function get_all_user_meta( $user_id = null ) {

    if ( is_null( $user_id ) ) {
        $user_id = get_current_user_id();
    }

    if ( ! $user_id ) {
        return false;
    }

    $meta = get_user_meta( $user_id );

    return $meta;
}

//--------------------------------
// user meta definition
//--------------------------------

function get_user_meta_definition ( $witch_user_meta = null , $user_id = null ) {

    if ( $witch_user_meta != null ) {

        if ( $witch_user_meta == "display_name" ) {
            return wp_get_current_user()->display_name;
        }

        if ( $user_id == null) { $user_id = get_current_user_id(); }

        $meta_value = get_user_meta( $user_id, $witch_user_meta, true );
        if ( empty( $meta_value ) ) {
            update_user_meta( $user_id, $witch_user_meta, null );
            $meta_value = null;
        }
        return $meta_value;

    } else {
        return false;
    }
}

//--------------------------------
// function complite profile
//--------------------------------

function get_complit_profile () {

    $arr_complite_profile = [];
    array_push( $arr_complite_profile , get_user_meta_definition("display_name") );
    array_push( $arr_complite_profile , get_user_meta_definition("first_name") );
    array_push( $arr_complite_profile , get_user_meta_definition("last_name") );
    array_push( $arr_complite_profile , get_user_meta_definition("meli_code") );

    $who_meny_null = 0;
    foreach ( $arr_complite_profile as $item ) {
        if ( $item == null ) { $who_meny_null +=1; }
    }
    $darsad =  ((count($arr_complite_profile)-$who_meny_null)*100) / count($arr_complite_profile);

    return $darsad;
}