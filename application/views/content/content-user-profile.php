	<?php 
		if(isset($user_detail)){
			foreach ($user_detail as $key) {
				$user_login = $key->user_login;
				$user_email = $key->user_email;
				$user_language = $key->user_language;
				$user_fname = $key->user_fname;
				$user_lname = $key->user_lname;
				$user_phone = $key->user_phone;
				$user_city  = $key->user_city;
				$user_country = $key->user_country;
				$user_title = $key->user_title;
				$user_detail = $key->user_detail;
				$user_provider = $key->user_provider;
				$user_pic = $key->user_pic;
			}
		} 
	?>
	<div class="home-main clearfix">
		<div class="container">
			<?php include('tab/tab-area.php');?>
			<div class="edit-area clearfix">
				<form method="post" action="<?php echo site_url('modify_check'); ?>" enctype="multipart/form-data">
				<div class="left">
					<div class="filed">
						<span class="info">Username : </span><input	type="text" value="<?php echo $user_login;?>" name='user_login' placeholder="Username" readonly>
					</div>
					<div class="filed">
						<span class="info">Password : </span><input	type="password" value="" name='user_pass' readonly placeholder="password">
						<span class="edit-filed">Edit</span>
					</div>
					<div class="filed">
						<span class="info">Email : </span><input	type="text" value="<?php echo $user_email; ?>" name='user_email' readonly placeholder="Email">
						<?php if($user_provider == 'Twitter') { ?>
							<span class="edit-filed">Edit</span>
						<?php } ?>
					</div>
					<div class="filed">
						<span class="info">Language : </span><input	type="text" value="<?php echo $user_language; ?>" name='user_language' readonly placeholder="English" class="drop">
						<span class="arrow"></span>
						<div class="drop-category">
							<div class="drop-item" item-value="English">English</div>
                            <div class="drop-item" item-value="Arabic">Arabic</div>
						</div>
					</div>
					<div class="filed">
						<textarea name='user_detail' readonly placeholder="About"><?php echo $user_detail; ?></textarea>
						<span class="edit-filed">Edit</span>
					</div>
				</div>
				<div class="right">
					<div class="filed">
						<span class="info">First Name : </span><input	type="text" value="<?php echo $user_fname; ?>" name='user_fname' readonly placeholder="First Name">
						<span class="edit-filed">Edit</span>
					</div>
					<div class="filed">
						<span class="info">Last Name : </span><input	type="text" value="<?php echo $user_lname; ?>" name='user_lname' readonly placeholder="Last Name">
						<span class="edit-filed">Edit</span>
					</div>
					<div class="filed">
						<span class="info">Phone : </span><input	type="text" value="<?php echo $user_phone; ?>" name='user_phone' readonly placeholder="Phone No.">
						<span class="edit-filed">Edit</span>
					</div>
					<div class="filed ">
						<span class="info">Country : </span><input	type="text" value="<?php echo $user_country; ?>" name='user_country' readonly placeholder="Country" class="drop">
						<span class="arrow"></span>
						<div class="drop-category">
						<?php 
							if(isset($country_list)){
								foreach ($country_list as $key) {
						?>
								<div class="drop-item" item-value="<?php echo $key->name;?>"><?php echo $key->name;?></div>
						<?php }
						}
						?>
						</div>
					</div>
					<div class="filed">
						<span class="info">City : </span><input	type="text" value="<?php echo $user_city; ?>" name='user_city' readonly placeholder="City">
						<span class="edit-filed">Edit</span>
					</div>
					<div class="filed border-bottom">
						<input type="file" name="userfile"/>
					</div>
					<?php if(!empty($user_pic)) {
							$image_url=$user_pic; 
							$info = pathinfo($image_url);
							$file_name =  basename($image_url,'.'.$info['extension']);
							$file_url = 'upload/'.$file_name."_100.".$info['extension'];
						}else{
							$file_url = 'images/compare.png';
						}
						$attached_image = array(
					          'src' => $file_url ,
					          'alt' => $user_login,
					          'title' => $user_login,
						);
					?>
					<?php echo img($attached_image);?>
					<input	type="hidden" name="user_title" value="">
					<input type="submit" class="submit"></input>
				</div>
				</form>
			</div>
		</div>
	</div>
	