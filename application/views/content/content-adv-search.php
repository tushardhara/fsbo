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
			<div class="property-listing-settings">
				<div class="drop-down-setting clearfix">
					<?php echo form_open("adv_search_query"); ?>
					<input class="big-search" type="text" name="title" value="<?php echo empty($query_array['title']) ? '' : $query_array['title'] ?>" placeholder="Search">
					<div class="left">
						<div class="setting-choose-big no-bottom">
							<span>Type : <span class="text"><?php echo empty($query_array['type']) ? 'All' : $query_array['type'] ?></span><input type="hidden" name="type" value="<?php echo empty($query_array['type']) ? 'All' : $query_array['type'] ?>"></span><span class="arrow"></span>
							<div class="drop-category">
								<div class="drop-item" item-value="All">All</div>
								<div class="drop-item" item-value="property">property</div>
	                            <div class="drop-item" item-value="furniture">furniture</div>
	                            <div class="drop-item" item-value="education">education</div>
							</div>
						</div>
						<div class="setting-choose-big no-bottom">
							<span>Property Category : <span class="text"><?php echo empty($query_array['property_category']) ? 'All' : $query_array['property_category'] ?></span><input type="hidden" name="property_category" value="<?php echo empty($query_array['property_category']) ? 'All' : $query_array['property_category'] ?>"></span><span class="arrow"></span>
							<div class="drop-category">
								<div class="drop-item" item-value="All">All</div>
								<?php if(isset($property_category)) { ?>
									<?php if(!empty($property_category)) { ?>
										<?php foreach ($property_category as $key) { ?>
											<div class="drop-item" item-value="<?php echo $key->name?>"><?php echo $key->name?></div>
										<?php } ?>
									<?php } ?>
								<?php } ?>
							</div>
						</div>
						<div class="setting-choose-big no-bottom">
							<span>Property Type: <span class="text"><?php echo empty($query_array['property_type']) ? 'All' : $query_array['property_type'] ?></span> <input type="hidden" name="property_type" value="<?php echo empty($query_array['property_type']) ? 'All' : $query_array['property_type'] ?>"></span><span class="arrow"></span>
							<div class="drop-category">
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
						<div class="setting-choose-big no-bottom">
							<span>Furniture Type: <span class="text"><?php echo empty($query_array['furniture_type']) ? 'All' : $query_array['furniture_type'] ?></span> <input type="hidden" name="furniture_type" value="<?php echo empty($query_array['furniture_type']) ? 'All' : $query_array['furniture_type'] ?>"></span><span class="arrow"></span>
							<div class="drop-category">
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
						<div class="setting-choose-big">
							<span>Education Type : <span class="text"><?php echo empty($query_array['education_type']) ? 'All' : $query_array['education_type'] ?></span><input type="hidden" name="education_type" value="<?php echo empty($query_array['education_type']) ? 'All' : $query_array['education_type'] ?>"></span><span class="arrow"></span>
							<div class="drop-category">
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
						<div class="setting-choose-small no-top">
							<span>Min. Bedroom : <span class="text"><?php echo empty($query_array['bedroom_min']) ? 'All' : $query_array['bedroom_min'] ?></span> <input type="hidden" name="bedroom_min" value="<?php echo empty($query_array['bedroom_min']) ? 'All' : $query_array['bedroom_min'] ?>"></span><span class="arrow"></span>
							<div class="drop-category">
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
						<div class="gap">-</div> 
						<div class="setting-choose-small no-top">
							<span>Max. Bedroom : <span class="text"><?php echo empty($query_array['bedroom_max']) ? 'All' : $query_array['bedroom_max'] ?></span> <input type="hidden" name="bedroom_max" value="<?php echo empty($query_array['bedroom_max']) ? 'All' : $query_array['bedroom_max'] ?>"></span><span class="arrow"></span>
							<div class="drop-category">
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
						<div class="setting-choose-small no-top extra-margin">
							<span>Min. Bathroom : <span class="text"><?php echo empty($query_array['bathroom_min']) ? 'All' : $query_array['bathroom_min'] ?></span> <input type="hidden" name="bathroom_min" value="<?php echo empty($query_array['bathroom_min']) ? 'All' : $query_array['bathroom_min'] ?>"></span><span class="arrow"></span>
							<div class="drop-category">
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
						<div class="gap">-</div> 
						<div class="setting-choose-small no-top extra-margin">
							<span>Max. Bathroom : <span class="text"><?php echo empty($query_array['bathroom_max']) ? 'All' : $query_array['bathroom_max'] ?></span> <input type="hidden" name="bathroom_max" value="<?php echo empty($query_array['bathroom_max']) ? 'All' : $query_array['bathroom_max'] ?>"></span><span class="arrow"></span>
							<div class="drop-category">
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
						<div id="slider-range"></div>
						<span id="min"></span>
						<input id="input_min" type="hidden" name="input_min" value="">
						<span id="max"></span>
						<input id="input_max" type="hidden" name="input_max" value="">
					</div>
					<div class="right">
						<div class="setting-choose-big no-bottom">
							<span>City : <span class="text"><?php echo empty($query_array['city']) ? 'All' : $query_array['city'] ?></span><input type="hidden" name="city" value="<?php echo empty($query_array['city']) ? 'All' : $query_array['city'] ?>"></span><span class="arrow"></span>
							<div class="drop-category">
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

						<div class="setting-choose-big no-bottom">
							<span>Community : <span class="text"><?php echo empty($query_array['community']) ? 'All' : $query_array['community'] ?></span><input type="hidden" name="community" value="<?php echo empty($query_array['community']) ? 'All' : $query_array['community'] ?>"></span><span class="arrow"></span>
							<div class="drop-category">
								<div class="drop-item" item-value="All">All</div>
								<?php foreach ($community as $comm) { ?>
									<div class="drop-item" item-value="<?php echo $comm->post_property_area_community?>"><?php echo $comm->post_property_area_community ?></div>
								<?php } ?>
							</div>
						</div>
						<div class="setting-choose-big no-bottom">
							<span>Education Community : <span class="text"><?php echo empty($query_array['education_community']) ? 'All' : $query_array['education_community'] ?></span><input type="hidden" name="education_community" value="<?php echo empty($query_array['education_community']) ? 'All' : $query_array['education_community'] ?>"></span><span class="arrow"></span>
							<div class="drop-category">
								<div class="drop-item" item-value="All">All</div>
								<?php foreach ($education_community as $comm) { ?>
									<div class="drop-item" item-value="<?php echo $comm->post_education_community?>"><?php echo $comm->post_education_community ?></div>
								<?php } ?>
							</div>
						</div>
						<div class="setting-choose-big no-bottom">
							<span>Gender: <span class="text"><?php echo empty($query_array['education_gender']) ? 'All' : $query_array['education_gender'] ?></span> <input type="hidden" name="education_gender" value="<?php echo empty($query_array['education_gender']) ? 'All' : $query_array['education_gender'] ?>"></span><span class="arrow"></span>
							<div class="drop-category">
								<div class="drop-item" item-value="All">All</div>
	                            <div class="drop-item" item-value="Male">Male</div>
	                            <div class="drop-item" item-value="Female">Female</div>
	                            <div class="drop-item" item-value="Other">Other</div>
							</div>
						</div>
						<div class="setting-choose-big no-top">
							<span>Broker Type: <span class="text"><?php echo empty($query_array['user_type']) ? 'All' : $query_array['user_type'] ?></span> <input type="hidden" name="user_type" value="<?php echo empty($query_array['user_type']) ? 'All' : $query_array['user_type'] ?>"></span><span class="arrow"></span>
							<div class="drop-category">
								<div class="drop-item" item-value="All">All</div>
	                            <div class="drop-item" item-value="User">User</div>
	                            <div class="drop-item" item-value="Broker">Broker</div>
							</div>
						</div>
						<div class="setting-choose-small no-top extra-margin">
							<span>Min. Sq.M. : <span class="text"><?php echo empty($query_array['min_sq']) ? 'All' : $query_array['min_sq'] ?></span><input type="hidden" name="min_sq" value="<?php echo empty($query_array['min_sq']) ? 'All' : $query_array['min_sq'] ?>"></span><span class="arrow"></span>
							<div class="drop-category">
								<div class="drop-item" item-value="All">All</div>
	                            <div class="drop-item" item-value="50">50</div>
	                            <div class="drop-item" item-value="100">100</div>
	                            <div class="drop-item" item-value="150">150</div>
	                            <div class="drop-item" item-value="200">200</div>
	                            <div class="drop-item" item-value="250">250</div>
	                            <div class="drop-item" item-value="300">300</div>
	                            <div class="drop-item" item-value="350">350</div>
	                            <div class="drop-item" item-value="400">400</div>
	                            <div class="drop-item" item-value="450">450</div>
	                            <div class="drop-item" item-value="500">500</div>
	                            <div class="drop-item" item-value="550">550</div>
	                            <div class="drop-item" item-value="600">600</div>
	                            <div class="drop-item" item-value="650">650</div>
	                            <div class="drop-item" item-value="700">700</div>
	                            <div class="drop-item" item-value="750">750</div>
	                            <div class="drop-item" item-value="800">800</div>
	                            <div class="drop-item" item-value="850">850</div>
	                            <div class="drop-item" item-value="900">900</div>
	                            <div class="drop-item" item-value="950">950</div>
	                            <div class="drop-item" item-value="1000">1000</div>
							</div>
						</div> 
						<div class="gap">-</div> 
						<div class="setting-choose-small no-top extra-margin">
							<span>Max. Sq.M : <span class="text"><?php echo empty($query_array['max_sq']) ? 'All' : $query_array['max_sq'] ?></span><input type="hidden" name="max_sq" value="<?php echo empty($query_array['max_sq']) ? 'All' : $query_array['max_sq'] ?>"></span><span class="arrow"></span>
							<div class="drop-category">
								<div class="drop-item" item-value="All">All</div>
	                            <div class="drop-item" item-value="50">50</div>
	                            <div class="drop-item" item-value="100">100</div>
	                            <div class="drop-item" item-value="150">150</div>
	                            <div class="drop-item" item-value="200">200</div>
	                            <div class="drop-item" item-value="250">250</div>
	                            <div class="drop-item" item-value="300">300</div>
	                            <div class="drop-item" item-value="350">350</div>
	                            <div class="drop-item" item-value="400">400</div>
	                            <div class="drop-item" item-value="450">450</div>
	                            <div class="drop-item" item-value="500">500</div>
	                            <div class="drop-item" item-value="550">550</div>
	                            <div class="drop-item" item-value="600">600</div>
	                            <div class="drop-item" item-value="650">650</div>
	                            <div class="drop-item" item-value="700">700</div>
	                            <div class="drop-item" item-value="750">750</div>
	                            <div class="drop-item" item-value="800">800</div>
	                            <div class="drop-item" item-value="850">850</div>
	                            <div class="drop-item" item-value="900">900</div>
	                            <div class="drop-item" item-value="950">950</div>
	                            <div class="drop-item" item-value="1000">1000</div>
							</div>
						</div>
						<input type="submit" class="property_contact" value="Search">
					</div>
					<?php echo form_close(); ?>
				</div>
			</div>
			<div class="agent-detail">
				<div class="agent-filter clearfix">
					<div class="sort">
						<span class="text">Sort</span>
						<div class="drop">
							<span class="text"><?php echo empty($query_array['sort']) ? 'Relevance' : $query_array['sort'] ?></span><span class="arrow"></span>
							<input type="hidden" name="sort" value="<?php echo empty($query_array['sort']) ? 'Relevance' : $query_array['sort'] ?>">
						</div>
						<div class="filter-drop re change">
							<div class="items" item-value="Relevance"><a>Relevance</a></div>
							<div class="items" item-value="Price : Low to High"><a>Price : Low to High</a></div>
							<div class="items" item-value="Price : High to Low"><a>Price : High to Low</a></div>
							<div class="items" item-value="Date : Latest First"><a>Date : Latest First</a></div>
						</div>
					</div>
				</div>
				<div class="agent-property-list">
					<?php if(isset($records)){ ?>
						<?php if(!empty($records)){ ?>
							<?php foreach ($records as $key) { ?>
								<?php foreach ($this->post->get_user_data($key->ID) as $user_key) {
										$email = $user_key->user_email;
										$user_login = $user_key->user_login;
										$user_title = $user_key->user_title;
										$user_type = $user_key->user_type;
										$user_slug = $user_key->user_slug;
										}
									?>
								<div class="item">
									<div class="left-side">
										<?php if($key->post_type == 'property') { ?>
										<a href="<?php echo site_url('property/'.$key->post_slug);?>">
										<?php } else if($key->post_type == 'furniture') {?>
										<a href="<?php echo site_url('furniture/'.$key->post_slug);?>">
										<?php } else if($key->post_type == 'education') { ?>
										<a href="<?php echo site_url('education/'.$key->post_slug);?>">
										<?php } ?>
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
											          'title' => $key->post_title,
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
										<?php if($key->post_property_catergory == 'Residential property for Sale' || $key->post_property_catergory =='Commercial property for Sale' ) { ?>
										<div class="price-desc"><p><span class="blue bold big"><?php echo round($key->post_price);?></span> <span class="black bold big">QR</span> <span class="for">For Sale</span> <span class="blue small"><?php echo round($key->post_price/$key->post_property_size);?></span> <span class="bold small">Per</span> <span class="yellow bold small">m<sup>2</sup></span></p></div>
										<?php } else { ?>
										<div class="price-desc"><p><span class="for">For Rent</span> <span class="blue bold small"><?php echo round($key->post_price);?></span> <span class="blue bold small">QR</span> <span class="black bold small">Per</span> <span class="yellow  bold small">Month</span></p></div>
										<?php } ?>
										<div class="location"><?php echo $key->post_property_area_community.' , '.$key->post_property_area_city;?></div>
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
										<?php if($key->post_type == 'property') {?>
										<div class="compare-area"><div class="compare" data-id="<?php echo $key->ID?>"></div><span><a href="#" class="export" style="display:none">Compare</a></span></div>
										<?php } ?>
										<div class="clear"></div>
										<?php if($key->post_type == 'property') { ?>
										<div class="fb-like" data-href="<?php echo site_url('property/'.$key->post_slug);?>" data-layout="button" data-action="like" data-show-faces="false" data-share="false"></div>
										<div class="fb-like" data-href="<?php echo site_url('property/'.$key->post_slug);?>" data-layout="button" data-action="recommend" data-show-faces="false" data-share="false"></div>
										<?php } else if($key->post_type == 'furniture') {?>
										<div class="fb-like" data-href="<?php echo site_url('furniture/'.$key->post_slug);?>" data-layout="button" data-action="like" data-show-faces="false" data-share="false"></div>
										<div class="fb-like" data-href="<?php echo site_url('furniture/'.$key->post_slug);?>" data-layout="button" data-action="recommend" data-show-faces="false" data-share="false"></div>
										<?php } else if($key->post_type == 'education') { ?>
										<div class="fb-like" data-href="<?php echo site_url('education/'.$key->post_slug);?>" data-layout="button" data-action="like" data-show-faces="false" data-share="false"></div>
										<div class="fb-like" data-href="<?php echo site_url('education/'.$key->post_slug);?>" data-layout="button" data-action="recommend" data-show-faces="false" data-share="false"></div>
										<?php } ?>

										
									</div>
								</div>
							<?php } ?>
						<?php }else{ ?>
							<h1 class="error">No Listings Were Found</h1>
						<?php } ?>
					<?php } ?>
				</div>
				<?php if (strlen($pagination)): ?>
				<div class="pagination">
					<ul><?php echo $pagination; ?></ul>
				</div>
				<?php endif; ?>
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
    <style type="text/css">
