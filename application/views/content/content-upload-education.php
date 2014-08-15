	<div class="home-main clearfix">
		<div class="container">
			<div class="upload_type clearfix">
				<?php if($this->session->userdata('logged_in')['user_type'] == 'admin') { ?>
					<a href="<?php echo site_url('profile/admin/property')?>" class="">Property</a>
					<a href="<?php echo site_url('profile/admin/furniture')?>" class="">Furniture</a>
					<a href="<?php echo site_url('profile/admin/education')?>" class="active">Education</a>
				<?php } else if($this->session->userdata('logged_in')['user_type'] == 'moderator') { ?>
					<a href="<?php echo site_url('profile/moderator/property')?>" class="">Property</a>
					<a href="<?php echo site_url('profile/moderator/furniture')?>" class="">Furniture</a>
					<a href="<?php echo site_url('profile/moderator/education')?>" class="active">Education</a>
				<?php }else if($this->session->userdata('logged_in')['user_type'] == 'user') { ?>
					<a href="<?php echo site_url('profile/user/property')?>" class="">Property</a>
					<a href="<?php echo site_url('profile/user/furniture')?>" class="">Furniture</a>
				<?php }else if($this->session->userdata('logged_in')['user_type'] == 'agent') { ?>
					<a href="<?php echo site_url('profile/agent/property')?>" class="">Property</a>
					<a href="<?php echo site_url('profile/agent/furniture')?>" class="">Furniture</a>
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
				<form id="target" method="post" action="<?php echo site_url('add_education'); ?>" enctype="multipart/form-data">
				<div class="left">
					<h1>Education</h1>
					<div class="filed">
						<span class="info">Type : </span><input	type="text" placeholder="Type"  name="post_education_type">
					</div>
					<div class="filed">
						<span class="info">Admission Age : </span><input	type="text" placeholder="Admission Age" name="post_education_age">
					</div>
					<div class="filed">
						<span class="info">Gender : </span><input	type="text" placeholder="Gender" readonly class="drop" name="post_education_gender">
						<span class="arrow"></span>
						<div class="drop-category">
							<div class="drop-item" item-value="Male">Male</div>
                            <div class="drop-item" item-value="Female">Female</div>
						</div>
					</div>
					<div class="filed">
						<span class="info">Registration Fees : </span><input type="text" placeholder="Registration Fees" name="post_price"> <span class="extra">QR</span>
					</div>
					<div class="filed">
						<span class="info">Community : </span><input type="text" placeholder="Community" name="post_education_community">
					</div>
					<div class="filed">
						<input type="file" name="files[]" multiple />
					</div>
					<div class="filed ex">
						<span class="info">Principle : </span><input type="text" placeholder="Principle" name="post_education_principle">
					</div>
				</div>
				<div class="right">
					<h1>&nbsp;</h1>
					<div class="filed">
						<span class="info">Phone : </span><input	type="text" placeholder="Phone"  name="post_education_phone">
					</div>
					<div class="filed">
						<span class="info">Fax : </span><input	type="text" placeholder="Fax"  name="post_education_fax">
					</div>
					<div class="filed">
						<span class="info">Email : </span><input	type="text" placeholder="Email"  name="post_education_email">
					</div>
					<div class="filed">
						<span class="info">Website : </span><input	type="text" placeholder="Website"  name="post_education_website">
					</div>
					<div class="filed">
						<span class="info">Name of Institution : </span><input	type="text" placeholder="Name of Institution"  name="post_title">
					</div>
					<div class="filed ex">
						<textarea placeholder="Description" name="post_description"></textarea>
					</div>
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