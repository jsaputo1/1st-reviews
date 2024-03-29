<?php

//Adds script and stylesheets
function first_reviews_files() {
    wp_enqueue_style('first_reviews_styles', get_stylesheet_uri('/build/css/style.min.css'), NULL, microtime());
    wp_enqueue_style('fonts', "https://fonts.googleapis.com/css?family=Lato&display=swap");
    wp_enqueue_style('fonts', "https://fonts.googleapis.com/css2?family=PT+Sans+Narrow:wght@400;700&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap");
    // wp_enqueue_script('jquery');
    wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js');
    wp_enqueue_script('load-fa', 'https://kit.fontawesome.com/e785bdc78c.js');
    wp_enqueue_script('boostrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array('jquery'), '20210502', true );
}

add_action('wp_enqueue_scripts', 'first_reviews_files');

//Adds theme support - ex: title tag
function first_reviews_features() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus (array(
        'primary' => 'Primary Menu',
    ));
}

add_action('after_setup_theme', 'first_reviews_features');

// Relative date & time
function wpse_relative_date() {
    
    return human_time_diff( get_the_time('U'), current_time( 'timestamp' ) ) . ' ago';
    }
add_filter( 'get_the_date', 'wpse_relative_date' ); // for posts and pages
// add_filter( 'get_comment_date', 'wpse_relative_date' ); // for comments


//Theme Options
if( function_exists('acf_add_options_page') ) {

acf_add_options_page('Social Icons');
acf_add_options_page('Footer');

	
}

/**
* Renders the different components defined in ACF Flexible Content.
*
* @return void
*/
function first_reviews_render_flexible_content() {
    $template_path = get_template_directory();
    $acf_path = $template_path . '/inc/acf-components/';
    
    while ( have_rows( 'components' ) ) : the_row();
    echo '<!-- ' . $acf_path . get_row_layout() . '.php -->';
    include $acf_path . get_row_layout() . '.php';
    
    endwhile;
    
    }

/** 
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

?>