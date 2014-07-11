	<div class="home-main clearfix">
		<div class="container">
			<div class="product-detail">
				<?php foreach ($records as $key) { ?>
				<div class="left">
					<div class="big-image">
						<?php 
							$attached_image = array(
						          'src' => 'images/detail-page-image.png',
						          'alt' => 'fsbo',
						          'title' => 'fsbo',
							);
						?>
						<?php echo img($attached_image);?>
					</div>
					<div id="product-slider" class="owl-carousel owl-theme"> 
					  	<?php for ($i=0; $i < 10 ; $i++) { ?>
					  		<div class="item">
					  			<?php 
									$attached_image = array(
								          'src' => 'images/100.png',
								          'alt' => 'fsbo',
								          'title' => 'fsbo',
									);
								?>
								<?php echo img($attached_image);?>
					  		</div>
					  	<?php } ?>	
					</div>
				</div>
				<div class="right">
					<div class="featured-listing-name furniture"><a href="<?php echo site_url('furniture/'.$key->post_slug);?>"><?php echo $key->post_title;?></a></div>
					<div class="price-desc">
						<p><span class="blue bold big"><?php echo $key->post_price;?></span><span class="black bold big"> QR</span></p>
					</div>
					<div class="desc"><p><?php echo $key->post_description;?></p>
					</div>
					<div class="group clearfix">
						<div class="item clearfix">
							<p class="by">Listed by <span class="yellow">Adam Smith</p><p class="view"><a href="#">See all Adam Smith Listing</a></p>
						</div>
						<div class="item clearfix">
							<p class="market">Days on Market</p><p class="day"><?php echo time_elapsed_string($key->post_date); ?> on FSBO</p>
						</div>
					</div>
					<div class="social-share">
						<a href="#" class="facebook-share"></a>
						<a href="#" class="twitter-share"></a>
					</div>
					<div class="settings">
						<div class="wishlist">Wish List</div>
						<div class="print"><a href="javascript:window.print()">Print</a></div>
						<div class="contact">Contact Agents</div>
					</div>
					<div class="detail-small-ads-area">
						<div class="test"></div>
					</div>
				</div>
				<?php } ?>
			</div>
			<div class="product-detail-full clearfix">
				<div class="title clearfix ">
					<div class="see-text">See Also</div>
					<?php if($key->post_furniture_type == 'Bedroom') { ?>
						<div class="see-all"><a href="<?php echo site_url('furniture/bedroom')?>">See All</a></div>
					<?php } else if($key->post_furniture_type == 'Living room') { ?>
						<div class="see-all"><a href="<?php echo site_url('furniture/living-room')?>">See All</a></div>
					<?php } else if($key->post_furniture_type == 'Bathroom') { ?>
						<div class="see-all"><a href="<?php echo site_url('furniture/bathroom')?>">See All</a></div>
					<?php } else if($key->post_furniture_type == 'Dining room') { ?>
						<div class="see-all"><a href="<?php echo site_url('furniture/dining-room')?>">See All</a></div>
					<?php } else if($key->post_furniture_type == 'Kitchen') { ?>
						<div class="see-all"><a href="<?php echo site_url('furniture/kitchen')?>">See All</a></div>
					<?php } else if($key->post_furniture_type == 'Miscellaneous') { ?>
						<div class="see-all"><a href="<?php echo site_url('furniture/miscellaneous')?>">See All</a></div>
					<?php } ?>
				</div>
				<div class="list clearfix">
					<?php foreach ($related as $key) { ?>
						<div class="item">
							<a href="<?php echo site_url('furniture/'.$key->post_slug);?>">
								<div class="thumb">
									<?php 
										$attached_image = array(
									          'src' => 'images/dummy-feature-small.png',
									          'alt' => 'fsbo',
									          'title' => 'fsbo',
										);
									?>
									<?php echo img($attached_image);?>
									<?php if($key->post_featured == 1){ ?><div class="featured-listing-text">Featured Listing</div> <?php } ?>
								</div>
							</a>
							<?php $date = date_create($key->post_date); ?>
							<div class="featured-listing-date"><?php echo date_format($date, 'F j, Y');?></div>
							<div class="featured-listing-name"><?php echo $key->post_furniture_type;?></div>
							<div class="featured-listing-price"><?php echo $key->post_price;?> QR</div>
							<a class="featured-listing-view" href="<?php echo site_url('furniture/'.$key->post_slug);?>">View Details</a>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	<?php 
		function time_elapsed_string($datetime, $full = false) {
		    $now = new DateTime;
		    $ago = new DateTime($datetime);
		    $diff = $now->diff($ago);

		    $diff->w = floor($diff->d / 7);
		    $diff->d -= $diff->w * 7;

		    $string = array(
		        'y' => 'year',
		        'm' => 'month',
		        'w' => 'week',
		        'd' => 'day',
		        'h' => 'hour',
		        'i' => 'minute',
		        's' => 'second',
		    );
		    foreach ($string as $k => &$v) {
		        if ($diff->$k) {
		            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
		        } else {
		            unset($string[$k]);
		        }
		    }

		    if (!$full) $string = array_slice($string, 0, 1);
		    return $string ? implode(', ', $string) . ' ago' : 'just now';
		}
	?>