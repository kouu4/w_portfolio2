<div class="blog-recent">
    <h2 class="blog-recent__ttl">直近の記事</h2>
    <ul class="blog-recent__list">
        <?php
        $recent_posts = new WP_Query(array(
            'posts_per_page' => 3,
            'post__not_in' => array(get_the_ID()) // 現在の記事を除外
        ));
        if ($recent_posts->have_posts()) {
            while ($recent_posts->have_posts()) {
                $recent_posts->the_post();
        ?>
                <li class="blog-recent__item">
                    <a href="<?php the_permalink(); ?>" class="blog-recent__link">
                        <div class="blog-recent__itemInner">

                            <div class="blog-recent__body">
                                <span class="blog-recent__title"><?php the_title(); ?></span>
                                <div class="blog__info">
                                    <?php
                                    $categories = get_the_category();
                                    if (!empty($categories)) {
                                        echo '<div class="blog__categories">';
                                        foreach ($categories as $category) {
                                            echo '<span class="blog__category">' . $category->name . '</span>';
                                        }
                                        echo '</div>';
                                    };
                                    ?>
                                    <span class="blog__postDate">
                                        <?php the_date(); ?>
                                    </span>
                                </div>
                            </div>
                            <!-- /.blog-recent__textArea -->

                            <figure class="blog-recent__thumb">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('thumbnail'); ?>
                                <?php else : ?>
                                    <?php echo '<img src="' . get_template_directory_uri() . '/src/img/bicycle3.jpg">'; ?>
                                <?php endif; ?>
                            </figure>

                        </div>
                        <!-- /.blog-recent__inner -->
                    </a>
                </li>
        <?php
            }
            wp_reset_postdata(); // メインクエリをリセット
        }
        ?>
    </ul>
    <div class="blog-recent__allPosts">
        <a href="<?php echo esc_url(home_url('/all-posts')); ?>">すべて見る</a>
    </div>
    <!-- /.blog-recent__allPosts -->
</div>
<!-- /.blog__recentPosts -->