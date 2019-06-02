<?php get_header(); ?>

<!-- Hero section -->
<section class="hero-section">
  <div class="hero-slider owl-carousel">
    <div class="hs-item set-bg" data-setbg="<?php echo  get_template_directory_uri() .  "/img/bg.jpg" ?>">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 col-lg-7 text-white">
            <span>New Arrivals</span>
            <h2>denim jackets</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
            <a href="#" class="site-btn sb-line">DISCOVER</a>
            <a href="#" class="site-btn sb-white">ADD TO CART</a>
          </div>
        </div>
        <div class="offer-card text-white">
          <span>from</span>
          <h2>$29</h2>
          <p>SHOP NOW</p>
        </div>
      </div>
    </div>
    <div class="hs-item set-bg" data-setbg="<?php echo  get_template_directory_uri() .  "/img/bg-2.jpg";?>">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 col-lg-7 text-white">
            <span>New Arrivals</span>
            <h2>denim jackets</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
            <a href="#" class="site-btn sb-line">DISCOVER</a>
            <a href="#" class="site-btn sb-white">ADD TO CART</a>
          </div>
        </div>
        <div class="offer-card text-white">
          <span>from</span>
          <h2>$29</h2>
          <p>SHOP NOW</p>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="slide-num-holder" id="snh-1"></div>
  </div>
</section>
<!-- Hero section end -->



<!-- Features section -->
<section class="features-section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 p-0 feature">
        <div class="feature-inner">
          <div class="feature-icon">
            <img src="<?php echo  get_template_directory_uri() .   "/img/icons/1.png";?>"   alt="#">
          </div>
          <h2>Fast Secure Payments</h2>
        </div>
      </div>
      <div class="col-md-4 p-0 feature">
        <div class="feature-inner">
          <div class="feature-icon">
            <img src="<?php echo  get_template_directory_uri() .   "/img/icons/2.png";?>" alt="#">
          </div>
          <h2>Premium Products</h2>
        </div>
      </div>
      <div class="col-md-4 p-0 feature">
        <div class="feature-inner">
          <div class="feature-icon">
            <img src="<?php echo  get_template_directory_uri() .   "/img/icons/3.png";?>" alt="#">
          </div>
          <h2>Free & fast Delivery</h2>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Features section end -->



<!-- letest product section -->
<section class="top-letest-product-section">
  <div class="container">
    <div class="section-title">
      <h2>LATEST PRODUCTS</h2>
    </div>
    <div class="product-slider owl-carousel">


      <?php
      		$args = array(
      			'post_type' => 'product',
      			'posts_per_page' => 6
      			);
      		$loop = new WP_Query( $args );
      		if ( $loop->have_posts() ) {
      			while ( $loop->have_posts() ) : $loop->the_post();

             $image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'single-post-thumbnail' );


            ?>

            <div class="product-item">
              <div class="pi-pic">
                <div class="tag-new">New</div>
                <img src="<?php echo $image[0]; ?>" alt="">
                <div class="pi-links">
                  <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                  <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                </div>
              </div>
              <div class="pi-text">
                <h6>$35,00</h6>
                <p><a class="product-link" href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></p>
              </div>
            </div>

          <?php
      			endwhile;
      		} else {
      			echo __( 'No products found' );
      		}
      		wp_reset_postdata();
      	?>





    </div>
  </div>
</section>
<!-- letest product section end -->





<!-- Product filter section -->
<section class="product-filter-section">
  <div class="container">
    <div class="section-title">
      <h2>BROWSE MORE PRODUCTS</h2>
    </div>
    <ul class="product-filter-menu">
      <li><a href="#">TOPS</a></li>
      <li><a href="#">JUMPSUITS</a></li>
      <li><a href="#">LINGERIE</a></li>
      <li><a href="#">JEANS</a></li>
      <li><a href="#">DRESSES</a></li>
      <li><a href="#">COATS</a></li>
      <li><a href="#">JUMPERS</a></li>
      <li><a href="#">LEGGINGS</a></li>
    </ul>




    <div class="row">


      <?php
          $args = array(
            'post_type' => 'product',
            'posts_per_page' => 12
            );
          $loop = new WP_Query( $args );
          if ( $loop->have_posts() ) {
            while ( $loop->have_posts() ) : $loop->the_post();

             $image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'single-post-thumbnail' );


            ?>



            <div class="col-lg-3 col-sm-6">
              <div class="product-item">
                <div class="pi-pic">
                    <img src="<?php echo $image[0]; ?>" alt="">
                  <div class="pi-links">
                    <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                    <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                  </div>
                </div>
                <div class="pi-text">
                  <h6>$35,00</h6>
                  <p><a class="product-link" href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></p>
                </div>
              </div>
            </div>

          <?php
            endwhile;
          } else {
            echo __( 'No products found' );
          }
          wp_reset_postdata();
        ?>





    </div>
    <div class="text-center pt-5">
      <button class="site-btn sb-line sb-dark">LOAD MORE</button>
    </div>
  </div>
</section>
<!-- Product filter section end -->










<?php get_footer(); ?>
