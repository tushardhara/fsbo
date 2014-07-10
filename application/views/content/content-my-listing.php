	<?php print_r($user_mylist); ?>
	<div class="home-main clearfix">
		<div class="container">
			<?php include('tab/tab-area.php');?>
			<div class="my-property-list">
				<?php foreach ($user_mylist as $key) { ?>
				<div class="item" data-item-id="<?php echo $key->ID; ?>">
					<div class="left-side">
						<a href="<?php echo site_url('profile/agent/edit/'.$key->ID);?>">
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
					</div>
					<div class="mid-side">
						<div class="featured-listing-name"><a href="<?php echo site_url('profile/agent/edit/'.$key->ID);?>"><?php echo $key->post_title;?></a></div>
						<?php if($key->post_type == 'property') { ?>
						<div class="featured-listing-feature">
							<li><span class="floor">2nd</span><span class="text">Floor</span></li>
							<li><span class="floor"><?php echo $key->post_property_bedrooms;?></span><span class="img-bed"></span></li>
							<li><span class="floor"><?php echo $key->post_property_bathroom;?></span><span class="img-bath"></span></li>
							<li><span class="floor"><?php echo $key->post_property_size;?></span><span class="text">m<sup>2</sup></span></li>
						</div>
						<?php } ?>
						<?php if($key->post_type == 'property') { ?>
						<div class="price-desc"><p><span class="blue bold big"><?php echo $key->post_price;?></span> <span class="black bold big">QR</span> <span class="for"><?php echo $key->post_property_catergory == 'Residential property for Rent' || $key->post_property_catergory == 'Commercial property for Rent' ? 'For Rent' : 'For Sell'; ?></span> <span class="blue small"><?php echo ($key->post_price/$key->post_property_size);?></span> <span class="bold small">Per</span> <span class="yellow bold small">m<sup>2</sup></span></p></div>
						<div class="location"><?php echo $key->post_property_area_reference.' , '.$key->post_property_area_city;?></div>
						<div class="address"><?php echo $key->post_property_area_address;?></div>
						<?php } else if($key->post_type == 'furniture') {?>
						<div class="price-desc"><p><span class="blue bold big"><?php echo $key->post_price;?></span> <span class="black bold big">QR</span></p></div>
						<div class="address"><?php echo $key->post_description;?></div>
						<?php } ?>
						
					</div>
					<div class="right-side">
						<a href="<?php echo site_url('profile/agent/edit/'.$key->ID);?>" class="contact">Edit Listing</a>
						<a href="#" class="contact">Preview</a>
						<a href="#" class="contact ex">Remove</a>
						<div class="compare-area"><div class="compare"></div><span>Compare</span></div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
