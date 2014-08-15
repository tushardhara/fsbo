	<div class="home-main clearfix">
		<div class="container">
			<div class="upload_type clearfix">
				<?php if($this->session->userdata('logged_in')['user_type'] == 'admin') { ?>
					<a href="<?php echo site_url('profile/admin/property')?>" class="">Property</a>
					<a href="<?php echo site_url('profile/admin/furniture')?>" class="active">Furniture</a>
					<a href="<?php echo site_url('profile/admin/education')?>" class="">Education</a>
				<?php } else if($this->session->userdata('logged_in')['user_type'] == 'moderator') { ?>
					<a href="<?php echo site_url('profile/moderator/property')?>" class="">Property</a>
					<a href="<?php echo site_url('profile/moderator/furniture')?>" class="active">Furniture</a>
					<a href="<?php echo site_url('profile/moderator/education')?>" class="">Education</a>
				<?php }else if($this->session->userdata('logged_in')['user_type'] == 'user') { ?>
					<a href="<?php echo site_url('profile/user/property')?>" class="">Property</a>
					<a href="<?php echo site_url('profile/user/furniture')?>" class="active">Furniture</a>
				<?php }else if($this->session->userdata('logged_in')['user_type'] == 'agent') { ?>
					<a href="<?php echo site_url('profile/agent/property')?>" class="">Property</a>
					<a href="<?php echo site_url('profile/agent/furniture')?>" class="active">Furniture</a>
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
				<form id="target" method="post" action="<?php echo site_url('add_furniture'); ?>" enctype="multipart/form-data">
				<div class="left">
					<h1>Furniture</h1>
					<div class="filed">
						<span class="info">Type : </span><input	type="text" placeholder="Type" readonly class="drop" name="post_furniture_type">
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
						<span class="info">Title : </span><input	type="text" placeholder="Title" name="post_title">
					</div>
					<div class="filed">
						<span class="info">Price : </span><input	type="text" placeholder="Price" name="post_price"> <span class="extra">QR</span>
					</div>
					<div class="filed">
						<input type="file" name="files[]" multiple />
					</div>
					<?php if($this->session->userdata('logged_in')['user_type'] == 'admin' || $this->session->userdata('logged_in')['user_type'] == 'moderator') {?>
					<div class="filed ex">
						<textarea placeholder="Description" name="post_description"></textarea>
					</div>
					<?php } ?>
				</div>
				<div class="right">
					<?php if($this->session->userdata('logged_in')['user_type'] == 'admin' || $this->session->userdata('logged_in')['user_type'] == 'moderator') {?>
					<div class="filed ex">
						<span class="info">Featured : </span><input	type="text" placeholder="Featured" readonly class="drop" name="post_featured">
						<span class="arrow"></span>
						<div class="drop-category">
							<div class="drop-item" item-value="no">no</div>
                            <div class="drop-item" item-value="yes">yes</div>
						</div>
					</div>
					<h1>SEO</h1>
					<div class="filed">
						<span class="info">Meta Title : </span><input	type="text" placeholder="Google Meta Title" name="post_seo_title">
					</div>
					<div class="filed">
						<span class="info">Meta Keyword : </span><input	type="text" placeholder="Google Meta Keyword" name="post_seo_keywords">
					</div>
					<div class="filed ex">
						<textarea placeholder="Google Meta Description" name="post_seo_description"></textarea>
					</div>
					<?php } else{ ?>
						<div class="filed ex">
							<textarea placeholder="Description" name="post_description"></textarea>
						</div>
						<input	type="hidden" name="post_seo_title">
						<input	type="hidden" name="post_seo_keywords">
						<input type="hidden" name="post_seo_description">
						<input type="hidden" name="post_featured" value="no">
					<?php } ?>
					<input id="check" type="checkbox" name="check" value="1" style="margin-top:20px;">agree with <span><a href="<?php echo site_url();?>" style="color:#ffa800;text-decoration:none;">Terms & Conditions</a></span><br>
					<input type="submit" class="submit" value="Submit">
				</div>
				</form>
			</div> 
		</div>
	</div>

	<script type="text/javascript">
	  $(document).ready(function(){
	  	$("#target").submit(function(event){
	  		if($("#check").is(':checked')){
	  			return;
	  		}else{
	  			alert("Please select the Terms & Conditions checkbox");
	  		}
	  		event.preventDefault();
	  	});
	  });
	</script>