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
			    	<div class="search-field-drop"><span class="text">City</span><span class="search-field-arrow"></span></div>
			    	<div class="search-field-drop"><span class="text">Type</span><span class="search-field-arrow"></span></div>
			    	<div class="search-field-drop"><span class="text">Price</span><span class="search-field-arrow"></span></div>
			    	<div class="search-field-drop"><samp class="text">Bedrooms</samp><span class="search-field-arrow"></span></div>
			    	<div class="search-field-drop"><span class="text">Bathrooms</span><span class="search-field-arrow"></span></div>
			    	<a class="search-button" href="#">Search</a>
			    	<a class="adv-search-button" href="#">Advanced Search</a>
			    </div>
			    <div class="search-field-box" id="rent">
			    	<div class="search-field-drop"><span class="text">City</span><span class="search-field-arrow"></span></div>
			    	<div class="search-field-drop"><span class="text">Type</span><span class="search-field-arrow"></span></div>
			    	<div class="search-field-drop"><span class="text">Price</span><span class="search-field-arrow"></span></div>
			    	<div class="search-field-drop"><samp class="text">Bedrooms</samp><span class="search-field-arrow"></span></div>
			    	<div class="search-field-drop"><span class="text">Bathrooms</span><span class="search-field-arrow"></span></div>
			    	<a class="search-button" href="#">Search</a>
			    	<a class="adv-search-button" href="#">Advanced Search</a>
			    </div>
			    <div class="search-field-box" id="furniture">
			    	<div class="search-field-drop"><span class="text">Type</span><span class="search-field-arrow"></span></div>
			    	<div class="search-field-drop"><span class="text">Price</span><span class="search-field-arrow"></span></div>
			    	<a class="search-button" href="#">Search</a>
			    	<a class="adv-search-button" href="#">Advanced Search</a>
			    </div>
			    <div class="search-field-box" id="education">
			    	<div class="search-field-drop"><span class="text">Type</span><span class="search-field-arrow"></span></div>
			    	<div class="search-field-drop"><span class="text">Comunity</span><span class="search-field-arrow"></span></div>
			    	<div class="search-field-drop"><samp class="text">Gender</samp><span class="search-field-arrow"></span></div>
			    	<a class="search-button" href="#">Search</a>
			    	<a class="adv-search-button" href="#">Advanced Search</a>
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
								<?php if($key->post_property_catergory == 'Residential property for Sell' || $key->post_property_catergory == 'Commercial property for Sell') { ?>
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
								<?php if($key->post_property_catergory == 'Residential property for Sell' || $key->post_property_catergory == 'Commercial property for Sell') { ?>
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