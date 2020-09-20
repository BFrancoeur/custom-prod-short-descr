<?php
/**
 * Plugin Name: Custom Product Short Description
 * Plugin URI: 
 * Description: Pulls in product short description specifications and displays them in a responsive table
 * Version: 1.0
 * Author: Brian Francoeur
 * Author URI: http://www.websapient.com
 */

add_action( 'woocommerce_short_description', 'jcw_product_specifications' );
function jcw_product_specifications ( $short_description ) {
    
    $model_number_label = '';
    $model_number_value = '';

    $age_range_label = '';
    $age_range_value = '';

    $child_capacity_label = '';
    $child_capacity_value = '';

    $fall_height_label = '';
    $fall_height_value = '';

    $safety_zone_label = '';
    $safety_zone_value = '';

    $pipe_diameter_label = '';
    $pipe_diameter_value = '';

    $product_type_label = '';
    $product_type_value = '';

    $post_id = get_post()->ID;
    
    $short_description_stripped = strip_tags($short_description);

//    echo $short_description .= $short_description_stripped;

//    $short_description_explode = print_r( explode( ' ', $short_description_stripped ) );

//    echo $short_description .= $short_description_explode;

   jcw_substring($short_description_stripped); 
}


function jcw_substring($short_description_stripped){ 
    $len = strlen($short_description_stripped); 

    // Create a find function that searches for the specification label and use the snippet template  below to rewrite the HTML
    // Maybe search for string instead using strpos()? 
 
    $model_number_label_text = 'Model Number: ';
    $model_number_label = strpos( $short_description_stripped, $model_number_label_text); // returns starting position of matched string
    echo '<h2>' . $model_number_label . '</h2>';
    // model number
    echo '<p>';
    echo '<span>' . substr($short_description_stripped, 0, 17) . '</span>'; 
    echo '<span>' . substr($short_description_stripped, 18, 7) . '</span>';
    echo '</p>';

    // age range
    echo '<p>';
    echo '<span>' . substr($short_description_stripped, 26, 15) . '</span>'; 
    echo '<span>' . substr($short_description_stripped, 41, 12) . '</span>';
    echo '</p>';

    // fall height
    echo '<p>';
    echo '<span>' . substr($short_description_stripped, 54, 13) . '</span>'; 
    echo '<span>' . substr($short_description_stripped, 67, 12) . '</span>';
    echo '</p>';

    // post diameter
    echo '<p>';
    echo '<span>' . substr($short_description_stripped, 80, 14) . '</span>'; 
    echo '<span>' . substr($short_description_stripped, 94, 13) . '</span>';
    echo '</p>';

    // safety zone
    echo '<p>';
    echo '<span>' . substr($short_description_stripped, 108, 11) . '</span>'; 
    echo '<span>' . substr($short_description_stripped, 119, 24) . '</span>';
    echo '</p>';
} 
