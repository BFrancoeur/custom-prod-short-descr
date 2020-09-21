<?php
/**
 * Plugin Name: Custom Product Short Description
 * Plugin URI: 
 * Description: Pulls in product short description specifications and displays them in a responsive table
 * Version: 1.0
 * Author: Brian Francoeur
 * Author URI: http://www.websapient.com
 */
function jcw_strip_tags( $short_description ) {
    $short_description_stripped = strip_tags( $short_description );

    // echo $short_description = $short_description_stripped;

    jcw_get_model_number_values( $short_description, $short_description_stripped );
}
add_action( 'woocommerce_short_description', 'jcw_strip_tags' );

function jcw_get_model_number_values( $short_description, $short_description_stripped ) {
    
    $price = substr( $short_description_stripped, 0, 24 );
    echo $short_description .= '<p><strong>' . $price . '</strong></p>';

    $model_number = substr( $short_description_stripped, 25, 36 );
    echo $short_description .= '<p><strong>' . $model_number . '</strong></p>';

    $age_range = substr( $short_description_stripped, 55, 30 );
    echo $short_description .= '<p><strong>' . $age_range . '</strong></p>';

    $child_capacity = substr( $short_description_stripped, 85, 30 );
    echo $short_description .= '<p><strong>' . $child_capacity . '</strong></p>';

    $fall_height = substr( $short_description_stripped, 117, 21 );
    echo $short_description .= '<p><strong>' . $fall_height . '</strong></p>';

    $post_diameter = substr( $short_description_stripped, 138, 30 );
    echo $short_description .= '<p><strong>' . $post_diameter . '</strong></p>';

    $product_type = substr( $short_description_stripped, 165, 30 );
    echo $short_description .= '<p><strong>' . $product_type . '</strong></p>';

    $safety_zone = substr( $short_description_stripped, 190, 40 );
    echo $short_description .= '<p><strong>' . $safety_zone . '</strong></p>';
}
// function jcw_get_wc_product_short_description( $short_description ) {


   
// }

