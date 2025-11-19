<style>

    .roboyda_toast_container {
        display: flex;
        justify-content: center;
        align-content: center;
        padding-right: 10px;
        padding-left: 10px;
    }

    .roboyda_toast_label {
        width: 100%;
        max-width: 629px;
        /*background-color: #FDE9E7;*/
        /*border: 1px solid #DF2A03;*/
        position: fixed;
        z-index: 9999;
        display: flex;
        justify-content: space-between;
        align-content: center;
        flex-wrap: nowrap;
        /*box-shadow: 0 0 13px -6px #DF2A03;*/
        transition: 0.5s ease all;
        bottom: -100px;
        opacity: 0;
        transform: scale(1.2);

        padding-right: 10px;
        padding-left: 10px;
    }

    .roboyda_toast_label_padding {
        display: flex;
        justify-content: space-between;
        width: 100%;
        border-radius: 8px;
        padding: 8px;
    }

    .roboyda_toast_label.active {
        transition: 0.5s ease all;
        bottom: 50px;
        opacity: 1;
        transform: scale(1);
    }

    .roboyda_toast_label_icon_text {
        display: flex;
        justify-content: start;
        align-content: center;
    }

    .roboyda_toast_icon {
        display: flex;
        justify-content: center;
        align-items: center;
        /*background-color: #DF2A03;*/
        border-radius: 8px;
        padding: 8px;
        width: fit-content;
        height: fit-content;
    }

    .roboyda_toast_icon svg {
        width: 100%;
        max-width: 30px;
        min-width: 27px;
        height: fit-content;
    }

    .roboyda_toast_text {
        display: flex;
        justify-content: center;
        align-content: center;
        flex-wrap: wrap;
        margin-right: 17px;
    }

    .roboyda_toast_text p {
        font-size: 14px;
        /*color: #c12200;*/
        font-weight: 600;
    }

    .roboyda_toast_close {
        display: flex;
        justify-content: center;
        align-content: center;
        flex-wrap: wrap;
        /*border-right: 3px solid #F6C6BC;*/
        padding-right: 9px;
    }

    .roboyda_toast_close:hover {
        cursor: pointer;
    }

    .roboyda_toast_close svg {
        width: 20px;
    }


    @media (max-width: 426px) {

        .roboyda_toast_text p {
            font-size: 14px;
        }

        .roboyda_toast_close svg {
            width: 15px;
        }

        .roboyda_toast_close {
            padding-right: 9px;
        }

        .roboyda_toast_icon svg {
            max-width: 20px;
            min-width: 20px;
        }

        .roboyda_toast_text {
            margin-right: 8px;
        }
    }



</style>


<div class=" container roboyda_toast_container ">

        <div class=" roboyda_toast_label">

            <div class="roboyda_toast_label_padding">

                <div class="roboyda_toast_label_icon_text">
                    <div class="roboyda_toast_icon">

                        <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="19" cy="19" r="19" fill="white"/>
                            <path d="M27.5508 10L10.0508 27.5" stroke="#D92C07" stroke-width="4" stroke-linecap="round"/>
                            <path d="M10.9473 10L28.4473 27.5" stroke="#D92C07" stroke-width="4" stroke-linecap="round"/>
                        </svg>

                    </div>
                    <div class="roboyda_toast_text">
                        <p> در فراید احراز هویت پیش آمده است </p>
                    </div>
                </div>

                <div class="roboyda_toast_close">

                    <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.5 2L2 21.5" stroke="#D92C07" stroke-width="4" stroke-linecap="round"/>
                        <path d="M3 2L22.5 21.5" stroke="#D92C07" stroke-width="4" stroke-linecap="round"/>
                    </svg>

                </div>

            </div>



        </div>
</div>


<div class="roboyda_toast_style">

</div>









