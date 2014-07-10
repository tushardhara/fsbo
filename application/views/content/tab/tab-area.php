			<div class="tab-area clearfix">
				<div class="title">Account Settings</div>
				<?php if($this->session->userdata('logged_in')['user_type'] == 'admin') { ?>
					<a href="<?php echo site_url('profile/admin')?>"><div class="tab <?php echo $this->uri->segment(3) == '' ? 'active':''; ?>"><span class="icon-tab p"></span><span class="text p">My Profile</span></div></a>
					<a href="<?php echo site_url('profile/admin/mylist')?>"><div class="tab <?php echo $this->uri->segment(3) == 'mylist' ? 'active':''; ?>"><span class="icon-tab l"></span><span class="text l">My Listing</span></div></a>
					<a href="<?php echo site_url('profile/admin/message')?>"><div class="tab <?php echo $this->uri->segment(3) == 'message' ? 'active':''; ?>"><span class="icon-tab m"></span><span class="text m">Messages</span></div></a>
					<a href="<?php echo site_url('profile/admin/wishlist')?>"><div class="tab <?php echo $this->uri->segment(3) == 'wishlist' ? 'active':''; ?>"><span class="icon-tab w"></span><span class="text w">Wish List</span></div></a>
					<a href="<?php echo site_url('profile/admin/property')?>"><div class="tab <?php echo $this->uri->segment(3) == 'property' ? 'active':''; ?>"><span class="icon-tab u"></span><span class="text u">Upload</span></div></a>
				<?php }else if($this->session->userdata('logged_in')['user_type'] == 'moderator') { ?>
					<a href="<?php echo site_url('profile/moderator')?>"><div class="tab <?php echo $this->uri->segment(3) == '' ? 'active':''; ?>"><span class="icon-tab p"></span><span class="text p">My Profile</span></div></a>
					<a href="<?php echo site_url('profile/moderator/mylist')?>"><div class="tab <?php echo $this->uri->segment(3) == 'mylist' ? 'active':''; ?>"><span class="icon-tab l"></span><span class="text l">My Listing</span></div></a>
					<a href="<?php echo site_url('profile/moderator/message')?>"><div class="tab <?php echo $this->uri->segment(3) == 'message' ? 'active':''; ?>"><span class="icon-tab m"></span><span class="text m">Messages</span></div></a>
					<a href="<?php echo site_url('profile/moderator/message')?>"><div class="tab <?php echo $this->uri->segment(3) == 'wishlist' ? 'active':''; ?>"><span class="icon-tab w"></span><span class="text w">Wish List</span></div></a>
					<a href="<?php echo site_url('profile/moderator/property')?>"><div class="tab <?php echo $this->uri->segment(3) == 'property' ? 'active':''; ?>"><span class="icon-tab u"></span><span class="text u">Upload</span></div></a>
				<?php }else if($this->session->userdata('logged_in')['user_type'] == 'user') { ?>
					<a href="<?php echo site_url('profile/user')?>"><div class="tab <?php echo $this->uri->segment(3) == '' ? 'active':''; ?>"><span class="icon-tab p"></span><span class="text p">My Profile</span></div></a>
					<a href="<?php echo site_url('profile/user/mylist')?>"><div class="tab <?php echo $this->uri->segment(3) == 'mylist' ? 'active':''; ?>"><span class="icon-tab l"></span><span class="text l">My Listing</span></div></a>
					<a href="<?php echo site_url('profile/user/message')?>"><div class="tab <?php echo $this->uri->segment(3) == 'message' ? 'active':''; ?>"><span class="icon-tab m"></span><span class="text m">Messages</span></div></a>
					<a href="<?php echo site_url('profile/user/message')?>"><div class="tab <?php echo $this->uri->segment(3) == 'wishlist' ? 'active':''; ?>"><span class="icon-tab w"></span><span class="text w">Wish List</span></div></a>
					<a href="<?php echo site_url('profile/user/property')?>"><div class="tab <?php echo $this->uri->segment(3) == 'property' ? 'active':''; ?>"><span class="icon-tab u"></span><span class="text u">Upload</span></div></a>
				<?php }else if($this->session->userdata('logged_in')['user_type'] == 'agent') { ?>
					<a href="<?php echo site_url('profile/agent')?>"><div class="tab <?php echo $this->uri->segment(3) == '' ? 'active':''; ?>"><span class="icon-tab p"></span><span class="text p">My Profile</span></div></a>
					<a href="<?php echo site_url('profile/agent/mylist')?>"><div class="tab <?php echo $this->uri->segment(3) == 'mylist' ? 'active':''; ?>"><span class="icon-tab l"></span><span class="text l">My Listing</span></div></a>
					<a href="<?php echo site_url('profile/agent/message')?>"><div class="tab <?php echo $this->uri->segment(3) == 'message' ? 'active':''; ?>"><span class="icon-tab m"></span><span class="text m">Messages</span></div></a>
					<a href="<?php echo site_url('profile/agent/message')?>"><div class="tab <?php echo $this->uri->segment(3) == 'wishlist' ? 'active':''; ?>"><span class="icon-tab w"></span><span class="text w">Wish List</span></div></a>
					<a href="<?php echo site_url('profile/agent/property')?>"><div class="tab <?php echo $this->uri->segment(3) == 'property' ? 'active':''; ?>"><span class="icon-tab u"></span><span class="text u">Upload</span></div></a>
				<?php } ?>		
			</div>