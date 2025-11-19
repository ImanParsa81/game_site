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
                    <div class="col-6 col-md-4">
                        <a href="#" class="pars_category_card">
                            <div class="pars_category_image" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuD6tZqYnQfLBoUz7m56p-z7NocHqc7y0QR-vRagj0lVJQUtzx5UHrpS_bsaTNH8ayBfvNNz3oGZFGxENuitHWIwHeZoux6eouX6dR-skOETou-zTG0LJSaH4ahY-C3KcloPvLKBM4zEz05k4WzsVfoyAKJyxadmtYF1ycw-fO1L_xUrPwkBUZ82jxqmsfAhL-ILfmFJT7UyE_rlR9mBSaFcm_8Ka3ZzuUfsmZTVfLphVf3lhKYpDfDma8Xpt4mnF_bugUi5ZL6XD6A');" aria-label="A young girl with glasses smiling and pointing at a colorful building block tower."></div>
                            <h3 class="pars_category_title"> اول دبستان </h3>
                        </a>
                    </div>
                    <div class="col-6 col-md-4">
                        <a href="#" class="pars_category_card">
                            <div class="pars_category_image" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDTu6iitjpqYrAcNlkFLPUGBTqMLtTMRVFwN9yPJNEAy-lqqhtyHGbVl-Z4VKf88_yRdTHX5zmm7rqwVJ9tD9jN5qLufm1GuRisGQgX-o6lwNP3GTOkkFCdeRvack2ZpZsCiJREYEj0O52ROpWALLCQ9GjulB4ZUZk63S_FNw8qf8et6_F6lgGemcOup8SIbZMZ452QTRaUj4JLZWRW9drIK_agiAokWn4uW8SBfbbS_q-d-xLs8QaXYcxeUFzJ291Ikk1WVyi9K58');" aria-label="A smiling boy doing a science experiment with a test tube and a beaker."></div>
                            <h3 class="pars_category_title">اول دبستان</h3>
                        </a>
                    </div>
                    <div class="col-6 col-md-4">
                        <a href="#" class="pars_category_card">
                            <div class="pars_category_image" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAKGgaAti1XpNvSq9eA1t-g2kKazPn9LOo-duLAY-O1OmMtE7Zh9R0Vg9Pme39Kx5-WzUqmMrt1FCRBzZydGMFo5ECsBkG1y6XOZcCge9xrLVtHRa7XHPNj4q3_9H5itmrAIJUQJIZKzpwLZ5XMW2SrNPnQxM5-H08hGqazpvEKXF-sv1kOP-mbP1gxgl4Fh27L4KZbZ13zhS9JM5eLxVM0wZdZNpPJ6LD7byKD5nqTVzlgvtmrC-iGi8VqO1n4T2ZRi0roTFHcryQ');" aria-label="Two children collaborating on a puzzle map of the world on a wooden floor."></div>
                            <h3 class="pars_category_title">3rd Grade</h3>
                        </a>
                    </div>
                    <div class="col-6 col-md-4">
                        <a href="#" class="pars_category_card">
                            <div class="pars_category_image" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAmdC1y4BmkUBEA1cZ7o2D32g8t0fYUld_RCvKJKxJTw1-ug6TPTT-Mjjonavu8eMXDsFk9vxBqtun7QC74oEd8bQDkbAcN3MnjSq0Nf0LSYGN0VRQwdvXXzh1XdubfoizcnMZ4ggcrvfZv8ch6VwdQF_QPi4dYUyyqdLpxrCUc5pJBm3BG23INtFze3bzuQ3-EzO_d7i5fcFJIFtLRMAh1vh9p7IfOhZiFLjImmBEybGwDA-EHTtWJCnq5JXq7bg45sgxHv5xgQeU');" aria-label="A colorful abacus and wooden number blocks on a bright yellow background."></div>
                            <h3 class="pars_category_title">Math</h3>
                        </a>
                    </div>
                    <div class="col-6 col-md-4">
                        <a href="#" class="pars_category_card">
                            <div class="pars_category_image" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAjsaf4LHXqBnome8bY1mu1oWCZ0ytc92YnQadtVjhIOvCnlQXSQ1MMK9OQkzFBho7L9OezZUrnrZxp4na9aipkWzrBtTuQjGADebK0fDFBFhIeDmpzowxbkBU2S6_jrS0uLvIRZ9Xcvj3WG8u2XuwYRDX6--nEZYZFESKmw5mMkTy9m4zpBUmunkihseMyI3aVd4hTcgXyQbPyinhg9fEvx0tVVzzQHy48pp1QMcxSJ03_ojAQPVcdMnKkRYXxS1QBfxO_MWzPwAA');" aria-label="A young child reading a pop-up book with fantasy creatures."></div>
                            <h3 class="pars_category_title">Reading</h3>
                        </a>
                    </div>
                    <div class="col-6 col-md-4">
                        <a href="#" class="pars_category_card">
                            <div class="pars_category_image" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBES4Y8AZzuUyTAYAlNOybrgC2tEb0nlO3bJBFf3kKbhiHtlDvd2idjOA3lnqHZCFcn51d4pop85vads7fZdxX6VkEvbcP_Xw8gokLC8ksrdaDORQ0nTaDlq44q0Sb9qo6nIsocB5dVjSWUc8OMarPKRk8GIuPPVqDECJ0WHF8SSETGCpntqjR8imtqp9_Kzzfx6bijFgxg0MiCMiBmhA454LKU-KTvaA5H-roizAgxgK70yqKVPZJl6XL709lIhv5v-JEw9vCNEEM');" aria-label="A microscope with colorful slides next to a model of the solar system."></div>
                            <h3 class="pars_category_title">Science</h3>
                        </a>
                    </div>
                </div>
            </section>

            <!-- How It Works -->
            <section class="pars_how_it_works py-5">
                <h2 class="pars_section_title">How It Works</h2>
                <div class="row g-4">
                    <div class="col-12 col-md-4">
                        <div class="pars_step_card">
                            <div class="pars_step_icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                    <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                                    <path d="M2 17l10 5 10-5"/>
                                    <path d="M2 12l10 5 10-5"/>
                                </svg>
                            </div>
                            <h3 class="pars_step_title">1. Choose a Game</h3>
                            <p class="pars_step_desc">Pick from dozens of games across subjects and grade levels.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="pars_step_card">
                            <div class="pars_step_icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                    <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/>
                                    <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/>
                                </svg>
                            </div>
                            <h3 class="pars_step_title">2. Learn &amp; Play</h3>
                            <p class="pars_step_desc">Our games make learning concepts fun and interactive.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="pars_step_card">
                            <div class="pars_step_icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                    <polyline points="22,12 18,12 15,21 9,3 6,12 2,12"/>
                                </svg>
                            </div>
                            <h3 class="pars_step_title">3. Track Progress</h3>
                            <p class="pars_step_desc">Parents and teachers can easily monitor learning milestones.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Testimonials -->
            <section class="pars_testimonials py-5">
                <h4 class="pars_testimonial_tag">Loved by Parents and Teachers</h4>
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
                            <p class="pars_testimonial_quote">"My daughter is actually excited about math now! GameLearn has been a game-changer for her confidence."</p>
                            <p class="pars_testimonial_author">- Sarah J., Parent</p>
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
                            <p class="pars_testimonial_quote">"I use these games in my classroom as a reward and for practice. The students are so engaged."</p>
                            <p class="pars_testimonial_author">- Mr. David Chen, 3rd Grade Teacher</p>
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
                            <p class="pars_testimonial_quote">"A fantastic resource. Well-designed, educational, and most importantly, fun for the kids."</p>
                            <p class="pars_testimonial_author">- Emily R., Homeschooling Parent</p>
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


