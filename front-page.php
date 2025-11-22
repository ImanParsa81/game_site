<?php
get_header();
?>


<div class="pars_app">

    <main class="pars_main">
        <div class="container">

            <!-- Hero Section -->
            <section class="pars_hero_section ">
                <div class="row flex-column-reverse flex-md-row align-items-center">
                    <div class="col-12 col-md-6 text-center text-md-left">

                        <h1 class="pars_hero_title"><?= op_roboyad["home_page_text_title"] ?></h1>
                        <p class="pars_hero_subtitle"><?= op_roboyad["home_page_text_description"] ?></p>
                        <div class="pars_hero_ctas">
                            <button class="pars_cta_button">ورود/ ثبت نام</button>
                            <button class="pars_cta_secondary">درباره ما</button>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div
                                style=" background-image: url('<?= op_roboyad["home_page_image_baner"]["url"] ?>'); "

                                class="pars_hero_image" role="img" aria-label="Diverse group of children happily engaged with educational games on tablets."></div>
                    </div>
                </div>
            </section>

            <!-- Grade/Subject Cards -->
            <section class="pars_categories_section py-5">
                <h2 class="pars_section_title">انتخاب پایه تحصیلی</h2>
                <div class="row g-3">

                    <?php
                        $image_educations = op_roboyad["home_page_repeater_paye"];
                        foreach ( $image_educations as $key => $item ) {
                            ?>

                            <div class="col-6 col-md-4">
                                <a href="#" class="pars_category_card">
                                    <div class="pars_category_image" style="background-image: url(<?= $item["home_page_image_paye"]["url"] ?>);" aria-label="A young girl with glasses smiling and pointing at a colorful building block tower."></div>
                                    <h3 class="pars_category_title">  <?= $item["home_page_text_paye"] ?>  </h3>
                                </a>
                            </div>

                            <?php
                        }
                    ?>


                </div>
            </section>

            <!-- How It Works -->
            <section class="pars_how_it_works py-5">
                <h2 class="pars_section_title">چگونه کار می‌کند</h2>
                <div class="row g-4">
                    <div class=" item_how_to_work col-12 col-md-4">
                        <div class="pars_step_card">
                            <div class="pars_step_icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                    <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                                    <path d="M2 17l10 5 10-5"/>
                                    <path d="M2 12l10 5 10-5"/>
                                </svg>
                            </div>
                            <h3 class="pars_step_title">۱. انتخاب بازی</h3>
                            <p class="pars_step_desc">از بین ده‌ها بازی متنوع در موضوعات و مقاطع تحصیلی مختلف، انتخاب کنید.</p>
                        </div>
                    </div>
                    <div class=" item_how_to_work col-12 col-md-4">
                        <div class="pars_step_card">
                            <div class="pars_step_icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                    <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/>
                                    <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/>
                                </svg>
                            </div>
                            <h3 class="pars_step_title">۲. یاد بگیرید و بازی کنید</h3>
                            <p class="pars_step_desc">بازی‌های ما یادگیری مفاهیم را سرگرم‌کننده و تعاملی می‌کنند.</p>
                        </div>
                    </div>
                    <div class=" item_how_to_work col-12 col-md-4">
                        <div class="pars_step_card">
                            <div class="pars_step_icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                    <polyline points="22,12 18,12 15,21 9,3 6,12 2,12"/>
                                </svg>
                            </div>
                            <h3 class="pars_step_title">۳. پیگیری پیشرفت</h3>
                            <p class="pars_step_desc">در حین بازی، ضعف‌های یادگیری شناسایی و اصلاح می‌شوند .</p>                        </div>
                    </div>
                </div>
            </section>

            <!-- Testimonials -->
            <section class="pars_testimonials py-5">
                <h4 class="pars_testimonial_tag">نظرات کاربران</h4>
                <div class="row g-4 mt-4">
                    <div class="col-12 col-md-4">
                        <div class="pars_testimonial_card">
                            <div class="pars_rating">
                                <svg class="pars_star" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/>
                                </svg>
                                <svg class="pars_star" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/>
                                </svg>
                                <svg class="pars_star" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/>
                                </svg>
                                <svg class="pars_star" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/>
                                </svg>
                                <svg class="pars_star" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/>
                                </svg>
                            </div>
                            <p class="pars_testimonial_quote">دخترم حالا واقعاً از ریاضی هیجان‌زده است! بازی های آموزشی اعتماد به نفس او را کاملاً تغییر داده.</p>
                            <p class="pars_testimonial_author">- سارا رضایی والد</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="pars_testimonial_card">
                            <div class="pars_rating">
                                <svg class="pars_star" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/>
                                </svg>
                                <svg class="pars_star" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/>
                                </svg>
                                <svg class="pars_star" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/>
                                </svg>
                                <svg class="pars_star" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/>
                                </svg>
                                <svg class="pars_star" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/>
                                </svg>
                            </div>
                            <p class="pars_testimonial_quote">من از این بازی‌ها در کلاس برای تشویق و تمرین استفاده می‌کنم. دانش‌آموزان کاملاً درگیر می‌شوند.</p>
                            <p class="pars_testimonial_author"> - آقای محمد قلامی ، معلم کلاس سوم</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="pars_testimonial_card">
                            <div class="pars_rating">
                                <svg class="pars_star" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/>
                                </svg>
                                <svg class="pars_star" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/>
                                </svg>
                                <svg class="pars_star" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/>
                                </svg>
                                <svg class="pars_star" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/>
                                </svg>
                                <svg class="pars_star_half" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26" fill-opacity="0.5"/>
                                    <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77" fill="currentColor"/>
                                </svg>
                            </div>
                            <p class="pars_testimonial_quote">منبعی فوق‌العاده! طراحی عالی، آموزشی و مهم‌تر از همه، سرگرم‌کننده برای کودکان.</p>
                            <p class="pars_testimonial_author"> - کیان زارع آموزش در منزل </p>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </main>

</div>


<?php
get_footer();
?>


