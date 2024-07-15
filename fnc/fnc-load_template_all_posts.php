<?php
/*
    "投稿"のすべての記事一覧を表示するテンプレートを読み込む
*/


// fnc/fnc-load_template_all_posts.php

// リライトルールを追加
function add_all_posts_rewrite_rule() {
    add_rewrite_rule(
        '^all-posts/?$',
        'index.php?all_posts=1',
        'top'
    );
}
add_action('init', 'add_all_posts_rewrite_rule');

// クエリ変数を追加
function add_all_posts_query_var($vars) {
    $vars[] = 'all_posts';
    return $vars;
}
add_filter('query_vars', 'add_all_posts_query_var');

// テンプレートをロード
function load_all_posts_template($template) {
    if (get_query_var('all_posts')) {
        $new_template = locate_template(array('template-all-posts.php'));
        if ('' != $new_template) {
            return $new_template;
        }
    }
    return $template;
}
add_filter('template_include', 'load_all_posts_template');
