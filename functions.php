<?php

require_once('wp_bootstrap_navwalker.php');

//Theme support 
function wpb_theme_setup(){
	//Nav menus
	register_nav_menus( array(
    'primary' => __( 'Primary Menu'),
) );
}

add_action('after_setup_theme', 'wpb_theme_setup');