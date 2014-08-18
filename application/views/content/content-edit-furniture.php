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
				<form id="target" method="post" action="<?php echo site_url('modify_furniture/'.$ID); ?>" enctype="multipart/form-data">
				<div class="left">
					<h1>Furniture</h1>
					<div class="filed">
						<span class="info">Type : </span><input	type="text" placeholder="Type" readonly class="drop" name="post_furniture_type" value="<?php echo $post_furniture_type; ?>">
						<span class="arrow"></span>
						<div class="drop-category">
							<?php if(isset($furniture_type)) { ?>
								<?php if(!empty($furniture_type)) { ?>
									<?php foreach ($furniture_type as $key) { ?>
										<div class="drop-item" item-value="<?php echo $key->name?>"><?php echo $key->name?></div>
									<?php } ?>
								<?php } ?>
							<?php } ?>
						</div>
					</div>
					<div class="filed">
						<span class="info">Title : </span><input	type="text" placeholder="Title" name="post_title" value="<?php echo $post_title; ?>">
					</div>
					<div class="filed">
						<span class="info">Price : </span><input	type="text" placeholder="Price" name="post_price" value="<?php echo $post_price; ?>"> <span class="extra">QR</span>
					</div>
					<div class="filed">
						<div class="fileUpload btn btn-primary">
						    <input type="file" name="files[]" class="upload" multiple/>
						</div>
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
				</div>
				<div class="right">
					<h1>&nbsp;</h1>
					<div class="filed">
						<textarea placeholder="Description" name="post_description"><?php echo $post_description; ?></textarea>
					</div>
					<?php if($this->session->userdata('logged_in')['user_type'] == 'admin' || $this->session->userdata('logged_in')['user_type'] == 'moderator') {?>
					<div class="filed ex">
						<span class="info">Featured : </span><input	type="text" placeholder="Featured" readonly class="drop" name="post_featured" value="<?php echo $post_featured == '0' ? 'no':'yes'; ?>">
						<span class="arrow"></span>
						<div class="drop-category">
							<div class="drop-item" item-value="no">no</div>
                            <div class="drop-item" item-value="yes">yes</div>
						</div>
					</div>
					<h1>SEO</h1>
					<div class="filed">
						<span class="info">Meta Title : </span><input	type="text" placeholder="Google Meta Title" name="post_seo_title" value="<?php echo $post_seo_title; ?>">
					</div>
					<div class="filed">
						<span class="info">Meta Keyword : </span><input	type="text" placeholder="Google Meta Keyword" name="post_seo_keywords" value="<?php echo $post_seo_keywords; ?>">
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