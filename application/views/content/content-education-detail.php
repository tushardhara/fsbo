	<div class="home-main clearfix">
		<div class="container">
			<div class="product-detail">
				<?php foreach ($records as $key) { ?>
				<div class="left">
					<div class="big-edu-image">
						<?php 
							$attached_image = array(
						          'src' => 'images/edu-big-image.png',
						          'alt' => 'fsbo',
						          'title' => 'fsbo',
							);
						?>
						<?php echo img($attached_image);?>
					</div>
					<div class="info">
						<div class="item-title">Info</div>
						<div class="item"><div>Type: </div><div class="yes"></div><div class="ans"><?php echo $key->post_education_type;?></div></div>
						<div class="item"><div>Admission Age: </div><div class="yes"></div><div class="ans"><?php echo $key->post_education_age;?></div></div>
						<div class="item"><div>Gender: </div><div class="no"></div><div class="ans"><?php echo $key->post_education_gender;?></div></div>
						<div class="item"><div>Registration Fee: </div><div class="yes"></div><div class="ans"><?php echo $key->post_price;?></div></div>
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
					<div class="social-share">
						<a href="#" class="facebook-share"></a>
						<a href="#" class="twitter-share"></a>
					</div>
					<div class="settings no-border">
						<div class="wishlist">Wish List</div>
						<div class="print"><a href="javascript:window.print()">Print</a></div>
						<div class="contact">Contact Agents</div>
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
								<?php 
									$attached_image = array(
								          'src' => 'images/edu-small-image.png',
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
							<div class="detail"><div>Registration Fee: </div><div class="yes"></div><div class="ans"><?php echo $key->post_price;?></div></div>
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
