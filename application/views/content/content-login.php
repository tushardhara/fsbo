	<div class="login-page-main">
		<div class="container">
			<h1 class="login-title">WELCOME TO FSBO</h1>
			<p class="login-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum lorem arcu, placerat nec luctus vel, gravida eu nisi. Integer eget porta lacus.</p>
			<div class="login-area">
				<?php echo form_error(); ?>
				<form method="post" action="<?php echo site_url('login_check'); ?>">
					<input type="text" name="user_email" placeholder="Email">
					<input type="password" name="user_pass" placeholder="Password">
					<div class="squaredThree">
						<input type="checkbox" value="None" id="squaredThree" name="check" />Remember Me
						<label for="squaredThree"></label>
					</div>
					<a href="#" class="forgot">Forgot Password</a>
					<input id="login-submit" type="submit" value="Login to my FSBO">
				</form>
			</div>
		</div>
		<div class="or">Or</div>
		<div class="container">
			<div class="social-login-area">
				<div class="or-login">login using the folowing</div>
				<div class="social-login">
					<a href="#" class="facebook"></a>
					<a href="#" class="twitter"></a>
					<a href="#" class="google"></a>
				</div>
				<a href="<?php echo site_url('register/user') ?>"><div class="register">Register</div></a>
			</div>
		</div>
	</div>