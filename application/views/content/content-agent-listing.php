	<div class="home-main clearfix">
		<div class="container">
			<div class="agent-detail">
				<div class="agent-filter clearfix">
					<div class="sort"><div class="drop"><span class="text">Broker</span><span class="arrow"></span></div></div>
				</div>
			</div>
			<div class="agent-list">
				<?php foreach ($user_list as $key) { ?>
				<div class="item">
					<div class="left">
						<div class="thumb"><img src="images/agent.png"></div>
					</div>
					<div class="mid">
						<?php if($key->user_type == 'user') {?>
						<h1><?php echo $key->user_login?></h1>
						<?php }else if($key->user_type == 'agent'){ ?>
							<?php if(!empty($key->user_title)) { ?>
								<h1><?php echo $key->user_title;?></h1>
							<?php } else { ?>
								<h1><?php echo $key->user_login?></h1>
							<?php } ?>
						<?php }else if($key->user_type == 'admin'){ ?>
						<h1><?php echo $key->user_login?></h1>
						<?php }else if($key->user_type == 'moderator'){ ?>
						<h1><?php echo $key->user_login?></h1>
						<?php } ?>
						<p><?php echo $key->user_detail?></p>
					</div>
					<div class="right">
						<div class="detail">Phone: <span><?php echo $key->user_phone;?></span></div>
						<div class="detail">Email: <span><?php echo $key->user_email;?></span></div>
						<a href="#" class="contact">View All Listing</a>
						<a href="#" class="contact">Contact Agent</a>
					</div>
				</div>
				<?php } ?>
			</div> 
		</div>
	</div>
