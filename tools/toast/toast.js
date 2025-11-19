/************* Toast popup *************/



let save_time_out = null;

function call_toast(status = "success", text = "") {

    jQuery(document).ready(function ($) {

        $(".roboyda_toast_label").addClass("active");

        if ( save_time_out != null ) { clearTimeout(save_time_out); }

        save_time_out = setTimeout(function() {
            $(".roboyda_toast_label").removeClass("active");

        }, 5000);

        $(".roboyda_toast_text p ").html(text);


        // icons -------------------------------------------------------------------------------------------------------

        let icon_success = '' +
            '\n' +
            '<svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">\n' +
            '<circle cx="19" cy="19" r="19" fill="white"/>\n' +
            '<path d="M10 21.6L14.561 26L27 14" stroke="#49A02C" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>\n' +
            '</svg>\n';

        let icon_error = '' +
            '\n' +
            '<svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">\n' +
            '<circle cx="19" cy="19" r="19" fill="white"/>\n' +
            '<path d="M27.5508 10L10.0508 27.5" stroke="#D92C07" stroke-width="4" stroke-linecap="round"/>\n' +
            '<path d="M10.9473 10L28.4473 27.5" stroke="#D92C07" stroke-width="4" stroke-linecap="round"/>\n' +
            '</svg>\n';

        let icon_warning = '' +
            '\n' +
            '<svg width="44" height="38" viewBox="0 0 44 38" fill="none" xmlns="http://www.w3.org/2000/svg">\n' +
            '<path d="M18.1865 6C19.7261 3.33333 23.5751 3.33333 25.1147 6L39.8372 31.5C41.3768 34.1667 39.4523 37.5 36.3731 37.5H6.9282C3.849 37.5 1.9245 34.1667 3.4641 31.5L18.1865 6Z" fill="#FFFDFD"/>\n' +
            '<path d="M22 15L22 24.1429" stroke="#EDA530" stroke-width="3" stroke-linecap="round"/>\n' +
            '<path d="M22 29.8572V31" stroke="#EDA530" stroke-width="3" stroke-linecap="round"/>\n' +
            '</svg>\n';

        let icon_info = '\n' +
            '<svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">\n' +
            '<circle cx="19" cy="19" r="19" fill="white"/>\n' +
            '<path d="M19 12L19 21.1429" stroke="#1E47FD" stroke-width="3" stroke-linecap="round"/>\n' +
            '<path d="M19 26.8572V28" stroke="#1E47FD" stroke-width="3" stroke-linecap="round"/>\n' +
            '</svg>\n';


        // css -------------------------------------------------------------------------------------------------------

        let success_css = '    <style>\n' +
            '        .roboyda_toast_close path {\n' +
            '            stroke: #4AA02B;\n' +
            '        }\n' +
            '        .roboyda_toast_label_padding {\n' +
            '            background-color: #EDF6EA;\n' +
            '            border: 2px solid #4AA02B;\n' +
            '            box-shadow: 0 0 13px -6px #4AA02B;\n' +
            '        }\n' +
            '        .roboyda_toast_icon {\n' +
            '            background-color: #4AA02B;\n' +
            '        }\n' +
            '        .roboyda_toast_text p {\n' +
            '            color: #4AA02B;\n' +
            '        }\n' +
            '        .roboyda_toast_close {\n' +
            '            border-right: 3px solid #CAE1C5;\n' +
            '        }\n' +
            '    </style>' ;

        let error_css = '    <style>\n' +
            '        .roboyda_toast_close path {\n' +
            '            stroke: #DF2A03;\n' +
            '        }\n' +
            '        .roboyda_toast_label_padding {\n' +
            '            background-color: #FDE9E7;\n' +
            '            border: 2px solid #DF2A03;\n' +
            '            box-shadow: 0 0 13px -6px #DF2A03;\n' +
            '        }\n' +
            '        .roboyda_toast_icon {\n' +
            '            background-color: #DF2A03;\n' +
            '        }\n' +
            '        .roboyda_toast_text p {\n' +
            '            color: #DF2A03;\n' +
            '        }\n' +
            '        .roboyda_toast_close {\n' +
            '            border-right: 3px solid #F6C6BC;\n' +
            '        }\n' +
            '    </style>' ;


        let warning_css = '    <style>\n' +
            '        .roboyda_toast_close path {\n' +
            '            stroke: #EEA532;\n' +
            '        }\n' +
            '        .roboyda_toast_label_padding {\n' +
            '            background-color: #FEF8E6;\n' +
            '            border: 2px solid #EEA532;\n' +
            '            box-shadow: 0 0 13px -6px #EEA532;\n' +
            '        }\n' +
            '        .roboyda_toast_icon {\n' +
            '            background-color: #EEA532;\n' +
            '        }\n' +
            '        .roboyda_toast_text p {\n' +
            '            color: #EEA532;\n' +
            '        }\n' +
            '        .roboyda_toast_close {\n' +
            '            border-right: 3px solid #F6E1B2;\n' +
            '        }\n' +
            '    </style>';


        let info_css = '   <style>\n' +
            '        .roboyda_toast_close path {\n' +
            '            stroke: #1E47FD;\n' +
            '        }\n' +
            '        .roboyda_toast_label_padding {\n' +
            '            background-color: #F4F7FF;\n' +
            '            border: 2px solid #1E47FD;\n' +
            '            box-shadow: 0 0 13px -6px #1E47FD;\n' +
            '        }\n' +
            '        .roboyda_toast_icon {\n' +
            '            background-color: #1E47FD;\n' +
            '        }\n' +
            '        .roboyda_toast_text p {\n' +
            '            color: #1E47FD;\n' +
            '        }\n' +
            '        .roboyda_toast_close {\n' +
            '            border-right: 3px solid #BEC7ED;\n' +
            '        }\n' +
            '    </style>';


        switch ( status ) {
            case "success":
                $(".roboyda_toast_icon").html(icon_success);
                $(".roboyda_toast_style").html(success_css);
                break ;

            case "error":
                $(".roboyda_toast_icon").html(icon_error);
                $(".roboyda_toast_style").html(error_css);
                break ;

            case "warning":
                $(".roboyda_toast_icon").html(icon_warning);
                $(".roboyda_toast_style").html(warning_css);
                break ;

            case "info":
                $(".roboyda_toast_icon").html(icon_info);
                $(".roboyda_toast_style").html(info_css);
                break ;
        }
    });

}



jQuery(document).ready(function ($) {

    $(".roboyda_toast_close").on("click" , function () {
        clearTimeout(save_time_out);
        $(".roboyda_toast_label").removeClass("active");
    })

});

