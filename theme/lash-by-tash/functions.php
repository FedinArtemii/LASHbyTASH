<?php

add_action( 'after_setup_theme', function () {
    add_theme_support( 'editor-styles' );
    add_editor_style( 'assets/landing.css' );
    add_theme_support( 'wp-block-styles' );
} );
