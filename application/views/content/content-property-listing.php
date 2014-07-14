	<div class="home-main clearfix">
		<div class="container">
			<div class="property-listing-settings">
				<div class="drop-down-setting clearfix">
					<div class="left">
						<div class="setting-choose-big no-bottom"><span>Property type</span><span class="arrow"></span></div>
						<div class="setting-choose-big no-top"><span>Broker</span><span class="arrow"></span></div>
						<div class="setting-choose-small no-top"><span>Min. Bedroom</span><span class="arrow"></span></div> <div class="gap">-</div> <div class="setting-choose-small no-top"><span>Max. Bedroom</span><span class="arrow"></span></div>
						<div class="setting-choose-small no-top extra-margin"><span>Min. Bathroom</span><span class="arrow"></span></div> <div class="gap">-</div> <div class="setting-choose-small no-top extra-margin"><span>Max. Bathroom</span><span class="arrow"></span></div>
						<div id="slider-range"></div>
					</div>
					<div class="right">
						<div class="setting-choose-big no-bottom"><span>City</span><span class="arrow"></span></div>
						<div class="setting-choose-big no-bottom"><span>Community</span><span class="arrow"></span></div>
						<div class="setting-choose-big "><span>Sub Community</span><span class="arrow"></span></div>
						<div class="setting-choose-small no-top extra-margin"><span>Min. Sq.M.</span><span class="arrow"></span></div> <div class="gap">-</div> <div class="setting-choose-small no-top extra-margin"><span>Max. Sq.M</span><span class="arrow"></span></div>
					</div>
				</div>
				<div class="property-listing-area clearfix">
					<div class="left">
						<div id="map_canvas"></div>
					</div>
					<div class="right">
						<div class="filter-settings">
							<div class="sort"><span class="text">Short By</span><div class="drop"><span class="text">Most Expensive</span><span class="arrow"></span></div></div>
							<a class="save" href="#">Save Search</a>
							<a href="#" class="export">Export Result</a>
						</div>
						<div class="actual-list">
							<?php $i=1;$location='';foreach ($records as $key) {?>
							<div class="item clearfix">
								<div class="left-side">
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
											<?php if($key->post_featured == 1){ ?><div class="featured-listing-text">Featured Listing</div> <?php } ?>
										</div>
									</a>
								</div>
								<div class="right-side">
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
									<div class="listedby">
										<div class="top clearfix"><div class="name"><p>Listed by <span>Adam Smith</span></p></div><div class="compare active"></div></div>
										<div class="bottom"><a href="#">See all Adam Smith Listing</a></div>
									</div>
								</div>
							</div>
							<?php $location =$location."['$key->post_title',$key->post_property_area_lat,$key->post_property_area_log,$i]," ?>
							<?php $i++;} ?>
						</div>
						<?php echo $this->pagination->create_links();?>
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
    var locations = [<?php echo $location?>];
    var marker_url   = "<?php echo base_url('images/map-marker-new.png');?>";
    var marker_url_hover   = "<?php echo base_url('images/map-marker-new-hover.png');?>";
    var marker_w     = 26;
    var marker_h     = 33;
    var icon_url = new google.maps.MarkerImage(marker_url, new google.maps.Size(marker_w,marker_h), new google.maps.Point(0,0) );
    var icon_url_hover = new google.maps.MarkerImage(marker_url_hover, new google.maps.Size(marker_w,marker_h), new google.maps.Point(0,0) );
    var map = new google.maps.Map(document.getElementById('map_canvas'), {
	    zoom: 10,
	    center: new google.maps.LatLng(<?php echo $key->post_property_area_lat?>,<?php echo $key->post_property_area_log?>),
	    mapTypeId: google.maps.MapTypeId.ROADMAP,
	    panControl: false,
	    zoomControl: false,
	    mapTypeControl: false,
	    scaleControl: false,
	    streetViewControl: false,
	    overviewMapControl: false
    });

    var infowindow = new google.maps.InfoWindow({

    });
    
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
          marker.setIcon(icon_url_hover);
        }
      })(marker, i));
      google.maps.event.addListener(marker, 'mouseout', (function(marker, i) {
        return function() {
          marker.setIcon(icon_url);
        }
      })(marker, i));
    }
  </script>