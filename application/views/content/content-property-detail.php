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
			<?php $location='';$title='';foreach ($records as $key) { ?>
			<?php foreach ($this->post->get_user_data($key->ID) as $user_key) {
					$email = $user_key->user_email;
					$user_login = $user_key->user_login;
					$user_title = $user_key->user_title;
					$user_type = $user_key->user_type;
					$user_slug = $user_key->user_slug;
				}
			?>
			<?php $location =$location."$key->post_property_area_lat,$key->post_property_area_log" ?>
			<div class="product-detail">
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
					<div class="featured-listing-name"><a href="<?php echo site_url('property/'.$key->post_slug);?>"><?php echo $key->post_title;?></a></div>
					<div class="featured-listing-feature">
						<li><span class="floor"><?php echo ordinalize($key->post_property_floor) ?></span><span class="text">Floor</span></li>
						<li><span class="floor"><?php echo $key->post_property_bedrooms;?></span><span class="img-bed"></span></li>
						<li><span class="floor"><?php echo $key->post_property_bathroom;?></span><span class="img-bath"></span></li>
						<li><span class="floor"><?php echo round($key->post_property_size);?></span><span class="text">m<sup>2</sup></span></li>
					</div>
					<?php if($key->post_property_catergory == 'Residential property for Sell' || $key->post_property_catergory == 'Commercial property for Sell') { ?>
					<div class="price-desc"><p><span class="blue bold big"><?php echo round($key->post_price);?></span> <span class="black bold big">QR</span> <span class="for">For Sale</span> <span class="blue small"><?php echo round($key->post_price/$key->post_property_size);?></span> <span class="bold small">Per</span> <span class="yellow bold small">m<sup>2</sup></span></p></div>
					<?php } else { ?>
					<div class="price-desc"><p><span class="for">For Rent</span> <span class="blue bold small"><?php echo round($key->post_price);?></span> <span class="blue bold small">QR</span> <span class="black bold small">Per</span> <span class="yellow  bold small">Month</span></p></div>
					<?php } ?>
					<div class="location"><?php echo $key->post_property_area_reference.' , '.$key->post_property_area_city;?></div>
					<div class="address"><?php echo $key->post_property_area_address;?></div>
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
						
						<div class="item clearfix"><p class="market">Days on Market</p><p class="day"><?php echo time_elapsed_string($key->post_date); ?> on FSBO</p></div>
					</div>
					<div class="rrssb-buttons social-share">
						<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo site_url('property/'.$key->post_slug);?>" class="popup facebook-share"></a>
						<a href="http://twitter.com/home?status=<?php echo shortDescription($key->post_description)?><?php echo site_url('property/'.$key->post_slug);?>" class="popup twitter-share"></a>
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
			</div>
			<div class="product-detail-left">
				<div class="desc-area">
					<p><?php echo $key->post_description;?></p>
					<!--div class="see-more">See More</div-->
				</div>
				<div class="amet-map clearfix">
					<div class="title">Amenities</div>
					<div class="left">
						<div class="item-title">Includes</div>
						<div class="item"><div>Not Furnished</div><div class="<?php echo $key->post_property_not_furnished == '0' ? 'no' : 'yes'?>"></div></div>
						<div class="item"><div>Semi Furnished</div><div class="<?php echo $key->post_property_semi_furnished == '0' ? 'no' : 'yes'?>"></div></div>
						<div class="item"><div>Furnished</div><div class="<?php echo $key->post_property_furnished == '0' ? 'no' : 'yes'?>"></div></div>
						<div class="item"><div>Divool/Gym</div><div class="<?php echo $key->post_property_gym == '0' ? 'no' : 'yes'?>"></div></div>
						<div class="item"><div>Storage Area</div><div class="<?php echo $key->post_property_storage == '0' ? 'no' : 'yes'?>"></div></div>
						<div class="item"><div>Parking Garage</div><div class="<?php echo $key->post_property_parking == '0' ? 'no' : 'yes'?>"></div></div>
						<div class="item"><div>Security</div><div class="<?php echo $key->post_property_security == '0' ? 'no' : 'yes'?>"></div></div>
						<div class="item"><div>A/C</div><div class="<?php echo $key->post_property_ac == '0' ? 'no' : 'yes'?>"></div></div>
						<div class="item"><div>Washer/Dryer</div><div class="<?php echo $key->post_property_washer_dryer == '0' ? 'no' : 'yes'?>"></div></div>
						<div class="item"><div>Elictricity/Hydro </div><div class="<?php echo $key->post_property_electricity == '0' ? 'no' : 'yes'?>"></div></div>
					</div>
					<div class="right">
						<div id="map"></div>
					</div>
				</div>
				<div class="about-bilding clearfix">
					<div class="left">
						<div class="about">About Building</div>
						<div class="title"><?php echo $key->post_property_area_community?>, <?php echo $key->post_property_area_city?></div>
						<div class="featured-listing-feature">
							<li><span class="floor"><?php echo $key->post_property_build_floor?></span><span class="text">Floor</span></li>
							<li><span class="floor"><?php echo $key->post_property_build_apartment_per_floor?> Apartments</span><span class="text">Per Floor</span></li>
							<li><span class="floor"><?php echo $key->post_property_build_elevators?></span><span class="text">Elevator</span></li>
						</div>
						<div class="about-desc">Building next to  <?php echo $key->post_property_area_reference?> .. etc</div>
					</div>
					<div class="right">
						<div class="property-ads-area">
							<div class="test"></div>
						</div>
					</div>
				</div>
				<div class="similar-area clearfix">
					<div class="title">Similar Area</div>
					<div class="list clearfix">
						<?php foreach ($related_area as $key) { ?>
						<div class="item">
							<a href="<?php echo site_url('property/'.$key->post_slug);?>">
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
								<?php if($key->post_featured == 1){ ?><div class="text">Featured Listing</div> <?php } ?>
								</div>
							</a>
							<?php $date = date_create($key->post_date); ?>
							<div class="date"><?php echo date_format($date, 'F j, Y');?></div>
							<div class="name"><a href="<?php echo site_url('property/'.$key->post_slug);?>"><?php echo $key->post_title?></a></div>
							<?php if($key->post_property_catergory == 'Residential property for Sell' || $key->post_property_catergory == 'Commercial property for Sell') { ?>
							<div class="price"><span><?php echo round($key->post_price);?> QR</span> For Sale</div>
							<?php } else { ?>
							<div class="price"><span><?php echo round($key->post_price);?> QR</span> Per Month</div>
							<?php } ?>
							<div class="featured-listing-feature">
								<li><span class="floor"><?php echo ordinalize($key->post_property_floor) ?></span><span class="text">Floor</span></li>
								<li><span class="floor"><?php echo $key->post_property_bedrooms;?></span><span class="img-bed"></span></li>
								<li><span class="floor"><?php echo $key->post_property_bathroom;?></span><span class="img-bath"></span></li>
								<li><span class="floor"><?php echo round($key->post_property_size);?></span><span class="text">m<sup>2</sup></span></li>
							</div>
							<div class="place">PLace: <span><?php echo $key->post_property_area_community?></span></div>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
			<?php } ?>
			<div class="product-detail-right">
				<div class="similar-area clearfix">
					<div class="title">Similar price Range</div>
					<div class="list clearfix">
						<?php foreach ($related_price as $key) { ?>
						<div class="item">
							<a href="<?php echo site_url('property/'.$key->post_slug);?>">
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
								<?php if($key->post_featured == 1){ ?><div class="text">Featured Listing</div> <?php } ?>
								</div>
							</a>
							<?php $date = date_create($key->post_date); ?>
							<div class="date"><?php echo date_format($date, 'F j, Y');?></div>
							<div class="name"><a href="<?php echo site_url('property/'.$key->post_slug);?>"><?php echo $key->post_title?></a></div>
							<?php if($key->post_property_catergory == 'Residential property for Sell' || $key->post_property_catergory == 'Commercial property for Sell') { ?>
							<div class="price"><span><?php echo round($key->post_price);?> QR</span> For Sale</div>
							<?php } else { ?>
							<div class="price"><span><?php echo round($key->post_price);?> QR</span> Per Month</div>
							<?php } ?>
							<div class="featured-listing-feature">
								<li><span class="floor"><?php echo ordinalize($key->post_property_floor) ?></span><span class="text">Floor</span></li>
								<li><span class="floor"><?php echo $key->post_property_bedrooms;?></span><span class="img-bed"></span></li>
								<li><span class="floor"><?php echo $key->post_property_bathroom;?></span><span class="img-bath"></span></li>
								<li><span class="floor"><?php echo round($key->post_property_size);?></span><span class="text">m<sup>2</sup></span></li>
							</div>
							<div class="place">PLace: <span><?php echo $key->post_property_area_community?></span></div>
							<div class="listed">Listed By <span>Tushar Dhara</span></div>
						</div>
						<?php } ?>
					</div>
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
    <script type="text/javascript">
    	function mp_initialize_map (mp_position, mp_marker_url, mp_marker_w, mp_marker_h, mp_marker_title) {

      // fornisce latitudine e longitudine
      var latlng = new google.maps.LatLng(mp_position[0],mp_position[1]);
      var marker = new google.maps.MarkerImage(mp_marker_url, new google.maps.Size(mp_marker_w,mp_marker_h), new google.maps.Point(0,0) );

      // imposta le opzioni di visualizzazione
      var options = {
            zoom: 16,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            panControl: false,
            zoomControl: false,
            mapTypeControl: false,
            scaleControl: false,
            streetViewControl: false,
            overviewMapControl: false
      };
           
      // crea l'oggetto mappa
      var map = new google.maps.Map(document.getElementById('map'), options);

      var marker = new google.maps.Marker({
            position: latlng,
            map: map,
            icon: marker, 
            title: mp_marker_title + " - Click for more informations"
      });

      var bew = [
            {
                  featureType: "all",
                  stylers: [
                         { saturation: -100 }
                  ]
            }
      ];

      map.setOptions({styles: bew});

      // Marker click event
      google.maps.event.addListener(marker, 'click', function() {
            $('.content-wrap').toggleClass('table , none');
      })

      // Content click event
      $('.content').click(function(){
            $('.content-wrap').toggleClass('none , table');
      })

}



    jQuery(document).ready(function($) {
      
      
      var position     = [<?php echo $location?>];
      var marker_url   = "http://i.imgur.com/VpY8nm6.png";
      var marker_w     = 34;
      var marker_h     = 47;
      var marker_title = "<?php echo $title;?>";
      window.onload = mp_initialize_map(position, marker_url,marker_w,marker_h,marker_title);

    });
    </script>
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