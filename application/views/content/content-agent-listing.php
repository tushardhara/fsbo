	<div class="home-main clearfix">
		<div class="container">
			<div class="agent-detail">
				<div class="agent-filter clearfix">
					<div class="sort">
						<div class="drop">
							
							<?php if($this->uri->segment(2)=='') {?>
								<span class="text">All</span><span class="arrow"></span>
							<?php }else if($this->uri->segment(2)=='0'){ ?>
								<?php if($this->uri->segment(3)=='') { ?>
									<span class="text">All</span><span class="arrow"></span>
								<?php } else if($this->uri->segment(3)=='All') { ?>
									<span class="text">All</span><span class="arrow"></span>
								<?php }else if($this->uri->segment(3)=='User') {?>
									<span class="text">User</span><span class="arrow"></span>
								<?php }else if($this->uri->segment(3)=='Broker') {?>
									<span class="text">Broker</span><span class="arrow"></span>
								<?php } ?>
							<?php }else{ ?>
								<?php if($this->uri->segment(3)=='') { ?>
									<span class="text">All</span><span class="arrow"></span>
								<?php } else if($this->uri->segment(3)=='All') { ?>
									<span class="text">All</span><span class="arrow"></span>
								<?php }else if($this->uri->segment(3)=='User') {?>
									<span class="text">User</span><span class="arrow"></span>
								<?php }else if($this->uri->segment(3)=='Broker') {?>
									<span class="text">Broker</span><span class="arrow"></span>
								<?php } ?>
							<?php } ?>
						</div>
						<div class="filter-drop">
							<div class="items"><a href="<?php echo site_url("agent/0/All")?>">All</a></div>
							<div class="items"><a href="<?php echo site_url("agent/0/User")?>">User</a></div>
							<div class="items"><a href="<?php echo site_url("agent/0/Broker")?>">Broker</a></div>
						</div>
					</div>
				</div>
			</div>
			<div class="agent-list">
				<?php foreach ($user_list as $key) { ?>
				<div class="item">
					<div class="left">
						<div class="thumb">
							<?php if($key->user_type == 'user') {?>
							<?php $title=$key->user_login?>
							<?php }else if($key->user_type == 'agent'){ ?>
								<?php if(!empty($key->user_title)) { ?>
									<?php $title=$key->user_title;?>
								<?php } else { ?>
									<?php $title=$key->user_login?>
								<?php } ?>
							<?php }else if($key->user_type == 'admin'){ ?>
							<?php $title=$key->user_login?>
							<?php }else if($key->user_type == 'moderator'){ ?>
							<?php $title=$key->user_login?>
							<?php } ?>
							<?php if(!empty($key->user_pic)) {
									$image_url=$key->user_pic; 
									$info = pathinfo($image_url);
									$file_name =  basename($image_url,'.'.$info['extension']);
									$file_url = 'upload/'.$file_name."_100.".$info['extension'];
								}else{
									$file_url = 'images/agent.png';
								}
								$temp_url=$file_url;
								$temp_login=$key->user_login;
								$attached_image = array(
							          'src' => $temp_url ,
							          'alt' => 'fsbo',
							          'title' => $key->user_login,
								);
							?>
							<?php echo img($attached_image);?>
						</div>
					</div>
					<div class="mid">
						<?php if($key->user_type == 'user') {?>
						<h1><a href="<?php echo site_url('agent/'.$key->user_slug)?>"><?php echo $key->user_login?></a></h1>
						<?php }else if($key->user_type == 'agent'){ ?>
							<?php if(!empty($key->user_title)) { ?>
								<h1><a href="<?php echo site_url('agent/'.$key->user_slug)?>"><?php echo $key->user_title;?></a></h1>
							<?php } else { ?>
								<h1><a href="<?php echo site_url('agent/'.$key->user_slug)?>"><?php echo $key->user_login?></a></h1>
							<?php } ?>
						<?php }else if($key->user_type == 'admin'){ ?>
						<h1><a href="<?php echo site_url('agent/'.$key->user_slug)?>"><?php echo $key->user_login?></a></h1>
						<?php }else if($key->user_type == 'moderator'){ ?>
						<h1><a href="<?php echo site_url('agent/'.$key->user_slug)?>"><?php echo $key->user_login?></a></h1>
						<?php } ?>
						<p><?php echo $key->user_detail?></p>
					</div>
					<div class="rrssb-buttons right">
						<?php if($this->session->userdata('logged_in')){ ?>
						<div class="detail">Phone: <span><?php echo $key->user_phone;?></span></div>
						<div class="detail">Email: <span><?php echo $key->user_email;?></span></div>
						<?php } ?>
						<a href="<?php echo site_url('agent/'.$key->user_slug)?>" class="contact">View All Listing</a>
						<?php if($this->session->userdata('logged_in')){ ?>
						<a href="mailto:<?php echo $key->user_email;?>?subject=&amp;body=" class="popup contact" target="_blank">Contact Agent</a>
						<?php } ?>
					</div>
				</div>
				<?php } ?>
			</div> 
		</div>
	</div>
