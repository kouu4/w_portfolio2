<?php
//各投稿一覧ページにアイキャッチ画像用の列を追加
add_filter('manage_posts_columns', 'add_custom_post_columns');    //投稿 & カスタム投稿
add_filter('manage_pages_columns', 'add_custom_post_columns');   //固定ページ
if (!function_exists('add_custom_post_columns')) {
    function add_custom_post_columns($columns)
    {
        global $post_type;
        if (in_array($post_type, array('post', 'page', 'blog'))) { //列を追加するタイプをここで指定
            $columns['thumbnail'] = 'アイキャッチ画像';    //カラム表示名
        }
        return $columns;
    }
}
//サムネイル画像を表示
add_action('manage_posts_custom_column', 'output_custom_post_columns', 10, 2);  //投稿 & カスタム投稿(階層構造が無効)
add_action('manage_pages_custom_column', 'output_custom_post_columns', 10, 2);  //固定ページ & カスタム投稿(階層構造が有効)
if (!function_exists('output_custom_post_columns')) {
    function output_custom_post_columns($column_name, $post_id)
    {
        if ('thumbnail' === $column_name) {
            $thumb_id  = get_post_thumbnail_id($post_id);
            if ($thumb_id) {
                $thumb_img = wp_get_attachment_image_src($thumb_id, 'medium');  //サイズはご自由に
                echo '<img src="', $thumb_img[0], '" width="160px">';
            } else {
                echo 'アイキャッチ画像が<br>設定されていません';
            }
        }
    }
}
