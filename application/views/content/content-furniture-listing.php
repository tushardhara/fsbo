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
							<?php if($this->uri->segment(2) == '' || is_numeric($this->uri->segment(2))) {?>
								<span class="text">Relevance</span><span class="arrow"></span>
							<?php }else if($this->uri->segment(3) == 'ID' && $this->uri->segment(4) == 'desc' && is_numeric($this->uri->segment(2))){ ?>
							<span class="text">Relevance</span><span class="arrow"></span>
							<?php }else if($this->uri->segment(3) == 'post_price' && $this->uri->segment(4) == 'asc' && is_numeric($this->uri->segment(2))){ ?>
							<span class="text">Price : Low to High</span><span class="arrow"></span>
							<?php }else if($this->uri->segment(3) == 'post_price' && $this->uri->segment(4) == 'desc' && is_numeric($this->uri->segment(2))){ ?>
							<span class="text">Price : High to Low</span><span class="arrow"></span>
							<?php } else if($this->uri->segment(3) == 'post_date' && $this->uri->segment(4) == 'asc' && is_numeric($this->uri->segment(2))) { ?>
							<span class="text">Date : Latest First</span><span class="arrow"></span>
							<?php } ?>
						</div>
	
						<div class="filter-drop">
							<div class="items"><a href="<?php echo site_url("furniture/$query_id/ID/desc")?>">Relevance</a></div>
							<div class="items"><a href="<?php echo site_url("furniture/$query_id/post_price/asc")?>">Price : Low to High</a></div>
							<div class="items"><a href="<?php echo site_url("furniture/$query_id/post_price/desc")?>">Price : High to Low</a></div>
							<div class="items"><a href="<?php echo site_url("furniture/$query_id/post_date/asc")?>">Date : Latest First</a></div>
						</div>
					</div>
					<div class="filter-list">
							<a href='<?php echo site_url("furniture/$query_id/bedroom/desc")?>' class="filter bed active">Bedroom</a>
							<a href='<?php echo site_url("furniture/$query_id/living-room/desc")?>' class="filter liv">Living room</a>
							<a href='<?php echo site_url("furniture/$query_id/bathroom/desc")?>' class="filter bath">Bathroom</a>
							<a href='<?php echo site_url("furniture/$query_id/dining-room/desc")?>' class="filter din">Dining room</a>
							<a href='<?php echo site_url("furniture/$query_id/kitchen/desc")?>' class="filter kit">Kitchen</a>
							<a href='<?php echo site_url("furniture/$query_id/miscellaneous/desc")?>' class="filter mis">Miscellaneous</a>
					</div>
					<?php echo form_open('search'); ?>
						<div class="search-edu"><?php echo form_input('post_title', set_value('post_title'), 'Placeholder="Search"'); ?><input type="hidden" name="post_type" value="furniture"><input type="submit" style="position: absolute; left: -9999px"/><div class="search-icon"></div></div>
					<?php echo form_close(); ?>
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
