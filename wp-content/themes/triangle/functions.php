<?php
function Triangle_default_functions(){
    // use the add_theme_support support Documentation https://developer.wordpress.org/reference/functions/add_theme_support/
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-background');
    load_theme_textdomain('triangle', get_template_directory_uri().'/languages');



    if(function_exists('register_nav_menu')){
	register_nav_menu('main-menu', __('Main Menu', 'triangle'));

    }
}
    add_action( 'after_setup_theme','Triangle_default_functions');