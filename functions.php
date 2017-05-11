<?php

function wondersites_theme_scripts() {
    // Theme stylesheet.
    wp_enqueue_style( 'wondersites-theme-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'wondersites_theme_scripts' );


