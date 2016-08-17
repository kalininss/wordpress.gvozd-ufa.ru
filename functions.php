<?php

// Menu registration
function theme_register_nav_menu() {
	register_nav_menu('main', 'Главное меню');
}
add_action( 'after_setup_theme', 'theme_register_nav_menu' );

// support thumbnail
add_theme_support('post-thumbnails');

// clean wp-head()
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'rsd_link' );
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');

// add theme-options
require_once ( get_stylesheet_directory() . '/theme-options.php' );

// remove standart gallery and include our template
remove_shortcode('gallery', 'gallery_shortcode');
add_shortcode('gallery', 'owl_gallery_shortcode');
require_once ( get_stylesheet_directory() . '/owl-photo.php' );

// change image size
update_option('large_size_w', 399);
update_option('large_size_h', 399);
update_option('thumbnail_crop', true);