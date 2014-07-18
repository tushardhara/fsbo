	<?php if(isset($user_image_mylist)){ 
			if(!empty($user_image_mylist)){
				foreach ($user_image_mylist as $key) {
					$image[$key->post_image_id] = $key->post_image_url;
				}
			}
		} 
	?>
	<div class="home-main clearfix">
		<div class="container">
			<div class="furniture-listing-settings">
				<div class="filter-settings">
					<div class="sort">
						<span class="text">Short By</span>
						<div class="drop">
							<?php if($this->uri->segment(3) == '' || is_numeric($this->uri->segment(3))){ ?>
							<span class="text">Relevance</span><span class="arrow"></span>
							<?php }else if($this->uri->segment(3) == 'low'){ ?>
							<span class="text">Price : Low to High</span><span class="arrow"></span>
							<?php }else if($this->uri->segment(3) == 'high'){ ?>
							<span class="text">Price : High to Low</span><span class="arrow"></span>
							<?php } else if($this->uri->segment(3) == 'new') { ?>
							<span class="text">Date : Latest First</span><span class="arrow"></span>
							<?php } ?>
						</div>
						<?php if($this->uri->segment(2) == 'bedroom'){ ?>
						<div class="filter-drop">
							<div class="items"><a href="<?php echo site_url('furniture/bedroom/')?>">Relevance</a></div>
							<div class="items"><a href="<?php echo site_url('furniture/bedroom/low/')?>">Price : Low to High</a></div>
							<div class="items"><a href="<?php echo site_url('furniture/bedroom/high/')?>">Price : High to Low</a></div>
							<div class="items"><a href="<?php echo site_url('furniture/bedroom/new/')?>">Date : Latest First</a></div>
						</div>
						<?php }else if($this->uri->segment(2) == 'living-room'){ ?>
						<div class="filter-drop">
							<div class="items"><a href="<?php echo site_url('furniture/living-room/')?>">Relevance</a></div>
							<div class="items"><a href="<?php echo site_url('furniture/living-room/low/')?>">Price : Low to High</a></div>
							<div class="items"><a href="<?php echo site_url('furniture/living-room/high/')?>">Price : High to Low</a></div>
							<div class="items"><a href="<?php echo site_url('furniture/living-room/new/')?>">Date : Latest First</a></div>
						</div>
						<?php }else if($this->uri->segment(2) == 'bathroom'){ ?>
						<div class="filter-drop">
							<div class="items"><a href="<?php echo site_url('furniture/bathroom/')?>">Relevance</a></div>
							<div class="items"><a href="<?php echo site_url('furniture/bathroom/low/')?>">Price : Low to High</a></div>
							<div class="items"><a href="<?php echo site_url('furniture/bathroom/high/')?>">Price : High to Low</a></div>
							<div class="items"><a href="<?php echo site_url('furniture/bathroom/new/')?>">Date : Latest First</a></div>
						</div>
						<?php }else if($this->uri->segment(2) == 'dining-room'){ ?>
						<div class="filter-drop">
							<div class="items"><a href="<?php echo site_url('furniture/dining-room/')?>">Relevance</a></div>
							<div class="items"><a href="<?php echo site_url('furniture/dining-room/low/')?>">Price : Low to High</a></div>
							<div class="items"><a href="<?php echo site_url('furniture/dining-room/high/')?>">Price : High to Low</a></div>
							<div class="items"><a href="<?php echo site_url('furniture/dining-room/new/')?>">Date : Latest First</a></div>
						</div>
						<?php }else if($this->uri->segment(2) == 'kitchen'){ ?>
						<div class="filter-drop">
							<div class="items"><a href="<?php echo site_url('furniture/kitchen/')?>">Relevance</a></div>
							<div class="items"><a href="<?php echo site_url('furniture/kitchen/low/')?>">Price : Low to High</a></div>
							<div class="items"><a href="<?php echo site_url('furniture/kitchen/high/')?>">Price : High to Low</a></div>
							<div class="items"><a href="<?php echo site_url('furniture/kitchen/new/')?>">Date : Latest First</a></div>
						</div>
						<?php }else if($this->uri->segment(2) == 'miscellaneous'){ ?>
						<div class="filter-drop">
							<div class="items"><a href="<?php echo site_url('furniture/miscellaneous/')?>">Relevance</a></div>
							<div class="items"><a href="<?php echo site_url('furniture/miscellaneous/low/')?>">Price : Low to High</a></div>
							<div class="items"><a href="<?php echo site_url('furniture/miscellaneous/high/')?>">Price : High to Low</a></div>
							<div class="items"><a href="<?php echo site_url('furniture/miscellaneous/new/')?>">Date : Latest First</a></div>
						</div>
						<?php } ?>
					</div>
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
										<?php if(!empty($image[$key->ID])) {
													$image_url=$image[$key->ID]; 
													$info = pathinfo($image_url);
													$file_name =  basename($image_url,'.'.$info['extension']);
													$file_url = 'upload/'.$file_name."_270.".$info['extension'];
												}else{
													$file_url = 'images/dummy-feature-small.png';
												}
												$attached_image = array(
											          'src' => $file_url ,
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
								<div class="featured-listing-price"><?php echo round($key->post_price);?> QR</div>
								<a class="featured-listing-view" href="<?php echo site_url('furniture/'.$key->post_slug);?>">View Details</a>
							</div>
						<?php } ?>
					</div>
				</div>
				<?php echo $this->pagination->create_links();?>
			</div>
		</div>
	</div>
