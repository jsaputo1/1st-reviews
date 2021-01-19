<?php

//Adds script and stylesheets
function first_reviews_files() {
    wp_enqueue_style('first_reviews_styles', get_stylesheet_uri('/build/css/style.min.css'), NULL, microtime());
    wp_enqueue_style('fonts', "https://fonts.googleapis.com/css?family=Lato&display=swap");
    wp_enqueue_script('load-fa', 'https://kit.fontawesome.com/e785bdc78c.js');
}

add_action('wp_enqueue_scripts', 'first_reviews_files');

//Adds theme support - ex: title tag
function first_reviews_features() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus (array(
        'nav' => 'Nav',
    ));
}

add_action('after_setup_theme', 'first_reviews_features');

// Relative date & time
function wpse_relative_date() {
    
    return human_time_diff( get_the_time('U'), current_time( 'timestamp' ) ) . ' ago';
    }
  add_filter( 'get_the_date', 'wpse_relative_date' ); // for posts and pages
  // add_filter( 'get_comment_date', 'wpse_relative_date' ); // for comments

?>