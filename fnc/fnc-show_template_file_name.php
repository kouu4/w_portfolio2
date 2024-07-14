<?php
/*
    管理バーに現在表示されているテンプレートファイル名を表示する
*/
function show_template_file_name( $wp_admin_bar ) {

    // 次のif文のコメントアウトを外すとデバッグモード時のみ動作するようになる
    // if ( defined('WP_DEBUG') && WP_DEBUG ) {

        global $template;
        $template_name = basename( $template, '.php' );
        $template_dir  = basename ( dirname( $template ) );

        // 管理バーにカスタムノードを追加
        $args = array(
            'id'    => 'custom_template_infoooo',
            'title' => 'テーマのディレクトリ名：' . $template_dir . '　テンプレートファイル名：' . $template_name,
            'meta'  => array( 'class' => 'custom-admin-bar-item' )
        );
        $wp_admin_bar->add_node( $args );

    // }

}
add_action( 'admin_bar_menu', 'add_custom_admin_bar_item', 100 );
