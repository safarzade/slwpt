<!-- Top Cart
============================================= -->
<div id="top-cart">
	<a href="#" id="top-cart-trigger"><i class="icon-shopping-cart"></i><span><?php echo Basket::total_count(); ?></span></a>
	<div class="top-cart-content">
		<div class="top-cart-title">
			<h4><?php _e('Shopping Cart','slwpt'); ?></h4>
		</div>
		<div class="top-cart-items">
			<?php $items = Basket::items(); ?>
			<?php if(count($items) > 0): ?>
				<?php foreach ($items as $item): ?>
					<div class="top-cart-item clearfix">
						<div class="top-cart-item-image">
							<a href="#"><img src="images/shop/small/1.jpg" alt="Blue Round-Neck Tshirt" /></a>
						</div>
						<div class="top-cart-item-desc">
							<a href="#"><?php echo $item['title']; ?></a>
							<span class="top-cart-item-price"><?php echo $item['price'] ?></span>
							<span class="top-cart-item-quantity">x <?php echo $item['count'] ?></span>
						</div>
					</div>
					<?php endforeach; ?>
			<?php endif; ?>

		</div>
		<div class="top-cart-action clearfix">
			<span class="fleft top-checkout-price"><?php echo Basket::total_price(); ?></span>
			<button class="button button-3d button-small nomargin fright">View Cart</button>
		</div>
	</div>
</div><!-- #top-cart end -->