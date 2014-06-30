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
				<li><a href="<?php echo site_url('user-register');?>">Register</a></li>
				<li><a href="<?php echo site_url('login');?>">Login</a></li>
			</div>
			<div class="header-nav">
				<li><a href="<?php echo site_url('property-listing') ?>">Buy Property</a></li>
				<li><a href="<?php echo site_url('property-listing') ?>">Rent Property</a></li>
				<li><a href="<?php echo site_url('education-listing') ?>">Buy Furniture</a></li>
				<li><a href="<?php echo site_url('agent-listing') ?>">Find Agents</a></li>
			</div>
		</div>
	</header>