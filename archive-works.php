<?php get_header(); ?>

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
        </div>
        <!-- /.works -->
    </div>
    <!-- /.sec-works__content -->
</section>

<?php get_footer(); ?>