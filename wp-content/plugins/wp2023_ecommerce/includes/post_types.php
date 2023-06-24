<?php

add_action('init','wp2023_custom_post_type');
function wp2023_custom_post_type() {
	register_post_type('product',
		array(
			'labels'      => array(
				'name'          => __('Cac san pham', 'wp2023_ecommercewp2023_ecommerce'),
				'singular_name' => __('San pham', 'wp2023_ecommerce'),
			),
				'public'      => true,
				'has_archive' => true,
				'rewrite' => array('slug'=>'product'),
                'supports'=> array('title','editor','thumbnail','excerpt')
		)
	);
}




add_action( 'init', 'wp2023_register_taxonomy_product' );
function wp2023_register_taxonomy_product() {
    $labels = array(
        'name'              => _x( 'Danh muc', 'taxonomy general name' ),
        'singular_name'     => _x( 'Danh muc', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Danh muc' ),
        'all_items'         => __( 'All Danh muc' ),
        'parent_item'       => __( 'Parent Danh muc' ),
        'parent_item_colon' => __( 'Parent Danh muc:' ),
        'edit_item'         => __( 'Edit Danh muc' ),
        'update_item'       => __( 'Update Danh muc' ),
        'add_new_item'      => __( 'Add New Danh muc' ),
        'new_item_name'     => __( 'New Danh muc Name' ),
        'menu_name'         => __( 'Danh muc' ),
    );
    $args   = array(
        'hierarchical'      => true, // make it hierarchical (like categories)
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => [ 'slug' => 'course' ],
    );
    register_taxonomy( 'product_cat', [ 'product' ], $args );
}

