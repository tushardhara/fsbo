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
					<?php echo form_open("search_pro"); ?>
					<input class="big-search" type="text" name="title" value="<?php echo empty($query_array['title']) ? '' : $query_array['title'] ?>" placeholder="Search">
					<div class="left">
						<div class="setting-choose-big no-bottom">
							<span>Property Category : <span class="text"><?php echo empty($query_array['property_category']) ? 'All' : $query_array['property_category'] ?></span><input type="hidden" name="property_category" value="<?php echo empty($query_array['property_category']) ? 'All' : $query_array['property_category'] ?>"></span><span class="arrow"></span>
							<div class="drop-category">
								<div class="drop-item" item-value="All">All</div>
								<div class="drop-item" item-value="Residential property for Sale">Residential property for Sale</div>
	                            <div class="drop-item" item-value="Residential property for Rent">Residential property for Rent</div>
	                            <div class="drop-item" item-value="Commercial property for Sale">Commercial property for Sale</div>
	                            <div class="drop-item" item-value="Commercial property for Rent">Commercial property for Rent</div>
							</div>
						</div>
						<div class="setting-choose-big">
							<span>Property Type: <span class="text"><?php echo empty($query_array['property_type']) ? 'All' : $query_array['property_type'] ?></span> <input type="hidden" name="property_type" value="<?php echo empty($query_array['property_type']) ? 'All' : $query_array['property_type'] ?>"></span><span class="arrow"></span>
							<div class="drop-category">
								<div class="drop-item" item-value="All">All</div>
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

						<div class="setting-choose-big no-bottom">
							<span>Community : <span class="text"><?php echo empty($query_array['community']) ? 'All' : $query_array['community'] ?></span><input type="hidden" name="community" value="<?php echo empty($query_array['community']) ? 'All' : $query_array['community'] ?>"></span><span class="arrow"></span>
							<div class="drop-category">
								<div class="drop-item" item-value="All">All</div>
								<?php foreach ($community as $comm) { ?>
									<div class="drop-item" item-value="<?php echo $comm->post_property_area_community?>"><?php echo $comm->post_property_area_community ?></div>
								<?php } ?>
							</div>
						</div>
						<div class="setting-choose-big">
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
				<div class="property-listing-area clearfix">
					<?php if(isset($records)){ ?>
						<?php if(!empty($records)){ ?>
							<div class="left">
								<div id="map_canvas"></div>
							</div>
							<div class="right">
								<div class="filter-settings">
									<div class="sort">
										<span class="text">Short By</span>
										<div class="drop">
											<?php if($this->uri->segment(2)=='') {?>
												<span class="text">Relevance</span><span class="arrow"></span>
											<?php } else if($this->uri->segment(2)=='0') {?>
												<?php if($this->uri->segment(3)=='ID') { ?>
													<span class="text">Relevance</span><span class="arrow"></span>
												<?php } else if($this->uri->segment(3)=='post_price'){ ?>
													<?php if($this->uri->segment(4)=='') {?>
													<span class="text">Price : Low to High</span><span class="arrow"></span>
													<?php } else if($this->uri->segment(4)=='asc') {?>
													<span class="text">Price : Low to High</span><span class="arrow"></span>
													<?php } else if($this->uri->segment(4)=='desc') {?>
													<span class="text">Price : High to Low</span><span class="arrow"></span>
													<?php } ?>
												<?php }else if($this->uri->segment(3)=='post_date'){ ?>
													<span class="text">Date : Latest First</span><span class="arrow"></span>
												<?php } ?>
											<?php } else { ?>
												<span class="text">Relevance</span><span class="arrow"></span>
											<?php } ?>
										</div>
										<?php if($this->uri->segment(2)=='') {?>
										<div class="filter-drop">
											<div class="items"><a href="<?php echo site_url("property/$query_id/ID/desc")?>">Relevance</a></div>
											<div class="items"><a href="<?php echo site_url("property/$query_id/post_price/asc")?>">Price : Low to High</a></div>
											<div class="items"><a href="<?php echo site_url("property/$query_id/post_price/desc")?>">Price : High to Low</a></div>
											<div class="items"><a href="<?php echo site_url("property/$query_id/post_date/asc")?>">Date : Latest First</a></div>
										</div>
										<?php } else if($this->uri->segment(2)=='0') {?>
											<?php if($this->uri->segment(3)=='ID') { ?>
											<div class="filter-drop">
												<div class="items"><a href="<?php echo site_url("property/$query_id/ID/desc")?>">Relevance</a></div>
												<div class="items"><a href="<?php echo site_url("property/$query_id/post_price/asc")?>">Price : Low to High</a></div>
												<div class="items"><a href="<?php echo site_url("property/$query_id/post_price/desc")?>">Price : High to Low</a></div>
												<div class="items"><a href="<?php echo site_url("property/$query_id/post_date/asc")?>">Date : Latest First</a></div>
											</div>
											<?php }else if($this->uri->segment(3)=='post_price'){ ?>
											<div class="filter-drop">
												<div class="items"><a href="<?php echo site_url("property/$query_id/ID/desc")?>">Relevance</a></div>
												<div class="items"><a href="<?php echo site_url("property/$query_id/post_price/asc")?>">Price : Low to High</a></div>
												<div class="items"><a href="<?php echo site_url("property/$query_id/post_price/desc")?>">Price : High to Low</a></div>
												<div class="items"><a href="<?php echo site_url("property/$query_id/post_date/asc")?>">Date : Latest First</a></div>
											</div>
											<?php }else if($this->uri->segment(3)=='post_date'){ ?>
											<div class="filter-drop">
												<div class="items"><a href="<?php echo site_url("property/$query_id/ID/desc")?>">Relevance</a></div>
												<div class="items"><a href="<?php echo site_url("property/$query_id/post_price/asc")?>">Price : Low to High</a></div>
												<div class="items"><a href="<?php echo site_url("property/$query_id/post_price/desc")?>">Price : High to Low</a></div>
												<div class="items"><a href="<?php echo site_url("property/$query_id/post_date/asc")?>">Date : Latest First</a></div>
											</div>
											<?php } ?>
										<?php }else{ ?>
											<div class="filter-drop">
												<div class="items"><a href="<?php echo site_url("property/$query_id/ID/desc")?>">Relevance</a></div>
												<div class="items"><a href="<?php echo site_url("property/$query_id/post_price/asc")?>">Price : Low to High</a></div>
												<div class="items"><a href="<?php echo site_url("property/$query_id/post_price/desc")?>">Price : High to Low</a></div>
												<div class="items"><a href="<?php echo site_url("property/$query_id/post_date/asc")?>">Date : Latest First</a></div>
											</div>
										<?php } ?>
									</div>
									<a class="save" href="#">Save Search</a>
									<!--a href="#" class="export">Print Results</a -->
								</div>
								<div class="actual-list">
									<?php $i=1;$location='';foreach ($records as $key) {?>
									<div class="item clearfix">
										<div class="left-side">
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
													          'alt' => $key->post_title,
													          'title' => $key->post_title,
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
											<?php if($key->post_property_catergory == 'Residential property for Sale' || $key->post_property_catergory =='Commercial property for Sale' ) { ?>
											<div class="price-desc"><p><span class="blue bold big"><?php echo round($key->post_price);?></span> <span class="black bold big">QR</span> <span class="for">For Sale</span> <span class="blue small"><?php echo round($key->post_price/$key->post_property_size);?></span> <span class="bold small">Per</span> <span class="yellow bold small">m<sup>2</sup></span></p></div>
											<?php } else { ?>
											<div class="price-desc"><p><span class="for">For Rent</span> <span class="blue bold small"><?php echo round($key->post_price);?></span> <span class="blue bold small">QR</span> <span class="black bold small">Per</span> <span class="yellow  bold small">Month</span></p></div>
											<?php } ?>
											<div class="location"><?php echo $key->post_property_area_reference.' , '.$key->post_property_area_city;?></div>
											<div class="address"><?php echo $key->post_property_area_address;?></div>
											<!--div class="listedby">
												<div class="top clearfix"><div class="name"><p>Listed by <span>Adam Smith</span></p></div><div class="compare active"></div></div>
												<div class="bottom"><a href="#">See all Adam Smith Listing</a></div>
											</div-->
										</div>
									</div>
									<?php $location =$location."['$key->post_title',$key->post_property_area_lat,$key->post_property_area_log,$i]," ?>
									<?php $i++;} ?>
								</div>
								<?php if (strlen($pagination)): ?>
								<div>
									Pages: <?php echo $pagination; ?>
								</div>
								<?php endif; ?>
							</div>
						<?php }else{ ?>
							<h1 class="error">No Listing Not Found</h1>
						<?php } ?>
					<?php } ?>
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
			    slide: function(event, ui) { $(ui.handle).find('span').html('$' + ui.value); $(ui.handle).find('input').val(ui.value);}
			});

			// only initially needed
			$('#min').html('$' + $('#slider-range').slider('values', 0)).position({
			    my: 'center top',
			    at: 'center bottom',
			    of: $('#slider-range a:eq(0)'),
			    offset: "0, 10"
			});
			$('#input_min').val($('#slider-range').slider('values', 0));
			$('#max').html('$' + $('#slider-range').slider('values', 1)).position({
			    my: 'center top',
			    at: 'center bottom',
			    of: $('#slider-range a:eq(1)'),
			    offset: "0, 10"
			});
			$('#input_max').val($('#slider-range').slider('values', 1));
    	});
    </script>