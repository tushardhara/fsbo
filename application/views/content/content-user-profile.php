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
			<?php include('tab/tab-area.php');?>
			<div class="edit-area clearfix">
				<form method="post" action="<?php echo site_url('modify_check'); ?>">
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
						<span class="info">Language : </span><input	type="text" value="<?php echo $user_language; ?>" name='user_language' readonly placeholder="English">
						<span class="edit-filed">Edit</span>
					</div>
					<input type="submit" class="submit"></input>
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
					<div class="filed">
						<span class="info">City : </span><input	type="text" value="<?php echo $user_city; ?>" name='user_city' readonly placeholder="City">
						<span class="edit-filed">Edit</span>
					</div>
					<div class="filed">
						<span class="info">Country : </span><input	type="text" value="<?php echo $user_country; ?>" name='user_country' readonly placeholder="Country">
						<span class="edit-filed">Edit</span>
					</div>
					<input	type="hidden" name="user_title" value="">
					<input type="hidden" name="user_detail" value="">
				</div>
				</form>
			</div>
		</div>
	</div>
	