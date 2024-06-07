<li class="works__item">
    <a href="<?php
                $url = get_post_meta(get_the_ID(), 'siteURL', true);
                if ($url) {
                    echo  esc_url($url);
                }
                ?>" class="works__link">
        <div class="works__body">
            <h3 class="works__ttl">
                <?php echo get_post_meta(get_the_ID(), 'title', true); ?>
                <br>
                <span class="works__usedskill">
                    <?php echo get_post_meta(get_the_ID(), 'usedSkills', true); ?>
                </span>
            </h3>
            <div class="works__description">
                <p class="works__text">
                    <?php echo get_post_meta(get_the_ID(), 'description', true); ?>
                </p>

                <p class="works__duration">
                    <?php echo get_post_meta(get_the_ID(), 'spentTimes', true); ?>
                </p>

                <!-- /.works__link -->
            </div>
            <!-- /.works__description -->
        </div>
        <!-- /.works__body -->
        <div class="works__imgContainer">
            <figure class="works__image">
                <?php
                if (has_post_thumbnail()) {
                    the_post_thumbnail('full'); // 'full'の代わりにサイズを指定できます
                }
                ?>
            </figure>
        </div>
        <!-- /.works__imgContainer -->
    </a>
</li>