<?php
//* Start the engine
include_once( get_template_directory() . '/lib/init.php' );

//* Child theme (do not remove)
define( 'CHILD_THEME_NAME', 'Genesis Sample Theme' );
define( 'CHILD_THEME_URL', 'http://www.studiopress.com/' );
define( 'CHILD_THEME_VERSION', '2.2.2' );

//* Enqueue Google Fonts
add_action( 'wp_enqueue_scripts', 'genesis_sample_google_fonts' );
function genesis_sample_google_fonts() {
	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Lato:300,400,700', array(), CHILD_THEME_VERSION );
}

// add font icons for arrows in menus
/*
add_action( 'wp_enqueue_scripts', 'head_assets' );
function head_assets() {
	wp_enqueue_style( 'genericons', get_stylesheet_directory_uri() . '/genericons/genericons.css', array(), CHILD_THEME_VERSION );
	wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', array(), CHILD_THEME_VERSION );
}
*/

//* Add HTML5 markup structure
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

//* Add Accessibility support
add_theme_support( 'genesis-accessibility', array( 'headings', 'drop-down-menu',  'search-form', 'skip-links', 'rems' ) );

//* Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

//* Add support for custom background
add_theme_support( 'custom-background' );

//* Add support for 3-column footer widgets
add_theme_support( 'genesis-footer-widgets', 3 );

//* Reposition the breadcrumbs
/*
remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );
add_action( 'genesis_after_header', 'genesis_do_breadcrumbs' );
*/

//* Modify breadcrumb arguments.
/*
add_filter( 'genesis_breadcrumb_args', 'sp_breadcrumb_args' );
function sp_breadcrumb_args( $args ) {
//	$args['home'] = 'Home';
//	$args['sep'] = ' / ';
//	$args['list_sep'] = ', '; // Genesis 1.5 and later
//	$args['prefix'] = '<div class="breadcrumb">';
//	$args['suffix'] = '</div>';
//	$args['heirarchial_attachments'] = true; // Genesis 1.5 and later
//	$args['heirarchial_categories'] = true; // Genesis 1.5 and later
//	$args['display'] = true;
	$args['labels']['prefix'] = '';
//	$args['labels']['author'] = 'Archives for ';
//	$args['labels']['category'] = 'Archives for '; // Genesis 1.6 and later
//	$args['labels']['tag'] = 'Archives for ';
//	$args['labels']['date'] = 'Archives for ';
//	$args['labels']['search'] = 'Search for ';
//	$args['labels']['tax'] = 'Archives for ';
//	$args['labels']['post_type'] = 'Archives for ';
//	$args['labels']['404'] = 'Not found: '; // Genesis 1.5 and later
	return $args;
}
*/

//* Change the footer text
/*
add_filter('genesis_footer_creds_text', 'sp_footer_creds_filter');
function sp_footer_creds_filter( $creds ) {
	$copyright_name = 'Your Name';
	$creds = '[footer_copyright] Copyright ' . $copyright_name . '. All Rights Reserved.';
	return $creds;
}
*/

//* custom shortcodes
/*
// external link
function external_link( $atts ) {
	return '<i class="fa fa-external-link" title="external link"></i>';
}
add_shortcode( 'external', 'external_link' );

// email link
function email_link( $atts ) {
	return '<i class="fa fa-envelope-o" title="email link"></i>';
}
add_shortcode( 'email', 'email_link' );

// PDF link
function pdf_link( $atts ) {
	return '<i class="fa fa-file-pdf-o" title="PDF document"></i>';
}
add_shortcode( 'pdf', 'pdf_link' );
*/