<?php



function glammycare_add_to_cart(){
  return $POST['quantity'];
  
}

add_action('wp_ajax_glammycare_add_to_cart','glammycare_add_to_cart');
add_action('wp_ajax_nopriv_glammycare_add_to_cart','glammycare_add_to_cart');
 ?>
