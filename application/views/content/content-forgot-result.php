	<div class="login-page-main">
		<div class="container">
			<h1 class="login-title">Forgot Password</h1>
			<p class="login-desc">
				<?php 
					if(isset($user_provider)){
						if($user_provider == 'Fsbo'){
							echo "Your password has been changed , please check your email";
						}if($user_provider == 'Facebook'){
							echo "You Signup with Facebook , try login with Facebook";
						}if($user_provider == 'Twitter'){
							echo "You Signup with Twitter , try login with Twitter";
						}if($user_provider == 'Google'){
							echo "You Signup with Google , try login with Google";
						}
					} 
				?>
			</p>
		</div>
	</div>