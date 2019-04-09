<?php

/**
 * Register menu positions
 */

add_action('init', 'mlaroy_register_menus');

function mlaroy_register_menus() {
	register_nav_menus(array(
		'main-nav' => __('Main Nav', 'Admin - ' . get_bloginfo('name')  ),
		'secondary-nav' => __('Secondary Nav', 'Admin - ' . get_bloginfo('name')  ),
		'navfooter' => __('Footer Nav', 'Admin - ' . get_bloginfo('name')  )
	));
}