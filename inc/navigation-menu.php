
<?php


  function register_menu_glammycare(){
    register_nav_menu('glammycare_primary','Glammycare Primary');
  }

  add_action('init','register_menu_glammycare');
 ?>
