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

add_theme_support('post-thumbnails');

add_action('wp_enqueue_scripts', 'my_enqueue_styles');
// add_action('wp_enqueue_scripts', 'my_enqueue_scripts');
