# Remove-WooCommerce-Elements
3 Things that will give WooCommerce a better look if you remove them. Here is how to do it. 

1. By default WooCommerce adds a sort feature for its main shop catalog display. What it shows to the right above your products is the option to sort your products by various categories,pricing, etc. If you have only a few products to display or you find this to be an eye-sore I would suggest removing it to get a cleaner looking website. 

This code right here will remove the text which lets you sort it, place this code at the end of your functions.php file.

//remove default sorting drop-down from WooCommerce
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );

2.  Another default text that shows up on WooCommerce Results is the text displaying the number of items found in the loop. To remove this text place this code at the end of your functions.php file. 

//remove display notice - Showing all results
/*
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );

3. The third text that show's up on most themes is "double-description" tab under the producg image. To remove this place this text at the end of your functions.php file.

//remove product description
add_filter( 'woocommerce_product_description_heading', 'remove_product_description_heading' );
  function remove_product_description_heading() {
  return '';
}
;
