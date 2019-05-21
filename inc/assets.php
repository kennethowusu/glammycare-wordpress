<?php

  function wp_enqueue_glammycare_scripts(){

    wp_enqueue_style('boostrap',get_template_directory_uri() . '/css/bootstrap.min.css',null);
    wp_enqueue_style('flaticon',get_template_directory_uri() . '/css/flaticon.css');
    wp_enqueue_style('font-awesome',get_template_directory_uri() . '/css/font-awesome.min');
    wp_enqueue_style('jquery-ui',get_template_directory_uri() . '/css/jquery-ui.min');

    wp_enqueue_style('owl-carousel',get_template_directory_uri() . '/css/owl.carousel.min.css');
    wp_enqueue_style('slick-nav',get_template_directory_uri() . '/css/slicknav.min.css');
    wp_enqueue_style('style',get_template_directory_uri() . '/css/style.css');

    //scripts
    wp_enqueue_script('jquery-js',get_template_directory_uri() . '/js/jquery-3.2.1.min.js');
    wp_enqueue_script('bootstrap-js',get_template_directory_uri() . '/js/bootstrap.min.js');
    wp_enqueue_script('slicknav-js',get_template_directory_uri() . '/js/jquery.slicknav.min.js');
    wp_enqueue_script('owl-carousel-js',get_template_directory_uri() . '/js/owl.carousel.min.js');
    wp_enqueue_script('nicescroll-js',get_template_directory_uri() . '/js/jquery.nicescroll.min.js');
    wp_enqueue_script('jquery-zoom-js',get_template_directory_uri() . '/js/jquery.zoom.min.js');
    wp_enqueue_script('jquery-ui-js',get_template_directory_uri() . '/js/jquery-ui.min.js');
    wp_enqueue_script('main-js',get_template_directory_uri() . '/js/main.js');
  }
   add_action( 'wp_enqueue_scripts', 'wp_enqueue_glammycare_scripts' );


  ?>
