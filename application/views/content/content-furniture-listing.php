	<div class="home-main clearfix">
		<div class="container">
			<div class="furniture-listing-settings">
				<div class="filter-settings">
					<div class="sort"><span class="text">Short By</span><div class="drop"><span class="text">Most Expensive</span><span class="arrow"></span></div></div>
					<div class="filter-list">
						<?php if($this->uri->segment(2) == 'bedroom'){ ?>
							<a href='<?php echo site_url('furniture/bedroom')?>' class="filter bed active">Bedroom</a>
							<a href='<?php echo site_url('furniture/living-room')?>' class="filter liv">Living room</a>
							<a href='<?php echo site_url('furniture/bathroom')?>' class="filter bath">Bathroom</a>
							<a href='<?php echo site_url('furniture/dining-room')?>' class="filter din">Dining room</a>
							<a href='<?php echo site_url('furniture/kitchen')?>' class="filter kit">Kitchen</a>
							<a href='<?php echo site_url('furniture/miscellaneous')?>' class="filter mis">Miscellaneous</a>
						<?php }else if($this->uri->segment(2) == 'living-room'){ ?>
							<a href='<?php echo site_url('furniture/bedroom')?>' class="filter bed">Bedroom</a>
							<a href='<?php echo site_url('furniture/living-room')?>' class="filter liv active">Living room</a>
							<a href='<?php echo site_url('furniture/bathroom')?>' class="filter bath">Bathroom</a>
							<a href='<?php echo site_url('furniture/dining-room')?>' class="filter din">Dining room</a>
							<a href='<?php echo site_url('furniture/kitchen')?>' class="filter kit">Kitchen</a>
							<a href='<?php echo site_url('furniture/miscellaneous')?>' class="filter mis">Miscellaneous</a>
						<?php }else if($this->uri->segment(2) == 'bathroom'){ ?>
							<a href='<?php echo site_url('furniture/bedroom')?>' class="filter bed">Bedroom</a>
							<a href='<?php echo site_url('furniture/living-room')?>' class="filter liv">Living room</a>
							<a href='<?php echo site_url('furniture/bathroom')?>' class="filter bath active">Bathroom</a>
							<a href='<?php echo site_url('furniture/dining-room')?>' class="filter din">Dining room</a>
							<a href='<?php echo site_url('furniture/kitchen')?>' class="filter kit">Kitchen</a>
							<a href='<?php echo site_url('furniture/miscellaneous')?>' class="filter mis">Miscellaneous</a>
						<?php }else if($this->uri->segment(2) == 'dining-room'){ ?>
							<a href='<?php echo site_url('furniture/bedroom')?>' class="filter bed">Bedroom</a>
							<a href='<?php echo site_url('furniture/living-room')?>' class="filter liv">Living room</a>
							<a href='<?php echo site_url('furniture/bathroom')?>' class="filter bath">Bathroom</a>
							<a href='<?php echo site_url('furniture/dining-room')?>' class="filter din active">Dining room</a>
							<a href='<?php echo site_url('furniture/kitchen')?>' class="filter kit">Kitchen</a>
							<a href='<?php echo site_url('furniture/miscellaneous')?>' class="filter mis">Miscellaneous</a>
						<?php }else if($this->uri->segment(2) == 'kitchen'){ ?>
							<a href='<?php echo site_url('furniture/bedroom')?>' class="filter bed">Bedroom</a>
							<a href='<?php echo site_url('furniture/living-room')?>' class="filter liv">Living room</a>
							<a href='<?php echo site_url('furniture/bathroom')?>' class="filter bath">Bathroom</a>
							<a href='<?php echo site_url('furniture/dining-room')?>' class="filter din">Dining room</a>
							<a href='<?php echo site_url('furniture/kitchen')?>' class="filter kit active">Kitchen</a>
							<a href='<?php echo site_url('furniture/miscellaneous')?>' class="filter mis">Miscellaneous</a>
						<?php }else if($this->uri->segment(2) == 'miscellaneous'){ ?>
							<a href='<?php echo site_url('furniture/bedroom')?>' class="filter bed">Bedroom</a>
							<a href='<?php echo site_url('furniture/living-room')?>' class="filter liv">Living room</a>
							<a href='<?php echo site_url('furniture/bathroom')?>' class="filter bath">Bathroom</a>
							<a href='<?php echo site_url('furniture/dining-room')?>' class="filter din">Dining room</a>
							<a href='<?php echo site_url('furniture/kitchen')?>' class="filter kit">Kitchen</a>
							<a href='<?php echo site_url('furniture/miscellaneous')?>' class="filter mis active">Miscellaneous</a>
						<?php } ?>
					</div>
					<div class="search-edu"><input	type="text" placeholder="Search Location"><div class="search-icon"></div></div>
				</div>
				<div class="furniture-listing clearfix">
					<div class="furniture-item-list">
						<?php foreach($records as $key) { ?>
							<div class="furniture-item-list">
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
				<?php echo $this->pagination->create_links();?>
			</div>
		</div>
	</div>
