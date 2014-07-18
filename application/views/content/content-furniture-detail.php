	<?php if(isset($user_image_mylist)){ 
			if(!empty($user_image_mylist)){
				foreach ($user_image_mylist as $key) {
					$image[$key->post_image_id] = $key->post_image_url;
				}
			}
		} 
	?>
	<div class="home-main clearfix">
		<div class="container">
			<div class="product-detail">
				<?php foreach ($records as $key) { ?>
				<?php foreach ($this->post->get_user_data($key->ID) as $user_key) {
						$email = $user_key->user_email;
						$user_login = $user_key->user_login;
						$user_title = $user_key->user_title;
						$user_type = $user_key->user_type;
						$user_slug = $user_key->user_slug;
					}
				?>
				<div class="left">
					<div class="big-image">
						<?php if(isset($user_image_detail)){ 
								if(!empty($user_image_detail)){
									foreach ($user_image_detail as $key1) {
										$user_image[$key1->post_image_id] = $key1->post_image_url;
										if(!empty($user_image[$key->ID])) {
												$image_url=$user_image[$key->ID]; 
												$info = pathinfo($image_url);
												$file_name =  basename($image_url,'.'.$info['extension']);
												$file_url = 'upload/'.$file_name."_638.".$info['extension'];
										}else{
											$file_url = 'images/detail-page-image.png';
										}
										$attached_image = array(
									          'src' => $file_url ,
									          'alt' => 'fsbo',
									          'title' => 'fsbo',
										);
										echo img($attached_image);
										break;
									}
								}else{
									$attached_image = array(
								          'src' => 'images/detail-page-image.png' ,
								          'alt' => 'fsbo',
								          'title' => 'fsbo',
									);
									echo img($attached_image);
								}
							} 
						?>
					</div>
					<div id="product-slider" class="owl-carousel owl-theme"> 
					  	<?php if(isset($user_image_detail)){ 
								if(!empty($user_image_detail)){ 
									foreach ($user_image_detail as $key1) { ?>
									<div class="item">
									<?php	$user_image[$key1->post_image_id] = $key1->post_image_url;
										if(!empty($user_image[$key->ID])) {
												$image_url=$user_image[$key->ID]; 
												$info = pathinfo($image_url);
												$file_name =  basename($image_url,'.'.$info['extension']);
												$file_url = 'upload/'.$file_name."_100.".$info['extension'];
										}else{
											$file_url = 'images/100.png';
										}
										$attached_image = array(
									          'src' => $file_url ,
									          'alt' => 'fsbo',
									          'title' => 'fsbo',
										);
										echo img($attached_image);
									?>
									</div>
									<?php }
								}
							} 
						?>
					</div>
				</div>
				<div class="right">
					<div class="featured-listing-name furniture"><a href="<?php echo site_url('furniture/'.$key->post_slug);?>"><?php echo $key->post_title;?></a></div>
					<div class="price-desc">
						<p><span class="blue bold big"><?php echo round($key->post_price);?></span><span class="black bold big"> QR</span></p>
					</div>
					<div class="desc"><p><?php echo $key->post_description;?></p>
					</div>
					<div class="group clearfix">
						<?php if($user_type == 'user') {?>
						<div class="item clearfix"><p class="by">Listed by <span class="yellow"><?php echo $user_login?></p><p class="view"><a href="<?php echo site_url('agent/'.$user_slug)?>">See all <?php echo $user_login?> Listing</a></p></div>
						<?php }else if($user_type == 'agent'){ ?>
							<?php if(!empty($user_title)) { ?>
								<div class="item clearfix"><p class="by">Listed by <span class="yellow"><?php echo $user_title?></p><p class="view"><a href="<?php echo site_url('agent/'.$user_slug)?>">See all <?php echo $user_title?> Listing</a></p></div>
							<?php } else { ?>
								<div class="item clearfix"><p class="by">Listed by <span class="yellow"><?php echo $user_login?></p><p class="view"><a href="<?php echo site_url('agent/'.$user_slug)?>">See all <?php echo $user_login?> Listing</a></p></div>
							<?php } ?>
						<?php }else if($user_type == 'admin'){ ?>
						<div class="item clearfix"><p class="by">Listed by <span class="yellow"><?php echo $user_login?></p><p class="view"><a href="<?php echo site_url('agent/'.$user_slug)?>">See all <?php echo $user_login?> Listing</a></p></div>
						<?php }else if($user_type == 'moderator'){ ?>
						<div class="item clearfix"><p class="by">Listed by <span class="yellow"><?php echo $user_login?></p><p class="view"><a href="<?php echo site_url('agent/'.$user_slug)?>">See all <?php echo $user_login?> Listing</a></p></div>
						<?php } ?>
						<div class="item clearfix">
							<p class="market">Days on Market</p><p class="day"><?php echo time_elapsed_string($key->post_date); ?> on FSBO</p>
						</div>
					</div>
					<div class="rrssb-buttons social-share">
						<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo site_url('furniture/'.$key->post_slug);?>" class="popup facebook-share"></a>
						<a href="http://twitter.com/home?status=<?php echo shortDescription($key->post_description)?><?php echo site_url('furniture/'.$key->post_slug);?>" class="popup twitter-share"></a>
					</div>
					<div class="rrssb-buttons settings">
						<div class="wishlist"><a href="<?php echo site_url('add_wishlist?ID='.$key->ID)?>" target="_blank">Wish List</a></div>
						<div class="print"><a href="javascript:window.print()">Print</a></div>
						<?php if($this->session->userdata('logged_in')){ ?>
						<div class="contact"><a href="mailto:<?php echo $email;?>?subject=&amp;body=" class="popup contact" target="_blank">Contact Agents</a></div>
						<?php } ?>
					</div>
					<div class="detail-small-ads-area">
						<div class="test"></div>
					</div>
				</div>
				<?php } ?>
			</div>
			<div class="product-detail-full clearfix">
				<div class="title clearfix ">
					<div class="see-text">See Also</div>
					<?php if($key->post_furniture_type == 'Bedroom') { ?>
						<div class="see-all"><a href="<?php echo site_url('furniture/bedroom')?>">See All</a></div>
					<?php } else if($key->post_furniture_type == 'Living room') { ?>
						<div class="see-all"><a href="<?php echo site_url('furniture/living-room')?>">See All</a></div>
					<?php } else if($key->post_furniture_type == 'Bathroom') { ?>
						<div class="see-all"><a href="<?php echo site_url('furniture/bathroom')?>">See All</a></div>
					<?php } else if($key->post_furniture_type == 'Dining room') { ?>
						<div class="see-all"><a href="<?php echo site_url('furniture/dining-room')?>">See All</a></div>
					<?php } else if($key->post_furniture_type == 'Kitchen') { ?>
						<div class="see-all"><a href="<?php echo site_url('furniture/kitchen')?>">See All</a></div>
					<?php } else if($key->post_furniture_type == 'Miscellaneous') { ?>
						<div class="see-all"><a href="<?php echo site_url('furniture/miscellaneous')?>">See All</a></div>
					<?php } ?>
				</div>
				<div class="list clearfix">
					<?php foreach ($related as $key) { ?>
						<div class="item">
							<a href="<?php echo site_url('furniture/'.$key->post_slug);?>">
								<div class="thumb">
									<?php if(!empty($image[$key->ID])) {
										$image_url=$image[$key->ID]; 
										$info = pathinfo($image_url);
										$file_name =  basename($image_url,'.'.$info['extension']);
										$file_url = 'upload/'.$file_name."_270.".$info['extension'];
									}else{
										$file_url = 'images/dummy-feature-small.png';
									}
									$attached_image = array(
								          'src' => $file_url ,
								          'alt' => 'fsbo',
								          'title' => 'fsbo',
									);
								?>
								<?php echo img($attached_image);?>
								<?php if($key->post_featured == 1){ ?><div class="featured-listing-text">Featured Listing</div> <?php } ?>
								</div>
							</a>
							<?php $date = date_create($key->post_date); ?>
							<div class="featured-listing-date"><?php echo date_format($date, 'F j, Y');?></div>
							<div class="featured-listing-name"><?php echo $key->post_furniture_type;?></div>
							<div class="featured-listing-price"><?php echo round($key->post_price);?> QR</div>
							<a class="featured-listing-view" href="<?php echo site_url('furniture/'.$key->post_slug);?>">View Details</a>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	<?php 
		function time_elapsed_string($datetime, $full = false) {
		    $now = new DateTime;
		    $ago = new DateTime($datetime);
		    $diff = $now->diff($ago);

		    $diff->w = floor($diff->d / 7);
		    $diff->d -= $diff->w * 7;

		    $string = array(
		        'y' => 'year',
		        'm' => 'month',
		        'w' => 'week',
		        'd' => 'day',
		        'h' => 'hour',
		        'i' => 'minute',
		        's' => 'second',
		    );
		    foreach ($string as $k => &$v) {
		        if ($diff->$k) {
		            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
		        } else {
		            unset($string[$k]);
		        }
		    }

		    if (!$full) $string = array_slice($string, 0, 1);
		    return $string ? implode(', ', $string) . ' ago' : 'just now';
		}
	?>
	<?php
    	function shortDescription($fullDescription) {
			$shortDescription = "";

			$fullDescription = trim(strip_tags($fullDescription));

			if ($fullDescription) {
				$initialCount = 75;
				if (strlen($fullDescription) > $initialCount) {
					//$shortDescription = substr(strip_tags($fullDescription),0,$initialCount).”…”;
					$shortDescription = substr($fullDescription,0,$initialCount)."…";
				}
				else {
					return $fullDescription;
				}
			}
			return $shortDescription;
		}
    ?>