<?php

function wondersites_theme_scripts() {
    // Theme stylesheet.
	wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/javascript/slick/slick.css', array() );
    wp_enqueue_style( 'wondersites-theme-style', get_stylesheet_uri() );
    wp_enqueue_script( 'jQuery', 'https://code.jquery.com/jquery-3.2.1.min.js', array(), '3.2.1', true );
    wp_enqueue_script( 'wondersites-js', get_template_directory_uri() . '/javascript/wondersites.js', array('jQuery'), '0.1', true );
	wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/javascript/slick/slick.min.js', array('jquery') , null, true);
}
add_action( 'wp_enqueue_scripts', 'wondersites_theme_scripts' );

add_theme_support( 'menus' );

register_nav_menus( array(
	'header_menu' => 'Main menu',
	'footer_menu_1' => 'Footer one',
	'footer_menu_2' => 'Footer two',
	'footer_menu_3' => 'Footer three',
	'footer_menu_4' => 'Footer four'
) );


