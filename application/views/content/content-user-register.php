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
			<form id="target" method="post" action="<?php echo site_url('register_check'); ?>">
			<div class="register-area-left">
				<div class="filed">
					<input type="text" id="username" name="user_login" placeholder="User Name"><span class="man">*</span>
				</div>
				<div class="filed">
					<input type="password" id="pass" name="user_pass" placeholder="Password"><span class="man">*</span>
				</div>
				<div class="filed">
					<input type="password" id="re_pass" name="user_passc" placeholder="Retype Password"><span class="man">*</span>
				</div>
				<div class="filed">
					<input type="text" id="email" name="user_email" placeholder="Email Address"><span class="man">*</span>
				</div>
				<div class="filed">
					<input type="text" id="re_email" name="user_re_email" placeholder="Retype Email Address"><span class="man">*</span>
				</div>
				<div class="filed ex">
					<input type="text" name="user_language" placeholder="Language" readonly class="drop">
					<span class="arrow"></span>
					<div class="drop-category">
					<?php 
						if(isset($language_list)){
							foreach ($language_list as $key) {
					?>
							<div class="drop-item" item-value="<?php echo $key->name;?>"><?php echo $key->name;?></div>
					<?php } }
					?>
					</div>
				</div>
			</div>
			<div class="register-area-right">
				<div class="filed">
					<input type="text" id="fname" name="user_fname" placeholder="First Name"><span class="man">*</span>
				</div>
				<div class="filed">
					<input type="text" name="user_lname" placeholder="Last Name">
				</div>
				<div class="filed">
					<input type="text" id="phone" name="user_phone" placeholder="Phone"><span class="man">*</span>
				</div>
				<div class="filed">
					<input type="text" name="user_country" placeholder="Country" readonly class="drop">
					<span class="arrow"></span>
					<div class="drop-category">
					<?php 
						if(isset($country_list)){
							foreach ($country_list as $key) {
					?>
							<div class="drop-item" item-value="<?php echo $key->name;?>"><?php echo $key->name;?></div>
					<?php } }
					?>
					</div>
				</div>
				<div class="filed ex">
					<input type="text" name="user_city" placeholder="City">
				</div>
				<input type="hidden" name="user_type" value="1">
				<input type="hidden" name="user_provider" value="Fsbo">
				<input type="hidden" name="user_title" value="">	
				<input id="check" type="checkbox" value="1" name="check" />agree with <a href="#" style="color:#ffa800;text-decoration:none;">Terms & Conditions</a>
				<input type="submit" value="Register">		
			</div>
			</form>
			<div class="register-box">
				<h1>Benefits of a FSBO account</h1>
				<p>Signup today and get exclusive access to thousands of properties for sale and rent, listed by local agents and private owners.</p>
				<p>As the leading real estate marketing website of Qatar, we offer you a comprehensive array of property resources, designed to help you make "quick" and "informed" decisions.</p>
				<h6>Signup and enjoy the benefits that include:</h6>
				<p><span>Free Listings:</span> Post your properties and furniture free of charge...no catch</p>
				<p><span>Find/Sell Furniture:</span> A comprehensive database of furniture to suit your decor</p>
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
	<script type="text/javascript">	
	  $(document).ready(function(){
	  	$("#target").submit(function(event){
	  		if($("#check").is(':checked')){
	  			var username=$("#username").val();
	  			var pass=$("#pass").val();
	  			var re_pass=$("#re_pass").val();
	  			var email=$("#email").val();
	  			var re_email=$("#re_email").val();
	  			var fname= $("#fname").val();
	  			var phone=$("#phone").val();
	  			var check_username;
	  			var check_email;
	  			if(username != '' && pass !='' && re_pass !='' && email !='' && re_email !='' && fname !='' && phone !='' ){
	  				var usernameRegex = /^[a-zA-Z0-9]+$/;
	  				var emailRegex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    				var phoneRegex = /^(?:(?:\(?(?:00|\+)([1-4]\d\d|[1-9]\d?)\)?)?[\-\.\ \\\/]?)?((?:\(?\d{1,}\)?[\-\.\ \\\/]?){0,})(?:[\-\.\ \\\/]?(?:#|ext\.?|extension|x)[\-\.\ \\\/]?(\d+))?$/;
    				var validUsername = username.match(usernameRegex);
    				var validEmail = email.match(emailRegex);
    				var validPhone = phone.match(phoneRegex);
				    if(validUsername == null){
				        alert("Your username is not valid. Only characters A-Z, a-z and '0-9' are  acceptable.");
				    }
				    else if(validEmail == null){
				        alert("Your Email is not valid.");
				    }
				    else if(validPhone == null){
				        alert("Your Phone No. is not valid.Write phone no. like this +xx-xxxxxxxxxx or +xx xxx-xxx-xxxx");
				    }
	  				else if(pass != re_pass){
	  					alert("Password not matched");
	  				}
	  				else if(email != re_email){
	  					alert("Email not matched");
	  				}else{
	  					$.ajax({
						  url: "<?php echo site_url('main/check_ajax_username')?>",
						  type: "POST",
						  data: { user_login: username },
						  async: false
						}).done(function( data) {
						    check_username=data;
						});
						$.ajax({
						  url: "<?php echo site_url('main/check_ajax_email')?>",
						  type: "POST",
						  data: { user_email: email },
						  async: false
						}).done(function( data ) {
						   check_email=data;
						});
						if(check_username != 'new'){
							alert("Username Already exists");
						}else if(check_email !='new'){
							alert("Email Already exists");
						}else if (check_email == 'new' && check_username =='new'){
							return;
						}
	  				}	
	  			}else{
	  				alert("Please enter the Mandatory fields");
	  			}
	  		}else{
	  			alert("Please select the Terms & Conditions checkbox");
	  		}
	  		event.preventDefault();
	  	});
	  });
	</script>