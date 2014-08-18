	<?php if(isset($post_detail)){
			foreach ($post_detail as $key ) {
				$ID = $key->ID;
				$post_property_catergory = $key->post_property_catergory;
				$post_property_type = $key->post_property_type;
				$post_price = $key->post_price;
				$post_property_size = $key->post_property_size;
				$post_property_floor = $key->post_property_floor;
				$post_property_bedrooms = $key->post_property_bedrooms;
				$post_property_bathroom = $key->post_property_bathroom;
				$post_property_not_furnished = $key->post_property_not_furnished  == '0' ? 'no' : 'yes';
		        $post_property_semi_furnished = $key->post_property_semi_furnished  == '0' ? 'no' : 'yes';
		        $post_property_furnished = $key->post_property_furnished == '0' ? 'no' : 'yes';
		        $post_property_gym = $key->post_property_gym == '0' ? 'no' : 'yes';
		        $post_property_storage = $key->post_property_storage == '0' ? 'no' : 'yes';
		        $post_property_parking = $key->post_property_parking == '0' ? 'no' : 'yes';
		        $post_property_security = $key->post_property_security == '0' ? 'no' : 'yes';
		        $post_property_ac = $key->post_property_ac == '0' ? 'no' : 'yes';
		        $post_property_washer_dryer = $key->post_property_washer_dryer == '0' ? 'no' : 'yes';
		        $post_property_electricity = $key->post_property_electricity == '0' ? 'no' : 'yes';
				$post_property_area_reference = $key->post_property_area_reference;
				$post_property_area_city = $key->post_property_area_city;
				$post_property_area_community = $key->post_property_area_community;
				$post_property_area_address = $key->post_property_area_address;
				$post_property_area_lat = $key->post_property_area_lat;
				$post_property_area_log = $key->post_property_area_log;
				$post_property_build_floor = $key->post_property_build_floor;
				$post_property_build_apartment_per_floor = $key->post_property_build_apartment_per_floor;
				$post_property_build_elevators = $key->post_property_build_elevators;
				$post_title = $key->post_title;
				$post_description = $key->post_description;
				$post_featured = $key->post_featured;
				$post_seo_title = $key->post_seo_title;
				$post_seo_keywords = $key->post_seo_keywords;
				$post_seo_description = $key->post_seo_description;
			}
		}
	?>
	<div class="home-main clearfix">
		<div class="container">
			<div class="tab-area clearfix">
				<div class="title">Edit Your Listing</div>
				<?php if($this->session->userdata('logged_in')['user_type'] == 'admin') { ?>
					<a href="<?php echo site_url('profile/user')?>"><div class="tab"><span class="icon-tab p"></span><span class="text p">My Profile</span></div></a>
				<?php } else if($this->session->userdata('logged_in')['user_type'] == 'moderator') { ?>
					<a href="<?php echo site_url('profile/user')?>"><div class="tab"><span class="icon-tab p"></span><span class="text p">My Profile</span></div></a>
				<?php }else if($this->session->userdata('logged_in')['user_type'] == 'user') { ?>
					<a href="<?php echo site_url('profile/user')?>"><div class="tab"><span class="icon-tab p"></span><span class="text p">My Profile</span></div></a>
				<?php }else if($this->session->userdata('logged_in')['user_type'] == 'agent') { ?>
					<a href="<?php echo site_url('profile/agent')?>"><div class="tab"><span class="icon-tab p"></span><span class="text p">My Profile</span></div></a>
				<?php } ?>
			</div>
			<div class="upload-area clearfix">
				<form id="target" method="post" action="<?php echo site_url('modify_property/'.$ID); ?>" enctype="multipart/form-data">
				<div class="left">
					<h1>Property</h1>
					<div class="filed">
						<span class="info">Category : </span><input	type="text" placeholder="Category" name='post_property_catergory' readonly class="drop" value="<?php echo $post_property_catergory; ?>">
						<span class="arrow"></span>
						<div class="drop-category">
							<?php if(isset($property_category)) { ?>
								<?php if(!empty($property_category)) { ?>
									<?php foreach ($property_category as $key) { ?>
										<div class="drop-item" item-value="<?php echo $key->name?>"><?php echo $key->name?></div>
									<?php } ?>
								<?php } ?>
							<?php } ?>
						</div>
					</div>
					<div class="filed">
						<span class="info">Type : </span><input	type="text" placeholder="Type" name='post_property_type' readonly class="drop" value="<?php echo $post_property_type; ?>">
						<span class="arrow"></span>
						<div class="drop-category">
							<?php if(isset($property_type)) { ?>
								<?php if(!empty($property_type)) { ?>
									<?php foreach ($property_type as $key) { ?>
										<div class="drop-item" item-value="<?php echo $key->name?>"><?php echo $key->name?></div>
									<?php } ?>
								<?php } ?>
							<?php } ?>
						</div>
					</div>
					<div class="filed">
						<span class="info">Price : </span><input	type="text" placeholder="Price" name="post_price" value="<?php echo $post_price; ?>"> <span class="extra">QR</span>
					</div>
					<div class="filed">
						<span class="info">Size : </span><input	type="text" placeholder="Size" name="post_property_size" value="<?php echo $post_property_size; ?>"> <span class="extra">m<sup>2</sup></span>
					</div>
					<div class="filed">
						<span class="info">Floor : </span><input	type="text" placeholder="Floor" name="post_property_floor" value="<?php echo $post_property_floor; ?>">
						
					</div>
					<div class="filed">
						<span class="info">Bedrooms : </span><input	type="text" placeholder="Bedrooms" name="post_property_bedrooms" readonly class="drop" value="<?php echo $post_property_bedrooms; ?>">
						<span class="arrow"></span>
						<div class="drop-category">
							<div class="drop-item" item-value="1">1</div>
                            <div class="drop-item" item-value="2">2</div>
                            <div class="drop-item" item-value="3">3</div>
                            <div class="drop-item" item-value="4">4</div>
                            <div class="drop-item" item-value="5">5</div>
                            <div class="drop-item" item-value="6">6</div>
                            <div class="drop-item" item-value="7">7</div>
                            <div class="drop-item" item-value="8">8</div>
                            <div class="drop-item" item-value="9">9</div>
						</div>
					</div>
					<div class="filed">
						<span class="info">Bathrooms : </span><input	type="text" placeholder="Bathrooms" name="post_property_bathroom" readonly class="drop" value="<?php echo $post_property_bathroom; ?>">
						<span class="arrow"></span>
						<div class="drop-category">
							<div class="drop-item" item-value="1">1</div>
                            <div class="drop-item" item-value="2">2</div>
                            <div class="drop-item" item-value="3">3</div>
                            <div class="drop-item" item-value="4">4</div>
                            <div class="drop-item" item-value="5">5</div>
                            <div class="drop-item" item-value="6">6</div>
                            <div class="drop-item" item-value="7">7</div>
                            <div class="drop-item" item-value="8">8</div>
                            <div class="drop-item" item-value="9">9</div>
						</div>
					</div>
					<div class="filed">
						<span class="info">Not Furnished : </span><input	type="text" placeholder="Not Furnished" name="post_property_not_furnished" readonly class="drop" value="<?php echo $post_property_not_furnished; ?>">
						<span class="arrow"></span>
						<div class="drop-category">
							<div class="drop-item" item-value="no">no</div>
                            <div class="drop-item" item-value="yes">yes</div>
						</div>
					</div>
					<div class="filed">
						<span class="info">Semi Furnished : </span><input	type="text" placeholder="Semi Furnished" name="post_property_semi_furnished" readonly class="drop" value="<?php echo $post_property_semi_furnished; ?>">
						<span class="arrow"></span>
						<div class="drop-category">
							<div class="drop-item" item-value="no">no</div>
                            <div class="drop-item" item-value="yes">yes</div>
						</div>
					</div>
					<div class="filed">
						<span class="info">Furnished : </span><input	type="text" placeholder="Furnished"  name="post_property_furnished" readonly class="drop" value="<?php echo $post_property_furnished; ?>">
						<span class="arrow"></span>
						<div class="drop-category">
							<div class="drop-item" item-value="no">no</div>
                            <div class="drop-item" item-value="yes">yes</div>
						</div>
					</div>
					<div class="filed">
						<span class="info">GYM : </span><input	type="text" placeholder="GYM" name="post_property_gym" readonly class="drop" value="<?php echo $post_property_gym; ?>">
						<span class="arrow"></span>
						<div class="drop-category">
							<div class="drop-item" item-value="no">no</div>
                            <div class="drop-item" item-value="yes">yes</div>
						</div>
					</div>
					<div class="filed">
						<span class="info">Storage : </span><input	type="text" placeholder="Storage" name="post_property_storage" readonly class="drop" value="<?php echo $post_property_storage; ?>">
						<span class="arrow"></span>
						<div class="drop-category">
							<div class="drop-item" item-value="no">no</div>
                            <div class="drop-item" item-value="yes">yes</div>
						</div>
					</div>
					<div class="filed">
						<span class="info">Parking : </span><input	type="text" placeholder="Parking" name="post_property_parking" readonly class="drop" value="<?php echo $post_property_parking; ?>">
						<span class="arrow"></span>
						<div class="drop-category">
							<div class="drop-item" item-value="no">no</div>
                            <div class="drop-item" item-value="yes">yes</div>
						</div>
					</div>
					<div class="filed">
						<span class="info">Security : </span><input	type="text" placeholder="Security" name="post_property_security" readonly class="drop" value="<?php echo $post_property_security; ?>">
						<span class="arrow"></span>
						<div class="drop-category">
							<div class="drop-item" item-value="no">no</div>
                            <div class="drop-item" item-value="yes">yes</div>
						</div>
					</div>
					<div class="filed">
						<span class="info">AC : </span><input	type="text" placeholder="AC" name="post_property_ac" readonly class="drop" value="<?php echo $post_property_ac; ?>">
						<span class="arrow"></span>
						<div class="drop-category">
							<div class="drop-item" item-value="no">no</div>
                            <div class="drop-item" item-value="yes">yes</div>
						</div>
					</div>
					<div class="filed">
						<span class="info">Washer/Dryer : </span><input	type="text" placeholder="Washer/Dryer" name="post_property_washer_dryer" readonly class="drop" value="<?php echo $post_property_washer_dryer; ?>">
						<span class="arrow"></span>
						<div class="drop-category">
							<div class="drop-item" item-value="no">no</div>
                            <div class="drop-item" item-value="yes">yes</div>
						</div>
					</div>
					<div class="filed ex">
						<span class="info">Electricity/Hydro : </span><input	type="text" placeholder="Electricity/Hydro" name="post_property_electricity" readonly class="drop" value="<?php echo $post_property_electricity; ?>">
						<span class="arrow"></span>
						<div class="drop-category">
							<div class="drop-item" item-value="no">no</div>
                            <div class="drop-item" item-value="yes">yes</div>
						</div>
					</div>
					<h1>Area</h1>
					<div class="filed">
						<span class="info">Reference : </span><input	type="text" placeholder="Reference" name="post_property_area_reference" value="<?php echo $post_title; ?>">
					</div>
					<div class="filed">
						<span class="info">City : </span><input	type="text" placeholder="City" readonly class="drop" name="post_property_area_city" value="<?php echo $post_property_area_city; ?>">
						<span class="arrow"></span>
						<div class="drop-category">
							<?php if(isset($property_city)) { ?>
								<?php if(!empty($property_city)) { ?>
									<?php foreach ($property_city as $key) { ?>
										<div class="drop-item" item-value="<?php echo $key->name?>"><?php echo $key->name?></div>
									<?php } ?>
								<?php } ?>
							<?php } ?>
						</div>
					</div>
					<div class="filed">
						<span class="info">Community : </span><input	type="text" placeholder="Community" name='post_property_area_community' value="<?php echo $post_property_area_community; ?>">
					</div>
					<div class="filed">
						<span class="info">Address : </span><input	type="text" placeholder="Address" name='post_property_area_address' value="<?php echo $post_property_area_address; ?>">
					</div>
					<div class="filed">
						<span class="info">Latitude : </span><input	type="text" id="lat" placeholder="Latitude" name='post_property_area_lat' value="<?php echo $post_property_area_lat; ?>">
					</div>
					<div class="filed">
						<span class="info">Longitude : </span><input	type="text" id="long" placeholder="Longitude" name='post_property_area_log' value="<?php echo $post_property_area_log; ?>">
					</div>
					<div class="filed">
						<div class="fileUpload btn btn-primary">
						    <input type="file" name="files[]" class="upload" multiple/>
						</div>
					</div>
					<div class="filed clearfix">
					<?php if(isset($image_list)){ 	
							if(!empty($image_list)) {
								foreach ($image_list as $key ) {	
									$image_url=$key->post_image_url; 
									$info = pathinfo($image_url);
									$file_name =  basename($image_url,'.'.$info['extension']);
					?>
						<div class="image_thumb">
							<img src="<?php echo site_url('upload/'.$file_name."_100.".$info['extension'])?>">
							<a href="<?php echo site_url('delete_image?ID='.$key->ID."&post_image_id=".$ID)?>"><div class="delete-image"></div></a>
						</div>
					<?php 		} 
							} 
						}	
					?>
					</div>
				</div>
				<div class="right">
					<h1>Building</h1>
					<div class="filed">
						<span class="info"># of Floors : </span><input	type="text" placeholder="# of Floors" readonly class="drop" name="post_property_build_floor" value="<?php echo $post_property_build_floor; ?>">
						<span class="arrow"></span>
						<div class="drop-category">
							<div class="drop-item" item-value="1">1</div>
                            <div class="drop-item" item-value="2">2</div>
                            <div class="drop-item" item-value="3">3</div>
                            <div class="drop-item" item-value="4">4</div>
                            <div class="drop-item" item-value="5">5</div>
                            <div class="drop-item" item-value="6">6</div>
                            <div class="drop-item" item-value="7">7</div>
                            <div class="drop-item" item-value="8">8</div>
                            <div class="drop-item" item-value="9">9</div>
                            <div class="drop-item" item-value="10">10</div>
                            <div class="drop-item" item-value="11">11</div>
                            <div class="drop-item" item-value="12">12</div>
                            <div class="drop-item" item-value="13">13</div>
                            <div class="drop-item" item-value="14">14</div>
                            <div class="drop-item" item-value="15">15</div>
                            <div class="drop-item" item-value="16">16</div>
                            <div class="drop-item" item-value="17">17</div>
                            <div class="drop-item" item-value="18">18</div>
                            <div class="drop-item" item-value="19">19</div>
                            <div class="drop-item" item-value="20">20</div>
						</div>
					</div>
					<div class="filed">
						<span class="info">Apartment per Floor : </span><input	type="text" placeholder="Apartment per Floor" readonly class="drop" name="post_property_build_apartment_per_floor" value="<?php echo $post_property_build_apartment_per_floor; ?>">
						<span class="arrow"></span>
						<div class="drop-category">
							<div class="drop-item" item-value="1">1</div>
                            <div class="drop-item" item-value="2">2</div>
                            <div class="drop-item" item-value="3">3</div>
                            <div class="drop-item" item-value="4">4</div>
                            <div class="drop-item" item-value="5">5</div>
                            <div class="drop-item" item-value="6">6</div>
                            <div class="drop-item" item-value="7">7</div>
                            <div class="drop-item" item-value="8">8</div>
                            <div class="drop-item" item-value="9">9</div>
                            <div class="drop-item" item-value="10">10</div>
                            <div class="drop-item" item-value="11">11</div>
                            <div class="drop-item" item-value="12">12</div>
                            <div class="drop-item" item-value="13">13</div>
                            <div class="drop-item" item-value="14">14</div>
                            <div class="drop-item" item-value="15">15</div>
                            <div class="drop-item" item-value="16">16</div>
                            <div class="drop-item" item-value="17">17</div>
                            <div class="drop-item" item-value="18">18</div>
                            <div class="drop-item" item-value="19">19</div>
                            <div class="drop-item" item-value="20">20</div>
						</div>
					</div>
					<div class="filed ex">
						<span class="info"># of Elevators : </span><input	type="text" placeholder="# of Elevators" readonly class="drop" name="post_property_build_elevators" value="<?php echo $post_property_build_elevators; ?>">
						<span class="arrow"></span>
						<div class="drop-category">
							<div class="drop-item" item-value="1">1</div>
                            <div class="drop-item" item-value="2">2</div>
                            <div class="drop-item" item-value="3">3</div>
                            <div class="drop-item" item-value="4">4</div>
                            <div class="drop-item" item-value="5">5</div>
                            <div class="drop-item" item-value="6">6</div>
                            <div class="drop-item" item-value="7">7</div>
						</div>
					</div>
					<h1>General</h1>
					<div class="filed">
						<span class="info">Title : </span><input	type="text" placeholder="Title" name="post_title" value="<?php echo $post_title; ?>">
					</div>
					<div class="filed ex">
						<textarea placeholder="Description" name="post_description"><?php echo $post_description; ?></textarea>
					</div>
					<?php if($this->session->userdata('logged_in')['user_type'] == 'admin' || $this->session->userdata('logged_in')['user_type'] == 'moderator') {?>
						<div class="filed ex">
							<span class="info">Featured : </span><input	type="text" placeholder="Featured" readonly class="drop" name="post_featured" value="<?php echo $post_featured == '0' ? 'no':'yes'; ?>">
							<span class="arrow"></span>
							<div class="drop-category">
								<div class="drop-item" item-value="no">no</div>
	                            <div class="drop-item" item-value="yes">yes</div>
							</div>
						</div>
						<h1>SEO</h1>
						<div class="filed">
							<span class="info">Meta Title : </span><input	type="text" placeholder="Google Meta Title" name="post_seo_title" value="<?php echo $post_seo_title; ?>">
						</div>
						<div class="filed">
							<span class="info">Meta Keyword : </span><input	type="text" placeholder="Google Meta Keyword" name="post_seo_keywords" value="<?php echo $post_seo_keywords; ?>">
						</div>
						<div class="filed ex">
							<textarea placeholder="Google Meta Description" name="post_seo_description"><?php echo $post_seo_description; ?></textarea>
						</div>
						<div class="filed">
							<div id="map_canvas"></div>
						</div>
					<?php } else { ?>
						<input	type="hidden" name="post_seo_title" value="<?php echo $post_seo_title; ?>">
						<input	type="hidden" name="post_seo_keywords" value="<?php echo $post_seo_keywords; ?>">
						<input type="hidden" name="post_seo_description" value="<?php echo $post_seo_description; ?>">
						<input type="hidden" name="post_featured" value="<?php echo $post_featured == '0' ? 'no':'yes'; ?>">
					<?php } ?>
					<input id="check" type="checkbox" name="check" value="1" style="margin-top:20px;">agree with <span><a href="<?php echo site_url();?>" style="color:#ffa800;text-decoration:none;">Terms & Conditions</a></span><br>
					<input type="submit" class="submit" value="Submit">
				</div>
				</form>
			</div> 
		</div>
	</div>
	<style type="text/css">
		#map_canvas{
			width: 500px;
			height: 300px;
		}
	</style>

	<script type="text/javascript">
	  $(document).ready(function(){
	  	$("#target").submit(function(event){
	  		if($("#check").is(':checked')){
	  			return;
	  		}else{
	  			alert("Please select the Terms & Conditions checkbox");
	  		}
	  		event.preventDefault();
	  	});
	  });
	</script>
	<script type="text/javascript">
    var map = new google.maps.Map(document.getElementById('map_canvas'), {
	    zoom: 12,
	    center: new google.maps.LatLng(<?php echo $post_property_area_lat; ?>,<?php echo $post_property_area_log; ?>),
	    mapTypeId: google.maps.MapTypeId.ROADMAP,
	    panControl: false,
	    zoomControl: false,
	    mapTypeControl: false,
	    scaleControl: false,
	    streetViewControl: false,
	    overviewMapControl: false
    });
    var markers = [];
    placeMarker(new google.maps.LatLng(<?php echo $post_property_area_lat; ?>,<?php echo $post_property_area_log; ?>), map);
    google.maps.event.addListener(map, 'click', function( event ){
    	deleteMarkers();
    	placeMarker(event.latLng, map);
	  	$('#lat').val(event.latLng.lat());
	  	$('#long').val(event.latLng.lng());
	  	//alert( "Latitude: "+event.latLng.lat()+" "+", longitude: "+event.latLng.lng() ); 
	});
	function placeMarker(position, map) {
	  var marker = new google.maps.Marker({
	    position: position,
	    map: map
	  });
	  map.panTo(position);
	  markers.push(marker);
	}
	// Sets the map on all markers in the array.
	function setAllMap(map) {
	  for (var i = 0; i < markers.length; i++) {
	    markers[i].setMap(map);
	  }
	}

	// Removes the markers from the map, but keeps them in the array.
	function clearMarkers() {
	  setAllMap(null);
	}

	// Shows any markers currently in the array.
	function showMarkers() {
	  setAllMap(map);
	}

	// Deletes all markers in the array by removing references to them.
	function deleteMarkers() {
	  clearMarkers();
	  markers = [];
	}
  </script>