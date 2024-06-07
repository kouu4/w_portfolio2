<?php get_header(); ?>

<body>

    <header class="header">

        <div class="header__inner">
            <div class="header__body">
                <h1 class="header__ttl">
                    <a href="#" class="logo">
                        KT PORTFOLIO
                    </a>
                </h1>
                <button id="openbtn" class="openbtn">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
            <!-- /.header__body -->

            <div id="overlay" class="header__overlay overlay">
                <nav class="overlayMenu__nav">
                    <ul class="overlayMenu__list">
                        <li class="overlayMenu__item">
                            <a href="<?php echo home_url(); ?>" class="overlayMenu__link">
                                Top
                            </a>
                        </li>
                        <li class="overlayMenu__item">
                            <a href="#about" class="overlayMenu__link">
                                ABOUT
                            </a>
                        </li>
                        <li class="overlayMenu__item">
                            <a href="#works" class="overlayMenu__link">
                                WORKS
                            </a>
                        </li>
                        <li class="overlayMenu__item">
                            <a href="#faq" class="overlayMenu__link">
                                FAQ
                            </a>
                        </li>
                        <li class="overlayMenu__item">
                            <a href="#contact" class="overlayMenu__link">
                                CONTACT
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- /#overlay.overlay -->
        </div>
        <!-- /.header__inner -->



        <div class="header__fv">
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

    </header>


    <main class="main">

        <section class="sec-about" id="about">　　<!-- aboutはMATERIAL SEARCHを流用 -->　　
            <div class="sec-about__ttl">
                <div class="headline">
                    <h2 class="headline__main">ABOUT</h2>
                    <span class="headline__sub">自己紹介</span>
                </div>
                <!-- /.headline -->
            </div>
            <!-- /.sec-about__ttl -->

            <div class="sec-about__body">
                <div class="sec-about__introduction">
                    <div class="introduction">
                        <table class="introduction__table">
                            <tbody>
                                <tr class="introduction__row">
                                    <th class="introduction__head">氏名</th>
                                    <td class="introduction__data">〇〇〇〇</td>　　<!-- カスタム投稿でつくる -->　　
                                </tr>
                                <tr class="introduction__row">
                                    <th class="introduction__head">居住地</th>
                                    <td class="introduction__data">〇〇〇〇</td>
                                </tr>
                                </tr>
                                <tr class="introduction__row">
                                    <th class="introduction__head">経歴</th>
                                    <td class="introduction__data">
                                        〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇
                                    </td>
                                </tr>
                                <tr class="introduction__row">
                                    <th class="introduction__head">趣味</th>
                                    <td class="introduction__data">〇〇〇〇</td>
                                </tr>
                            </tbody>
                        </table>
                        <figure class="introduction__portrait">
                            <img src="<?php echo get_template_directory_uri(); ?>/src/img/640x480.png" alt="サイトオーナーの写真">
                        </figure>
                    </div>
                    <!-- /.introduction -->
                </div>
                <!-- /.sec-about__introduction -->

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





        <section class="sec-works" id="works">
            <div class="sec-works__ttl -txt--white">
                <div class="headline">
                    <h2 class="headline__main">WORKS</h2>
                    <span class="headline__sub">制作物</span>
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
                            'posts_per_page' => -1, // 取得する投稿数（-1は全ての投稿を取得）
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
                        <a href="　　" class="btn">
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