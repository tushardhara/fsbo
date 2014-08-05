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
				<form method="post" action="<?php echo site_url('modify_property/'.$ID); ?>" enctype="multipart/form-data">
				<div class="left">
					<h1>Property</h1>
					<div class="filed">
						<input	type="text" placeholder="Category" name='post_property_catergory' readonly class="drop" value="<?php echo $post_property_catergory; ?>">
						<span class="arrow"></span>
						<div class="drop-category">
							<div class="drop-item" item-value="Residential property for Sale">Residential property for Sale</div>
                            <div class="drop-item" item-value="Residential property for Rent">Residential property for Rent</div>
                            <div class="drop-item" item-value="Commercial property for Sale">Commercial property for Sale</div>
                            <div class="drop-item" item-value="Commercial property for Rent">Commercial property for Rent</div>
						</div>
					</div>
					<div class="filed">
						<input	type="text" placeholder="Type" name='post_property_type' readonly class="drop" value="<?php echo $post_property_type; ?>">
						<span class="arrow"></span>
						<div class="drop-category">
							<div class="drop-item" item-value="Apartment">Apartment</div>
                            <div class="drop-item" item-value="Villa">Villa</div>
                            <div class="drop-item" item-value="Townhouse">Townhouse</div>
                            <div class="drop-item" item-value="Bungalow">Bungalow</div>
                            <div class="drop-item" item-value="Duplex">Duplex</div>
                            <div class="drop-item" item-value="Chalet">Chalet</div>
                            <div class="drop-item" item-value="Compound">Compound</div>
                            <div class="drop-item" item-value="Penthouse">Penthouse</div>
                            <div class="drop-item" item-value="Land">Land</div>
                            <div class="drop-item" item-value="Office">Office</div>
                            <div class="drop-item" item-value="Warehouse">Warehouse</div>
                            <div class="drop-item" item-value="Whole Building">Whole Building</div>
						</div>
					</div>
					<div class="filed">
						<input	type="text" placeholder="Price" name="post_price" value="<?php echo $post_price; ?>">
					</div>
					<div class="filed">
						<input	type="text" placeholder="Size" name="post_property_size" value="<?php echo $post_property_size; ?>">
					</div>
					<div class="filed">
						<input	type="text" placeholder="Floor" name="post_property_floor" value="<?php echo $post_property_floor; ?>">
						
					</div>
					<div class="filed">
						<input	type="text" placeholder="Bedrooms" name="post_property_bedrooms" readonly class="drop" value="<?php echo $post_property_bedrooms; ?>">
						<span class="arrow"></span>
						<div class="drop-category">
							<div class="drop-item" item-value="1">1</div>
                            <div class="drop-item" item-value="2">2</div>
                            <div class="drop-item" item-value="3">3</div>
                            <div class="drop-item" item-value="4">4</div>
                            <div class="drop-item" item-value="5">5</div>
						</div>
					</div>
					<div class="filed">
						<input	type="text" placeholder="Bathrooms" name="post_property_bathroom" readonly class="drop" value="<?php echo $post_property_bathroom; ?>">
						<span class="arrow"></span>
						<div class="drop-category">
							<div class="drop-item" item-value="1">1</div>
                            <div class="drop-item" item-value="2">2</div>
                            <div class="drop-item" item-value="3">3</div>
                            <div class="drop-item" item-value="4">4</div>
                            <div class="drop-item" item-value="5">5</div>
						</div>
					</div>
					<div class="filed">
						<input	type="text" placeholder="Not Furnished" name="post_property_not_furnished" readonly class="drop" value="<?php echo $post_property_not_furnished; ?>">
						<span class="arrow"></span>
						<div class="drop-category">
							<div class="drop-item" item-value="no">no</div>
                            <div class="drop-item" item-value="yes">yes</div>
						</div>
					</div>
					<div class="filed">
						<input	type="text" placeholder="Semi Furnished" name="post_property_semi_furnished" readonly class="drop" value="<?php echo $post_property_semi_furnished; ?>">
						<span class="arrow"></span>
						<div class="drop-category">
							<div class="drop-item" item-value="no">no</div>
                            <div class="drop-item" item-value="yes">yes</div>
						</div>
					</div>
					<div class="filed">
						<input	type="text" placeholder="Furnished"  name="post_property_furnished" readonly class="drop" value="<?php echo $post_property_furnished; ?>">
						<span class="arrow"></span>
						<div class="drop-category">
							<div class="drop-item" item-value="no">no</div>
                            <div class="drop-item" item-value="yes">yes</div>
						</div>
					</div>
					<div class="filed">
						<input	type="text" placeholder="GYM" name="post_property_gym" readonly class="drop" value="<?php echo $post_property_gym; ?>">
						<span class="arrow"></span>
						<div class="drop-category">
							<div class="drop-item" item-value="no">no</div>
                            <div class="drop-item" item-value="yes">yes</div>
						</div>
					</div>
					<div class="filed">
						<input	type="text" placeholder="Storage" name="post_property_storage" readonly class="drop" value="<?php echo $post_property_storage; ?>">
						<span class="arrow"></span>
						<div class="drop-category">
							<div class="drop-item" item-value="no">no</div>
                            <div class="drop-item" item-value="yes">yes</div>
						</div>
					</div>
					<div class="filed">
						<input	type="text" placeholder="Parking" name="post_property_parking" readonly class="drop" value="<?php echo $post_property_parking; ?>">
						<span class="arrow"></span>
						<div class="drop-category">
							<div class="drop-item" item-value="no">no</div>
                            <div class="drop-item" item-value="yes">yes</div>
						</div>
					</div>
					<div class="filed">
						<input	type="text" placeholder="Security" name="post_property_security" readonly class="drop" value="<?php echo $post_property_security; ?>">
						<span class="arrow"></span>
						<div class="drop-category">
							<div class="drop-item" item-value="no">no</div>
                            <div class="drop-item" item-value="yes">yes</div>
						</div>
					</div>
					<div class="filed">
						<input	type="text" placeholder="AC" name="post_property_ac" readonly class="drop" value="<?php echo $post_property_ac; ?>">
						<span class="arrow"></span>
						<div class="drop-category">
							<div class="drop-item" item-value="no">no</div>
                            <div class="drop-item" item-value="yes">yes</div>
						</div>
					</div>
					<div class="filed">
						<input	type="text" placeholder="Washer/Dryer" name="post_property_washer_dryer" readonly class="drop" value="<?php echo $post_property_washer_dryer; ?>">
						<span class="arrow"></span>
						<div class="drop-category">
							<div class="drop-item" item-value="no">no</div>
                            <div class="drop-item" item-value="yes">yes</div>
						</div>
					</div>
					<div class="filed ex">
						<input	type="text" placeholder="Electricity/Hydro" name="post_property_electricity" readonly class="drop" value="<?php echo $post_property_electricity; ?>">
						<span class="arrow"></span>
						<div class="drop-category">
							<div class="drop-item" item-value="no">no</div>
                            <div class="drop-item" item-value="yes">yes</div>
						</div>
					</div>
					<h1>Area</h1>
					<div class="filed">
						<input	type="text" placeholder="Reference" name="post_property_area_reference" value="<?php echo $post_title; ?>">
					</div>
					<div class="filed">
						<input	type="text" placeholder="City" readonly class="drop" name="post_property_area_city" value="<?php echo $post_property_area_city; ?>">
						<span class="arrow"></span>
						<div class="drop-category">
							<div class="drop-item" item-value="Doha">Doha</div>
                            <div class="drop-item" item-value="AL wakair">AL wakair</div>
                            <div class="drop-item" item-value="Abu az Zuluf">Abu az Zuluf</div>
                            <div class="drop-item" item-value="Abu Thaylah">Abu Thaylah</div>
                            <div class="drop-item" item-value="Ad Dawhah al Jadidah">Ad Dawhah al Jadidah</div>
                            <div class="drop-item" item-value="Al `Arish">Al `Arish</div>
                            <div class="drop-item" item-value="Al Bida` ash Sharqiyah">Al Bida` ash Sharqiyah</div>
                            <div class="drop-item" item-value="Al Ghanim">Al Ghanim</div>
                            <div class="drop-item" item-value="Al Ghuwariyah">Al Ghuwariyah</div>
                            <div class="drop-item" item-value="Al Hilal al Gharbiyah">Al Hilal al Gharbiyah</div>
                            <div class="drop-item" item-value="Al Hilal ash Sharqiyah">Al Hilal ash Sharqiyah</div>
                            <div class="drop-item" item-value="Al Hitmi">Al Hitmi</div>
                            <div class="drop-item" item-value="Al Jasrah">Al Jasrah</div>
                            <div class="drop-item" item-value="Al Jumaliyah">Al Jumaliyah</div>
                            <div class="drop-item" item-value="Al Ka`biyah">Al Ka`biyah</div>
                            <div class="drop-item" item-value="Al Khalifat">Al Khalifat</div>
                            <div class="drop-item" item-value="Al Khor">Al Khor</div>
                            <div class="drop-item" item-value="Al Khuwayr">Al Khuwayr</div>
                            <div class="drop-item" item-value="Al Luqta">Al Luqta</div>
                            <div class="drop-item" item-value="Al Mafjar">Al Mafjar</div>
                            <div class="drop-item" item-value="Al Qa`abiyah">Al Qa`abiyah</div>
                            <div class="drop-item" item-value="Al Wakrah">Al Wakrah</div>
                            <div class="drop-item" item-value="Al `Adhbah">Al `Adhbah</div>
                            <div class="drop-item" item-value="An Najmah">An Najmah</div>
                            <div class="drop-item" item-value="Ar Rakiyat">Ar Rakiyat</div>
                            <div class="drop-item" item-value="Al Rayyan">Al Rayyan</div>
                            <div class="drop-item" item-value="Ar Ru'ays">Ar Ru'ays</div>
                            <div class="drop-item" item-value="As Salatah">As Salatah</div>
                            <div class="drop-item" item-value="As Salatah al Jadidah">As Salatah al Jadidah</div>
                            <div class="drop-item" item-value="As Sani`">As Sani`</div>
                            <div class="drop-item" item-value="As Sawq">As Sawq</div>
                            <div class="drop-item" item-value="Ath Thaqab">Ath Thaqab</div>
                            <div class="drop-item" item-value="Dukhan">Dukhan</div>
                            <div class="drop-item" item-value="Lusail">Lusail</div>
                            <div class="drop-item" item-value="Ras Laffan Industrial City">Ras Laffan Industrial City</div>
                            <div class="drop-item" item-value="Smaismah">Smaismah</div>
                            <div class="drop-item" item-value="Umm Bab">Umm Bab</div>
                            <div class="drop-item" item-value="Umm Sa'id">Umm Sa'id</div>
                            <div class="drop-item" item-value="Umm Salal Ali">Umm Salal Ali</div>
                            <div class="drop-item" item-value="Umm Salal Mohammed">Umm Salal Mohammed</div>
						</div>
					</div>
					<div class="filed">
						<input	type="text" placeholder="Community" name='post_property_area_community' value="<?php echo $post_property_area_community; ?>">
					</div>
					<div class="filed">
						<input	type="text" placeholder="Address" name='post_property_area_address' value="<?php echo $post_property_area_address; ?>">
					</div>
					<div class="filed">
						<input	type="text" placeholder="Latitude" name='post_property_area_lat' value="<?php echo $post_property_area_lat; ?>">
					</div>
					<div class="filed">
						<input	type="text" placeholder="Longitude" name='post_property_area_log' value="<?php echo $post_property_area_log; ?>">
					</div>
					<div class="filed">
						<input type="file" name="files[]" multiple />
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
						<input	type="text" placeholder="# of Floors" readonly class="drop" name="post_property_build_floor" value="<?php echo $post_property_build_floor; ?>">
						<span class="arrow"></span>
						<div class="drop-category">
							<div class="drop-item" item-value="1">1</div>
                            <div class="drop-item" item-value="2">2</div>
                            <div class="drop-item" item-value="3">3</div>
                            <div class="drop-item" item-value="4">4</div>
                            <div class="drop-item" item-value="5">5</div>
						</div>
					</div>
					<div class="filed">
						<input	type="text" placeholder="Apartment per Floor" readonly class="drop" name="post_property_build_apartment_per_floor" value="<?php echo $post_property_build_apartment_per_floor; ?>">
						<span class="arrow"></span>
						<div class="drop-category">
							<div class="drop-item" item-value="1">1</div>
                            <div class="drop-item" item-value="2">2</div>
                            <div class="drop-item" item-value="3">3</div>
                            <div class="drop-item" item-value="4">4</div>
                            <div class="drop-item" item-value="5">5</div>
						</div>
					</div>
					<div class="filed ex">
						<input	type="text" placeholder="# of Elevators" readonly class="drop" name="post_property_build_elevators" value="<?php echo $post_property_build_elevators; ?>">
						<span class="arrow"></span>
						<div class="drop-category">
							<div class="drop-item" item-value="1">1</div>
                            <div class="drop-item" item-value="2">2</div>
                            <div class="drop-item" item-value="3">3</div>
                            <div class="drop-item" item-value="4">4</div>
                            <div class="drop-item" item-value="5">5</div>
						</div>
					</div>
					<h1>General</h1>
					<div class="filed">
						<input	type="text" placeholder="Title" name="post_title" value="<?php echo $post_title; ?>">
					</div>
					<div class="filed ex">
						<textarea placeholder="Description" name="post_description"><?php echo $post_description; ?></textarea>
					</div>
					<?php if($this->session->userdata('logged_in')['user_type'] == 'admin' || $this->session->userdata('logged_in')['user_type'] == 'moderator') {?>
						<div class="filed ex">
							<input	type="text" placeholder="Featured" readonly class="drop" name="post_featured" value="<?php echo $post_featured == '0' ? 'no':'yes'; ?>">
							<span class="arrow"></span>
							<div class="drop-category">
								<div class="drop-item" item-value="no">no</div>
	                            <div class="drop-item" item-value="yes">yes</div>
							</div>
						</div>
						<h1>SEO</h1>
						<div class="filed">
							<input	type="text" placeholder="Google Meta Title" name="post_seo_title" value="<?php echo $post_seo_title; ?>">
						</div>
						<div class="filed">
							<input	type="text" placeholder="Google Meta Keyword" name="post_seo_keywords" value="<?php echo $post_seo_keywords; ?>">
						</div>
						<div class="filed ex">
							<textarea placeholder="Google Meta Description" name="post_seo_description"><?php echo $post_seo_description; ?></textarea>
						</div>
					<?php } else { ?>
						<input	type="hidden" name="post_seo_title" value="<?php echo $post_seo_title; ?>">
						<input	type="hidden" name="post_seo_keywords" value="<?php echo $post_seo_keywords; ?>">
						<input type="hidden" name="post_seo_description" value="<?php echo $post_seo_description; ?>">
						<input type="hidden" name="post_featured" value="<?php echo $post_featured == '0' ? 'no':'yes'; ?>">
					<?php } ?>
					<input type="submit" class="submit" value="Submit">
				</div>
				</form>
			</div> 
		</div>
	</div>