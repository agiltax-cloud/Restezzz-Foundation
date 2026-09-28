<?php
if (!defined('ABSPATH')) { exit; }

function restezzz_setup(): void {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form','comment-form','comment-list','gallery','caption','style','script']);
    add_theme_support('responsive-embeds');
    add_theme_support('align-wide');
    add_theme_support('custom-logo');

    register_nav_menus([
        'primary' => __('Primary Navigation', 'restezzz'),
        'footer'  => __('Footer Navigation', 'restezzz'),
    ]);
}
add_action('after_setup_theme', 'restezzz_setup');

function restezzz_assets(): void {
    wp_enqueue_style('restezzz-style', get_stylesheet_uri(), [], wp_get_theme()->get('Version'));
}
add_action('wp_enqueue_scripts', 'restezzz_assets');
