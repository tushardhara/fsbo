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
			<div class="agent-detail">
				<?php foreach ($user_list as $key) { ?>
				<?php $email= $key->user_email; ?>
				<div class="rrssb-buttons top">
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
					<?php if($this->session->userdata('logged_in')){ ?>
					<a href="mailto:<?php echo $key->user_email;?>?subject=&amp;body=" class="popup contact" target="_blank">Contact Agent</a>
					<?php } ?>
				</div>
				<div class="bottom">
					<div class="left">
						<div class="thumb">
							<?php 
								$attached_image = array(
						          'src' => 'images/agent.png' ,
						          'alt' => 'fsbo',
						          'title' => 'fsbo',
								);
								echo img($attached_image);
							?>
						</div>
					</div>
					<div class="mid"><p><?php echo $key->user_detail?></p></div>
					<div class="right">
						<?php if($this->session->userdata('logged_in')){ ?>
						<div class="detail">Phone: <span><?php echo $key->user_phone;?></span></div>
						<div class="detail">Email: <span><?php echo $key->user_email;?></span></div>
						<?php } ?>
					</div>
				</div>
				<?php } ?>
				<div class="agent-filter clearfix">
					<div class="sort"><div class="drop"><span class="text">City</span><span class="arrow"></span></div></div>
					<div class="sort"><div class="drop"><span class="text">Type</span><span class="arrow"></span></div></div>
					<div class="sort"><div class="drop"><span class="text">Bedroom</span><span class="arrow"></span></div></div>
					<div class="sort"><div class="drop"><span class="text">Bathroom</span><span class="arrow"></span></div></div>
					<div class="price-range"><span class="text">Price Range</span><div id="agent-slider-range"></div></div>
					<div class="sort"><div class="drop"><span class="text">Sort</span><span class="arrow"></span></div></div>
					<div class="contact">Search</div>
				</div>
				<div class="agent-property-list">
					<?php foreach ($user_mylist as $key) { ?>
					<div class="item">
						<div class="left-side">
							<a href="<?php echo site_url('profile/agent/edit/'.$key->ID);?>">
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
						</div>
						<div class="mid-side">
							<?php if($key->post_type == 'property') { ?>
							<div class="featured-listing-name"><a href="<?php echo site_url('property/'.$key->post_slug);?>"><?php echo $key->post_title;?></a></div>
							<?php } else if($key->post_type == 'furniture') {?>
							<div class="featured-listing-name"><a href="<?php echo site_url('furniture/'.$key->post_slug);?>"><?php echo $key->post_title;?></a></div> 
							<?php } else if($key->post_type == 'education') { ?>
							<div class="featured-listing-name"><a href="<?php echo site_url('education/'.$key->post_slug);?>"><?php echo $key->post_title;?></a></div>
							<?php } ?>
							<?php if($key->post_type == 'property') { ?>
							<div class="featured-listing-feature">
								<li><span class="floor"><?php echo ordinalize($key->post_property_floor) ?></span><span class="text">Floor</span></li>
								<li><span class="floor"><?php echo $key->post_property_bedrooms;?></span><span class="img-bed"></span></li>
								<li><span class="floor"><?php echo $key->post_property_bathroom;?></span><span class="img-bath"></span></li>
								<li><span class="floor"><?php echo round($key->post_property_size);?></span><span class="text">m<sup>2</sup></span></li>
							</div>
							<?php } ?>
							<?php if($key->post_type == 'property') { ?>
							<div class="price-desc"><p><span class="blue bold big"><?php echo round($key->post_price);?></span> <span class="black bold big">QR</span> <span class="for"><?php echo $key->post_property_catergory == 'Residential property for Rent' || $key->post_property_catergory == 'Commercial property for Rent' ? 'For Rent' : 'For Sale'; ?></span> <span class="blue small"><?php echo round($key->post_price/$key->post_property_size);?></span> <span class="bold small">Per</span> <span class="yellow bold small">m<sup>2</sup></span></p></div>
							<div class="location"><?php echo $key->post_property_area_reference.' , '.$key->post_property_area_city;?></div>
							<div class="address"><?php echo $key->post_property_area_address;?></div>
							<?php } else if($key->post_type == 'furniture') {?>
							<div class="price-desc"><p><span class="blue bold big"><?php echo round($key->post_price);?></span> <span class="black bold big">QR</span></p></div>
							<div class="address"><?php echo shortDescription($key->post_description);?></div>
							<?php } else if($key->post_type == 'education') { ?>
							<div class="price-desc"><p><span class="blue bold big"><?php echo round($key->post_price);?></span> <span class="black bold big">QR</span></p></div>
							<div class="location"><?php echo $key->post_education_type;?></div>
							<div class="address"><?php echo shortDescription($key->post_description);?></div>
							<?php } ?>
						</div>
						<div class="rrssb-buttons right-side">
							<div class="top">
								<div class="thumb">
									<?php 
										$attached_image = array(
								          'src' => 'images/agent.png' ,
								          'alt' => 'fsbo',
								          'title' => 'fsbo',
										);
										echo img($attached_image);
									?>
								</div>
							</div>
							<?php if($this->session->userdata('logged_in')){ ?>
							<a href="mailto:<?php echo $email;?>?subject=&amp;body=" class="popup contact">Contact Agent</a>
							<?php } ?>
							<?php if($key->post_type == 'property') { ?>
							<a href="<?php echo site_url('property/'.$key->post_slug);?>" class="contact ex">View Details</a>
							<?php } else if($key->post_type == 'furniture') {?>
							<a href="<?php echo site_url('furniture/'.$key->post_slug);?>" class="contact ex">View Details</a>
							<?php } else if($key->post_type == 'education') { ?>
							<a href="<?php echo site_url('education/'.$key->post_slug);?>" class="contact ex">View Details</a>
							<?php } ?>
							<div class="compare-area"><div class="compare"></div><span>Compare</span></div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div> 
		</div>
	</div>
	<?php function ordinalize($num) {
        $suff = 'th';
        if ( ! in_array(($num % 100), array(11,12,13))){
            switch ($num % 10) {
                case 1:  $suff = 'st'; break;
                case 2:  $suff = 'nd'; break;
                case 3:  $suff = 'rd'; break;
            }
            return "{$num}{$suff}";
        }
        return "{$num}{$suff}";
    }
    ?>
    <?php
    	function shortDescription($fullDescription) {
			$shortDescription = "";

			$fullDescription = trim(strip_tags($fullDescription));

			if ($fullDescription) {
				$initialCount = 325;
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