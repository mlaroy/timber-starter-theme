<?php

/**
 * Basic theme setup stuff like theme support
 *
 * @package d7
 * @subpackage boilerplate-theme_filters+hooks
 * @internal only called as `after_setup_theme` action
 * @link https://codex.wordpress.org/Function_Reference/add_theme_support
 *
 */
function mlaroy_theme_setup() {

	global $content_width;

	// Set the $content_width for things such as video embeds.
	// http://codex.wordpress.org/Content_Width
	if ( !isset( $content_width ) )
		$content_width = 1000;

	add_theme_support('automatic-feed-links'); // http://codex.wordpress.org/Function_Reference/add_theme_support#Feed_Links
	add_theme_support('html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption')); 	// http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5

}
add_action('after_setup_theme', 'mlaroy_theme_setup');


// Clean up <head> and improve security.
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links', 2 );
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
