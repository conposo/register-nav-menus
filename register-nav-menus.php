<?php

add_action( 'after_setup_theme', 'nxt_register_nav_menus' );
function nxt_register_nav_menus() {
    register_nav_menus( array(
        'primary' => __( 'Primary Navigation', 'nxt' ),
        'secondary' => __( 'Secondary Navigation', 'nxt' ),
        'social_links_conference' => __( 'Social links', 'nxt' ),
    ) );
}

// https://codex.wordpress.org/Function_Reference/register_nav_menus

// https://developer.wordpress.org/reference/functions/wp_nav_menu/

?>