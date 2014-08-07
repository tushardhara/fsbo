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
			<div class="agent-detail">
				<?php foreach ($user_list as $key) { ?>
				<?php $email= $key->user_email; ?>
				<div class="rrssb-buttons top">
					<?php if($key->user_type == 'user') {?>
					<h1><?php echo $key->user_login?></h1>
					<?php }else if($key->user_type == 'agent'){ ?>
						<?php if(!empty($key->user_title)) { ?>
							<h1><?php echo $key->user_title;?></h1>
						<?php } else { ?>
							<h1><?php echo $key->user_login?></h1>
						<?php } ?>
					<?php }else if($key->user_type == 'admin'){ ?>
					<h1><?php echo $key->user_login?></h1>
					<?php }else if($key->user_type == 'moderator'){ ?>
					<h1><?php echo $key->user_login?></h1>
					<?php } ?>
					<?php if($this->session->userdata('logged_in')){ ?>
					<a href="mailto:<?php echo $key->user_email;?>?subject=&amp;body=" class="popup contact" target="_blank">Contact Agent</a>
					<?php } ?>
				</div>
				<div class="bottom">
					<div class="left">
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
					<div class="mid"><p><?php echo $key->user_detail?></p></div>
					<div class="right">
						<?php if($this->session->userdata('logged_in')){ ?>
						<div class="detail">Phone: <span><?php echo $key->user_phone;?></span></div>
						<div class="detail">Email: <span><?php echo $key->user_email;?></span></div>
						<?php } ?>
					</div>
				</div>
				<?php } ?>
				<div class="agent-filter clearfix">
					<div class="sort">
						<span class="text">City</span>
						<div class="drop">
							<span class="text">All</span><span class="arrow"></span>
						</div>
						<div class="filter-drop city">
							<div class="items" item-value="All"><a>All</a></div>
							<div class="items" item-value="Doha"><a>Doha</a></div>
                            <div class="items" item-value="AL wakair"><a>AL wakair</a></div>
                            <div class="items" item-value="Abu az Zuluf"><a>Abu az Zuluf</a></div>
                            <div class="items" item-value="Abu Thaylah"><a>Abu Thaylah</a></div>
                            <div class="items" item-value="Ad Dawhah al Jadidah"><a>Ad Dawhah al Jadidah</a></div>
                            <div class="items" item-value="Al `Arish"><a>Al `Arish</a></div>
                            <div class="items" item-value="Al Bida` ash Sharqiyah"><a>Al Bida` ash Sharqiyah</a></div>
                            <div class="items" item-value="Al Ghanim"><a>Al Ghanim</a></div>
                            <div class="items" item-value="Al Ghuwariyah"><a>Al Ghuwariyah</a></div>
                            <div class="items" item-value="Al Hilal al Gharbiyah"><a>Al Hilal al Gharbiyah</a></div>
                            <div class="items" item-value="Al Hilal ash Sharqiyah"><a>Al Hilal ash Sharqiyah</a></div>
                            <div class="items" item-value="Al Hitmi"><a>Al Hitmi</a></div>
                            <div class="items" item-value="Al Jasrah"><a>Al Jasrah</a></div>
                            <div class="items" item-value="Al Jumaliyah"><a>Al Jumaliyah</a></div>
                            <div class="items" item-value="Al Ka`biyah"><a>Al Ka`biyah</a></div>
                            <div class="items" item-value="Al Khalifat"><a>Al Khalifat</a></div>
                            <div class="items" item-value="Al Khor"><a>Al Khor</a></div>
                            <div class="items" item-value="Al Khuwayr"><a>Al Khuwayr</a></div>
                            <div class="items" item-value="Al Luqta"><a>Al Luqta</a></div>
                            <div class="items" item-value="Al Mafjar"><a>Al Mafjar</a></div>
                            <div class="items" item-value="Al Qa`abiyah"><a>Al Qa`abiyah</a></div>
                            <div class="items" item-value="Al Wakrah"><a>Al Wakrah</a></div>
                            <div class="items" item-value="Al `Adhbah"><a>Al `Adhbah</a></div>
                            <div class="items" item-value="An Najmah"><a>An Najmah</a></div>
                            <div class="items" item-value="Ar Rakiyat"><a>Ar Rakiyat</a></div>
                            <div class="items" item-value="Al Rayyan"><a>Al Rayyan</a></div>
                            <div class="items" item-value="Ar Ru'ays"><a>Ar Ru'ays</a></div>
                            <div class="items" item-value="As Salatah"><a>As Salatah</a></div>
                            <div class="items" item-value="As Salatah al Jadidah"><a>As Salatah al Jadidah</a></div>
                            <div class="items" item-value="As Sani`"><a>As Sani`</a></div>
                            <div class="items" item-value="As Sawq"><a>As Sawq</a></div>
                            <div class="items" item-value="Ath Thaqab"><a>Ath Thaqab</a></div>
                            <div class="items" item-value="Dukhan"><a>Dukhan</a></div>
                            <div class="items" item-value="Lusail"><a>Lusail</a></div>
                            <div class="items" item-value="Ras Laffan Industrial City"><a>Ras Laffan Industrial City</a></div>
                            <div class="items" item-value="Smaismah"><a>Smaismah</a></div>
                            <div class="items" item-value="Umm Bab"><a>Umm Bab</a></div>
                            <div class="items" item-value="Umm Sa'id"><a>Umm Sa'id</a></div>
                            <div class="items" item-value="Umm Salal Ali"><a>Umm Salal Ali</a></div>
                            <div class="items" item-value="Umm Salal Mohammed"><a>Umm Salal Mohammed</a></div>
						</div>
					</div>
					<div class="sort">
						<span class="text">Type</span>
						<div class="drop">
							<span class="text">All</span><span class="arrow"></span>
						</div>
						<div class="filter-drop type">
							<div class="items" item-value="All"><a>All</a></div>
							<div class="items" item-value="property"><a>property</a></div>
							<div class="items" item-value="furniture"><a>furniture</a></div>
							<div class="items" item-value="education"><a>education</a></div>
						</div>
					</div>
					<div class="sort">
						<span class="text">Bedroom</span>
						<div class="drop small">
							<span class="text">All</span><span class="arrow"></span>
						</div>
						<div class="filter-drop bedroom">
							<div class="items" item-value="All"><a>All</a></div>
							<div class="items" item-value="1"><a>1</a></div>
							<div class="items" item-value="2"><a>2</a></div>
							<div class="items" item-value="3"><a>3</a></div>
							<div class="items" item-value="4"><a>4</a></div>
							<div class="items" item-value="5"><a>5</a></div>
						</div>
					</div>
					<div class="sort">
						<span class="text">Bathroom</span>
						<div class="drop small">
							<span class="text">All</span><span class="arrow"></span>
						</div>
						<div class="filter-drop bathroom">
							<div class="items" item-value="All"><a>All</a></div>
							<div class="items" item-value="1"><a>1</a></div>
							<div class="items" item-value="2"><a>2</a></div>
							<div class="items" item-value="3"><a>3</a></div>
							<div class="items" item-value="4"><a>4</a></div>
							<div class="items" item-value="5"><a>5</a></div>
						</div>
					</div>
					<div class="price-range">
						<span class="text">Price Range</span>
						<div id="agent-slider-range"></div>
					</div>
					<div class="sort">
						<span class="text">Sort</span>
						<div class="drop">
							<span class="text">Relevance</span><span class="arrow"></span>
						</div>
						<div class="filter-drop re">
							<div class="items" item-value="Relevance"><a>Relevance</a></div>
							<div class="items" item-value="Price : Low to High"><a>Price : Low to High</a></div>
							<div class="items" item-value="Price : Low to High"><a>Price : Low to High</a></div>
							<div class="items" item-value="Date : Latest First"><a>Date : Latest First</a></div>
						</div>
					</div>
					<div class="contact">Search</div>
				</div>
				<div class="agent-property-list">
					<?php foreach ($user_mylist as $key) { ?>
					<div class="item">
						<div class="left-side">
							<a href="<?php echo site_url('profile/agent/edit/'.$key->ID);?>">
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
							<div class="compare-area"><div class="compare"></div><span>Compare</span></div>
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
				</div>
				<?php if (strlen($pagination)): ?>
				<div>
					Pages: <?php echo $pagination; ?>
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