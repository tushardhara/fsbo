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
					<div class='title'>Education Guide</div>
					<div class='settings-edu'>
						<?php echo form_open('search'); ?>
						<div class="search-edu"><?php echo form_input('post_title', set_value('post_title'), 'Placeholder="Search"'); ?><input type="hidden" name="post_type" value="education"><input type="submit" style="position: absolute; left: -9999px"/><div class="search-icon"></div></div>
						<?php echo form_close(); ?>
						<div class="sort">
							<span class="text">Type</span>
							<div class="drop">
								<?php if($this->uri->segment(2)=='') {?>
									<span class="text">All</span><span class="arrow"></span>
								<?php }else if($this->uri->segment(2)=='0'){ ?>
									<?php if($this->uri->segment(3)=='All') { ?>
										<span class="text">All</span><span class="arrow"></span>
									<?php }else {?>
										<span class="text"><?php echo $this->uri->segment(3) ?></span><span class="arrow"></span>
									<?php } ?>
								<?php } ?>
								
							</div>
							<div class="filter-drop">
								<div class="items"><a href="<?php echo site_url("education/$query_id/All/ID/desc")?>">All</a></div>
								<?php if(isset($get_all_eduction_type)){ 
										if(!empty($get_all_eduction_type)){
											foreach ($get_all_eduction_type as $key) { ?>
												<div class="items"><a href="<?php echo site_url("education/$query_id/$key->post_education_type/ID/desc")?>"><?php echo $key->post_education_type;?></a></div>
												<?php $post_education_type[$key->post_education_type]=$key->post_education_type; ?>
								<?php		}
										}
									} 
								?>
							</div>
						</div>
					</div>
				</div>
				<div class="filter-settings">
					<div class="no-of-item"><span><?php echo $per_page;?></span> of <?php echo $num_results; ?></div>
					<div class="sort">
						<span class="text">Short By</span>
						<div class="drop">
							<?php if($this->uri->segment(2)=='') {?>
								<span class="text">Relevance</span><span class="arrow"></span>
							<?php } else if($this->uri->segment(2)=='0') {?>
								<?php if($this->uri->segment(4)=='ID') { ?>
									<span class="text">Relevance</span><span class="arrow"></span>
								<?php } else if($this->uri->segment(4)=='post_price'){ ?>
									<?php if($this->uri->segment(4)=='') {?>
									<span class="text">Price : Low to High</span><span class="arrow"></span>
									<?php } else if($this->uri->segment(5)=='asc') {?>
									<span class="text">Price : Low to High</span><span class="arrow"></span>
									<?php } else if($this->uri->segment(5)=='desc') {?>
									<span class="text">Price : High to Low</span><span class="arrow"></span>
									<?php } ?>
								<?php }else if($this->uri->segment(4)=='post_date'){ ?>
									<span class="text">Date : Latest First</span><span class="arrow"></span>
								<?php } ?>
							<?php } else { ?>
								<span class="text">Relevance</span><span class="arrow"></span>
							<?php } ?>
						</div>
						<?php if($this->uri->segment(2)=='') {?>
						<div class="filter-drop">
							<div class="items"><a href="<?php echo site_url("education/$query_id/All/ID/desc")?>">Relevance</a></div>
							<div class="items"><a href="<?php echo site_url("education/$query_id/All/post_price/asc")?>">Price : Low to High</a></div>
							<div class="items"><a href="<?php echo site_url("education/$query_id/All/post_price/desc")?>">Price : High to Low</a></div>
							<div class="items"><a href="<?php echo site_url("education/$query_id/All/post_date/asc")?>">Date : Latest First</a></div>
						</div>
						<?php } else if($this->uri->segment(2)=='0') {?>
							<?php if($this->uri->segment(3)=='All') { ?>
								<?php if($this->uri->segment(4)=='ID') { ?>
								<div class="filter-drop">
									<div class="items"><a href="<?php echo site_url("education/$query_id/All/ID/desc")?>">Relevance</a></div>
									<div class="items"><a href="<?php echo site_url("education/$query_id/All/post_price/asc")?>">Price : Low to High</a></div>
									<div class="items"><a href="<?php echo site_url("education/$query_id/All/post_price/desc")?>">Price : High to Low</a></div>
									<div class="items"><a href="<?php echo site_url("education/$query_id/All/post_date/asc")?>">Date : Latest First</a></div>
								</div>
								<?php }else if($this->uri->segment(4)=='post_price'){ ?>
								<div class="filter-drop">
									<div class="items"><a href="<?php echo site_url("education/$query_id/All/ID/desc")?>">Relevance</a></div>
									<div class="items"><a href="<?php echo site_url("education/$query_id/All/post_price/asc")?>">Price : Low to High</a></div>
									<div class="items"><a href="<?php echo site_url("education/$query_id/All/post_price/desc")?>">Price : High to Low</a></div>
									<div class="items"><a href="<?php echo site_url("education/$query_id/All/post_date/asc")?>">Date : Latest First</a></div>
								</div>
								<?php }else if($this->uri->segment(4)=='post_date'){ ?>
								<div class="filter-drop">
									<div class="items"><a href="<?php echo site_url("education/$query_id/All/ID/desc")?>">Relevance</a></div>
									<div class="items"><a href="<?php echo site_url("education/$query_id/All/post_price/asc")?>">Price : Low to High</a></div>
									<div class="items"><a href="<?php echo site_url("education/$query_id/All/post_price/desc")?>">Price : High to Low</a></div>
									<div class="items"><a href="<?php echo site_url("education/$query_id/All/post_date/asc")?>">Date : Latest First</a></div>
								</div>
								<?php } ?>
							<?php } else { ?>
									<?php if(!empty($post_education_type[$this->uri->segment(3)])) {  $type=$this->uri->segment(3);?>
									<div class="filter-drop">
										<div class="items"><a href="<?php echo site_url("education/$query_id/$type/ID/desc")?>">Relevance</a></div>
										<div class="items"><a href="<?php echo site_url("education/$query_id/$type/post_price/asc")?>">Price : Low to High</a></div>
										<div class="items"><a href="<?php echo site_url("education/$query_id/$type/post_price/desc")?>">Price : High to Low</a></div>
										<div class="items"><a href="<?php echo site_url("education/$query_id/$type/post_date/asc")?>">Date : Latest First</a></div>
									</div>
									<?php } ?>
							<?php } ?>
						<?php }else{ ?>
							<div class="filter-drop">
								<div class="items"><a href="<?php echo site_url("education/$query_id/All/ID/desc")?>">Relevance</a></div>
								<div class="items"><a href="<?php echo site_url("education/$query_id/All/post_price/asc")?>">Price : Low to High</a></div>
								<div class="items"><a href="<?php echo site_url("education/$query_id/All/post_price/desc")?>">Price : High to Low</a></div>
								<div class="items"><a href="<?php echo site_url("education/$query_id/All/post_date/asc")?>">Date : Latest First</a></div>
							</div>
						<?php } ?>
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
				<?php if (strlen($pagination)): ?>
				<div class="pagination">
					<ul><?php echo $pagination; ?></ul>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
