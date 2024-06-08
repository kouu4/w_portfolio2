<div class="sec-about__introduction">
    <div class="introduction">
        <table class="introduction__table">
            <tbody>
                <tr class="introduction__row">
                    <th class="introduction__head">氏名</th>
                    <td class="introduction__data">
                        <?php echo get_post_meta(get_the_ID(), 'name', true); ?>
                    </td>　　<!-- カスタム投稿でつくる -->　　
                </tr>
                <tr class="introduction__row">
                    <th class="introduction__head">居住地</th>
                    <td class="introduction__data">
                    <?php echo get_post_meta(get_the_ID(), 'residence', true); ?>
                    </td>
                </tr>
                </tr>
                <tr class="introduction__row">
                    <th class="introduction__head">経歴</th>
                    <td class="introduction__data">
                    <?php echo get_post_meta(get_the_ID(), 'career', true); ?>
                    </td>
                </tr>
                <tr class="introduction__row">
                    <th class="introduction__head">趣味</th>
                    <td class="introduction__data">
                    <?php echo get_post_meta(get_the_ID(), 'hobby', true); ?>
                    </td>
                </tr>
            </tbody>
        </table>
        <figure class="introduction__portrait">
        <?php
                if (has_post_thumbnail()) {
                    the_post_thumbnail('full'); // 'full'の代わりにサイズを指定できます
                }
                ?>
        </figure>
    </div>
    <!-- /.introduction -->
</div>
<!-- /.sec-about__introduction -->