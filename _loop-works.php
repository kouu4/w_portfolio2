
<div class="card-gallery__body">

    <h3 class="card-gallery__ttl">
        <?php echo get_post_meta(get_the_ID(), 'title', true); ?>
    </h3>
    <p class="card-gallery__description">
        <?php echo get_post_meta(get_the_ID(), 'description', true); ?>
    </p>
    <div class="card-gallery__inner">
        <p class="card-gallery__spentTime">
            所要時間：<?php echo get_post_meta(get_the_ID(), 'spentTimes', true); ?>
        </p>
        <p class="card-gallery__usedSkills">
            使用技術：<?php echo get_post_meta(get_the_ID(), 'usedSkills', true); ?>
        </p>
        <?php
        $url = get_post_meta(get_the_ID(), 'siteURL', true);
        if ($url) {
            echo '<a class="card-gallery__link" href="' . esc_url($url) . '">サイトを見る</a>';
        }
        ?>
    </div>
    <!-- /.card-gallery__inner -->
</div>
<!-- /.card-gallery__body -->
<div class="card-gallery__visualBox">
    <?php
    if (has_post_thumbnail()) {
		$url = get_post_meta(get_the_ID(), 'siteURL', true);
        echo '<a class="card-gallery__link" href="' . esc_url($url) . '">
                <figure class="card-gallery__thumb">';
        the_post_thumbnail('full'); // 'full'の代わりにサイズを指定できます
        echo '</figure>
            </a>';
    }
    ?>




</div>