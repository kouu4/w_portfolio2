<?php
function my_enqueue_styles()
{
    wp_enqueue_style('ress', '//unpkg.com/ress/dist/ress.min.css', array(), null, 'all');
    wp_enqueue_style('style', get_stylesheet_uri(), array('ress'), null, 'all');
}

// function my_enqueue_scripts()
// {
//     wp_enqueue_script('jquery');
//     wp_enqueue_script('fv-js', get_template_directory_uri() . '/src/js/fv.js', array('jquery'), null, true);
//     wp_enqueue_script('fixHeader-js', get_template_directory_uri() . '/src/js/fixHeader.js', array('jquery'), null, true);
//     wp_enqueue_script('openbtn-js', get_template_directory_uri() . '/src/js/openbtn.js', array('jquery'), null, true);
//     wp_enqueue_script('accordion-js', get_template_directory_uri() . '/src/js/accordion.js', array('jquery'), null, true);
// }

//WPのバージョン情報非表示
remove_action('wp_head', 'wp_generator');

add_theme_support('post-thumbnails');

add_action('wp_enqueue_scripts', 'my_enqueue_styles');
// add_action('wp_enqueue_scripts', 'my_enqueue_scripts');



// fnc
get_template_part('fnc/fnc-enable_eyecatches_in_list'); //投稿一覧にアイキャッチを表示
// get_template_part('fnc/fnc-admin_menu');  // 管理画面の項目を非表示にする
get_template_part('fnc/fnc-show_template_file_name'); // どのテンプレートファイルが表示されているのか管理バーに表示する

