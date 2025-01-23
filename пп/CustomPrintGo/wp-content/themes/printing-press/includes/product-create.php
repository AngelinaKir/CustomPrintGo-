<?php

class Whizzie {

	public function __construct() {
		$this->init();
	}

	public function init()
	{
	
	}

	public static function printing_press_setup_widgets(){

	$printing_press_product_image_gallery = array();
	$printing_press_product_ids = array();

	$printing_press_product_category= array(
		'Product Category'       => array(
			'Packaging Boxes',
			'Business Cards',
			'Custom Paper Bags',
			'Book Covers',
		),
	);

	$printing_press_k = 1;
	foreach ( $printing_press_product_category as $printing_press_product_cats => $printing_press_products_name ) { 
	// Insert porduct cats Start
	$content = 'This is sample product category';
	$printing_press_parent_category	=	wp_insert_term(
	$printing_press_product_cats, // the term
	'product_cat', // the taxonomy
		array(
		'description'=> $content,
		'slug' => str_replace( ' ', '-', $printing_press_product_cats)
		)
	);

// -------------- create subcategory END -----------------

	$printing_press_n=1;
	// create Product START
	foreach ( $printing_press_products_name as $key => $printing_press_product_title ) {
	$content = '
		<div class="main_content">
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
		</div>';

	// Create post object
	$printing_press_my_post = array(
		'post_title'    => wp_strip_all_tags( $printing_press_product_title ),
		'post_content'  => $content,
		'post_status'   => 'publish',
		'post_type'     => 'product',
		'post_category' => [$printing_press_parent_category['term_id']]
	);

	// Insert the post into the database

	$printing_press_uqpost_id = wp_insert_post($printing_press_my_post);
	wp_set_object_terms( $printing_press_uqpost_id, str_replace( ' ', '-', $printing_press_product_cats), 'product_cat', true );

	$printing_press_product_price = array('32.36','32.36','32.36','32.36');
	
	update_post_meta( $printing_press_uqpost_id, '_regular_price', $printing_press_product_price[$printing_press_n-1] );
	update_post_meta( $printing_press_uqpost_id, '_price', $printing_press_product_price[$printing_press_n-1] );
	array_push( $printing_press_product_ids,  $printing_press_uqpost_id );

	// Now replace meta w/ new updated value array
	$printing_press_image_url = get_template_directory_uri().'/assets/images/product/'.$printing_press_product_cats.'/' . str_replace(' ', '_', strtolower($printing_press_product_title)).'.png';
	$printing_press_image_name  = $printing_press_product_title.'.png';
	$printing_press_upload_dir = wp_upload_dir();
	// Set upload folder
	$printing_press_image_data = file_get_contents(esc_url($printing_press_image_url));
	// Get image data
	$unique_file_name = wp_unique_filename($printing_press_upload_dir['path'], $printing_press_image_name);
	// Generate unique name
	$printing_press_filename = basename($unique_file_name);
	// Create image file name
	// Check folder permission and define file location
	if (wp_mkdir_p($printing_press_upload_dir['path'])) {
	$printing_press_file = $printing_press_upload_dir['path'].'/'.$printing_press_filename;
	} else {
	$printing_press_file = $printing_press_upload_dir['basedir'].'/'.$printing_press_filename;
	}
	
	file_put_contents($printing_press_file, $printing_press_image_data);
	// Check image file type
	$wp_filetype = wp_check_filetype($printing_press_filename, null);
	// Set attachment data
	$attachment = array(
	'post_mime_type' => $wp_filetype['type'],
	'post_title'     => sanitize_file_name($printing_press_filename),
	'post_type'      => 'product',
	'post_status'    => 'inherit',
	);

	// Create the attachment
	$printing_press_attach_id = wp_insert_attachment($attachment, $printing_press_file, $printing_press_uqpost_id);

	// Define attachment metadata
	$attach_data = wp_generate_attachment_metadata($printing_press_attach_id, $printing_press_file);

	// Assign metadata to attachment
	wp_update_attachment_metadata($printing_press_attach_id, $attach_data);
	if ( count( $printing_press_product_image_gallery ) < 3 ) {
		array_push( $printing_press_product_image_gallery, $printing_press_attach_id );
	}
	// // And finally assign featured image to post
	set_post_thumbnail($printing_press_uqpost_id, $printing_press_attach_id);
	++$printing_press_n;
	}
	// Create product END
	++$printing_press_k;
	}
	// Add Gallery in first simple product and second variable product START
	$printing_press_product_image_gallery = implode( ',', $printing_press_product_image_gallery );
	foreach ( $printing_press_product_ids as $printing_press_product_id ) {
	update_post_meta( $printing_press_product_id, 'printing_press_product_image_gallery', $printing_press_product_image_gallery );
	}
}

}
 