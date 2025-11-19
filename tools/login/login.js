jQuery(document).ready(function ($) {

// --------------------------------------------------------------------------------------------
// open pupop login

    $(".roboyad_butten_loginButten").on("click", function () {
        open_popuop_login();
    });

    $(".roboyad_please_login_label_butten button").on("click", function () {
        open_popuop_login();
    })

    $(".show_popup_login").on("click", function () {
        open_popuop_login();
    });


    function open_popuop_login() {

        $(".roboyad_login_background_dark").addClass("active");
        $(".roboyad_login_container").addClass("active");
    }

// --------------------------------------------------------------------------------------------
// close pupop login

    $(".roboyad_login_background_close").on("click", function () {
        $(".roboyad_login_background_dark").removeClass("active");
        $(".roboyad_login_container").removeClass("active");
    });

    $(".roboyad_login_container").on("click", function (e) {
        if (e.target === this) {
            $(".roboyad_login_background_dark").removeClass("active");
            $(".roboyad_login_container").removeClass("active");
        }
    });


// login

// --------------------------------------------------------------------------------------------
// functions

    function close_all_error() {
        $(".roboyad_login_box_Error").removeClass("active");
    }

    function open_error(er_phone_number = false,
                        er_sms_code = false,
                        er_name = false,
                        authentic = false,
                        sms_error = false) {
        $(".roboyad_login_box_Error").addClass("active");
        $(".roboyad_login_box_Error_item").removeClass("active");

        if (er_phone_number)
            $(".roboyad_login_box_Error_item_phone_number").addClass("active");

        if (er_sms_code)
            $(".roboyad_login_box_Error_item_sms_code").addClass("active");

        if (er_name)
            $(".roboyad_login_box_Error_item_name").addClass("active");

        if (authentic)
            $(".roboyad_login_box_Error_authentic").addClass("active");

        if (sms_error)
            $(".roboyad_login_box_sms_error").addClass("active");

    }


// --------------------------------------------------------------------------------------------
// control input

    $(".roboyad_login_input_continaer_phone_number .roboyad_login_input_item").on("input", function () {
        this.value = this.value.replace(/\D/g, '');
        if (this.value.length > 11) {
            this.value = this.value.slice(0, 11);
        }
    });

// --------------------------------------------------------------------------------------------
// edite phone number

    let witch_step = 1;
    let lock_butten_login = false;
    let show_name_fild = true;

    $(".roboyad_login_input_continaer .butten_action_login_item").on("click", function () {
        $(this).removeClass("active");
        lock_butten_login = false;
        witch_step = 1;
        $(".roboyad_login_input_continaer_sms_code").removeClass("active");
        $(".roboyad_login_input_continaer_name").removeClass("active");
        $(".roboyad_login_input_continaer_phone_number .butten_action_login_item").removeClass("active");
    })

// --------------------------------------------------------------------------------------------
// verify user

    $(".roboyad_login_butten_submit").on("click", function (e) {
        e.propertyIsEnumerable();
        send_sms(this);
    })

// --------------------------------------------------------------------------------------------
// send sms
    function send_sms(_this) {

        let get_phone_number = $(".roboyad_login_input_continaer .roboyad_login_input_item").val();


        if (lock_butten_login == false) {

            if (witch_step == 1) {

                if (!get_phone_number.startsWith(0))
                    get_phone_number = "0" + get_phone_number;

                let have_error = false;
                if (get_phone_number.length != 11) {
                    have_error = true;
                } else if (!get_phone_number.startsWith("09")) {
                    have_error = true;
                }

                close_all_error();

                let save_textByntter = "ارسال"
                let save_butten = $(".roboyad_login_butten_submit");
                save_butten.html(save_textByntter);

                if (!have_error) {
                    lock_butten_login = true;
                    $(_this).html("درحال ارسال...");

                    $(".roboyad_login_input_continaer_sms_code .butten_action_login_item_timer").removeClass("active");

                    $.ajax({
                        url: ajax.ajax_url,
                        type: 'POST',
                        data: {
                            action: 'creat_code_verify',
                            phone_number: get_phone_number,
                        },
                        success: function (response) {

                            if (response.status == "sms_fail") {
                                lock_butten_login = false;
                                save_butten.html(save_textByntter);
                                open_error(false, false, false, false, true);
                            } else {

                                lock_butten_login = false;
                                save_butten.html(save_textByntter);
                                witch_step = 2;
                                $(".roboyad_login_input_continaer_sms_code").addClass("active");
                                $(".roboyad_login_input_continaer_phone_number .butten_action_login_item").addClass("active");

                                if (response.status == "has") {
                                    open_error(false, false, false, true, false);
                                    if (response.show_fild_name == true) {
                                        $(".roboyad_login_input_continaer_name").addClass("active");
                                    } else {
                                        show_name_fild = false;
                                    }

                                    call_timer(response.start_time_dei_line);
                                } else {

                                    if (response.show_fild_name == true) {
                                        $(".roboyad_login_input_continaer_name").addClass("active");
                                    } else {
                                        show_name_fild = false
                                    }
                                    call_timer(response.start_time_dei_line);
                                }
                            }
                        },
                        error: function () {
                            alert('درخواست با خطا مواجه شد.');
                        }
                    });

                } else {
                    open_error(true, false, false, false, false);
                }
            } else if (witch_step == 2) {

                let get_code_sms = $(".roboyad_login_input_continaer_sms_code .roboyad_login_input_item").val();
                let get_name_usr = $(".roboyad_login_input_continaer_name .roboyad_login_input_item").val();

                close_all_error();

                $in_step2_have_error = false;

                if (get_code_sms == "") {
                    $in_step2_have_error = true;
                    open_error(
                        false,
                        true,
                        false,
                        false,
                        false,
                    );
                }

                if (show_name_fild == true) {
                    if (get_name_usr == "") {
                        $in_step2_have_error = true;
                        open_error(
                            false,
                            false,
                            true,
                            false,
                            false,
                        );
                    }
                    if (get_name_usr == "" && get_code_sms == "") {
                        $in_step2_have_error = true;
                        open_error(
                            false,
                            true,
                            true,
                            false,
                            false,
                        );
                    }
                }

                if ($in_step2_have_error == false) {
                    lock_butten_login = true;
                    $(".roboyad_login_butten_submit").html("درحال ارسال ...");

                    $.ajax({
                        url: ajax.ajax_url,
                        type: 'POST',
                        data: {
                            action: 'check_code_verify',
                            phone_number: get_phone_number,
                            code_verify: get_code_sms,
                            name_desplay: get_name_usr,
                        },
                        success: function (response) {

                            $(".roboyad_login_butten_submit").html("ارسال");


                            if (response.status == "creat_user") {

                                setTimeout(function () {
                                    lock_butten_login = false;

                                    if ( ajax.is_front_page == 1 ) {
                                        window.location.href = ajax.site_url + "/user_panel/";
                                    } else {
                                        window.location.reload();
                                    }

                                }, 1000);

                            } else if (response.status == "not_find_code") {
                                lock_butten_login = false;
                                open_error(
                                    false,
                                    true,
                                    false,
                                    false,
                                    false,
                                );
                            }

                        },
                        error: function () {
                            alert('درخواست با خطا مواجه شد.');
                        }
                    });

                }
            }
        }
    }

// --------------------------------------------------------------------------------------------
// timer
    let Timer_setInterval = null;

    function call_timer(start_time_dei_line) {

        console.log(Timer_setInterval);
        if (Timer_setInterval != null) {
            clearInterval(Timer_setInterval);
        }

        let time = start_time_dei_line;

        function formatTime(seconds) {
            let min = Math.floor(seconds / 60);
            let sec = seconds % 60;
            return `${min}:${sec.toString().padStart(2, '0')}`;
        }

        Timer_setInterval = setInterval(() => {

            $(".roboyad_login_input_continaer_sms_code .butten_action_login_item_timer").addClass("active");
            $(".roboyad_login_input_continaer_sms_code .butten_action_login_item_timer").html(formatTime(time));
            // console.log(formatTime(time));
            time--;
            if (time < 0) {
                $(".roboyad_login_input_continaer_sms_code .butten_action_login_item_timer").removeClass("active");
                $(".roboyad_login_butten_submit").html("ارسال مجدد کد تایید");
                witch_step = 1;
                clearInterval(Timer_setInterval); // توقف تایمر
            }
        }, 1000);
    }




})