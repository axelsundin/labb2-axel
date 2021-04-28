<?php

//Tar bort innehåll i vänstra delen av footern
/* add_action('init', 'remove_footer_stuff');

function remove_footer_stuff() {
    remove_action( 'storefront_footer', 'storefront_footer_widgets', 10 );
	remove_action( 'storefront_footer', 'storefront_credit', 20 );
} */



//Tar bort "add to cart"-knappen i shoppen
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );



// Visar länkar till sociala medier i footern
add_action('storefront_footer_custom', 'storefront_footer_custom_widgets', 5);

function storefront_footer_custom_widgets() {
    dynamic_sidebar('socialmedia'); 
}



//Visar "Våra butiker-menyn" på "Om oss"-sidan
register_nav_menus(
    array(
        'menu-stores' => 'butiksmeny'
        )
); 

add_action('storefront_sidebar_custom_widgets', 'butiker_side');

function butiker_side() {
    echo '<div id="custom-menu" class="widget woocommerce widget_product_categories"><span class="gamma widget-title">Våra butiker</span>';
    wp_nav_menu('menu-stores');
    echo '</div>';
}



register_sidebar( // widget för sociala medier
    array(
    'id' => 'socialmedia',
    'name' => 'Social media-lista'
    )
);
