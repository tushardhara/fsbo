	<footer>
		<div class="container">
			<div class="big-footer-image">
				<?php 
					$footer_image = array(
				          'src' => 'images/abc.jpg',
				          'alt' => 'fsbo',
				          'title' => 'fsbo',
					);
				?>
				<?php echo img($footer_image);?>
			</div>
			<div class="footer-area">
				<div class="footer-col">
					<li><a href="#">About Us</a></li>
					<li><a href="<?php echo site_url('property')?>">Buy Property</a></li>
					<li><a href="<?php echo site_url('property')?>">Rent Property</a></li>
					<li><a href="<?php echo site_url('furniture')?>">Buy Furniture</a></li>
					<li><a href="<?php echo site_url('education')?>">Education Guide</a></li>
					<li><a href="<?php echo site_url('agent')?>">Find Agent</a></li>
				</div>
				<div class="footer-col">
					<li><a href="<?php echo site_url('register/user')?>">Register</a></li>
					<li><a href="<?php echo site_url('login')?>">Login</a></li>
					<li><a href="<?php echo site_url('property')?>">Advertisers</a></li>
					<li><a href="<?php echo site_url('register/agent')?>">Become an Agent</a></li>
					<li><a href="<?php echo site_url('contact')?>">Contact</a></li>
				</div>
				<div class="footer-col">
					<li><a href="#">Site Map</a></li>
					<li><a href="#">Terms and Conditions</a></li>
					<li><a href="#">Privacy & Policy</a></li>
					<li><a href="#">Disclaimer</a></li>
					<li><a>© Copyright FSBO. All Rights Reserved 2013.</a></li>
				</div>
				<div class="footer-col">
					<div class="social-area">
						<a href="#" class="facebook"></a><a href="#" class="twitter"></a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<script type="text/javascript" src="<?php echo base_url('js/owl.carousel.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/jquery.mixitup.js');?>"></script>
	<script src="<?php echo base_url('js/rrssb.js');?>"></script>
	<script src="http://cdn.ckeditor.com/4.4.2/basic/ckeditor.js"></script>
	<script type="text/javascript" src="<?php echo base_url('js/main.js');?>"></script>

	<!--Start of Zopim Live Chat Script-->
	<script type="text/javascript">
	window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
	d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
	_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
	$.src='//v2.zopim.com/?2HnkWC4lcTqexTT4Iv33v0Nf4gEAwUzO';z.t=+new Date;$.
	type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
	</script>
	<!--End of Zopim Live Chat Script-->
</body>
</html>