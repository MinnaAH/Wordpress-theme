<?php
require_once('wp-bootstrap-navwalker.php');

function bootstrap_enqueue_styles() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
    $dependencies = array('bootstrap');
	wp_enqueue_style( 'bootstrapstarter-style', get_stylesheet_uri(), $dependencies ); 
}

function bootstrap_enqueue_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/bootstrap/js/bootstrap.min.js', $dependencies, '', true );
}

function bootstrap_wp_setup() {
    add_theme_support( 'title-tag' );
}

function bootstrap_wp_menu(){
    register_nav_menu('bootstrap_menu', _('Bootstrap Theme Menu'));
}

add_action( 'wp_enqueue_scripts', 'bootstrap_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'bootstrap_enqueue_scripts' );
add_action( 'after_setup_theme', 'bootstrap_wp_setup' );
add_action('init', 'bootstrap_wp_menu');
?>