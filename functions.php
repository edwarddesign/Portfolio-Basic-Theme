<?php 
/*
if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 3000, 1000, false ); // default Post Thumbnail dimensions (cropped)

    // additional image sizes
    // delete the next line if you do not need additional image sizes
    add_image_size( 'category-thumb', 1000, 9999 ); //300 pixels wide (and unlimited height)
}
*/
function custom_theme_setup() {
	add_theme_support ('post-thumbnails');
}
add_action('after_setup_theme', 'custom_theme_setup');