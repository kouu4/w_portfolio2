<?php
/**
 * Template Name: Post List Page
 */
?>



<?php get_header(); ?>



<section class="sec-blog" id="blog">
    <div class="sec-blog__ttl">
        <div class="headline">
            <h2 class="headline__main">BLOG</h2>
            <span class="headline__sub">(クリック/タップでサイトへジャンプします)</span>
        </div>
        <!-- /.headline -->
    </div>
    <!-- /.sec-blog__ttl -->
    <div class="sec-blog__content">
        <div class="blog">
            <ul class="blog__list">

                <?php
                $args = array(
                    'post_type' => 'post', 
                    'posts_per_page' => -1, // 取得する投稿数（-1は全ての投稿を取得）
                );

                $blog_query = new WP_Query($args);

                if ($blog_query->have_posts()) :
                    while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
                        <?php get_template_part('loop', 'blog'); ?>
                <?php endwhile;
                    wp_reset_postdata();
                endif;
                ?>



            </ul>
        </div>
        <!-- /.blog -->
    </div>
    <!-- /.sec-blog__content -->
</section>

<?php get_footer(); ?>