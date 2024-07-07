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
        </article>
<?php
    }
}
?>

<?php get_footer(); ?>