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
				<h1>Create User</h1>
				<form method="post" action="<?php echo site_url('login/ajax_register'); ?>">
					<label>Username :</label><br/>
					<input type="text" name='user_login' placeholder="Username"><br/>
					<label>Password :</label><br/>
					<input type="password" name='user_pass' placeholder="Password"><br/>
					<label>Email :</label><br/>
					<input type="text" name='user_email' placeholder="Email"><br/>
					<label>Fisrt Name :</label><br/>
					<input type="text" name='user_fname' placeholder="First Name"><br/>
					<label>Last Name :</label><br/>
					<input type="text" name='user_lname' placeholder="Last Name"><br/>
					<label>User Type:</label><br/>
					<select name="user_type">
						  <option value="user">User</option>
						  <option value="agent">Agent</option>
						  <option value="admin">Admin</option>
					</select>
					<input type="submit" value="Submit">
				</form>
				<h1>Users</h1>
				<div id="user" class="fsbotable" >
	                <table >
	                    <tr>
	                        <td width="30px">ID</td>
	                        <td width="100px">Username</td>
	                        <td width="300px">Email</td>
	                        <td width="100px">First Name</td>
	                        <td width="100px">Last Name</td>
	                        <td width="100px">Phone</td>
	                        <td width="100px">City</td>
	                        <td width="100px">User Type</td>
	                        <td width="210px">Option</td>
	                    </tr>
	                    <?php if(isset($user_all)){ ?>
	                    	<?php  if(!empty($user_all)) { ?>
	                    		<?php foreach ($user_all as $key) { ?>
	                    			<tr>
				                        <td ><?php echo $key->ID; ?></td>
				                        <td ><?php echo $key->user_login; ?></td>
				                        <td ><?php echo $key->user_email; ?></td>
				                        <td ><?php echo $key->user_fname; ?></td>
				                        <td ><?php echo $key->user_lname; ?></td>
				                        <td ><?php echo $key->user_phone; ?></td>
				                        <td ><?php echo $key->user_city; ?></td>
				                        <td ><?php echo $key->user_type; ?></td>
				                        <td >
				                        	<?php if($key->user_status==0) { ?>
				                        		<a class="active" data-id="<?php echo $key->ID;?>" href="#">Active</a>
				                        	<?php }else{ ?>
				                        		<a class="ban" data-id="<?php echo $key->ID;?>" href="#">Banned</a>
				                        	<?php } ?>
				                        	<a class="edit" href="<?php echo site_url('profile/admin/settings/user/edit/'.$key->ID)?>">Edit</a>
				                        </td>
				                    </tr>
	                    		<?php } ?>
	                    	<?php } ?>
	                    <?php } ?>
	                </table>
	            </div>
			</div> 
		</div>
	</div>

	<script type="text/javascript">
		$(document).ready(function(){
			$(document).on('click','.active',function(){
				event.preventDefault();
				if (confirm("Are you really want to banned this user?") == true) {
			        var id=$(this).attr('data-id');
			        $.ajax({
					  url: "<?php echo site_url('main/user_active/')?>",
					  type: "POST",
					  data: { id: id }
					}).done(function( data ) {
					    $(document).find('div[class=fsbotable]').replaceWith($(data).find('div[class=fsbotable]'));
					});
			    }
			});
			$(document).on('click','.ban',function(){
				event.preventDefault();
				if (confirm("Are you really want to activate this user?") == true) {
			        var id=$(this).attr('data-id');
			        $.ajax({
					  url: "<?php echo site_url('main/user_ban/')?>",
					  type: "POST",
					  data: { id: id }
					}).done(function( data ) {
					    $(document).find('div[class=fsbotable]').replaceWith($(data).find('div[class=fsbotable]'));
					});
			    }
			});
			
		});
	</script>