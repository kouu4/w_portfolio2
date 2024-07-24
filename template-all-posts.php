<?php get_header(); ?>



<section class="sec-blog" id="blog">
    <div class="sec-blog__ttl">
        <div class="headline">
            <h2 class="headline__main">BLOG</h2>
            <span class="headline__sub">ブログ</span>
        </div>
        <!-- /.headline -->
    </div>
    <!-- /.sec-blog__ttl -->
    <div class="sec-blog__content">
        <div class="blog">
            <ul class="blog__list">

                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                // カスタムクエリで全投稿記事を取得
                $all_posts_query = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => 10, // 1ページあたりの投稿数
                    'paged' => $paged,
                ));

                if ($all_posts_query->have_posts()) :
                    while ($all_posts_query->have_posts()) : $all_posts_query->the_post(); ?>
                        <?php get_template_part('loop', 'blog'); ?>
                <?php endwhile;
                else :
                    get_template_part('template-parts/content', 'none');
                endif;
                ?>
            </ul>

            <?php if ($all_posts_query->have_posts()) : ?>
                <div class="p-pagination">
                    <?php
                    // ページネーションを表示
                    the_posts_pagination(array(
                        'base'    => home_url('/all-posts/%_%'),
                        'format'  => 'page/%#%',
                        'current' => max(1, get_query_var('paged')),
                        'total'   => $all_posts_query->max_num_pages,
                        'mid_size' => 2,
                        'prev_text' => '&lt;&lt; PREV',
                        'next_text' => 'NEXT &gt;&gt;',
                    ));
                    ?>
                </div>
            <?php endif; ?>

            <?php wp_reset_postdata(); ?>

        </div>
        <!-- /.blog -->
    </div>
    <!-- /.sec-blog__content -->
</section>

<?php get_footer(); ?>