#slider 
{
    width: 80%;
    margin-left: 1em;
}

#slider-range a {
    text-decoration: none;
    outline: none;
}

#min, #max {
    width: 50px;
    text-align: center;
    color: black;
    text-decoration: none;
    position: relative;
    top: 30px !important;
}

    </style>
 <script type="text/javascript">
    	$(document).ready(function() {
    		$("#slider-range").slider({
			    range: true,
			    min: <?php echo round($total_num_min) ?>,
			    max: <?php echo round($total_num_max) ?>,
			    step: 500,
			    values: [<?php echo empty($query_array['input_min']) ? $num_min : $query_array['input_min'] ?>, <?php echo empty($query_array['input_max']) ? $num_max : $query_array['input_max'] ?>],
			    animate: 'slow',
			    create: function() {
			        $('#min').appendTo($('#slider-range a').get(0));
			        $('#input_min').appendTo($('#slider-range a').get(0));
			        $('#max').appendTo($('#slider-range a').get(1));
			        $('#input_max').appendTo($('#slider-range a').get(1));
			    },
			    slide: function(event, ui) { $(ui.handle).find('span').html('QR' + ui.value); $(ui.handle).find('input').val(ui.value);}
			});

			// only initially needed
			$('#min').html('QR' + $('#slider-range').slider('values', 0)).position({
			    my: 'center top',
			    at: 'center bottom',
			    of: $('#slider-range a:eq(0)'),
			    offset: "0, 10"
			});
			$('#input_min').val($('#slider-range').slider('values', 0));
			$('#max').html('QR' + $('#slider-range').slider('values', 1)).position({
			    my: 'center top',
			    at: 'center bottom',
			    of: $('#slider-range a:eq(1)'),
			    offset: "0, 10"
			});
			$('#input_max').val($('#slider-range').slider('values', 1));
    	});
    </script>
     <script type="text/javascript">
  		$(document).ready(function() {
  			$('.compare').on('click',function(){
  				$(this).toggleClass('active');
  				var n = $( ".compare.active" ).length;
  				
  				if(n>=2){
  					$('.export').show();
  					var url = '';
  					$( ".compare.active" ).each(function( i ) {
  						url=url+"'"+$(this).attr('data-id')+"'"+",";
  					});
  					//console.log(url.slice(0,-1));
  					$('.export').attr('href','<?php echo site_url()?>compare/ids?id='+url.slice(0,-1));
  				}else{
  					$('.export').hide();
  				}
  				
  			});
  		});
  	</script>