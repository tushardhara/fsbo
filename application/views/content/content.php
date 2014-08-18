	<?php if(isset($user_image_mylist)){ 
			if(!empty($user_image_mylist)){
				foreach ($user_image_mylist as $key) {
					$image[$key->post_image_id] = $key->post_image_url;
				}
			}
		} 
	?>
	<div class="home-page-slider">
		<div id="home-slider" class="owl-carousel owl-theme"> 
		  	<div class="item"><img src="images/fullimage1.jpg" alt="The Last of us"></div>
			<div class="item"><img src="images/fullimage2.jpg" alt="GTA V"></div>
			<div class="item"><img src="images/fullimage3.jpg" alt="Mirror Edge"></div>
		</div>
		<div class="dragable-search-area" id="dragable-search-area">
			<div id="search-draggable" class="search-draggable">
			    <div class="search-header">
			    	<div class="search-items" id="buy">Buy</div>
			    	<div class="search-items" id="rent">Rent</div>
			    	<div class="search-items" id="furniture">Furniture</div>
			    	<div class="search-items" id="education">Education Guide</div>
			    	<div class="drag-icon"></div>
			    </div>
			    <div class="search-field-box active" id="buy">
			    	<div class="search-field-drop">
			    		<?php echo form_open("adv_search_query"); ?>
			    		<div class="search-drop-area">
			    			<span class="text">City : <span>All</span><input type="hidden" name="city" value="All"></span><span class="search-field-arrow"></span>
			    		</div>
			    		<div class="search-drop scroll">
			    			<div class="drop-item" item-value="All">All</div>
							<?php if(isset($property_city)) { ?>
								<?php if(!empty($property_city)) { ?>
									<?php foreach ($property_city as $key) { ?>
										<div class="drop-item" item-value="<?php echo $key->name?>"><?php echo $key->name?></div>
									<?php } ?>
								<?php } ?>
							<?php } ?>
			    		</div>
			    	</div>
			    	<div class="search-field-drop">
			    		<div class="search-drop-area">
			    			<span class="text">Type : <span>All</span><input type="hidden" name="property_type" value="All"></span><span class="search-field-arrow"></span>
			    		</div>
			    		<div class="search-drop">
			    			<div class="drop-item" item-value="All">All</div>
                            <?php if(isset($property_type)) { ?>
								<?php if(!empty($property_type)) { ?>
									<?php foreach ($property_type as $key) { ?>
										<div class="drop-item" item-value="<?php echo $key->name?>"><?php echo $key->name?></div>
									<?php } ?>
								<?php } ?>
							<?php } ?>
	                    </div>
			    	</div>
			    	<div class="search-field-drop">
			    		<div class="search-drop-area">
			    			<span class="text">Price</span><span class="search-field-arrow"></span>
			    		</div>
			    		<div class="search-drop">
			    			<input type="number" name="input_min" min="<?php echo round($price[0]->min) ?>" value="<?php echo round($price[0]->min) ?>"> ~ <input type="number" name="input_max" max="<?php echo round($price[0]->max) ?>" value="<?php echo round($price[0]->max) ?>">
	                    </div>
			    	</div>
			    	<div class="search-field-drop">
			    		<div class="search-drop-area">
			    			<span class="text">Bedrooms : <span>All</span><input type="hidden" name="bedroom_min" value="All"></span></span><span class="search-field-arrow"></span>
			    		</div>
			    		<div class="search-drop">
			    			<div class="drop-item" item-value="All">All</div>
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
			    	<div class="search-field-drop">
			    		<div class="search-drop-area">
			    			<span class="text">Bathrooms : <span>All</span><input type="hidden" name="bathroom_min" value="All"></span><span class="search-field-arrow"></span>
			    		</div>
			    		<div class="search-drop">
			    			<div class="drop-item" item-value="All">All</div>
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
			    	<input type="hidden" name="type" value="property">
			    	<input type="hidden" name="property_category" value="Residential property for Sale">
			    	<input type="hidden" name="bedroom_max" value="All">
			    	<input type="hidden" name="bathroom_max" value="All">
			    	<input type="hidden" name="user_type" value="All">
			    	<input type="hidden" name="community" value="All">
			    	<input type="hidden" name="furniture_type" value="All">
			    	<input type="hidden" name="min_sq" value="All">
			    	<input type="hidden" name="max_sq" value="All">
			    	<input type="hidden" name="education_gender" value="All">
			    	<input type="hidden" name="education_community" value="All">
			    	<input type="hidden" name="title" value="">
			    	<input type="hidden" name="education_type" value="All">
			    	<input class="search-button" type="submit" value="Search">
			    	<a class="adv-search-button" href="<?php echo site_url('adv_search')?>">Advanced Search</a>
			    	<?php echo form_close(); ?>
			    </div>
			    <div class="search-field-box" id="rent">
			    	<div class="search-field-drop">
			    		<?php echo form_open("adv_search_query"); ?>
			    		<div class="search-drop-area">
			    			<span class="text">City : <span>All</span><input type="hidden" name="city" value="All"></span><span class="search-field-arrow"></span>
			    		</div>
			    		<div class="search-drop scroll">
							<div class="drop-item" item-value="All">All</div>
							<?php if(isset($property_city)) { ?>
								<?php if(!empty($property_city)) { ?>
									<?php foreach ($property_city as $key) { ?>
										<div class="drop-item" item-value="<?php echo $key->name?>"><?php echo $key->name?></div>
									<?php } ?>
								<?php } ?>
							<?php } ?>
			    		</div>
			    	</div>
			    	<div class="search-field-drop">
			    		<div class="search-drop-area">
			    			<span class="text">Type : <span>All</span><input type="hidden" name="property_type" value="All"></span><span class="search-field-arrow"></span>
			    		</div>
			    		<div class="search-drop">
			    			<div class="drop-item" item-value="All">All</div>
                            <?php if(isset($property_type)) { ?>
								<?php if(!empty($property_type)) { ?>
									<?php foreach ($property_type as $key) { ?>
										<div class="drop-item" item-value="<?php echo $key->name?>"><?php echo $key->name?></div>
									<?php } ?>
								<?php } ?>
							<?php } ?>
	                    </div>
			    	</div>
			    	<div class="search-field-drop">
			    		<div class="search-drop-area">
			    			<span class="text">Price</span><span class="search-field-arrow"></span>
			    		</div>
			    		<div class="search-drop">
			    			<input type="number" name="input_min" min="<?php echo round($price[0]->min) ?>" value="<?php echo round($price[0]->min) ?>"> ~ <input type="number" name="input_max" max="<?php echo round($price[0]->max) ?>" value="<?php echo round($price[0]->max) ?>">
	                    </div>
			    	</div>
			    	<div class="search-field-drop">
			    		<div class="search-drop-area">
			    			<span class="text">Bedrooms : <span>All</span><input type="hidden" name="bedroom_min" value="All"></span></span><span class="search-field-arrow"></span>
			    		</div>
			    		<div class="search-drop">
			    			<div class="drop-item" item-value="All">All</div>
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
			    	<div class="search-field-drop">
			    		<div class="search-drop-area">
			    			<span class="text">Bathrooms : <span>All</span><input type="hidden" name="bathroom_min" value="All"></span><span class="search-field-arrow"></span>
			    		</div>
			    		<div class="search-drop">
			    			<div class="drop-item" item-value="All">All</div>
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
			    	<input type="hidden" name="type" value="property">
			    	<input type="hidden" name="property_category" value="Residential property for Rent">
			    	<input type="hidden" name="bedroom_max" value="All">
			    	<input type="hidden" name="bathroom_max" value="All">
			    	<input type="hidden" name="user_type" value="All">
			    	<input type="hidden" name="community" value="All">
			    	<input type="hidden" name="furniture_type" value="All">
			    	<input type="hidden" name="min_sq" value="All">
			    	<input type="hidden" name="max_sq" value="All">
			    	<input type="hidden" name="education_gender" value="All">
			    	<input type="hidden" name="education_community" value="All">
			    	<input type="hidden" name="title" value="">
			    	<input type="hidden" name="education_type" value="All">
			    	<input class="search-button" type="submit" value="Search">
			    	<a class="adv-search-button" href="<?php echo site_url('adv_search')?>">Advanced Search</a>
			    	<?php echo form_close(); ?>
			    </div>
			    <div class="search-field-box" id="furniture">
			    	<?php echo form_open("adv_search_query"); ?>
			    	<div class="search-field-drop">
			    		<div class="search-drop-area">
			    			<span class="text">Type : <span>All</span><input type="hidden" name="furniture_type" value="All"></span><span class="search-field-arrow"></span>
			    		</div>
			    		<div class="search-drop">
                            <div class="drop-item" item-value="All">All</div>
                            <?php if(isset($furniture_type)) { ?>
								<?php if(!empty($furniture_type)) { ?>
									<?php foreach ($furniture_type as $key) { ?>
										<div class="drop-item" item-value="<?php echo $key->name?>"><?php echo $key->name?></div>
									<?php } ?>
								<?php } ?>
							<?php } ?>
						</div>
			    	</div>
			    	<div class="search-field-drop">
			    		<div class="search-drop-area">
			    			<span class="text">Price</span><span class="search-field-arrow"></span>
			    		</div>
			    		<div class="search-drop">
			    			<input type="number" name="input_min" min="<?php echo round($price[0]->min) ?>" value="<?php echo round($price[0]->min) ?>"> ~ <input type="number" name="input_max" max="<?php echo round($price[0]->max) ?>" value="<?php echo round($price[0]->max) ?>">
	                    </div>
			    	</div>
			    	<input type="hidden" name="type" value="furniture">
			    	<input type="hidden" name="title" value="">
			    	<input type="hidden" name="property_category" value="All">
			    	<input type="hidden" name="property_type" value="All">
			    	<input type="hidden" name="bedroom_min" value="All">
			    	<input type="hidden" name="bedroom_max" value="All">
			    	<input type="hidden" name="bathroom_min" value="All">
			    	<input type="hidden" name="bathroom_max" value="All">
			    	<input type="hidden" name="city" value="All">
			    	<input type="hidden" name="community" value="All">
			    	<input type="hidden" name="education_gender" value="All">
			    	<input type="hidden" name="education_community" value="All">
			    	<input type="hidden" name="min_sq" value="All">
			    	<input type="hidden" name="max_sq" value="All">
			    	<input type="hidden" name="education_type" value="All">
			    	<input class="search-button" type="submit" value="Search">
			    	<a class="adv-search-button" href="<?php echo site_url('adv_search')?>">Advanced Search</a>
			    	<?php echo form_close(); ?>
			    </div>
			    <div class="search-field-box" id="education">
			    	<?php echo form_open("adv_search_query"); ?>
			    	<div class="search-field-drop">
		    			<div class="search-drop-area">
		    				<span class="text">Type : <span>All</span><input type="hidden" name="education_type" value="All"></span><span class="search-field-arrow"></span>
		    			</div>
		    			<div class="search-drop">
			    			<div class="drop-item" item-value="All">All</div>
                            <?php if(isset($education_type)) { ?>
								<?php if(!empty($education_type)) { ?>
									<?php foreach ($education_type as $key) { ?>
										<div class="drop-item" item-value="<?php echo $key->name?>"><?php echo $key->name?></div>
									<?php } ?>
								<?php } ?>
							<?php } ?>
						</div>
			    	</div>
			    	<div class="search-field-drop">
			    		<div class="search-drop-area">
			    			<span class="text">Comunity : <span>All</span><input type="hidden" name="education_community" value="All"></span><span class="search-field-arrow"></span>
			    		</div>
			    		<div class="search-drop">
			    			<div class="drop-item" item-value="All">All</div>
							<?php foreach ($education_community as $comm) { ?>
								<div class="drop-item" item-value="<?php echo $comm->post_education_community?>"><?php echo $comm->post_education_community ?></div>
							<?php } ?>
			    		</div>
			    	</div>
			    	<div class="search-field-drop">
			    		<div class="search-drop-area">
			    			<span class="text">Gender : <span>All</span><input type="hidden" name="education_gender" value="All"></span><span class="search-field-arrow"></span>
			    		</div>
			    		<div class="search-drop">
							<div class="drop-item" item-value="All">All</div>
                            <div class="drop-item" item-value="Male">Male</div>
                            <div class="drop-item" item-value="Female">Female</div>
                            <div class="drop-item" item-value="Other">Other</div>
						</div>
			    	</div>
			    	<input type="hidden" name="type" value="education">
			    	<input type="hidden" name="title" value="">
			    	<input type="hidden" name="property_category" value="All">
			    	<input type="hidden" name="property_type" value="All">
			    	<input type="hidden" name="bedroom_min" value="All">
			    	<input type="hidden" name="bedroom_max" value="All">
			    	<input type="hidden" name="bathroom_min" value="All">
			    	<input type="hidden" name="bathroom_max" value="All">
			    	<input type="hidden" name="input_min" value="<?php echo round($price[0]->min) ?>">
			    	<input type="hidden" name="input_max" value="<?php echo round($price[0]->max) ?>">
			    	<input type="hidden" name="city" value="All">
			    	<input type="hidden" name="community" value="All">
			    	<input type="hidden" name="min_sq" value="All">
			    	<input type="hidden" name="max_sq" value="All">
			    	<input type="hidden" name="furniture_type" value="All">
			    	<input class="search-button" type="submit" value="Search">
			    	<a class="adv-search-button" href="<?php echo site_url('adv_search')?>">Advanced Search</a>
			    	<?php echo form_close(); ?>
			    </div>
			</div>
		</div>
	</div>
	<div class="home-main clearfix">
		<div class="container">
			<div class="left-main">
				<div class="title">
					<h6>Featured</h6>
				</div>
				<div class="listing">
					<div class="featured-listing clearfix">
						<div class="featured-listing-left">
							<?php foreach ($data_two_property_feature as $key) { ?>
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
										<?php if($key->post_featured == 1){ ?><div class="featured-listing-text">Featured Listing</div> <?php } ?>
									</div>
								</a>
								<div class="featured-listing-name"><a href="<?php echo site_url('property/'.$key->post_slug);?>"><?php echo $key->post_title;?></a></div>
								<div class="featured-listing-feature">
									<li><span class="floor"><?php echo ordinalize($key->post_property_floor) ?></span><span class="text">Floor</span></li>
									<li><span class="floor"><?php echo $key->post_property_bedrooms;?></span><span class="img-bed"></span></li>
									<li><span class="floor"><?php echo $key->post_property_bathroom;?></span><span class="img-bath"></span></li>
									<li><span class="floor"><?php echo round($key->post_property_size);?></span><span class="text">m<sup>2</sup></span></li>
								</div>
								<?php if($key->post_property_catergory == 'Residential property for Sale' || $key->post_property_catergory == 'Commercial property for Sale') { ?>
								<div class="price-desc"><p><span class="blue bold big"><?php echo round($key->post_price);?></span> <span class="black bold big">QR</span> <span class="for">For Sale</span> <span class="blue small"><?php echo ($key->post_price/$key->post_property_size);?></span> <span class="bold small">Per</span> <span class="yellow bold small">m<sup>2</sup></span></p></div>
								<?php } else { ?>
								<div class="price-desc"><p><span class="for">For Rent</span> <span class="blue bold small"><?php echo round($key->post_price);?></span> <span class="blue bold small">QR</span> <span class="black bold small">Per</span> <span class="yellow  bold small">Month</span></p></div>
								<?php } ?>
								<div class="location"><?php echo $key->post_property_area_reference.' , '.$key->post_property_area_city;?></div>
							</div>
							<?php } ?>
						</div>
						<div class="featured-listing-center">
							<?php foreach ($data_center_property_feature as $key) { ?>
							<div class="item">
								<a href="<?php echo site_url('property/'.$key->post_slug);?>">
									<div class="thumb">
										<?php if(!empty($image[$key->ID])) {
												$image_url=$image[$key->ID]; 
												$info = pathinfo($image_url);
												$file_name =  basename($image_url,'.'.$info['extension']);
												$file_url = 'upload/'.$file_name."_538.".$info['extension'];
											}else{
												$file_url = 'images/images/dummy-feature-big.png';
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
								<div class="featured-listing-name"><a href="<?php echo site_url('property/'.$key->post_slug);?>"><?php echo $key->post_title;?></a></div>
								<div class="featured-listing-feature">
									<li><span class="floor"><?php echo ordinalize($key->post_property_floor) ?></span><span class="text">Floor</span></li>
									<li><span class="floor"><?php echo $key->post_property_bedrooms;?></span><span class="img-bed"></span></li>
									<li><span class="floor"><?php echo $key->post_property_bathroom;?></span><span class="img-bath"></span></li>
									<li><span class="floor"><?php echo round($key->post_property_size);?></span><span class="text">m<sup>2</sup></span></li>
								</div>
								<?php if($key->post_property_catergory == 'Residential property for Sale' || $key->post_property_catergory == 'Commercial property for Sale') { ?>
								<div class="price-desc"><p><span class="blue bold big"><?php echo round($key->post_price);?></span> <span class="black bold big">QR</span> <span class="for">For Sale</span> <span class="blue small"><?php echo round($key->post_price/$key->post_property_size);?></span> <span class="bold small">Per</span> <span class="yellow bold small">m<sup>2</sup></span></p></div>
								<?php } else { ?>
								<div class="price-desc"><p><span class="for">For Rent</span> <span class="blue bold small"><?php echo round($key->post_price);?></span> <span class="blue bold small">QR</span> <span class="black bold small">Per</span> <span class="yellow  bold small">Month</span></p></div>
								<?php } ?>
								<div class="location"><?php echo $key->post_property_area_reference.' , '.$key->post_property_area_city;?></div>
								<div class="desc"><?php echo $key->post_description;?></div>
							</div>
							<?php } ?>
						</div>
					</div>
					<div class="big-ads-area">
						<div class="test"></div>
					</div>
					<div class="featured-project-area">
						<div class="title">
							<h6>Popular Spots</h6>
							<a href="#">View all</a>
						</div>
						<div class="featured-project-list clearfix">
							<?php foreach ($data_three_property_feature as $key) { ?>
								<div class="item">
									<?php echo form_open("search_pro"); ?>
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
											<?php if($key->post_featured == 1){ ?><div class="featured-listing-text">Featured Listing</div> <?php } ?>
										</div>
									</a>
									<input type="hidden" name="page" value="property">
									<input type="hidden" name="title" value="">
									<input type="hidden" name="property_category" value="All">
									<input type="hidden" name="property_type" value="All">
									<input type="hidden" name="user_type" value="All">
									<input type="hidden" name="bedroom_min" value="All">
									<input type="hidden" name="bedroom_max" value="All">
									<input type="hidden" name="bathroom_min" value="All">
									<input type="hidden" name="bathroom_max" value="All">
									<input type="hidden" name="input_min" value="<?php echo round($price[0]->min) ?>">
									<input type="hidden" name="input_max" value="<?php echo round($price[0]->max) ?>">
									<input type="hidden" name="city" value="All">
									<input type="hidden" name="community" value="<?php echo $key->post_property_area_community;?>">
									<input type="hidden" name="min_sq" value="All">
									<input type="hidden" name="max_sq" value="All">
									<div class="featured-listing-name"><input type="submit" value="<?php echo $key->post_property_area_community;?>"></div>
									<?php echo form_close(); ?>
								</div>
							<?php } ?>
						</div>
					</div>
					<div class="big-ads-area">
						<div class="test"></div>
					</div>
					<div class="featured-furniture-area">
						<div class="title">
							<h6><a href="<?php echo site_url('furniture')?>">Furniture</a></h6>
							<a href="<?php echo site_url('furniture') ?>">View all</a>
						</div>
						<div class="featured-furniture-list clearfix">
							<?php foreach ($data_three_furniture_feature as $key) { ?>
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
			<div class="right-main">
				<div class="title">
					<h6><a href="<?php echo site_url('education') ?>">Education Guid</a></h6>
				</div>
				<div class="side-container">
					<div class="education-list">
						<?php $i=1;?>
						<?php foreach ($data_three_education_feature_1 as $key) { ?>
							<a href="<?php echo site_url('education/'.$key->post_slug);?>">
								<div class="education-list-item <?php echo $i==1 ? 'no-padd-top':'';?> clearfix">
									<div class="thumb-area">
										<?php if(!empty($image[$key->ID])) {
												$image_url=$image[$key->ID]; 
												$info = pathinfo($image_url);
												$file_name =  basename($image_url,'.'.$info['extension']);
												$file_url = 'upload/'.$file_name."_100.".$info['extension'];
											}else{
												$file_url = 'images/edu-logo.png';
											}
											$attached_image = array(
										          'src' => $file_url ,
										          'alt' => 'fsbo',
										          'title' => 'fsbo',
											);
										?>
										<?php echo img($attached_image);?>
									</div>
									<div class="text-area">
										<div class="institute">Name Of Institute</div>
										<div class="name-institute"><?php echo $key->post_title; ?></div>
										<div class="distict">Type:</div>
										<div class="name-distict"><?php echo $key->post_education_type;?></div>
										<div class="address">Community:</div>
										<div class="name-address"><?php echo $key->post_education_community;?></div>
									</div>
								</div>
							</a>
						<?php $i++;} ?>
					</div>
					<div class="side-ads-area">
						<div class="test"></div>
					</div>
					<div class="education-list">
						<?php $i=1;?>
						<?php foreach ($data_three_education_feature_2 as $key) { ?>
							<a href="<?php echo site_url('education/'.$key->post_slug);?>">
								<div class="education-list-item <?php echo $i==1 ? 'border-top':'';?> clearfix">
									<div class="thumb-area">
										<?php if(!empty($image[$key->ID])) {
												$image_url=$image[$key->ID]; 
												$info = pathinfo($image_url);
												$file_name =  basename($image_url,'.'.$info['extension']);
												$file_url = 'upload/'.$file_name."_100.".$info['extension'];
											}else{
												$file_url = 'images/edu-logo.png';
											}
											$attached_image = array(
										          'src' => $file_url ,
										          'alt' => 'fsbo',
										          'title' => 'fsbo',
											);
										?>
										<?php echo img($attached_image);?>
									</div>
									<div class="text-area">
										<div class="institute">Name Of Institute</div>
										<div class="name-institute"><?php echo $key->post_title; ?></div>
										<div class="distict">Type:</div>
										<div class="name-distict"><?php echo $key->post_education_type;?></div>
										<div class="address">Community:</div>
										<div class="name-address"><?php echo $key->post_education_community;?></div>
									</div>
								</div>
							</a>
						<?php $i++;} ?>
					</div>
					<div class="side-ads-area">
						<div class="test"></div>
					</div>
					<div class="education-list">
						<?php $i=1;?>
						<?php foreach ($data_three_education_feature_3 as $key) { ?>
							<a href="<?php echo site_url('education/'.$key->post_slug);?>">
								<div class="education-list-item <?php echo $i==1 ? 'border-top':'';?> <?php echo $i==3 ? 'no-border-bottom':'';?> clearfix">
									<div class="thumb-area">
										<?php if(!empty($image[$key->ID])) {
												$image_url=$image[$key->ID]; 
												$info = pathinfo($image_url);
												$file_name =  basename($image_url,'.'.$info['extension']);
												$file_url = 'upload/'.$file_name."_100.".$info['extension'];
											}else{
												$file_url = 'images/edu-logo.png';
											}
											$attached_image = array(
										          'src' => $file_url ,
										          'alt' => 'fsbo',
										          'title' => 'fsbo',
											);
										?>
										<?php echo img($attached_image);?>
									</div>
									<div class="text-area">
										<div class="institute">Name Of Institute</div>
										<div class="name-institute"><?php echo $key->post_title; ?></div>
										<div class="distict">Type:</div>
										<div class="name-distict"><?php echo $key->post_education_type;?></div>
										<div class="address">Community:</div>
										<div class="name-address"><?php echo $key->post_education_community;?></div>
									</div>
								</div>
							</a>
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
            return "{$num}{$suff}";
        }
        return "{$num}{$suff}";
    }
    ?>