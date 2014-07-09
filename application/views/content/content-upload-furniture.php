	<div class="home-main clearfix">
		<div class="container">
			<div class="upload_type clearfix">
				<?php if($this->session->userdata('logged_in')['user_type'] == 'admin') { ?>
					<a href="<?php echo site_url('profile/user/property')?>" class="">Property</a>
					<a href="<?php echo site_url('profile/user/furniture')?>" class="active">Furniture</a>
					<a href="<?php echo site_url('profile/user/education')?>" class="">Education</a>
				<?php } else if($this->session->userdata('logged_in')['user_type'] == 'moderator') { ?>
					<a href="<?php echo site_url('profile/user/property')?>" class="">Property</a>
					<a href="<?php echo site_url('profile/user/furniture')?>" class="active">Furniture</a>
					<a href="<?php echo site_url('profile/user/education')?>" class="">Education</a>
				<?php }else if($this->session->userdata('logged_in')['user_type'] == 'user') { ?>
					<a href="<?php echo site_url('profile/user/property')?>" class="">Property</a>
					<a href="<?php echo site_url('profile/user/furniture')?>" class="active">Furniture</a>
					<a href="<?php echo site_url('profile/user/education')?>" class="">Education</a>
				<?php }else if($this->session->userdata('logged_in')['user_type'] == 'agent') { ?>
					<a href="<?php echo site_url('profile/agent/property')?>" class="">Property</a>
					<a href="<?php echo site_url('profile/user/furniture')?>" class="active">Furniture</a>
					<a href="<?php echo site_url('profile/user/education')?>" class="">Education</a>
				<?php } ?>
			</div>
			<div class="tab-area clearfix">
				<div class="title">Specify Your Listing</div>
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
				<form method="post" action="<?php echo site_url('add_furniture'); ?>">
				<div class="left">
					<h1>Furniture</h1>
					<div class="filed">
						<input	type="text" placeholder="Type" readonly class="drop" name="post_furniture_type">
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
						<input	type="text" placeholder="Title" name="post_title">
					</div>
					<div class="filed">
						<input	type="text" placeholder="Price" name="post_price">
					</div>
					<div class="filed ex">
						<textarea placeholder="Description" name="post_description"></textarea>
					</div>
				</div>
				<div class="right">
					<h1>SEO</h1>
					<div class="filed">
						<input	type="text" placeholder="Google Meta Title" name="post_seo_title">
					</div>
					<div class="filed">
						<input	type="text" placeholder="Google Meta Keyword" name="post_seo_keywords">
					</div>
					<div class="filed ex">
						<textarea placeholder="Google Meta Description" name="post_seo_description"></textarea>
					</div>
					<input type="submit" class="submit" value="Submit">
				</div>
				</form>
			</div> 
		</div>
	</div>