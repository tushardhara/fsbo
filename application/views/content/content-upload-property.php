	<div class="home-main clearfix">
		<div class="container">
			<div class="upload_type clearfix">
				<?php if($this->session->userdata('logged_in')['user_type'] == 'admin') { ?>
					<a href="<?php echo site_url('profile/admin/property')?>" class="active">Property</a>
					<a href="<?php echo site_url('profile/admin/furniture')?>" class="">Furniture</a>
					<a href="<?php echo site_url('profile/admin/education')?>" class="">Education</a>
				<?php } else if($this->session->userdata('logged_in')['user_type'] == 'moderator') { ?>
					<a href="<?php echo site_url('profile/moderator/property')?>" class="active">Property</a>
					<a href="<?php echo site_url('profile/moderator/furniture')?>" class="">Furniture</a>
					<a href="<?php echo site_url('profile/moderator/education')?>" class="">Education</a>
				<?php }else if($this->session->userdata('logged_in')['user_type'] == 'user') { ?>
					<a href="<?php echo site_url('profile/user/property')?>" class="active">Property</a>
					<a href="<?php echo site_url('profile/user/furniture')?>" class="">Furniture</a>
				<?php }else if($this->session->userdata('logged_in')['user_type'] == 'agent') { ?>
					<a href="<?php echo site_url('profile/agent/property')?>" class="active">Property</a>
					<a href="<?php echo site_url('profile/agent/furniture')?>" class="">Furniture</a>
				<?php } ?>
			</div>
			<div class="tab-area clearfix">
				<div class="title">Specify Your Listing</div>
				<?php if($this->session->userdata('logged_in')['user_type'] == 'admin') { ?>
					<a href="<?php echo site_url('profile/user')?>"><div class="tab"><span class="icon-tab p"></span><span class="text p">My Profile</span></div></a>
					<a href="<?php echo site_url('profile/user/property')?>"><div class="tab active"><span class="icon-tab home"></span><span class="text home">Rent / Sale</span></div></a>
				<?php } else if($this->session->userdata('logged_in')['user_type'] == 'moderator') { ?>
					<a href="<?php echo site_url('profile/user')?>"><div class="tab"><span class="icon-tab p"></span><span class="text p">My Profile</span></div></a>
					<a href="<?php echo site_url('profile/user/property')?>"><div class="tab active"><span class="icon-tab home"></span><span class="text home">Rent / Sale</span></div></a>
				<?php }else if($this->session->userdata('logged_in')['user_type'] == 'user') { ?>
					<a href="<?php echo site_url('profile/user')?>"><div class="tab"><span class="icon-tab p"></span><span class="text p">My Profile</span></div></a>
					<a href="<?php echo site_url('profile/user/property')?>"><div class="tab active"><span class="icon-tab home"></span><span class="text home">Rent / Sale</span></div></a>
				<?php }else if($this->session->userdata('logged_in')['user_type'] == 'agent') { ?>
					<a href="<?php echo site_url('profile/agent')?>"><div class="tab"><span class="icon-tab p"></span><span class="text p">My Profile</span></div></a>
					<a href="<?php echo site_url('profile/agent/property')?>"><div class="tab active"><span class="icon-tab home"></span><span class="text home">Rent / Sale</span></div></a>
				<?php } ?>
			</div>
			<div class="upload-area clearfix">
				<form id="target" method="post" action="<?php echo site_url('add_property'); ?>" enctype="multipart/form-data">
				<div class="left">
					<h1>Property</h1>
					<div class="filed">
						<span class="info">Category : </span><input	type="text" placeholder="Category" name='post_property_catergory' readonly class="drop">
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
						<span class="info">Type : </span><input	type="text" placeholder="Type" name='post_property_type' readonly class="drop">
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
						<span class="info">Price : </span><input	type="text" placeholder="Price" name="post_price" ><span class="extra">QR</span>
					</div>
					<div class="filed">
						<span class="info">Size : </span><input	type="text" placeholder="Size" name="post_property_size"><span class="extra">m<sup>2</sup></span>
					</div>
					<div class="filed">
						<span class="info">Floor : </span><input	type="text" placeholder="Floor" name="post_property_floor">
						
					</div>
					<div class="filed">
						<span class="info">Bedrooms : </span><input	type="text" placeholder="Bedrooms" name="post_property_bedrooms" readonly class="drop">
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
						<span class="info">Bathrooms : </span><input	type="text" placeholder="Bathrooms" name="post_property_bathroom" readonly class="drop">
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
						<span class="info">Not Furnished : </span><input	type="text" placeholder="Not Furnished" name="post_property_not_furnished" readonly class="drop">
						<span class="arrow"></span>
						<div class="drop-category">
							<div class="drop-item" item-value="no">no</div>
                            <div class="drop-item" item-value="yes">yes</div>
						</div>
					</div>
					<div class="filed">
						<span class="info">Semi Furnished : </span><input	type="text" placeholder="Semi Furnished" name="post_property_semi_furnished" readonly class="drop">
						<span class="arrow"></span>
						<div class="drop-category">
							<div class="drop-item" item-value="no">no</div>
                            <div class="drop-item" item-value="yes">yes</div>
						</div>
					</div>
					<div class="filed">
						<span class="info">Furnished : </span><input	type="text" placeholder="Furnished" name="post_property_furnished" readonly class="drop">
						<span class="arrow"></span>
						<div class="drop-category">
							<div class="drop-item" item-value="no">no</div>
                            <div class="drop-item" item-value="yes">yes</div>
						</div>
					</div>
					<div class="filed">
						<span class="info">GYM : </span><input	type="text" placeholder="GYM" name="post_property_gym" readonly class="drop">
						<span class="arrow"></span>
						<div class="drop-category">
							<div class="drop-item" item-value="no">no</div>
                            <div class="drop-item" item-value="yes">yes</div>
						</div>
					</div>
					<div class="filed">
						<span class="info">Storage : </span><input	type="text" placeholder="Storage" name="post_property_storage" readonly class="drop">
						<span class="arrow"></span>
						<div class="drop-category">
							<div class="drop-item" item-value="no">no</div>
                            <div class="drop-item" item-value="yes">yes</div>
						</div>
					</div>
					<div class="filed">
						<span class="info">Parking : </span><input	type="text" placeholder="Parking" name="post_property_parking" readonly class="drop">
						<span class="arrow"></span>
						<div class="drop-category">
							<div class="drop-item" item-value="no">no</div>
                            <div class="drop-item" item-value="yes">yes</div>
						</div>
					</div>
					<div class="filed">
						<span class="info">Security : </span><input	type="text" placeholder="Security" name="post_property_security" readonly class="drop">
						<span class="arrow"></span>
						<div class="drop-category">
							<div class="drop-item" item-value="no">no</div>
                            <div class="drop-item" item-value="yes">yes</div>
						</div>
					</div>
					<div class="filed">
						<span class="info">AC : </span><input	type="text" placeholder="AC" name="post_property_ac" readonly class="drop">
						<span class="arrow"></span>
						<div class="drop-category">
							<div class="drop-item" item-value="no">no</div>
                            <div class="drop-item" item-value="yes">yes</div>
						</div>
					</div>
					<div class="filed">
						<span class="info">Washer/Dryer : </span><input	type="text" placeholder="Washer/Dryer" name="post_property_washer_dryer" readonly class="drop">
						<span class="arrow"></span>
						<div class="drop-category">
							<div class="drop-item" item-value="no">no</div>
                            <div class="drop-item" item-value="yes">yes</div>
						</div>
					</div>
					<div class="filed ex">
						<span class="info">Electricity/Hydro : </span><input	type="text" placeholder="Electricity/Hydro" name="post_property_electricity" readonly class="drop">
						<span class="arrow"></span>
						<div class="drop-category">
							<div class="drop-item" item-value="no">no</div>
                            <div class="drop-item" item-value="yes">yes</div>
						</div>
					</div>
					<h1>Area</h1>
					<div class="filed">
						<span class="info">Reference : </span><input	type="text" placeholder="Reference" name="post_property_area_reference">
					</div>
					<div class="filed">
						<span class="info">City : </span><input	type="text" placeholder="City" readonly class="drop" name="post_property_area_city">
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
						<span class="info">Community : </span><input	type="text" placeholder="Community" name='post_property_area_community'>
					</div>
					<div class="filed">
						<span class="info">Address : </span><input	type="text" placeholder="Address" name='post_property_area_address'>
					</div>
					<div class="filed">
						<span class="info">Latitude : </span><input	type="text" placeholder="Latitude" id="lat" name='post_property_area_lat'>
					</div>
					<div class="filed">
						<span class="info">Longitude : </span><input	type="text" placeholder="Longitude" id="long" name='post_property_area_log'>
					</div>
					
				</div>
				<div class="right">
					<h1>Building</h1>
					<div class="filed">
						<span class="info"># of Floors : </span><input	type="text" placeholder="# of Floors" readonly class="drop" name="post_property_build_floor">
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
						<span class="info">Apartment per Floor : </span><input	type="text" placeholder="Apartment per Floor" readonly class="drop" name="post_property_build_apartment_per_floor">
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
						<span class="info"># of Elevators : </span><input	type="text" placeholder="# of Elevators" readonly class="drop" name="post_property_build_elevators">
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
						<span class="info">Title : </span><input	type="text" placeholder="Title" name="post_title">
					</div>
					<div class="filed">
						<div class="fileUpload btn btn-primary">
						    <input type="file" name="files[]" class="upload" multiple/>
						</div>
					</div>
					<div class="filed ex">
						<textarea placeholder="Description" name="post_description"></textarea>
					</div>
					<?php if($this->session->userdata('logged_in')['user_type'] == 'admin' || $this->session->userdata('logged_in')['user_type'] == 'moderator') {?>
						<div class="filed ex">
							<span class="info">Featured : </span><input	type="text" placeholder="Featured" readonly class="drop" name="post_featured">
							<span class="arrow"></span>
							<div class="drop-category">
								<div class="drop-item" item-value="no">no</div>
	                            <div class="drop-item" item-value="yes">yes</div>
							</div>
						</div>
						<h1>SEO</h1>
						<div class="filed">
							<span class="info">Meta Title : </span><input	type="text" placeholder="Google Meta Title" name="post_seo_title">
						</div>
						<div class="filed">
							<span class="info">Meta Keyword : </span><input	type="text" placeholder="Google Meta Keyword" name="post_seo_keywords">
						</div>
						<div class="filed ex">
							<textarea placeholder="Google Meta Description" name="post_seo_description"></textarea>
						</div>
						<div class="filed">
							<div id="map_canvas"></div>
						</div>
					<?php } else { ?>
						<input	type="hidden" name="post_seo_title">
						<input	type="hidden" name="post_seo_keywords">
						<input type="hidden" name="post_seo_description">
						<input type="hidden" name="post_featured" value="no">
					<?php } ?>
					<input id="check" type="checkbox" name="check" value="1" style="margin-top:20px;">agree with <span><a href="<?php echo site_url();?>" style="color:#ffa800;text-decoration:none;">Terms & Conditions</a></span><br>
					<input id="submit" type="submit" class="submit" value="Submit">
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
	    center: new google.maps.LatLng(25.3000,51.5167),
	    mapTypeId: google.maps.MapTypeId.ROADMAP,
	    panControl: false,
	    zoomControl: false,
	    mapTypeControl: false,
	    scaleControl: false,
	    streetViewControl: false,
	    overviewMapControl: false
    });
    var markers = [];
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