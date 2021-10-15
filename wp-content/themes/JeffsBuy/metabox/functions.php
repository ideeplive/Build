<?php


add_action( 'cmb2_admin_init', 'amair_meta_data' );

function amair_meta_data() {

	$deeplive = new_cmb2_box( array(
		'id'            => 'products-images',
		'title'         => esc_html__( 'Add Your Data', 'cmb2' ),
		'object_types'  => array( 'products' ),
	) );

	$deeplive->add_field( array(
		'name'       => esc_html__( 'Product Image 1', 'cmb2' ),
		'desc'       => esc_html__( 'Add Your Product Image', 'cmb2' ),
		'id'         => 'products-images-1',
		'type'       => 'file',
		'show_on_cb' => 'yourprefix_hide_if_no_cats', 

	) );
	
	$deeplive->add_field( array(
	'name'       => esc_html__( 'Product Image 2', 'cmb2' ),
	'desc'       => esc_html__( 'Add Your Product Image', 'cmb2' ),
	'id'         => 'products-images-2',
	'type'       => 'file',
	'show_on_cb' => 'yourprefix_hide_if_no_cats', 

) );

	$deeplive->add_field( array(
	'name'       => esc_html__( 'Product Image 3', 'cmb2' ),
	'desc'       => esc_html__( 'Add Your Product Image', 'cmb2' ),
	'id'         => 'products-images-3',
	'type'       => 'file',
	'url'		=> false
));

	$deeplive->add_field( array(
		'name'    => 'Add Reviwes',
		'desc'    => 'Add Your Customer Reviews',
		'id'      => 'products-customer-review',
		'type'    => 'wysiwyg',
		'options' => array(),
) );


}
