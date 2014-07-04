	<div class="home-main clearfix">
		<div class="container">
			<div class="register-type">
				<h1>Register<span>(User)</span></h1>
				<div class="info">
					<div class="mand">* Mandatory fields</div>
					<div class="toggle">
						<a href="<?php echo site_url('register/user') ?>" class="active">User</a> / <a href="<?php echo site_url('register/agent') ?>" >Agent</a> 
					</div>
				</div>
			</div>
			<form method="post" action="<?php echo site_url('register_check'); ?>">
			<div class="register-area-left">
				<input type="text" name="user_login" placeholder="User Name">
				<input type="password" name="user_pass" placeholder="Password">
				<input type="password" name="user_passc" placeholder="Retype Password">
				<input type="text" name="user_email" placeholder="Email Address">
				<input type="text" name="user_language" placeholder="Language">
			</div>
			<div class="register-area-right">
				<input type="text" name="user_fname" placeholder="First Name">
				<input type="text" name="user_lname" placeholder="Last Name">
				<input type="text" name="user_phone" placeholder="Phone">
				<input type="text" name="user_country" placeholder="Country">
				<input type="text" name="user_city" placeholder="City">
				<input type="hidden" name="user_type" value="1">
				<input type="hidden" name="user_provider" value="Fsbo">
				<input type="hidden" name="user_title" value="">	
				<div class="squaredThree first">
					<input type="checkbox" value="None" id="squaredThree" name="check" />agree with <a href="#">Terms & Conditions</a>
					<label for="squaredThree"></label>
				</div>
				<input type="submit" value="Register">		
			</div>
			</form>
			<div class="register-box">
				<h1>Benefits of a my fsbo account</h1>
				<p>Signup today and get exclusive access to thousands of properties for sale and rent, listed by local agents and private owners.</p>
				<p>As the leading real estate marketing website of Qatar, we offer you a comprehensive array of property resources, designed to help you make "quick" and "informed" decisions.</p>
				<h6>Signup and enjoy the benefits that include:</h6>
				<p><span>Free Listings:</span> Post your properties and furiture free of charge...no catch</p>
				<p><span>Find/Sell Furniture:</span> A comprahensive database of furniture to suite your decor</p>
				<p><span>Saved Searches:</span> A bespoke tool that lets you save search queries online, right here on our website</p>
				<p><span>Saved Properties:</span> Save and shortlist real estate for your convenience</p>
				<p><span>Compare Properties:</span> compare prospects to find whats right for you</p>
				<p><span>Newsletters:</span> Stay on top of the latest property news</p>
				<div class="points">
					<li><span></span>Terms & Conditions</li>
					<li><span></span>FSBO for individuals</li>
					<li><span></span>FSBO for agents</li>
				</div>
			</div>
		</div>
	</div>