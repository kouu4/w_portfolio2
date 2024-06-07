<?php
$args = array(
    'post_type' => 'works', // カスタム投稿タイプを指定
    'posts_per_page' => -1, // 取得する投稿数（-1は全ての投稿を取得）
);

$works_query = new WP_Query($args);

if ($works_query->have_posts()) :
    while ($works_query->have_posts()) : $works_query->the_post(); ?>
        <div class="gallery__card card-gallery">
            <?php get_template_part('loop', 'works'); ?>
        </div>
        <!-- /.gallery__card.card-gallery -->
<?php endwhile;
    wp_reset_postdata(); // カスタムクエリをリセット
endif;
?>