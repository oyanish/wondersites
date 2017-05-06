<?php

function twentyseventeen_scripts() {
    // Theme stylesheet.
    wp_enqueue_style( 'twentyseventeen-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'twentyseventeen_scripts' );


