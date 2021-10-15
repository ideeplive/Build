<?php

//Redux Upload
	require_once('lib/ReduxCore/framework.php');
	require_once('lib/sample/config.php');

// Add CMB2 Metabox
	require_once('metabox/init.php');
	require_once('metabox/functions.php');
// require_once('metabox/example-functions.php');

function zboom_default_functions(){

    add_theme_support('title-tag'); 
    add_theme_support('post-thumbnails'); 
    add_theme_support('custom-background');
    load_theme_textdomain('jeffs', get_template_directory_uri().'/languages');



    if(function_exists('register_nav_menu')){
	register_nav_menu('main-menu', __('Main Menu', 'jeffs'));
    }
// Post Read More Function
    function read_more($limit){
        $post_content = explode(" ", get_the_content());
        
         $less_content = array_slice($post_content, 0, $limit);
         echo implode(" ", $less_content);
        // print_r($post_content);
    }

    // register posts // Link of wordPress Documents for support array https://developer.wordpress.org/reference/functions/register_post_type/#supports
}
add_action( 'after_setup_theme','zboom_default_functions');


function awesome_custom_post_type(){
	$labels = array(
		'name' => 'Jeffs Products',
		'singular_name' => 'Products',
		'add_new' => 'Add Item',
		'all_items' => 'All Items',
		'add_new_item' => 'Add Item',
		'edit_item' => 'Edit Item',
		'new_item' => 'New Item',
		'view_item' => 'View Item',
		'search_item' => 'Search Products',
		'not_found' => 'No items found',
		'not_found_in_trash' => 'No items found in trash',
		'parent_item_colon' => 'Parent Item'
	);
	$args = array(
		'labels' => $labels, 
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierability_type' => false,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revisions',
		),
			'taxonomies' => array('category', 'post_tag'),
			'menu_position' => 1,
			'exclude_from_search' => false,
	);
	register_post_type( 'products', $args );
}
add_action( 'init','awesome_custom_post_type' );


function customizekorbo($customizekorbo){
    $customizekorbo->add_section('header_section', array(
        'title' => 'Header Options',
        'description' => 'Please Upload your Logo Image'
    ));
    $customizekorbo->add_setting('logo_image', array(  
        'default' => '2021',
        'transport' => 'refresh'
    ));
 /* $customizekorbo->add_control('copyright_text', array(
        'label' => 'Upload Your Logo',
        'section' => 'header_section',
        'type' => 'text'
    )); */  
 $customizekorbo->add_control(new WP_Customize_Image_Control($customizekorbo,'logo_image', array(
        'label' => 'Upload Your Logo',
        'section' => 'header_section',
        'settings' => 'logo_image'
        )));
}
add_action('customize_register', 'customizekorbo');

