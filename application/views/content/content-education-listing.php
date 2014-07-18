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
			<div class="education-listing-settings">
				<div class="education-drop-down-settings clearfix">
					<div class='title'>Education Guid</div>
					<div class='settings-edu'>
						<div class="search-edu"><input	type="text" placeholder="Search Location"><div class="search-icon"></div></div>
						<!--div class="sort"><div class="drop"><span class="text">Type</span><span class="arrow"></span></div></div-->
					</div>
				</div>
				<div class="filter-settings">
					<div class="no-of-item"><span>1-15</span> of 509</div>
					<div class="sort">
						<span class="text">Short By</span>
						<div class="drop">
							<?php if($this->uri->segment(2) == '' || is_numeric($this->uri->segment(2))){ ?>
							<span class="text">Relevance</span><span class="arrow"></span>
							<?php }else if($this->uri->segment(2) == 'low'){ ?>
							<span class="text">Price : Low to High</span><span class="arrow"></span>
							<?php }else if($this->uri->segment(2) == 'high'){ ?>
							<span class="text">Price : High to Low</span><span class="arrow"></span>
							<?php } else if($this->uri->segment(2) == 'new') { ?>
							<span class="text">Date : Latest First</span><span class="arrow"></span>
							<?php } ?>
						</div>
						<div class="filter-drop">
							<div class="items"><a href="<?php echo site_url('education/')?>">Relevance</a></div>
							<div class="items"><a href="<?php echo site_url('education/low/')?>">Price : Low to High</a></div>
							<div class="items"><a href="<?php echo site_url('education/high/')?>">Price : High to Low</a></div>
							<div class="items"><a href="<?php echo site_url('education/new/')?>">Date : Latest First</a></div>
						</div>
					</div>
				</div>
				<div class="edu-listing clearfix">
					<?php foreach ($records as $key){ ?>
						<div class="edu-item-list">
							<div class="left">
								<a href="<?php echo site_url('education/'.$key->post_slug);?>">
									<?php if(!empty($image[$key->ID])) {
													$image_url=$image[$key->ID]; 
													$info = pathinfo($image_url);
													$file_name =  basename($image_url,'.'.$info['extension']);
													$file_url = 'upload/'.$file_name."_180.".$info['extension'];
										}else{
											$file_url = 'images/edu-small-image.png';
										}
										$attached_image = array(
									          'src' => $file_url ,
									          'alt' => 'fsbo',
									          'title' => 'fsbo',
										);
									?>
									<?php echo img($attached_image);?>
								</a>
							</div>
							<div class="mid">
								<a href="<?php echo site_url('education/'.$key->post_slug);?>"><h1><?php echo $key->post_title;?></h1></a>
								<p><?php echo $key->post_description;?></p>
							</div>
							<div class="right">
								<div class="item"><div>Type: </div><div class="yes"></div><div class="ans"><?php echo $key->post_education_type;?></div></div>
								<div class="item"><div>Admission Age: </div><div class="yes"></div><div class="ans"><?php echo $key->post_education_age;?></div></div>
								<div class="item"><div>Gender: </div><div class="no"></div><div class="ans"><?php echo $key->post_education_gender;?></div></div>
								<div class="item"><div>Registration Fee: </div><div class="yes"></div><div class="ans"><?php echo round($key->post_price);?></div></div>
								<div class="item"><div>Community: </div><div class="no"></div><div class="ans"><?php echo $key->post_education_community;?></div></div>
								<a href="<?php echo site_url('education/'.$key->post_slug);?>" class="see-more">See More</a>
							</div>
						</div>
					<?php } ?>
				</div>
				<?php echo $this->pagination->create_links();?>
			</div>
		</div>
	</div>
