<?php get_header(); ?>


<?php

	$cart = new WC_Cart();
  // $cart->add_to_cart(169,2);
	// $cart->add_to_cart(177,2);

  $cart_contents = $cart->get_cart_contents();

	var_dump($cart_contents);
 ?>

	<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>Your cart</h4>
			<div class="site-pagination">
				<a href="">Home</a> /
				<a href="">Your cart</a>
			</div>
		</div>
	</div>
	<!-- Page info end -->


	<!-- cart section end -->
	<section class="cart-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="cart-table">
						<h3>Your Cart</h3>
						<div class="cart-table-warp">
							<table>



							<?php if(is_array($cart_contents)):?>

								<thead>
									<tr>
										<th class="product-th">Product</th>
										<th class="quy-th">Quantity</th>

										<th class="total-th">Price</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($cart_contents as $cart_item):?>

										<tr>
											<td class="product-col">
											<?php echo  get_the_post_thumbnail( $cart_item['product_id'],array(100,100));  ?>
												<div class="pc-title">
													<h4><a href="<?php echo get_post_permalink($cart_item['product_id']) ?>"><?php echo   $cart_item['data']->get_title(); ?></h4></a>
													<p>GHS <?php echo $cart_item['data']->get_price(); ?></p>
												</div>
											</td>
											<td class="quy-col">
												<div class="quantity">
																			<div class="pro-qty">
														<input type="text" value="<?php echo $cart_item['quantity'];?>">
													</div>
																	</div>
											</td>

											<td class="total-col"><h4>GHS <?php echo  $cart_item['quantity'] * $cart_item['data']->get_price();?></h4></td>
										</tr>





           <?php endforeach; ?>
				 <?php
			 else:
							 echo "<p>There are no items in your cart</p>";

					    endif;
					?>


							</tbody>
						</table>
						</div>
						<div class="total-cost">
							<h6>Total<span>	GHS <?php echo $cart->get_cart_contents_total(); ?></span></h6>
						</div>
					</div>
				</div>
				<div class="col-lg-4 card-right">
					<form class="promo-code-form">
						<input type="text" placeholder="Enter promo code">
						<button>Submit</button>
					</form>
					<a href="" class="site-btn">Proceed to checkout</a>
					<a href="" class="site-btn sb-dark">Continue shopping</a>
				</div>
			</div>
		</div>
	</section>
	<!-- cart section end -->

	<!-- Related product section -->
	<section class="related-product-section">
		<div class="container">
			<div class="section-title text-uppercase">
				<h2>Continue Shopping</h2>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<div class="tag-new">New</div>
							<img src="./img/product/2.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Black and White Stripes Dress</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="./img/product/5.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Flamboyant Pink Top </p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="./img/product/9.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Flamboyant Pink Top </p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="./img/product/1.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Flamboyant Pink Top </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Related product section end -->


<?php get_footer(); ?>
