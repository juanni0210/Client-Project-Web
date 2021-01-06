

<?php

//Enable Featured Images (Post Thumbnails)
add_theme_support('post-thumbnails');





//Enable Widget-ized Sidebar (we used a custom query but just so you have it, here it is:)
if ( function_exists('register_sidebar') ) register_sidebar();


// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';


if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
	// file does not exist... return an error.
	return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
	// file exists... require it.
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'cssdg-theme' ),
    'secondary' => __( 'Language Menu', 'cssdg-theme' ),
) );



?>




