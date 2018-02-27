<?php


function wordpressCancoicode_ressources(){
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/font-awesome-4.7.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css');

	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.2.1.min.js' );
	wp_enqueue_script( 'Bootstrap.js', get_template_directory_uri() . '/assets/js/bootstrap.min.js' );
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.min.js' );
	wp_enqueue_script( 'font-awesome', get_template_directory_uri() . '/assets/js/fontawesome.min.js' );
}
add_action('wp_enqueue_scripts', 'wordpressCancoicode_ressources');

register_nav_menus( array(
'menu-1' => esc_html__( 'Primary', 'theme-textdomain' ),
) );

if (function_exists('add_theme_support')) {
 add_theme_support('post-thumbnails');
};


add_filter('nav_menu_css_class', 'add_classes_on_li', 1, 3);
function add_classes_on_li($classes, $item, $args)
{
    $classes[] = 'nav-item';

    return $classes;
}

add_filter('wp_nav_menu', 'add_classes_on_a');
function add_classes_on_a($ulclass)
{
    return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
}


?>
