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
			<div class="product-detail">
				<?php foreach ($records as $key) { ?>
				<?php foreach ($this->post->get_user_data($key->ID) as $user_key) {
						$email = $user_key->user_email;
						$user_login = $user_key->user_login;
						$user_title = $user_key->user_title;
						$user_type = $user_key->user_type;
						$user_slug = $user_key->user_slug;
					}
				?>
				<div class="left">
					<div class="big-edu-image">
						<?php if(isset($user_image_detail)){ 
								if(!empty($user_image_detail)){
									foreach ($user_image_detail as $key1) {
										$user_image[$key1->post_image_id] = $key1->post_image_url;
										if(!empty($user_image[$key->ID])) {
												$image_url=$user_image[$key->ID]; 
												$info = pathinfo($image_url);
												$file_name =  basename($image_url,'.'.$info['extension']);
												$file_url = 'upload/'.$file_name."_307.".$info['extension'];
										}else{
											$file_url = 'images/edu-big-image.png';
										}
										$attached_image = array(
									          'src' => $file_url ,
									          'alt' => 'fsbo',
									          'title' => 'fsbo',
										);
										echo img($attached_image);
										break;
									}
								}else{
									$attached_image = array(
									          'src' => 'images/edu-big-image.png' ,
									          'alt' => 'fsbo',
									          'title' => 'fsbo',
										);
										echo img($attached_image);
								}
							} 
						?>
					</div>
					<div class="info">
						<div class="item-title">Info</div>
						<div class="item"><div>Type: </div><div class="yes"></div><div class="ans"><?php echo $key->post_education_type;?></div></div>
						<div class="item"><div>Admission Age: </div><div class="yes"></div><div class="ans"><?php echo $key->post_education_age;?></div></div>
						<div class="item"><div>Gender: </div><div class="no"></div><div class="ans"><?php echo $key->post_education_gender;?></div></div>
						<div class="item"><div>Registration Fee: </div><div class="yes"></div><div class="ans"><?php echo round($key->post_price);?></div></div>
						<div class="item"><div>Community: </div><div class="no"></div><div class="ans"><?php echo $key->post_education_community;?></div></div>
						<div class="item"><div>Tel: </div><div class="yes"></div><div class="ans"><?php echo $key->post_education_phone;?></div></div>
						<div class="item"><div>Fax: </div><div class="yes"></div><div class="ans"><?php echo $key->post_education_fax;?></div></div>
						<div class="item"><div>Email: </div><div class="no"></div><div class="ans"><?php echo $key->post_education_email;?></div></div>
						<div class="item"><div>Website: </div><div class="yes"></div><div class="ans"><?php echo $key->post_education_website;?></div></div>
						<div class="item"><div>Principle: </div><div class="yes"></div><div class="ans"><?php echo $key->post_education_principle;?></div></div>
					</div>
				</div>
				<div class="right">
					<div class="featured-listing-name furniture"><a href="<?php echo site_url('education/'.$key->post_slug);?>"><?php echo $key->post_title;?></a></div>
					<div class="desc"><p><?php echo $key->post_description?></p>
					</div>
					<div class="rrssb-buttons social-share edu">
						<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo site_url('education/'.$key->post_slug);?>" class="popup facebook-share"></a>
						<a href="http://twitter.com/home?status=<?php echo shortDescription($key->post_description)?><?php echo site_url('education/'.$key->post_slug);?>" class="popup twitter-share"></a>
					</div>
					<div class="rrssb-buttons settings no-border edu">
						<div class="wishlist"><a href="<?php echo site_url('add_wishlist?ID='.$key->ID)?>" target="_blank">Wish List</a></div>
						<div class="print"><a href="javascript:window.print()">Print</a></div>
						<?php if($this->session->userdata('logged_in')){ ?>
						<div class="contact"><a href="mailto:<?php echo $email;?>?subject=&amp;body=" class="popup contact" target="_blank">Contact Agents</a></div>
						<?php } ?>
					</div>
				</div>
				<?php } ?>
			</div>
			<div class="edu-detail-full clearfix">
				<div class="title clearfix ">
					<div class="see-text">See Also</div>
					<div class="see-all"><a href="<?php echo site_url('education');?>">See All</a></div>
				</div>
				<div class="list clearfix">
					<?php foreach ($related as $key){ ?>
					<div class="item">
						<a href="<?php echo site_url('education/'.$key->post_slug);?>">
							<div class="thumb">

								<?php if(!empty($image[$key->ID])) {
										$image_url=$image[$key->ID]; 
										$info = pathinfo($image_url);
										$file_name =  basename($image_url,'.'.$info['extension']);
										$file_url = 'upload/'.$file_name."_180.".$info['extension'];
									}else{
										$file_url = 'images/edu-small-image.png';
									}
									$attached_image = array(
								          'src' => $file_url ,
								          'alt' => 'fsbo',
								          'title' => 'fsbo',
									);
								?>
								<?php echo img($attached_image);?>
							</div>
						</a>
						<div class="info">
							<div class="detail"><div>Type: </div><div class="yes"></div><div class="ans"><?php echo $key->post_education_type;?></div></div>
							<div class="detail"><div>Admission Age: </div><div class="yes"></div><div class="ans"><?php echo $key->post_education_age;?></div></div>
							<div class="detail"><div>Gender: </div><div class="no"></div><div class="ans"><?php echo $key->post_education_gender;?></div></div>
							<div class="detail"><div>Registration Fee: </div><div class="yes"></div><div class="ans"><?php echo round($key->post_price);?></div></div>
							<div class="detail"><div>Community: </div><div class="no"></div><div class="ans"><?php echo $key->post_education_community;?></div></div>
							<div class="detail"><div>Tel: </div><div class="yes"></div><div class="ans"><?php echo $key->post_education_phone;?></div></div>
							<div class="detail"><div>Fax: </div><div class="yes"></div><div class="ans"><?php echo $key->post_education_fax;?></div></div>
							<div class="detail"><div>Email: </div><div class="no"></div><div class="ans"><?php echo $key->post_education_email;?></div></div>
							<div class="detail"><div>Website: </div><div class="yes"></div><div class="ans"><?php echo $key->post_education_website;?></div></div>
							<div class="detail"><div>Principle: </div><div class="yes"></div><div class="ans"><?php echo $key->post_education_principle;?></div></div>
						</div>
						<a class="featured-listing-view" href="<?php echo site_url('education/'.$key->post_slug);?>">View Details</a>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	<?php
    	function shortDescription($fullDescription) {
			$shortDescription = "";

			$fullDescription = trim(strip_tags($fullDescription));

			if ($fullDescription) {
				$initialCount = 75;
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