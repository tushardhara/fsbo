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
							<?php if(!empty($key->user_pic)) {
									$image_url=$key->user_pic; 
									$info = pathinfo($image_url);
									$file_name =  basename($image_url,'.'.$info['extension']);
									$file_url = 'upload/'.$file_name."_100.".$info['extension'];
								}else{
									$file_url = 'images/agent.png';
								}
								$temp_url=$file_url;
								$temp_login=$key->user_login;
								$attached_image = array(
							          'src' => $temp_url ,
							          'alt' => 'fsbo',
							          'title' => $key->user_login,
								);
							?>
							<?php echo img($attached_image);?>
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
					<?php echo form_open("search_agent/$slug"); ?>
					<div class="sort">
						<span class="text">City</span>
						<div class="drop">
							<span class="text"><?php echo empty($query_array['city']) ? 'All' : $query_array['city'] ?></span><span class="arrow"></span>
							<input type="hidden" name="city" value="<?php echo empty($query_array['city']) ? 'All' : $query_array['city'] ?>">
						</div>
						<div class="filter-drop city change">
							<div class="items" item-value="All"><a>All</a></div>
							<?php if(isset($property_city)) { ?>
								<?php if(!empty($property_city)) { ?>
									<?php foreach ($property_city as $key) { ?>
										<div class="items" item-value="<?php echo $key->name?>"><a><?php echo $key->name?></a></div>
									<?php } ?>
								<?php } ?>
							<?php } ?>
						</div>
					</div>
					<div class="sort">
						<span class="text">Type</span>
						<div class="drop">
							<span class="text"><?php echo empty($query_array['type']) ? 'All' : $query_array['type'] ?></span><span class="arrow"></span>
							<input type="hidden" name="type" value="<?php echo empty($query_array['type']) ? 'All' : $query_array['type'] ?>">
						</div>
						<div class="filter-drop type change">
							<div class="items" item-value="All"><a>All</a></div>
							<div class="items" item-value="property"><a>property</a></div>
							<div class="items" item-value="furniture"><a>furniture</a></div>
							<div class="items" item-value="education"><a>education</a></div>
						</div>
					</div>
					<div class="sort">
						<span class="text">Bedroom</span>
						<div class="drop small">
							<span class="text"><?php echo empty($query_array['bedroom']) ? 'All' : $query_array['bedroom'] ?></span><span class="arrow"></span>
							<input type="hidden" name="bedroom" value="<?php echo empty($query_array['bedroom']) ? 'All' : $query_array['bedroom'] ?>">
						</div>
						<div class="filter-drop bedroom change">
							<div class="items" item-value="All"><a>All</a></div>
							<div class="items" item-value="1"><a>1</a></div>
							<div class="items" item-value="2"><a>2</a></div>
							<div class="items" item-value="3"><a>3</a></div>
							<div class="items" item-value="4"><a>4</a></div>
							<div class="items" item-value="5"><a>5</a></div>
							<div class="items" item-value="6"><a>6</a></div>
							<div class="items" item-value="7"><a>7</a></div>
							<div class="items" item-value="8"><a>8</a></div>
							<div class="items" item-value="9"><a>9</a></div>
						</div>
					</div>
					<div class="sort">
						<span class="text">Bathroom</span>
						<div class="drop small">
							<span class="text"><?php echo empty($query_array['bathroom']) ? 'All' : $query_array['bathroom'] ?></span><span class="arrow"></span>
							<input type="hidden" name="bathroom" value="<?php echo empty($query_array['bathroom']) ? 'All' : $query_array['bathroom'] ?>">
						</div>
						<div class="filter-drop bathroom change">
							<div class="items" item-value="All" ><a>All</a></div>
							<div class="items" item-value="1"><a>1</a></div>
							<div class="items" item-value="2"><a>2</a></div>
							<div class="items" item-value="3"><a>3</a></div>
							<div class="items" item-value="4"><a>4</a></div>
							<div class="items" item-value="5"><a>5</a></div>
							<div class="items" item-value="6"><a>6</a></div>
							<div class="items" item-value="7"><a>7</a></div>
							<div class="items" item-value="8"><a>8</a></div>
							<div class="items" item-value="9"><a>9</a></div>
						</div>
					</div>
					<div class="price-range">
						<span class="text">Price Range</span>
						<div id="agent-slider-range"></div>
						<span id="min"></span>
						<input id="input_min" type="hidden" name="input_min" value="">
						<span id="max"></span>
						<input id="input_max" type="hidden" name="input_max" value="">
					</div>
					<div class="sort">
						<span class="text">Sort</span>
						<div class="drop actual">
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
					<input type="submit" class="contact" value="Search">
					<?php echo form_close(); ?>
				</div>
				<div class="agent-property-list">
					<?php if(isset($user_mylist)){ ?>
						<?php if(!empty($user_mylist)){ ?>
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
												          'src' => $temp_url ,
												          'alt' => 'fsbo',
												          'title' => $temp_login,
													);
												?>
												<?php echo img($attached_image);?>
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
							<h1 class="error">No listings where found</h1>
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

#agent-slider-range a {
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
    		$("#agent-slider-range").slider({
    range: true,
    min: <?php echo round($total_num_min) ?>,
    max: <?php echo round($total_num_max) ?>,
    step: 500,
    values: [<?php echo empty($query_array['input_min']) ? $num_min : $query_array['input_min'] ?>, <?php echo empty($query_array['input_max']) ? $num_max : $query_array['input_max'] ?>],
    animate: 'slow',
    create: function() {
        $('#min').appendTo($('#agent-slider-range a').get(0));
        $('#input_min').appendTo($('#agent-slider-range a').get(0));
        $('#max').appendTo($('#agent-slider-range a').get(1));
        $('#input_max').appendTo($('#agent-slider-range a').get(1));
    },
    slide: function(event, ui) { $(ui.handle).find('span').html('$' + ui.value); $(ui.handle).find('input').val(ui.value);}
});

// only initially needed
$('#min').html('$' + $('#agent-slider-range').slider('values', 0)).position({
    my: 'center top',
    at: 'center bottom',
    of: $('#agent-slider-range a:eq(0)'),
    offset: "0, 10"
});
$('#input_min').val($('#agent-slider-range').slider('values', 0));
$('#max').html('$' + $('#agent-slider-range').slider('values', 1)).position({
    my: 'center top',
    at: 'center bottom',
    of: $('#agent-slider-range a:eq(1)'),
    offset: "0, 10"
});
$('#input_max').val($('#agent-slider-range').slider('values', 1));
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