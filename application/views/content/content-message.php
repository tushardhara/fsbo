	<div class="home-main clearfix">
		<div class="container">
			<?php include('tab/tab-area.php');?>
			<div class="message-settings clearfix">
				<div class="search-edu"><input	type="text" placeholder="Search Location"><div class="search-icon"></div></div>
				<div class="delete-area"><span class="icon-delete"></span><span class="text">Delete</span></div>	
				<div class="compare-area"><a href="<?php echo site_url('profile/admin/message/compose') ?>"><div class="compare"></div><span>Compose</span></a></div>
				<div class="compare-area"><a href="<?php echo site_url('profile/admin/message/sent') ?>"><div class="compare <?php echo $this->uri->segment(4) == 'sent' ? 'active':''; ?>"></div><span>Sent</span></a></div>
				<div class="compare-area"><a href="<?php echo site_url('profile/admin/message') ?>"><div class="compare <?php echo $this->uri->segment(4) != 'sent' ? 'active':''; ?>"></div><span>Resived</span></a></div>
			</div>
			<div class="message-list clearfix">
				<?php if(isset($message)){ ?>
	                <?php  if(!empty($message)) { ?>
	                	<?php foreach ($message as $key) { ?>
							<div class="item clearfix">
								<div class="left">
									<div class="compare-area"><div class="compare"></div></div>
								</div>
								<div class="mid">
									<h1><?php echo $key->user_login;?></h1>
									<?php $date = date_create($key->message_date); ?>
									<p><?php echo date_format($date, 'F j, Y');?></p>
								</div>
								<div class="right">
									<h1><?php echo $key->title;?></h1>
									<?php echo $key->message;?>
								</div>
							</div>
						<?php } ?>
					<?php } ?>
				<?php } ?>
			</div>
		</div>
	</div>