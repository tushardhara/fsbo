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
			<?php include('tab/tab-area.php');?>
			<div class="my-property-list">
				<?php if(isset($user_mylist)){ ?>
					<?php if(!empty($user_mylist)){ ?>
						<?php foreach ($user_mylist as $key) { ?>
						<div class="item" data-item-id="<?php echo $key->ID; ?>">
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
										          'title' => 'fsbo',
											);
										?>
										<?php echo img($attached_image);?>
										<?php if($key->post_featured == 1){ ?><div class="featured-listing-text">Featured Listing</div> <?php } ?>
									</div>
								</a>
							</div>
							<div class="mid-side">
								<div class="featured-listing-name"><a href="<?php echo site_url('profile/agent/edit/'.$key->ID);?>"><?php echo $key->post_title;?></a></div>
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
								<div class="location"><?php echo $key->post_property_area_reference.' , '.$key->post_property_area_city;?></div>
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
							<div class="right-side">
								<?php if($this->session->userdata('logged_in')['user_type'] == 'user'){ ?>
						     		<a href="<?php echo site_url('profile/user/edit/'.$key->ID);?>" class="contact">Edit Listing</a>
						     	<?php }else if($this->session->userdata('logged_in')['user_type'] == 'agent'){ ?>
						     		<a href="<?php echo site_url('profile/agent/edit/'.$key->ID);?>" class="contact">Edit Listing</a>
						     	<?php }else if($this->session->userdata('logged_in')['user_type'] == 'moderator') { ?>
						     		<a href="<?php echo site_url('profile/moderator/edit/'.$key->ID);?>" class="contact">Edit Listing</a>
						     	<?php }else if($this->session->userdata('logged_in')['user_type'] == 'admin') { ?>
						     		<a href="<?php echo site_url('profile/admin/edit/'.$key->ID);?>" class="contact">Edit Listing</a>
						     	<?php } ?>
								<?php if($key->post_type == 'property') { ?>
									<a href="<?php echo site_url('property/'.$key->post_slug);?>" class="contact">Preview</a>
								<?php } else if($key->post_type == 'furniture') {?>
									<a href="<?php echo site_url('furniture/'.$key->post_slug);?>" class="contact">Preview</a>
								<?php } else if($key->post_type == 'education') { ?>
									<a href="<?php echo site_url('education/'.$key->post_slug);?>" class="contact">Preview</a>
								<?php } ?>
								<a href="<?php echo site_url('delete_post/'.$key->ID);?>" class="contact ex">Remove</a>
								<?php if($key->post_type == 'property') {?>
									<div class="compare-area"><div class="compare" data-id="<?php echo $key->ID?>"></div><span><a href="#" class="export" style="display:none">Compare</a></span></div>
								<?php } ?>
							</div>
						</div>
						<?php } ?>
					<?php }else{  ?>
						<h1 class="error">No listings where found</h1>
					<?php } ?>
				<?php } ?>
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