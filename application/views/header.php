<?php echo doctype('html5') ?>
<html lang="en">
<head>
	<title></title>
	<?php
		$meta = array(
	        array('name' => 'robots', 'content' => 'no-cache'),
	        array('name' => 'description', 'content' => 'My Great Site'),
	        array('name' => 'keywords', 'content' => 'love, passion, intrigue, deception'),
	        array('name' => 'robots', 'content' => 'no-cache'),
	        array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv')
	    );
		echo meta($meta);
		echo link_tag('favicon.ico', 'shortcut icon', 'image/ico');
		echo link_tag('css/owl.carousel.css');
		echo link_tag('css/owl.theme.css');
		echo link_tag('css/style.css');
	?> 
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
</head>
<body>
	<header>
		<div class="container">
			<?php 
				$logo = array(
			          'src' => 'images/logo.png',
			          'alt' => 'fsbo',
			          'title' => 'fsbo',
				);
			?>
			<div class="logo"><a href="<?php echo site_url();?>"><?php echo img($logo);?></a></div>
			<div class="register-login">
				
				
				<?php if($this->session->userdata('logged_in')){ ?>
					<li><a href="<?php echo site_url('profile/user');?>"><?php echo $this->session->userdata('logged_in')['user_login'] ?></a></li>
					<li><a href="<?php echo site_url('logout');?>">Logout</a></li>
				<?php }else{ ?>
					<li><a href="<?php echo site_url('register/user');?>">Register</a></li>
					<li><a href="<?php echo site_url('login');?>">Login</a></li>
				<?php } ?>
			</div>
			<div class="header-nav">
				<li><a href="<?php echo site_url('property') ?>">Buy Property</a></li>
				<li><a href="<?php echo site_url('property') ?>">Rent Property</a></li>
				<li><a href="<?php echo site_url('education') ?>">Buy Furniture</a></li>
				<li><a href="<?php echo site_url('agent') ?>">Find Agents</a></li>
			</div>
		</div>
	</header>