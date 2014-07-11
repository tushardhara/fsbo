	<div class="home-main clearfix">
		<div class="container">
			<div class="education-listing-settings">
				<div class="education-drop-down-settings clearfix">
					<div class='title'>Education Guid</div>
					<div class='settings-edu'>
						<div class="search-edu"><input	type="text" placeholder="Search Location"><div class="search-icon"></div></div>
						<div class="sort"><div class="drop"><span class="text">Type</span><span class="arrow"></span></div></div>
					</div>
				</div>
				<div class="filter-settings">
					<div class="no-of-item"><span>1-15</span> of 509</div>
					<div class="sort"><span class="text">Short By</span><div class="drop"><span class="text">Most Expensive</span><span class="arrow"></span></div></div>
				</div>
				<div class="edu-listing clearfix">
					<?php foreach ($records as $key){ ?>
						<div class="edu-item-list">
							<div class="left">
								<a href="<?php echo site_url('education/'.$key->post_slug);?>">
									<?php 
										$attached_image = array(
									          'src' => 'images/edu-small-image.png',
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
								<div class="item"><div>Registration Fee: </div><div class="yes"></div><div class="ans"><?php echo $key->post_price;?></div></div>
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
