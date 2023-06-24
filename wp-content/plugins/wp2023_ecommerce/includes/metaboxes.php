<?php
function wp2023_meta_box_product()
{

    add_meta_box(
        'wp2023_product_info',                 // Unique ID
        'Thong tin san pham',      // Box title
        'wp2023_meta_box_product_html',  // Content callback, must be of type callable
        'product'            // Post type
    );
}
add_action('add_meta_boxes', 'wp2023_meta_box_product');

function wp2023_save_post_product($post_id)
{
    // echo "<pre>";
    // print_r($_REQUEST);
    // die();
    //var_dump($post_id);die();
    if ($_REQUEST['post_type'] == "product") {
        $product_price = $_REQUEST['product_price'];
        $product_price_sale = $_REQUEST['product_price_sale'];
        $product_stock = $_REQUEST['product_stock'];
//luu database
        update_post_meta($post_id, 'product_price', $product_price);
        update_post_meta($post_id, 'product_price_sale', $product_price_sale);
        update_post_meta($post_id, 'product_stock', $product_stock);
    }
}

add_action('save_post', 'wp2023_save_post_product');

function wp2023_meta_box_product_html()
{
    include_once WP2023_PATH . 'includes/templates/meta_box_product.php';
}

add_action( 'product_cat_add_form_fields', 'wp2023_meta_box_product_cat_add' );
add_action( 'product_cat_edit_form_fields', 'wp2023_meta_box_product_cat_edit',10,2 );

function wp2023_meta_box_product_cat_add() {
    include_once WP2023_PATH . 'includes/templates/meta_box_product_cat_add.php';
}

function wp2023_meta_box_product_cat_edit($tag,$taxonamy) {
    include_once WP2023_PATH . 'includes/templates/meta_box_product_cat_edit.php';
}



add_action('create_product_cat', 'wp2023_meta_box_product_cat_save', 10, 1);
add_action('edit_product_cat', 'wp2023_meta_box_product_cat_save', 10, 1);

function wp2023_meta_box_product_cat_save($term_id) {
    $image = $_POST['image'];
    update_term_meta($term_id,'image', $image);
}


