<?php get_header(); ?>

<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('blog-art'); ?>>
            <header class="blog-art__header">
                <?php if (has_post_thumbnail()) : ?>
                    <figure class="blog-art__thumb">
                        <?php the_post_thumbnail(); ?>
                    </figure>
                <?php endif; ?>
                <h1 class="blog-art__title"><?php the_title(); ?></h1>
            </header>
            <div class="blog-art__content">
                <?php the_content(); ?>
            </div>
            <div class="blog-art__nav">
                <div class="post-nav">

                    <?php
                    // 前の記事へのリンク
                    previous_post_link('<div class="post-nav__previous">%link</div>', '&laquo;前の記事');
                    ?>

                    <div class="post-nav__list">
                        <a href="<?php echo home_url('/all-posts'); ?>">記事一覧</a>
                    </div>

                    <?php
                    // 次の記事へのリンク
                    next_post_link('<div class="post-nav__next">%link</div>', '次の記事  &raquo;');
                    ?>

                </div>
            </div>
        </article>
<?php
    }
}
?>




<?php get_footer(); ?>