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
			<div class="compare-list">
				<div class="left">
					<div class="title">Property</div>
					<a href="<?php echo site_url('property')?>" class="back"><span class="icon-back"></span><span class="text">Back to Listing</span></a>
					<div id="map_canvas"></div>
					<div class="detail"><span class="icon-compare point"></span><span class="text">Location</span></div>
					<div class="detail"><span class="icon-compare price"></span><span class="text">Price</span></div>
					<div class="detail"><span class="icon-compare size"></span><span class="text">Size</span></div>
					<div class="detail"><span class="icon-compare bed"></span><span class="text">Bedrooms</span></div>
					<div class="detail"><span class="icon-compare bath"></span><span class="text">Bathrooms</span></div>
					<div class="detail"><span class="icon-compare floor"></span><span class="text">Floor</span></div>
					<div class="detail"><span class="icon-compare contact"></span><span class="text">Contact</span></div>
				</div>
				<div class="right">
					<div class="compere-item-list">
						<?php $i=1;$location='';foreach($records as $key) { ?>
							<?php foreach ($this->post->get_user_data($key->ID) as $user_key) {
								$email = $user_key->user_email;
								$user_login = $user_key->user_login;
								$user_title = $user_key->user_title;
								$user_type = $user_key->user_type;
								$user_slug = $user_key->user_slug;
								}
							?>
						<div class="item" id="item<?php echo ($i-1)?>">
							<div class="title"><span><?php echo $key->post_title;?></span></div>
							<a href="<?php echo site_url('property/'.$key->post_slug);?>">
								<div class="thumb">
									<?php if(!empty($image[$key->ID])) {
											$image_url=$image[$key->ID]; 
											$info = pathinfo($image_url);
											$file_name =  basename($image_url,'.'.$info['extension']);
											$file_url = 'upload/'.$file_name."_180.".$info['extension'];
										}else{
											$file_url = 'images/compare.png';
										}
										$attached_image = array(
									          'src' => $file_url ,
									          'alt' => $key->post_title,
									          'title' => $key->post_title,
										);
									?>
									<?php echo img($attached_image);?>
									<?php if($key->post_featured == 1){ ?><div class="featured-listing-text">Featured Listing</div> <?php } ?>
								</div>
							</a>
							<a href="<?php echo site_url('property/'.$key->post_slug);?>" class="view">View Details</a>
							<p class="fixed"><?php echo shortDescription($key->post_description);?></p>
							<div class="location">
								<h1>
									<?php 
										if(!empty($key->post_property_area_community)){ 
											echo $key->post_property_area_community; 
										} else { 
											echo $key->post_property_area_reference;
										} 
										echo ' , '.$key->post_property_area_city;
									?>
								</h1>
								<p><?php echo $key->post_property_area_address;?></p>
							</div>
							<div class="price">
								<h1><?php echo round($key->post_price);?> <span>QR</span></h1>
							</div>
							<div class="size">
								<h1><?php echo round($key->post_property_size);?> <span>m<sup>2</sup></span></h1>
							</div>
							<div class="bed">
								<h1><?php echo $key->post_property_bedrooms;?> <span>beds</span></h1>
							</div>
							<div class="bath">
								<h1><?php echo $key->post_property_bathroom;?> <span>bath</span></h1>
							</div>
							<div class="floor">
								<h1><?php echo ordinalize($key->post_property_floor) ?></h1>
							</div>
							<div class="contact">
								<a href="<?php echo site_url('agent/'.$user_slug)?>" class="contact_agent">Contact Agent</a>
							</div>
						</div>
						<?php $location =$location."['$key->post_title',$key->post_property_area_lat,$key->post_property_area_log,$i]," ?>
						<?php $i++;} ?>
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
            return "{$num} <span>{$suff}</span>";
        }
        return "{$num} <span>{$suff}</span>";
    }
    ?>
    <?php
    	function shortDescription($fullDescription) {
			$shortDescription = "";

			$fullDescription = trim(strip_tags($fullDescription));

			if ($fullDescription) {
				$initialCount = 225;
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
    <script type="text/javascript">
    var locations = [<?php echo $location?>];
    var marker_url   = "<?php echo base_url('images/map-marker-new.png');?>";
    var marker_url_hover   = "<?php echo base_url('images/map-marker-new-hover.png');?>";
    var marker_w     = 26;
    var marker_h     = 33;
    var icon_url = new google.maps.MarkerImage(marker_url, new google.maps.Size(marker_w,marker_h), new google.maps.Point(0,0) );
    var icon_url_hover = new google.maps.MarkerImage(marker_url_hover, new google.maps.Size(marker_w,marker_h), new google.maps.Point(0,0) );
    var map = new google.maps.Map(document.getElementById('map_canvas'), {
	    zoom: 14,
	    center: new google.maps.LatLng(<?php echo $key->post_property_area_lat?>,<?php echo $key->post_property_area_log?>),
	    mapTypeId: google.maps.MapTypeId.ROADMAP,
	    panControl: false,
	    zoomControl: false,
	    mapTypeControl: false,
	    scaleControl: false,
	    streetViewControl: false,
	    overviewMapControl: false
    });

    var infowindow = new google.maps.InfoWindow({});
    
    var i;

    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map,
        icon:icon_url
      });
      google.maps.event.addListener(marker, 'mouseover', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
          $('#item'+i).addClass('active');
        }
      })(marker, i));
      google.maps.event.addListener(marker, 'mouseout', (function(marker, i) {
        return function() {
          $(".compere-item-list .item").removeClass('active');
        }
      })(marker, i));
       google.maps.event.addListener(marker, 'click', (function(marker, i) {
	    return function() {
	    	$(".compere-item-list .item").removeClass('active');
	    	$(".compare-list .right").scrollTo( $('#item'+i), 800 );
	    	$('#item'+i).addClass('active');
	    	marker.setIcon(icon_url_hover);
		}
	  })(marker, i));
    }
  </script>