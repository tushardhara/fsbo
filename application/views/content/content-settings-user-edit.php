	<?php if(isset($user_data)){ ?>
	    <?php  if(!empty($user_data)) { ?>
	        <?php foreach ($user_data as $key) {
	        	$ID = $key->ID;
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
				$user_pic = $key->user_pic;
				$user_type =$key->user_type;
	         } ?>
	    <?php } ?>
	<?php } ?>
	<div class="home-main clearfix">
		<div class="container">
			<?php include('tab/tab-area.php');?>
			<div class="tab-area clearfix">
				<div class="title">Settings</div>
				<?php if($this->session->userdata('logged_in')['user_type'] == 'admin') { ?>
					<a href="<?php echo site_url('profile/admin/settings')?>"><div class="tab <?php echo $this->uri->segment(4) == '' ? 'active':''; ?>"><span class="text u">Property</span></div></a>
					<a href="<?php echo site_url('profile/admin/settings/furniture')?>"><div class="tab <?php echo $this->uri->segment(4) == 'furniture' ? 'active':''; ?>"><span class="text u">Furniture</span></div></a>
					<a href="<?php echo site_url('profile/admin/settings/education')?>"><div class="tab <?php echo $this->uri->segment(4) == 'education' ? 'active':''; ?>"><span class="text u">Education</span></div></a>
					<a href="<?php echo site_url('profile/admin/settings/home')?>"><div class="tab <?php echo $this->uri->segment(4) == 'home' ? 'active':''; ?>"><span class="text u">Home</span></div></a>
					<a href="<?php echo site_url('profile/admin/settings/slider')?>"><div class="tab <?php echo $this->uri->segment(4) == 'slider' ? 'active':''; ?>"><span class="text u">Slider</span></div></a>
					<a href="<?php echo site_url('profile/admin/settings/user')?>"><div class="tab <?php echo $this->uri->segment(4) == 'user' ? 'active':''; ?>"><span class="text u">User</span></div></a>
				<?php } ?>
			</div>
			<div class="upload-area clearfix">
				<h1>Edit User</h1>
				<form method="post" action="<?php echo site_url('login/modify_user'); ?>">
					<label>Username :</label><br/>
					<input type="text" name='user_login' placeholder="Username" value="<?php echo $user_login?>"><br/>
					<label>Password :</label><br/>
					<input type="password" name='user_pass' placeholder="Password"><br/>
					<label>Email :</label><br/>
					<input type="text" name='user_email' placeholder="Email" value="<?php echo $user_email?>"><br/>
					<label>Fisrt Name :</label><br/>
					<input type="text" name='user_fname' placeholder="First Name" value="<?php echo $user_fname?>"><br/>
					<label>Last Name :</label><br/>
					<input type="text" name='user_lname' placeholder="Last Name" value="<?php echo $user_fname?>"><br/>
					<label>User Type:</label><br/>
					<select name="user_type">
						  <option value="user" <?php if($user_type=='user'){ echo "selected"; } ?>>User</option>
						  <option value="agent" <?php if($user_type=='agent'){ echo "selected"; } ?>>Agent</option>
						  <option value="admin" <?php if($user_type=='admin'){ echo "selected"; } ?>>Admin</option>
					</select>
					<input type="hidden" name="ID" value="<?php echo $ID;?>">
					<input type="submit" value="Submit">
				</form>
				
			</div> 
		</div>
	</div>