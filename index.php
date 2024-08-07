<?php get_header(); ?>

<main class="main">



    <div class="fv">
        <div id="js-slide" class="fv__photo">
            <img src="<?php echo get_template_directory_uri(); ?>/src/img/fv/fv1.webp" alt="作業風景の画像">
            <img src="<?php echo get_template_directory_uri(); ?>/src/img/fv/fv2.webp" alt="チーム作業の画像">
            <img src="<?php echo get_template_directory_uri(); ?>/src/img/fv/fv3.webp" alt="web設計の画像">
            <img src="<?php echo get_template_directory_uri(); ?>/src/img/fv/fv4.webp" alt="PCの画像">
            <div class="fv__msgAnchor">
                <div class="fv__message">
                    <p class="fv__text">KT PORTFOLIO</p>
                    <p class="fv__text">HTML / CSS</p>
                    <p class="fv__text">JavaScript</p>
                    <p class="fv__text">WordPress</p>
                </div>
                <!-- /.fv__message -->
            </div>
            <!-- /.msgAnchor -->
        </div>
        <!-- /.fv__photo -->
    </div>
    <!-- /.fv -->


    <section class="sec-slide" id="making">
        <div class="sec-slide__ttl">
            <div class="headline">
                <h2 class="headline__main">MAKING</h2>
                <span class="headline__sub">webサイトの作り方</span>
            </div>
            <!-- /.headline -->
        </div>
        <!-- /.sec-about__ttl -->

        <div class="sec-slide__slide">
            <div class="slide">
                <div class="slide__item">
                    <!-- スライド -->
                    <iframe src="https://docs.google.com/presentation/d/e/2PACX-1vQQnODu7dlpWd3tgtE-bjN-tSq8wTj4Pae-sf8Z6kN8vQOcTtpziVgG4ylYZycawup_F5iFXAh5tiBW/embed?start=false&loop=true&delayms=3000" frameborder="0" width="800" height="450" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
                </div>
                <!-- /.slide__item -->
            </div>
            <!-- /.slide -->
        </div>
        <!-- /.sec-slide__slide -->

    </section>



    <section class="sec-blog" id="blog">
        <div class="sec-blog__ttl">
            <div class="headline">
                <h2 class="headline__main">BLOG</h2>
                <span class="headline__sub">ブログ</span>
            </div>
            <!-- /.headline -->

            <div class="blog__categories-index">
                <?php
                $categories = get_categories();
                if (!empty($categories)) {
                    foreach ($categories as $category) {
                        $category_link = get_category_link($category->term_id);
                        echo '<a href="' . $category_link . '"class="blog__category">' . $category->name . '</a>';
                    }
                }
                ?>
            </div>

        </div>
        <!-- /.sec-blog__ttl -->
        <div class="sec-blog__content">
            <div class="blog">
                <ul class="blog__list">

                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 6,
                    );

                    $post_query = new WP_Query($args);

                    if ($post_query->have_posts()) :
                        while ($post_query->have_posts()) : $post_query->the_post();
                    ?>
                            <?php get_template_part('loop', 'blog'); ?>

                    <?php endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>

                </ul>
                <div class="blog__moreInfo">
                    <a href="<?php echo esc_url(home_url('/all-posts')); ?>" class="btn">
                        その他の記事はこちら
                        <span class="btn__decoration">
                            +
                        </span>
                    </a>
                </div>
                <!-- /.blog__moreInfo -->
            </div>
            <!-- /.blog -->
        </div>
        <!-- /.sec-blog__content -->
    </section>




    <section class="sec-works" id="works">
        <div class="sec-works__ttl -txt--white">
            <div class="headline">
                <h2 class="headline__main">WORKS</h2>
                <span class="headline__sub">(クリック/タップでサイトへジャンプします)</span>
            </div>
            <!-- /.headline -->
        </div>
        <!-- /.sec-works__ttl -->
        <div class="sec-works__content">
            <div class="works">
                <ul class="works__list">


                    <?php
                    $args = array(
                        'post_type' => 'works', // カスタム投稿タイプを指定
                        'posts_per_page' => 6, // 取得する投稿数（-1は全ての投稿を取得）
                    );

                    $works_query = new WP_Query($args);

                    if ($works_query->have_posts()) :
                        while ($works_query->have_posts()) : $works_query->the_post(); ?>
                            <?php get_template_part('loop', 'works'); ?>
                    <?php endwhile;
                        wp_reset_postdata(); // カスタムクエリをリセット
                    endif;
                    ?>



                </ul>
                <div class="works__moreInfo">
                    <a href="<?php echo esc_url(get_post_type_archive_link('works')); ?>" class="btn">
                        その他の制作物はこちら
                        <span class="btn__decoration">
                            +
                        </span>
                    </a>
                </div>
                <!-- /.works__moreInfo -->
            </div>
            <!-- /.works -->
        </div>
        <!-- /.sec-works__content -->
    </section>

    <section class="sec-about" id="about">
        <div class="sec-about__ttl">
            <div class="headline">
                <h2 class="headline__main">ABOUT</h2>
                <span class="headline__sub">自己紹介</span>
            </div>
            <!-- /.headline -->
        </div>
        <!-- /.sec-about__ttl -->

        <div class="sec-about__body">

            <?php
            $args = array(
                'post_type' => 'about_me', // カスタム投稿タイプを指定
                'posts_per_page' => -1, // 取得する投稿数（-1は全ての投稿を取得）
            );

            $about_me_query = new WP_Query($args);

            if ($about_me_query->have_posts()) :
                while ($about_me_query->have_posts()) : $about_me_query->the_post(); ?>
                    <?php get_template_part('loop', 'about_me'); ?>
            <?php endwhile;
                wp_reset_postdata(); // カスタムクエリをリセット
            endif;
            ?>

            <div class="sec-about__skills">
                <div class="skills">
                    <ul class="skills__list">

                        <li class="skills__item">
                            <div class="skills__body">
                                <h3 class="skills__ttl">HTML</h3>
                            </div>
                            <!-- /.skills__body -->
                            <figure class="skills__image">
                                <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/html.png" alt="HTMLのイメージアイコン">
                            </figure>
                        </li>

                        <li class="skills__item">
                            <div class="skills__body">
                                <h3 class="skills__ttl">CSS</h3>
                            </div>
                            <!-- /.skills__body -->
                            <figure class="skills__image">
                                <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/css.png" alt="CSSのイメージアイコン">
                            </figure>
                        </li>

                        <li class="skills__item">
                            <div class="skills__body">
                                <h3 class="skills__ttl">JavaScript<br>jQuery</h3>
                            </div>
                            <!-- /.skills__body -->
                            <figure class="skills__image">
                                <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/js.png" alt="JavaScriptのイメージアイコン">
                            </figure>
                        </li>

                        <li class="skills__item">
                            <div class="skills__body">
                                <h3 class="skills__ttl">WordPress</h3>
                            </div>
                            <!-- /.skills__body -->
                            <figure class="skills__image">
                                <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/wordpress.png" alt="WordPressのイメージアイコン">
                            </figure>
                        </li>

                    </ul>
                </div>
                <!-- /.skills -->
            </div>
            <!-- /.sec-about__skills -->
        </div>
        <!-- /.sec-about__body -->
    </section>

    <section class="sec-faq" id="faq">
        <div class="sec-faq__ttl">
            <div class="headline">
                <h2 class="headline__main">FAQ</h2>
                <span class="headline__sub">よくあるご質問</span>
            </div>
            <!-- /.headline -->
        </div>
        <!-- /.sec-faq__ttl -->
        <div class="sec-faq__body">
            <div class="accordion">
                <div class="accordion-item">
                    <div class="accordion-title">デザインの依頼は可能でしょうか？</div>
                    <div class="accordion-content">現在、デザインのご依頼は受け付けておりません。<br>デザインカンプをご用意の上、ご依頼いただけますと幸いです。</div>
                </div>
                <!-- /.accordion-item -->
                <div class="accordion-item">
                    <div class="accordion-title">地方ですが発注は可能でしょうか？</div>
                    <div class="accordion-content">もちろん可能です。<br>お気軽にお申し付けください。</div>
                </div>
                <!-- /.accordion-item -->
                <div class="accordion-item">
                    <div class="accordion-title">レスポンシブデザイン対応はしていますか？</div>
                    <div class="accordion-content">はい、レスポンシブデザインに対応したwebサイトを作成しております。</div>
                </div>
                <!-- /.accordion-item -->
                <div class="accordion-item">
                    <div class="accordion-title">制作期間はどのくらいですか？</div>
                    <div class="accordion-content">webサイトの規模や機能によって異なります。<br>一度お問合せくださいませ。</div>
                </div>
                <!-- /.accordion-item -->
            </div>
            <!-- /.accordion -->
        </div>
        <!-- /.sec-faq__body -->
    </section>

    <section class="sec-contact" id="contact">
        <div class="sec-contact__ttl">
            <div class="headline">
                <h2 class="headline__main">CONTACT</h2>
                <span class="headline__sub">お問合せ</span>
            </div>
            <!-- /.headline -->
        </div>
        <!-- /.sec-contact__ttl -->
        <div class="sec-contact__body">
            <div class="contactForm">
                <?php echo do_shortcode('[contact-form-7 id="5710bfe" title="contact"]'); ?>
            </div>
            <!-- /.contactForm -->
        </div>
        <!-- /.sec-contact__body -->
    </section>

</main>


<?php get_footer(); ?>