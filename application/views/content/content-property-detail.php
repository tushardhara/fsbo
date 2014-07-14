	<div class="home-main clearfix">
		<div class="container">
			<?php $location='';$title='';foreach ($records as $key) { ?>
			<?php $location =$location."$key->post_property_area_lat,$key->post_property_area_log" ?>
			<div class="product-detail">
				<div class="left">
					<div class="big-image">
						<?php 
							$attached_image = array(
						          'src' => 'images/detail-page-image.png',
						          'alt' => 'fsbo',
						          'title' => 'fsbo',
							);
						?>
						<?php echo img($attached_image);?>
					</div>
					<div id="product-slider" class="owl-carousel owl-theme"> 
					  	<?php for ($i=0; $i < 10 ; $i++) { ?>
					  		<div class="item">
					  			<?php 
									$attached_image = array(
								          'src' => 'images/100.png',
								          'alt' => 'fsbo',
								          'title' => 'fsbo',
									);
								?>
								<?php echo img($attached_image);?>
					  		</div>
					  	<?php } ?>
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
					<div class="price-desc"><p><span class="blue bold big"><?php echo round($key->post_price);?></span> <span class="black bold big">QR</span> <span class="for">For Sale</span> <span class="blue small"><?php echo ($key->post_price/$key->post_property_size);?></span> <span class="bold small">Per</span> <span class="yellow bold small">m<sup>2</sup></span></p></div>
					<?php } else { ?>
					<div class="price-desc"><p><span class="for">For Rent</span> <span class="blue bold small"><?php echo round($key->post_price);?></span> <span class="blue bold small">QR</span> <span class="black bold small">Per</span> <span class="yellow  bold small">Month</span></p></div>
					<?php } ?>
					<div class="location"><?php echo $key->post_property_area_reference.' , '.$key->post_property_area_city;?></div>
					<div class="address"><?php echo $key->post_property_area_address;?></div>
					<div class="group clearfix">
						<div class="item clearfix"><p class="by">Listed by <span class="yellow">Adam Smith</p><p class="view"><a href="#">See all Adam Smith Listing</a></p></div>
						<div class="item clearfix"><p class="market">Days on Market</p><p class="day">20 days on FSBO</p></div>
					</div>
					<div class="social-share">
						<a href="#" class="facebook-share"></a>
						<a href="#" class="twitter-share"></a>
					</div>
					<div class="settings">
						<div class="wishlist">Wish List</div>
						<div class="print"><a href="javascript:window.print()">Print</a></div>
						<div class="contact">Contact Agents</div>
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
						<div class="item"><div>Furnished</div><div class="yes"></div></div>
						<div class="item"><div>Divool/Gym</div><div class="yes"></div></div>
						<div class="item"><div>Semi Furnished</div><div class="no"></div></div>
						<div class="item"><div>Storage Area</div><div class="yes"></div></div>
						<div class="item"><div>divarking Garage</div><div class="no"></div></div>
						<div class="item"><div>Security</div><div class="yes"></div></div>
						<div class="item"><div>Sdivlit A/C</div><div class="yes"></div></div>
						<div class="item"><div>Elictricity/Hydro </div><div class="no"></div></div>
						<div class="item"><div>Washer/Dryer</div><div class="yes"></div></div>
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
									<?php 
									$attached_image = array(
								          'src' => 'images/dummy-feature-small.png',
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
									<?php 
									$attached_image = array(
								          'src' => 'images/dummy-feature-small.png',
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