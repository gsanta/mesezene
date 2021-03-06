<?php

function mesezene_files() {
    wp_enqueue_script('main-mesezene-js', get_theme_file_uri('js/scripts-bundled.js'), NULL, microtime(), true);
    wp_enqueue_style('roboto-font', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('mesezene_main_styles', get_stylesheet_uri(), NULL, microtime());
    wp_enqueue_style('mesezene_compiled_styles', get_theme_file_uri('build/style.css'), NULL, microtime());
}

add_action('wp_enqueue_scripts', 'mesezene_files');

function mesezene_features() {
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'mesezene_features');

?>