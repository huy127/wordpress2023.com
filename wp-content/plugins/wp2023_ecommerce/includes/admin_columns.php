<?php

function wp2023_admin_columns_product_filter_columns($columns) {
    $columns['product_price'] = 'Giá bán';
    $columns['product_price_sale'] = 'Giá khuyến mãi';
    $columns['product_stock'] = 'Số lượng';

    return $columns;
}
add_filter('manage_product_posts_columns', 'wp2023_admin_columns_product_filter_columns');

function wp2023_admin_columns_product_render_columns($column, $post_id) {
    switch ($column) {
        case 'product_price':
            $product_price = get_post_meta($post_id, 'product_price', true);
            echo number_format($product_price);
            break;
        case 'product_price_sale':
            $product_price_sale = get_post_meta($post_id, 'product_price_sale', true);
            echo number_format($product_price_sale);
            break;
        case 'product_stock':
            $product_stock = get_post_meta($post_id, 'product_stock', true);
            echo $product_stock;
            break;
    }
}
add_action('manage_product_posts_custom_column', 'wp2023_admin_columns_product_render_columns', 10, 2);


function wp2023_admin_columns_taxonomy_filter_columns($columns) {
    $columns['image'] = 'Ảnh';
    return $columns;
}
add_filter('manage_edit-product_cat_columns', 'wp2023_admin_columns_taxonomy_filter_columns');

function wp2023_admin_columns_taxonomy_render_columns($out, $column, $term_id) {
    if ($column == 'image') {
        $image = get_term_meta($term_id, 'image', true);
        echo $image;
    }
}
add_action('manage_product_cat_custom_column', 'wp2023_admin_columns_taxonomy_render_columns', 10, 3);

