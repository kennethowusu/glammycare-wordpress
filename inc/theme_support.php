
 <?php

//support woocommerce
function glammycare_add_woocommerce_support(){
  add_theme_support('woocommerce');
}

add_action('after_theme_setup','glammycare_add_woocommerce_support');




  ?>
