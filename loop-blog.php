<li class="blog__item">
    <a href="<?php the_permalink(); ?>" class="blog__link">
        <div class="blog__body">
            <h3 class="blog__ttl">
                <?php the_title(); ?>
            </h3>
            <div class="blog__info">
                <?php
                $categories = get_the_category();
                if (! empty($categories)) {
                    echo '<div class="blog__categories">';
                    foreach ($categories as $category) {
                        echo '<span class="blog__category">' . $category -> name . '</span>';
                    }
                    echo '</div>';
                };
                ?>
                <span class="blog__postDate">
                    <?php the_date(); ?>
                </span>
            </div>
            <!-- /.blog__info -->
            <div class="blog__description">
                <p class="blog__text">
                    <?php the_excerpt(); ?>
                </p>
            </div>
            <!-- /.blog__description -->
        </div>
        <!-- /.blog__body -->
        <div class="blog__imgContainer">
            <figure class="blog__image">
                <?php
                if (has_post_thumbnail()) {
                    the_post_thumbnail('full');
                } else {
                    echo '<img src="' . get_template_directory_uri() . '/src/img/bicycle3.jpg">';
                }
                ?>
            </figure>
        </div>
        <!-- /.blog__imgContainer -->
    </a>
    <!-- /.blog__link -->
</li>