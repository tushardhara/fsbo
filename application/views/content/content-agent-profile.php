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
				$user_url = $key->user_url;
			}
		} 
	?>
	<div class="home-main clearfix">
		<div class="container">
			<?php include('tab/tab-area.php');?>
			<div class="edit-area clearfix">
				<div class="left">
					<div class="filed">
						<input	type="text" value="<?php echo $user_login; ?>" disabled placeholder="Brokerage">
						<span class="edit-filed">Edit</span>
					</div>
					<div class="filed">
						<input	type="password" value="" disabled placeholder="Password">
						<span class="edit-filed">Edit</span>
					</div>
					<div class="filed">
						<input	type="text" value="<?php echo $user_email; ?>" disabled placeholder="eamil">
						<span class="edit-filed">Edit</span>
					</div>
					<div class="filed">
						<input	type="text" value="<?php echo $user_language; ?>" disabled placeholder="Language : English">
						<span class="edit-filed">Edit</span>
					</div>
					<div class="filed">
						<textarea disabled placeholder="About"><?php echo $user_detail; ?></textarea>
						<span class="edit-filed">Edit</span>
					</div>
				</div>
				<div class="right">
					<div class="filed">
						<input	type="text" value="<?php echo $user_fname; ?>" disabled placeholder="First Name">
						<span class="edit-filed">Edit</span>
					</div>
					<div class="filed">
						<input	type="text" value="<?php echo $user_lname; ?>" disabled placeholder="Last Name">
						<span class="edit-filed">Edit</span>
					</div>
					<div class="filed">
						<input	type="text" value="<?php echo $user_phone; ?>" disabled placeholder="Phone No.">
						<span class="edit-filed">Edit</span>
					</div>
					<div class="filed">
						<input	type="text" value="<?php echo $user_city; ?>" disabled placeholder="City">
						<span class="edit-filed">Edit</span>
					</div>
					<div class="filed">
						<input	type="text" value="<?php echo $user_country; ?>" disabled placeholder="Country">
						<span class="edit-filed">Edit</span>
					</div>
					<div class="filed ex">
						<input	type="text" value="<?php echo $user_url; ?>" disabled placeholder="Website">
						<span class="edit-filed">Edit</span>
					</div>
					<div class="submit">Save</div>
				</div>
			</div>
		</div>
	</div>