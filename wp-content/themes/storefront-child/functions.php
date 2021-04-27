<?php

remove_action('storefront_footer', 'storefront_footer_widgets', 10);
remove_action('storefront_footer', 'storefront_credit', 20);



//add_action('storefront_footer', 'storefront_footer_custom_widgets', 5);

function storefront_footer_custom_widgets() {
    dynamic_sidebar('socialmedia'); // Visar länkar till sociala medier
}

register_sidebar( // widget för sociala medier
    array(
    'id' => 'socialmedia',
    'name' => 'Social media-lista'
    )
);