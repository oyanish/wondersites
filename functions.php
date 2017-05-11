<?php

function wondersites_theme_scripts() {
    // Theme stylesheet.
    wp_enqueue_style( 'wondersites-theme-style', get_stylesheet_uri() );
    wp_enqueue_script( 'jQuery', 'https://code.jquery.com/jquery-3.2.1.min.js', array(), '3.2.1', true );
    wp_enqueue_script( 'wondersites-js', get_template_directory_uri() . '/javascript/wondersites.js', array('jQuery'), '0.1', true );
}
add_action( 'wp_enqueue_scripts', 'wondersites_theme_scripts' );


