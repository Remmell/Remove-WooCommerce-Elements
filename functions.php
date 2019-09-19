<?php 
/*
 * </RO.> Remove WooCommerce Elements
 * 
*/

//remove display notice - Showing all results
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );

//remove default sorting drop-down from WooCommerce
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );

//remove product description
add_filter( 'woocommerce_product_description_heading', 'remove_product_description_heading' );

function remove_product_description_heading() {
return '';
}

;
