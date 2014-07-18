	<?php if(isset($post_detail)){
			foreach ($post_detail as $key ) {
				$ID = $key->ID;
				$post_education_type = $key->post_education_type;
				$post_education_age = $key->post_education_age;
				$post_education_gender = $key->post_education_gender;
				$post_price = $key->post_price;
				$post_education_community = $key->post_education_community;
				$post_education_principle = $key->post_education_principle;
				$post_education_phone = $key->post_education_phone;
				$post_education_fax = $key->post_education_fax;
				$post_education_email = $key->post_education_email;
				$post_education_website = $key->post_education_website;
				$post_title = $key->post_title;
				$post_description = $key->post_description;
				$post_featured = $key->post_featured;
				$post_seo_title = $key->post_seo_title;
				$post_seo_keywords = $key->post_seo_keywords;
				$post_seo_description = $key->post_seo_description;
			}
		}
	?>
	<div class="home-main clearfix">
		<div class="container">
			<div class="tab-area clearfix">
				<div class="title">Edit Your Listing</div>
				<?php if($this->session->userdata('logged_in')['user_type'] == 'admin') { ?>
					<a href="<?php echo site_url('profile/user')?>"><div class="tab"><span class="icon-tab p"></span><span class="text p">My Profile</span></div></a>
				<?php } else if($this->session->userdata('logged_in')['user_type'] == 'moderator') { ?>
					<a href="<?php echo site_url('profile/user')?>"><div class="tab"><span class="icon-tab p"></span><span class="text p">My Profile</span></div></a>
				<?php }else if($this->session->userdata('logged_in')['user_type'] == 'user') { ?>
					<a href="<?php echo site_url('profile/user')?>"><div class="tab"><span class="icon-tab p"></span><span class="text p">My Profile</span></div></a>
				<?php }else if($this->session->userdata('logged_in')['user_type'] == 'agent') { ?>
					<a href="<?php echo site_url('profile/agent')?>"><div class="tab"><span class="icon-tab p"></span><span class="text p">My Profile</span></div></a>
				<?php } ?>
			</div>
			<div class="upload-area clearfix">
				<form method="post" action="<?php echo site_url('modify_education/'.$ID); ?>" enctype="multipart/form-data">
				<div class="left">
					<h1>Education</h1>
					<div class="filed">
						<input	type="text" placeholder="Type"  name="post_education_type" value="<?php echo $post_education_type; ?>">
					</div>
					<div class="filed">
						<input	type="text" placeholder="Admission Age" name="post_education_age" value="<?php echo $post_education_age; ?>">
					</div>
					<div class="filed">
						<input	type="text" placeholder="Gender" readonly class="drop" name="post_education_gender" value="<?php echo $post_education_gender; ?>">
						<span class="arrow"></span>
						<div class="drop-category">
							<div class="drop-item" item-value="Male">Male</div>
                            <div class="drop-item" item-value="Female">Female</div>
						</div>
					</div>
					<div class="filed">
						<input type="text" placeholder="Registration Fees" name="post_price" value="<?php echo $post_price; ?>">
					</div>
					<div class="filed">
						<input type="text" placeholder="Community" name="post_education_community" value="<?php echo $post_education_community; ?>">
					</div>
					<div class="filed">
						<input type="file" name="files[]" multiple />
					</div>
					<div class="filed clearfix">
					<?php if(isset($image_list)){ 	
							if(!empty($image_list)) {
								foreach ($image_list as $key ) {	
									$image_url=$key->post_image_url; 
									$info = pathinfo($image_url);
									$file_name =  basename($image_url,'.'.$info['extension']);
					?>
						<div class="image_thumb">
							<img src="<?php echo site_url('upload/'.$file_name."_100.".$info['extension'])?>">
							<a href="<?php echo site_url('delete_image?ID='.$key->ID."&post_image_id=".$ID)?>"><div class="delete-image"></div></a>
						</div>
					<?php 		} 
							} 
						}	
					?>
					</div>
					<div class="filed ex">
						<input type="text" placeholder="Principle" name="post_education_principle" value="<?php echo $post_education_principle; ?>">
					</div>
				</div>
				<div class="right">
					<div class="filed">
						<input	type="text" placeholder="Phone"  name="post_education_phone" value="<?php echo $post_education_phone; ?>">
					</div>
					<div class="filed">
						<input	type="text" placeholder="Fax"  name="post_education_fax" value="<?php echo $post_education_fax; ?>">
					</div>
					<div class="filed">
						<input	type="text" placeholder="Email"  name="post_education_email" value="<?php echo $post_education_email; ?>">
					</div>
					<div class="filed">
						<input	type="text" placeholder="Website"  name="post_education_website" value="<?php echo $post_education_website; ?>">
					</div>
					<div class="filed">
						<input	type="text" placeholder="Title"  name="post_title" value="<?php echo $post_title; ?>">
					</div>
					<div class="filed ex">
						<textarea placeholder="Description" name="post_description"><?php echo $post_description; ?></textarea>
					</div>
					<?php if($this->session->userdata('logged_in')['user_type'] == 'admin' || $this->session->userdata('logged_in')['user_type'] == 'moderator') {?>
					<div class="filed ex">
						<input	type="text" placeholder="Featured" readonly class="drop" name="post_featured" value="<?php echo $post_featured == '0' ? 'no':'yes'; ?>">
						<span class="arrow"></span>
						<div class="drop-category">
							<div class="drop-item" item-value="no">no</div>
                            <div class="drop-item" item-value="yes">yes</div>
						</div>
					</div>
					<h1>SEO</h1>
					<div class="filed">
						<input	type="text" placeholder="Google Meta Title" name="post_seo_title" value="<?php echo $post_seo_title; ?>">
					</div>
					<div class="filed">
						<input	type="text" placeholder="Google Meta Keyword" name="post_seo_keywords" value="<?php echo $post_seo_keywords; ?>">
					</div>
					<div class="filed ex">
						<textarea placeholder="Google Meta Description" name="post_seo_description"><?php echo $post_seo_description; ?></textarea>
					</div>
					<?php } else{ ?>
						<input	type="hidden" name="post_seo_title" value="<?php echo $post_seo_title; ?>">
						<input	type="hidden" name="post_seo_keywords" value="<?php echo $post_seo_keywords; ?>">
						<input type="hidden" name="post_seo_description" value="<?php echo $post_seo_description; ?>">
						<input type="hidden" name="post_featured" value="<?php echo $post_featured == '0' ? 'no':'yes'; ?>">
					<?php } ?>
					<input type="submit" class="submit" value="Submit">
				</div>
				</form>
			</div> 
		</div>
	</div>