	<?php if(isset($post_detail)){
			foreach ($post_detail as $key ) {
				$ID = $key->ID;
				$post_furniture_type = $key->post_furniture_type;
				$post_title = $key->post_title;
				$post_price = $key->post_price;
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
				<form method="post" action="<?php echo site_url('modify_furniture/'.$ID); ?>">
				<div class="left">
					<h1>Furniture</h1>
					<div class="filed">
						<input	type="text" placeholder="Type" readonly class="drop" name="post_furniture_type" value="<?php echo $post_furniture_type; ?>">
						<span class="arrow"></span>
						<div class="drop-category">
							<div class="drop-item" item-value="Bedroom">Bedroom</div>
                            <div class="drop-item" item-value="Living room">Living room</div>
                            <div class="drop-item" item-value="Bathroom">Bathroom</div>
                            <div class="drop-item" item-value="Dining room">Dining room</div>
                            <div class="drop-item" item-value="Kitchen">Kitchen</div>
                            <div class="drop-item" item-value="Miscellaneous">Miscellaneous</div>
						</div>
					</div>
					<div class="filed">
						<input	type="text" placeholder="Title" name="post_title" value="<?php echo $post_title; ?>">
					</div>
					<div class="filed">
						<input	type="text" placeholder="Price" name="post_price" value="<?php echo $post_price; ?>">
					</div>
					<?php if($this->session->userdata('logged_in')['user_type'] == 'admin' || $this->session->userdata('logged_in')['user_type'] == 'moderator') {?>
					<div class="filed ex">
						<textarea placeholder="Description" name="post_description"><?php echo $post_description; ?></textarea>
					</div>
					<?php } ?>
				</div>
				<div class="right">
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
						<div class="filed ex">
							<textarea placeholder="Description" name="post_description"><?php echo $post_description; ?></textarea>
						</div>
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