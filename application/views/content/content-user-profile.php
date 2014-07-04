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
				$user_provider = $key->user_provider;
			}
		} 
	?>
	<div class="home-main clearfix">
		<div class="container">
			<div class="tab-area clearfix">
				<div class="title">Account Settings</div>
				<a href="#"><div class="tab"><span class="icon-tab p"></span><span class="text p">My Profile</span></div></a>
				<a href="#"><div class="tab"><span class="icon-tab l"></span><span class="text l">My Listing</span></div></a>
				<a href="#"><div class="tab"><span class="icon-tab m"></span><span class="text m">Messages</span></div></a>
				<a href="#"><div class="tab"><span class="icon-tab w"></span><span class="text w">Wish List</span></div></a>
				<a href="#"><div class="tab"><span class="icon-tab u"></span><span class="text u">Upload</span></div></a>
			</div>
			<div class="edit-area clearfix">
				<form method="post" action="<?php echo site_url('modify_check'); ?>">
				<div class="left">
					<div class="filed">
						<input	type="text" value="<?php echo $user_login;?>" name='user_login' placeholder="Username" readonly>
					</div>
					<div class="filed">
						<input	type="password" value="" name='user_pass' readonly placeholder="password">
						<span class="edit-filed">Edit</span>
					</div>
					<div class="filed">
						<input	type="text" value="<?php echo $user_email; ?>" name='user_email' readonly placeholder="Email">
						<?php if($user_provider == 'Twitter') { ?>
							<span class="edit-filed">Edit</span>
						<?php } ?>
					</div>
					<div class="filed">
						<input	type="text" value="<?php echo $user_language; ?>" name='user_language' readonly placeholder="Language: English">
						<span class="edit-filed">Edit</span>
					</div>
					<input type="submit" class="submit"></input>
				</div>
				<div class="right">
					<div class="filed">
						<input	type="text" value="<?php echo $user_fname; ?>" name='user_fname' readonly placeholder="First Name">
						<span class="edit-filed">Edit</span>
					</div>
					<div class="filed">
						<input	type="text" value="<?php echo $user_lname; ?>" name='user_lname' readonly placeholder="Last Name">
						<span class="edit-filed">Edit</span>
					</div>
					<div class="filed">
						<input	type="text" value="<?php echo $user_phone; ?>" name='user_phone' readonly placeholder="Phone No.">
						<span class="edit-filed">Edit</span>
					</div>
					<div class="filed">
						<input	type="text" value="<?php echo $user_city; ?>" name='user_city' readonly placeholder="City">
						<span class="edit-filed">Edit</span>
					</div>
					<div class="filed">
						<input	type="text" value="<?php echo $user_country; ?>" name='user_country' readonly placeholder="Country">
						<span class="edit-filed">Edit</span>
					</div>
					<input	type="hidden" name="user_title" value="">
					<input type="hidden" name="user_detail" value="">
				</div>
				</form>
			</div>
		</div>
	</div>
	