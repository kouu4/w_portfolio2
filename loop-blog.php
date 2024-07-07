<li class="blog__item">
    <a href="<?php the_permalink(); ?>" class="blog__link">
        <div class="blog__body">
            <h3 class="blog__ttl">
                <?php the_title(); ?>
            </h3>
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
                    the_post_thumbnail('full'); // 'full'の代わりにサイズを指定できます
                }
                ?>
            </figure>
        </div>
        <!-- /.blog__imgContainer -->
    </a>
    <!-- /.blog__link -->
</li>