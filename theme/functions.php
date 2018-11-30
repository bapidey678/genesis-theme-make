<?php

// Start the engine
include_once( get_template_directory() . '/lib/init.php' );

// Set Localization (do not remove)
load_child_theme_textdomain( '', apply_filters( '', get_stylesheet_directory() . '/languages', '' ) );

// Child theme (do not remove)
define( 'CHILD_THEME_NAME', __( '', '' ) );
define( 'CHILD_THEME_URL', '' );
define( 'CHILD_THEME_VERSION', '' );

// Load all javascript and stylesheet here
//......

// Add HTML5 markup structure
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

// Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

// Add new image sizes
add_image_size( 'Size-Name', 100, 200, hard-cut/not );
