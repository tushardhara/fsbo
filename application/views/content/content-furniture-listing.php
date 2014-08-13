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
			<div class="furniture-listing-settings">
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
								<?php }else if($this->uri->segment(3)=='bedroom'){ ?>
									<?php if($this->uri->segment(4)=='') { ?>
									<span class="text">Relevance</span><span class="arrow"></span>
									<?php } else if($this->uri->segment(4)=='ID') { ?>
									<span class="text">Relevance</span><span class="arrow"></span>
									<?php } else if($this->uri->segment(4)=='post_price') { ?>
										<?php if($this->uri->segment(5)=='') {?>
										<span class="text">Price : Low to High</span><span class="arrow"></span>
										<?php } else if($this->uri->segment(5)=='asc') {?>
										<span class="text">Price : Low to High</span><span class="arrow"></span>
										<?php } else if($this->uri->segment(5)=='desc') {?>
										<span class="text">Price : High to Low</span><span class="arrow"></span>
										<?php } ?>
									<?php } else if($this->uri->segment(4)=='post_date') { ?>
									<span class="text">Date : Latest First</span><span class="arrow"></span>
									<?php } ?>
								<?php }else if($this->uri->segment(3)=='living-room'){ ?>
									<?php if($this->uri->segment(4)=='') { ?>
									<span class="text">Relevance</span><span class="arrow"></span>
									<?php } else if($this->uri->segment(4)=='ID') { ?>
									<span class="text">Relevance</span><span class="arrow"></span>
									<?php } else if($this->uri->segment(4)=='post_price') { ?>
										<?php if($this->uri->segment(5)=='') {?>
										<span class="text">Price : Low to High</span><span class="arrow"></span>
										<?php } else if($this->uri->segment(5)=='asc') {?>
										<span class="text">Price : Low to High</span><span class="arrow"></span>
										<?php } else if($this->uri->segment(5)=='desc') {?>
										<span class="text">Price : High to Low</span><span class="arrow"></span>
										<?php } ?>
									<?php } else if($this->uri->segment(4)=='post_date') { ?>
									<span class="text">Date : Latest First</span><span class="arrow"></span>
									<?php } ?>
								<?php }else if($this->uri->segment(3)=='bathroom'){ ?>
									<?php if($this->uri->segment(4)=='') { ?>
									<span class="text">Relevance</span><span class="arrow"></span>
									<?php } else if($this->uri->segment(4)=='ID') { ?>
									<span class="text">Relevance</span><span class="arrow"></span>
									<?php } else if($this->uri->segment(4)=='post_price') { ?>
										<?php if($this->uri->segment(5)=='') {?>
										<span class="text">Price : Low to High</span><span class="arrow"></span>
										<?php } else if($this->uri->segment(5)=='asc') {?>
										<span class="text">Price : Low to High</span><span class="arrow"></span>
										<?php } else if($this->uri->segment(5)=='desc') {?>
										<span class="text">Price : High to Low</span><span class="arrow"></span>
										<?php } ?>
									<?php } else if($this->uri->segment(4)=='post_date') { ?>
									<span class="text">Date : Latest First</span><span class="arrow"></span>
									<?php } ?>
								<?php }else if($this->uri->segment(3)=='dining-room'){ ?>
									<?php if($this->uri->segment(4)=='') { ?>
									<span class="text">Relevance</span><span class="arrow"></span>
									<?php } else if($this->uri->segment(4)=='ID') { ?>
									<span class="text">Relevance</span><span class="arrow"></span>
									<?php } else if($this->uri->segment(4)=='post_price') { ?>
										<?php if($this->uri->segment(5)=='') {?>
										<span class="text">Price : Low to High</span><span class="arrow"></span>
										<?php } else if($this->uri->segment(5)=='asc') {?>
										<span class="text">Price : Low to High</span><span class="arrow"></span>
										<?php } else if($this->uri->segment(5)=='desc') {?>
										<span class="text">Price : High to Low</span><span class="arrow"></span>
										<?php } ?>
									<?php } else if($this->uri->segment(4)=='post_date') { ?>
									<span class="text">Date : Latest First</span><span class="arrow"></span>
									<?php } ?>
								<?php }else if($this->uri->segment(3)=='kitchen'){ ?>
									<?php if($this->uri->segment(4)=='') { ?>
									<span class="text">Relevance</span><span class="arrow"></span>
									<?php } else if($this->uri->segment(4)=='ID') { ?>
									<span class="text">Relevance</span><span class="arrow"></span>
									<?php } else if($this->uri->segment(4)=='post_price') { ?>
										<?php if($this->uri->segment(5)=='') {?>
										<span class="text">Price : Low to High</span><span class="arrow"></span>
										<?php } else if($this->uri->segment(5)=='asc') {?>
										<span class="text">Price : Low to High</span><span class="arrow"></span>
										<?php } else if($this->uri->segment(5)=='desc') {?>
										<span class="text">Price : High to Low</span><span class="arrow"></span>
										<?php } ?>
									<?php } else if($this->uri->segment(4)=='post_date') { ?>
									<span class="text">Date : Latest First</span><span class="arrow"></span>
									<?php } ?>
								<?php }else if($this->uri->segment(3)=='miscellaneous'){ ?>
									<?php if($this->uri->segment(4)=='') { ?>
									<span class="text">Relevance</span><span class="arrow"></span>
									<?php } else if($this->uri->segment(4)=='ID') { ?>
									<span class="text">Relevance</span><span class="arrow"></span>
									<?php } else if($this->uri->segment(4)=='post_price') { ?>
										<?php if($this->uri->segment(5)=='') {?>
										<span class="text">Price : Low to High</span><span class="arrow"></span>
										<?php } else if($this->uri->segment(5)=='asc') {?>
										<span class="text">Price : Low to High</span><span class="arrow"></span>
										<?php } else if($this->uri->segment(5)=='desc') {?>
										<span class="text">Price : High to Low</span><span class="arrow"></span>
										<?php } ?>
									<?php } else if($this->uri->segment(4)=='post_date') { ?>
									<span class="text">Date : Latest First</span><span class="arrow"></span>
									<?php } ?>
								<?php } ?>
							<?php } else { ?>
								<span class="text">Relevance</span><span class="arrow"></span>
							<?php } ?>
						</div>
						<?php if($this->uri->segment(2)=='') {?>
						<div class="filter-drop">
							<div class="items"><a href="<?php echo site_url("furniture/$query_id/ID/desc")?>">Relevance</a></div>
							<div class="items"><a href="<?php echo site_url("furniture/$query_id/post_price/asc")?>">Price : Low to High</a></div>
							<div class="items"><a href="<?php echo site_url("furniture/$query_id/post_price/desc")?>">Price : High to Low</a></div>
							<div class="items"><a href="<?php echo site_url("furniture/$query_id/post_date/asc")?>">Date : Latest First</a></div>
						</div>
						<?php } else if($this->uri->segment(2)=='0') {?>
							<?php if($this->uri->segment(3)=='ID') { ?>
							<div class="filter-drop">
								<div class="items"><a href="<?php echo site_url("furniture/$query_id/ID/desc")?>">Relevance</a></div>
								<div class="items"><a href="<?php echo site_url("furniture/$query_id/post_price/asc")?>">Price : Low to High</a></div>
								<div class="items"><a href="<?php echo site_url("furniture/$query_id/post_price/desc")?>">Price : High to Low</a></div>
								<div class="items"><a href="<?php echo site_url("furniture/$query_id/post_date/asc")?>">Date : Latest First</a></div>
							</div>
							<?php }else if($this->uri->segment(3)=='post_price'){ ?>
							<div class="filter-drop">
								<div class="items"><a href="<?php echo site_url("furniture/$query_id/ID/desc")?>">Relevance</a></div>
								<div class="items"><a href="<?php echo site_url("furniture/$query_id/post_price/asc")?>">Price : Low to High</a></div>
								<div class="items"><a href="<?php echo site_url("furniture/$query_id/post_price/desc")?>">Price : High to Low</a></div>
								<div class="items"><a href="<?php echo site_url("furniture/$query_id/post_date/asc")?>">Date : Latest First</a></div>
							</div>
							<?php }else if($this->uri->segment(3)=='post_date'){ ?>
							<div class="filter-drop">
								<div class="items"><a href="<?php echo site_url("furniture/$query_id/ID/desc")?>">Relevance</a></div>
								<div class="items"><a href="<?php echo site_url("furniture/$query_id/post_price/asc")?>">Price : Low to High</a></div>
								<div class="items"><a href="<?php echo site_url("furniture/$query_id/post_price/desc")?>">Price : High to Low</a></div>
								<div class="items"><a href="<?php echo site_url("furniture/$query_id/post_date/asc")?>">Date : Latest First</a></div>
							</div>
							<?php }else if($this->uri->segment(3)=='bedroom'){ ?>
							<div class="filter-drop">
								<div class="items"><a href="<?php echo site_url("furniture/$query_id/bedroom/ID/desc")?>">Relevance</a></div>
								<div class="items"><a href="<?php echo site_url("furniture/$query_id/bedroom/post_price/asc")?>">Price : Low to High</a></div>
								<div class="items"><a href="<?php echo site_url("furniture/$query_id/bedroom/post_price/desc")?>">Price : High to Low</a></div>
								<div class="items"><a href="<?php echo site_url("furniture/$query_id/bedroom/post_date/asc")?>">Date : Latest First</a></div>
							</div>
							<?php }else if($this->uri->segment(3)=='living-room'){ ?>
							<div class="filter-drop">
								<div class="items"><a href="<?php echo site_url("furniture/$query_id/living-room/ID/desc")?>">Relevance</a></div>
								<div class="items"><a href="<?php echo site_url("furniture/$query_id/living-room/post_price/asc")?>">Price : Low to High</a></div>
								<div class="items"><a href="<?php echo site_url("furniture/$query_id/living-room/post_price/desc")?>">Price : High to Low</a></div>
								<div class="items"><a href="<?php echo site_url("furniture/$query_id/living-room/post_date/asc")?>">Date : Latest First</a></div>
							</div>
							<?php }else if($this->uri->segment(3)=='bathroom'){ ?>
							<div class="filter-drop">
								<div class="items"><a href="<?php echo site_url("furniture/$query_id/bathroom/ID/desc")?>">Relevance</a></div>
								<div class="items"><a href="<?php echo site_url("furniture/$query_id/bathroom/post_price/asc")?>">Price : Low to High</a></div>
								<div class="items"><a href="<?php echo site_url("furniture/$query_id/bathroom/post_price/desc")?>">Price : High to Low</a></div>
								<div class="items"><a href="<?php echo site_url("furniture/$query_id/bathroom/post_date/asc")?>">Date : Latest First</a></div>
							</div>
							<?php }else if($this->uri->segment(3)=='dining-room'){ ?>
							<div class="filter-drop">
								<div class="items"><a href="<?php echo site_url("furniture/$query_id/dining-room/ID/desc")?>">Relevance</a></div>
								<div class="items"><a href="<?php echo site_url("furniture/$query_id/dining-room/post_price/asc")?>">Price : Low to High</a></div>
								<div class="items"><a href="<?php echo site_url("furniture/$query_id/dining-room/post_price/desc")?>">Price : High to Low</a></div>
								<div class="items"><a href="<?php echo site_url("furniture/$query_id/dining-room/post_date/asc")?>">Date : Latest First</a></div>
							</div>
							<?php }else if($this->uri->segment(3)=='kitchen'){ ?>
							<div class="filter-drop">
								<div class="items"><a href="<?php echo site_url("furniture/$query_id/kitchen/ID/desc")?>">Relevance</a></div>
								<div class="items"><a href="<?php echo site_url("furniture/$query_id/kitchen/post_price/asc")?>">Price : Low to High</a></div>
								<div class="items"><a href="<?php echo site_url("furniture/$query_id/kitchen/post_price/desc")?>">Price : High to Low</a></div>
								<div class="items"><a href="<?php echo site_url("furniture/$query_id/kitchen/post_date/asc")?>">Date : Latest First</a></div>
							</div>
							<?php }else if($this->uri->segment(3)=='miscellaneous'){ ?>
							<div class="filter-drop">
								<div class="items"><a href="<?php echo site_url("furniture/$query_id/miscellaneous/ID/desc")?>">Relevance</a></div>
								<div class="items"><a href="<?php echo site_url("furniture/$query_id/miscellaneous/post_price/asc")?>">Price : Low to High</a></div>
								<div class="items"><a href="<?php echo site_url("furniture/$query_id/miscellaneous/post_price/desc")?>">Price : High to Low</a></div>
								<div class="items"><a href="<?php echo site_url("furniture/$query_id/miscellaneous/post_date/asc")?>">Date : Latest First</a></div>
							</div>
							<?php } ?>
						<?php }else{ ?>
							<div class="filter-drop">
								<div class="items"><a href="<?php echo site_url("furniture/$query_id/ID/desc")?>">Relevance</a></div>
								<div class="items"><a href="<?php echo site_url("furniture/$query_id/post_price/asc")?>">Price : Low to High</a></div>
								<div class="items"><a href="<?php echo site_url("furniture/$query_id/post_price/desc")?>">Price : High to Low</a></div>
								<div class="items"><a href="<?php echo site_url("furniture/$query_id/post_date/asc")?>">Date : Latest First</a></div>
							</div>
						<?php } ?>
					</div>
					<?php if($this->uri->segment(2)=='') {?>
						<div class="filter-list">
							<a href='<?php echo site_url("furniture/$query_id/bedroom/ID/desc")?>' class="filter bed">Bedroom</a>
							<a href='<?php echo site_url("furniture/$query_id/living-room/ID/desc")?>' class="filter liv">Living room</a>
							<a href='<?php echo site_url("furniture/$query_id/bathroom/ID/desc")?>' class="filter bath">Bathroom</a>
							<a href='<?php echo site_url("furniture/$query_id/dining-room/ID/desc")?>' class="filter din">Dining room</a>
							<a href='<?php echo site_url("furniture/$query_id/kitchen/ID/desc")?>' class="filter kit">Kitchen</a>
							<a href='<?php echo site_url("furniture/$query_id/miscellaneous/ID/desc")?>' class="filter mis">Miscellaneous</a>
						</div>		
					<?php } else if($this->uri->segment(2)=='0') {?>
						<?php if($this->uri->segment(3)=='ID') { ?>
							<div class="filter-list">
								<a href='<?php echo site_url("furniture/$query_id/bedroom/ID/desc")?>' class="filter bed">Bedroom</a>
								<a href='<?php echo site_url("furniture/$query_id/living-room/ID/desc")?>' class="filter liv">Living room</a>
								<a href='<?php echo site_url("furniture/$query_id/bathroom/ID/desc")?>' class="filter bath">Bathroom</a>
								<a href='<?php echo site_url("furniture/$query_id/dining-room/ID/desc")?>' class="filter din">Dining room</a>
								<a href='<?php echo site_url("furniture/$query_id/kitchen/ID/desc")?>' class="filter kit">Kitchen</a>
								<a href='<?php echo site_url("furniture/$query_id/miscellaneous/ID/desc")?>' class="filter mis">Miscellaneous</a>
							</div>
						<?php } else if($this->uri->segment(3)=='post_price'){ ?>
							<?php if($this->uri->segment(4)=='') {?>
								<div class="filter-list">
									<a href='<?php echo site_url("furniture/$query_id/bedroom/post_price/asc")?>' class="filter bed">Bedroom</a>
									<a href='<?php echo site_url("furniture/$query_id/living-room/post_price/asc")?>' class="filter liv">Living room</a>
									<a href='<?php echo site_url("furniture/$query_id/bathroom/post_price/asc")?>' class="filter bath">Bathroom</a>
									<a href='<?php echo site_url("furniture/$query_id/dining-room/post_price/asc")?>' class="filter din">Dining room</a>
									<a href='<?php echo site_url("furniture/$query_id/kitchen/post_price/asc")?>' class="filter kit">Kitchen</a>
									<a href='<?php echo site_url("furniture/$query_id/miscellaneous/post_price/asc")?>' class="filter mis">Miscellaneous</a>
								</div>
							<?php } else if($this->uri->segment(4)=='asc') {?>
								<div class="filter-list">
									<a href='<?php echo site_url("furniture/$query_id/bedroom/post_price/asc")?>' class="filter bed">Bedroom</a>
									<a href='<?php echo site_url("furniture/$query_id/living-room/post_price/asc")?>' class="filter liv">Living room</a>
									<a href='<?php echo site_url("furniture/$query_id/bathroom/post_price/asc")?>' class="filter bath">Bathroom</a>
									<a href='<?php echo site_url("furniture/$query_id/dining-room/post_price/asc")?>' class="filter din">Dining room</a>
									<a href='<?php echo site_url("furniture/$query_id/kitchen/post_price/asc")?>' class="filter kit">Kitchen</a>
									<a href='<?php echo site_url("furniture/$query_id/miscellaneous/post_price/asc")?>' class="filter mis">Miscellaneous</a>
								</div>
							<?php } else if($this->uri->segment(4)=='desc') {?>
								<div class="filter-list">
									<a href='<?php echo site_url("furniture/$query_id/bedroom/post_price/desc")?>' class="filter bed">Bedroom</a>
									<a href='<?php echo site_url("furniture/$query_id/living-room/post_price/desc")?>' class="filter liv">Living room</a>
									<a href='<?php echo site_url("furniture/$query_id/bathroom/post_price/desc")?>' class="filter bath">Bathroom</a>
									<a href='<?php echo site_url("furniture/$query_id/dining-room/post_price/desc")?>' class="filter din">Dining room</a>
									<a href='<?php echo site_url("furniture/$query_id/kitchen/post_price/desc")?>' class="filter kit">Kitchen</a>
									<a href='<?php echo site_url("furniture/$query_id/miscellaneous/post_price/desc")?>' class="filter mis">Miscellaneous</a>
								</div>
							<?php } ?>
						<?php }else if($this->uri->segment(3)=='post_date'){ ?>
								<div class="filter-list">
									<a href='<?php echo site_url("furniture/$query_id/bedroom/post_date/desc")?>' class="filter bed">Bedroom</a>
									<a href='<?php echo site_url("furniture/$query_id/living-room/post_date/desc")?>' class="filter liv">Living room</a>
									<a href='<?php echo site_url("furniture/$query_id/bathroom/post_date/desc")?>' class="filter bath">Bathroom</a>
									<a href='<?php echo site_url("furniture/$query_id/dining-room/post_date/desc")?>' class="filter din">Dining room</a>
									<a href='<?php echo site_url("furniture/$query_id/kitchen/post_date/desc")?>' class="filter kit">Kitchen</a>
									<a href='<?php echo site_url("furniture/$query_id/miscellaneous/post_date/desc")?>' class="filter mis">Miscellaneous</a>
								</div>
						<?php }else if($this->uri->segment(3)=='bedroom'){ ?>
							<?php if($this->uri->segment(4)=='') { ?>
								<div class="filter-list">
									<a href='<?php echo site_url("furniture/$query_id/bedroom/ID/desc")?>' class="filter bed active">Bedroom</a>
									<a href='<?php echo site_url("furniture/$query_id/living-room/ID/desc")?>' class="filter liv">Living room</a>
									<a href='<?php echo site_url("furniture/$query_id/bathroom/ID/desc")?>' class="filter bath">Bathroom</a>
									<a href='<?php echo site_url("furniture/$query_id/dining-room/ID/desc")?>' class="filter din">Dining room</a>
									<a href='<?php echo site_url("furniture/$query_id/kitchen/ID/desc")?>' class="filter kit">Kitchen</a>
									<a href='<?php echo site_url("furniture/$query_id/miscellaneous/ID/desc")?>' class="filter mis">Miscellaneous</a>
								</div>
							<?php } else if($this->uri->segment(4)=='ID') { ?>
								<div class="filter-list">
									<a href='<?php echo site_url("furniture/$query_id/bedroom/ID/desc")?>' class="filter bed active">Bedroom</a>
									<a href='<?php echo site_url("furniture/$query_id/living-room/ID/desc")?>' class="filter liv">Living room</a>
									<a href='<?php echo site_url("furniture/$query_id/bathroom/ID/desc")?>' class="filter bath">Bathroom</a>
									<a href='<?php echo site_url("furniture/$query_id/dining-room/ID/desc")?>' class="filter din">Dining room</a>
									<a href='<?php echo site_url("furniture/$query_id/kitchen/ID/desc")?>' class="filter kit">Kitchen</a>
									<a href='<?php echo site_url("furniture/$query_id/miscellaneous/ID/desc")?>' class="filter mis">Miscellaneous</a>
								</div>
							<?php } else if($this->uri->segment(4)=='post_price') { ?>
								<?php if($this->uri->segment(5)=='') {?>
									<div class="filter-list">
										<a href='<?php echo site_url("furniture/$query_id/bedroom/post_price/asc")?>' class="filter bed active">Bedroom</a>
										<a href='<?php echo site_url("furniture/$query_id/living-room/post_price/asc")?>' class="filter liv">Living room</a>
										<a href='<?php echo site_url("furniture/$query_id/bathroom/post_price/asc")?>' class="filter bath">Bathroom</a>
										<a href='<?php echo site_url("furniture/$query_id/dining-room/post_price/asc")?>' class="filter din">Dining room</a>
										<a href='<?php echo site_url("furniture/$query_id/kitchen/post_price/asc")?>' class="filter kit">Kitchen</a>
										<a href='<?php echo site_url("furniture/$query_id/miscellaneous/post_price/asc")?>' class="filter mis">Miscellaneous</a>
									</div>
								<?php } else if($this->uri->segment(5)=='asc') {?>
									<div class="filter-list">
										<a href='<?php echo site_url("furniture/$query_id/bedroom/post_price/asc")?>' class="filter bed active">Bedroom</a>
										<a href='<?php echo site_url("furniture/$query_id/living-room/post_price/asc")?>' class="filter liv">Living room</a>
										<a href='<?php echo site_url("furniture/$query_id/bathroom/post_price/asc")?>' class="filter bath">Bathroom</a>
										<a href='<?php echo site_url("furniture/$query_id/dining-room/post_price/asc")?>' class="filter din">Dining room</a>
										<a href='<?php echo site_url("furniture/$query_id/kitchen/post_price/asc")?>' class="filter kit">Kitchen</a>
										<a href='<?php echo site_url("furniture/$query_id/miscellaneous/post_price/asc")?>' class="filter mis">Miscellaneous</a>
									</div>
								<?php } else if($this->uri->segment(5)=='desc') {?>
									<div class="filter-list">
										<a href='<?php echo site_url("furniture/$query_id/bedroom/post_price/desc")?>' class="filter bed active">Bedroom</a>
										<a href='<?php echo site_url("furniture/$query_id/living-room/post_price/desc")?>' class="filter liv">Living room</a>
										<a href='<?php echo site_url("furniture/$query_id/bathroom/post_price/desc")?>' class="filter bath">Bathroom</a>
										<a href='<?php echo site_url("furniture/$query_id/dining-room/post_price/desc")?>' class="filter din">Dining room</a>
										<a href='<?php echo site_url("furniture/$query_id/kitchen/post_price/desc")?>' class="filter kit">Kitchen</a>
										<a href='<?php echo site_url("furniture/$query_id/miscellaneous/post_price/desc")?>' class="filter mis">Miscellaneous</a>
									</div>
								<?php } ?>
							<?php } else if($this->uri->segment(4)=='post_date') { ?>
								<div class="filter-list">
									<a href='<?php echo site_url("furniture/$query_id/bedroom/post_date/desc")?>' class="filter bed active">Bedroom</a>
									<a href='<?php echo site_url("furniture/$query_id/living-room/post_date/desc")?>' class="filter liv">Living room</a>
									<a href='<?php echo site_url("furniture/$query_id/bathroom/post_date/desc")?>' class="filter bath">Bathroom</a>
									<a href='<?php echo site_url("furniture/$query_id/dining-room/post_date/desc")?>' class="filter din">Dining room</a>
									<a href='<?php echo site_url("furniture/$query_id/kitchen/post_date/desc")?>' class="filter kit">Kitchen</a>
									<a href='<?php echo site_url("furniture/$query_id/miscellaneous/post_date/desc")?>' class="filter mis">Miscellaneous</a>
								</div>
							<?php } ?>
						<?php }else if($this->uri->segment(3)=='living-room'){ ?>
							<?php if($this->uri->segment(4)=='') { ?>
								<div class="filter-list">
									<a href='<?php echo site_url("furniture/$query_id/bedroom/ID/desc")?>' class="filter bed">Bedroom</a>
									<a href='<?php echo site_url("furniture/$query_id/living-room/ID/desc")?>' class="filter liv active">Living room</a>
									<a href='<?php echo site_url("furniture/$query_id/bathroom/ID/desc")?>' class="filter bath">Bathroom</a>
									<a href='<?php echo site_url("furniture/$query_id/dining-room/ID/desc")?>' class="filter din">Dining room</a>
									<a href='<?php echo site_url("furniture/$query_id/kitchen/ID/desc")?>' class="filter kit">Kitchen</a>
									<a href='<?php echo site_url("furniture/$query_id/miscellaneous/ID/desc")?>' class="filter mis">Miscellaneous</a>
								</div>
							<?php } else if($this->uri->segment(4)=='ID') { ?>
								<div class="filter-list">
									<a href='<?php echo site_url("furniture/$query_id/bedroom/ID/desc")?>' class="filter bed">Bedroom</a>
									<a href='<?php echo site_url("furniture/$query_id/living-room/ID/desc")?>' class="filter liv active">Living room</a>
									<a href='<?php echo site_url("furniture/$query_id/bathroom/ID/desc")?>' class="filter bath">Bathroom</a>
									<a href='<?php echo site_url("furniture/$query_id/dining-room/ID/desc")?>' class="filter din">Dining room</a>
									<a href='<?php echo site_url("furniture/$query_id/kitchen/ID/desc")?>' class="filter kit">Kitchen</a>
									<a href='<?php echo site_url("furniture/$query_id/miscellaneous/ID/desc")?>' class="filter mis">Miscellaneous</a>
								</div>
							<?php } else if($this->uri->segment(4)=='post_price') { ?>
								<?php if($this->uri->segment(5)=='') {?>
									<div class="filter-list">
										<a href='<?php echo site_url("furniture/$query_id/bedroom/post_price/asc")?>' class="filter bed">Bedroom</a>
										<a href='<?php echo site_url("furniture/$query_id/living-room/post_price/asc")?>' class="filter liv active">Living room</a>
										<a href='<?php echo site_url("furniture/$query_id/bathroom/post_price/asc")?>' class="filter bath">Bathroom</a>
										<a href='<?php echo site_url("furniture/$query_id/dining-room/post_price/asc")?>' class="filter din">Dining room</a>
										<a href='<?php echo site_url("furniture/$query_id/kitchen/post_price/asc")?>' class="filter kit">Kitchen</a>
										<a href='<?php echo site_url("furniture/$query_id/miscellaneous/post_price/asc")?>' class="filter mis">Miscellaneous</a>
									</div>
								<?php } else if($this->uri->segment(5)=='asc') {?>
									<div class="filter-list">
										<a href='<?php echo site_url("furniture/$query_id/bedroom/post_price/asc")?>' class="filter bed">Bedroom</a>
										<a href='<?php echo site_url("furniture/$query_id/living-room/post_price/asc")?>' class="filter liv active">Living room</a>
										<a href='<?php echo site_url("furniture/$query_id/bathroom/post_price/asc")?>' class="filter bath">Bathroom</a>
										<a href='<?php echo site_url("furniture/$query_id/dining-room/post_price/asc")?>' class="filter din">Dining room</a>
										<a href='<?php echo site_url("furniture/$query_id/kitchen/post_price/asc")?>' class="filter kit">Kitchen</a>
										<a href='<?php echo site_url("furniture/$query_id/miscellaneous/post_price/asc")?>' class="filter mis">Miscellaneous</a>
									</div>
								<?php } else if($this->uri->segment(5)=='desc') {?>
									<div class="filter-list">
										<a href='<?php echo site_url("furniture/$query_id/bedroom/post_price/desc")?>' class="filter bed">Bedroom</a>
										<a href='<?php echo site_url("furniture/$query_id/living-room/post_price/desc")?>' class="filter liv active">Living room</a>
										<a href='<?php echo site_url("furniture/$query_id/bathroom/post_price/desc")?>' class="filter bath">Bathroom</a>
										<a href='<?php echo site_url("furniture/$query_id/dining-room/post_price/desc")?>' class="filter din">Dining room</a>
										<a href='<?php echo site_url("furniture/$query_id/kitchen/post_price/desc")?>' class="filter kit">Kitchen</a>
										<a href='<?php echo site_url("furniture/$query_id/miscellaneous/post_price/desc")?>' class="filter mis">Miscellaneous</a>
									</div>
								<?php } ?>
							<?php } else if($this->uri->segment(4)=='post_date') { ?>
								<div class="filter-list">
									<a href='<?php echo site_url("furniture/$query_id/bedroom/post_date/desc")?>' class="filter bed">Bedroom</a>
									<a href='<?php echo site_url("furniture/$query_id/living-room/post_date/desc")?>' class="filter liv active">Living room</a>
									<a href='<?php echo site_url("furniture/$query_id/bathroom/post_date/desc")?>' class="filter bath">Bathroom</a>
									<a href='<?php echo site_url("furniture/$query_id/dining-room/post_date/desc")?>' class="filter din">Dining room</a>
									<a href='<?php echo site_url("furniture/$query_id/kitchen/post_date/desc")?>' class="filter kit">Kitchen</a>
									<a href='<?php echo site_url("furniture/$query_id/miscellaneous/post_date/desc")?>' class="filter mis">Miscellaneous</a>
								</div>
							<?php } ?>
						<?php }else if($this->uri->segment(3)=='bathroom'){ ?>
							<?php if($this->uri->segment(4)=='') { ?>
								<div class="filter-list">
									<a href='<?php echo site_url("furniture/$query_id/bedroom/ID/desc")?>' class="filter bed">Bedroom</a>
									<a href='<?php echo site_url("furniture/$query_id/living-room/ID/desc")?>' class="filter liv">Living room</a>
									<a href='<?php echo site_url("furniture/$query_id/bathroom/ID/desc")?>' class="filter bath active">Bathroom</a>
									<a href='<?php echo site_url("furniture/$query_id/dining-room/ID/desc")?>' class="filter din">Dining room</a>
									<a href='<?php echo site_url("furniture/$query_id/kitchen/ID/desc")?>' class="filter kit">Kitchen</a>
									<a href='<?php echo site_url("furniture/$query_id/miscellaneous/ID/desc")?>' class="filter mis">Miscellaneous</a>
								</div>
							<?php } else if($this->uri->segment(4)=='ID') { ?>
								<div class="filter-list">
									<a href='<?php echo site_url("furniture/$query_id/bedroom/ID/desc")?>' class="filter bed">Bedroom</a>
									<a href='<?php echo site_url("furniture/$query_id/living-room/ID/desc")?>' class="filter liv">Living room</a>
									<a href='<?php echo site_url("furniture/$query_id/bathroom/ID/desc")?>' class="filter bath active">Bathroom</a>
									<a href='<?php echo site_url("furniture/$query_id/dining-room/ID/desc")?>' class="filter din">Dining room</a>
									<a href='<?php echo site_url("furniture/$query_id/kitchen/ID/desc")?>' class="filter kit">Kitchen</a>
									<a href='<?php echo site_url("furniture/$query_id/miscellaneous/ID/desc")?>' class="filter mis">Miscellaneous</a>
								</div>
							<?php } else if($this->uri->segment(4)=='post_price') { ?>
								<?php if($this->uri->segment(5)=='') {?>
									<div class="filter-list">
										<a href='<?php echo site_url("furniture/$query_id/bedroom/post_price/asc")?>' class="filter bed">Bedroom</a>
										<a href='<?php echo site_url("furniture/$query_id/living-room/post_price/asc")?>' class="filter liv">Living room</a>
										<a href='<?php echo site_url("furniture/$query_id/bathroom/post_price/asc")?>' class="filter bath active">Bathroom</a>
										<a href='<?php echo site_url("furniture/$query_id/dining-room/post_price/asc")?>' class="filter din">Dining room</a>
										<a href='<?php echo site_url("furniture/$query_id/kitchen/post_price/asc")?>' class="filter kit">Kitchen</a>
										<a href='<?php echo site_url("furniture/$query_id/miscellaneous/post_price/asc")?>' class="filter mis">Miscellaneous</a>
									</div>
								<?php } else if($this->uri->segment(5)=='asc') {?>
									<div class="filter-list">
										<a href='<?php echo site_url("furniture/$query_id/bedroom/post_price/asc")?>' class="filter bed">Bedroom</a>
										<a href='<?php echo site_url("furniture/$query_id/living-room/post_price/asc")?>' class="filter liv">Living room</a>
										<a href='<?php echo site_url("furniture/$query_id/bathroom/post_price/asc")?>' class="filter bath active">Bathroom</a>
										<a href='<?php echo site_url("furniture/$query_id/dining-room/post_price/asc")?>' class="filter din">Dining room</a>
										<a href='<?php echo site_url("furniture/$query_id/kitchen/post_price/asc")?>' class="filter kit">Kitchen</a>
										<a href='<?php echo site_url("furniture/$query_id/miscellaneous/post_price/asc")?>' class="filter mis">Miscellaneous</a>
									</div>
								<?php } else if($this->uri->segment(5)=='desc') {?>
									<div class="filter-list">
										<a href='<?php echo site_url("furniture/$query_id/bedroom/post_price/desc")?>' class="filter bed">Bedroom</a>
										<a href='<?php echo site_url("furniture/$query_id/living-room/post_price/desc")?>' class="filter liv">Living room</a>
										<a href='<?php echo site_url("furniture/$query_id/bathroom/post_price/desc")?>' class="filter bath active">Bathroom</a>
										<a href='<?php echo site_url("furniture/$query_id/dining-room/post_price/desc")?>' class="filter din">Dining room</a>
										<a href='<?php echo site_url("furniture/$query_id/kitchen/post_price/desc")?>' class="filter kit">Kitchen</a>
										<a href='<?php echo site_url("furniture/$query_id/miscellaneous/post_price/desc")?>' class="filter mis">Miscellaneous</a>
									</div>
								<?php } ?>
							<?php } else if($this->uri->segment(4)=='post_date') { ?>
								<div class="filter-list">
									<a href='<?php echo site_url("furniture/$query_id/bedroom/post_date/desc")?>' class="filter bed">Bedroom</a>
									<a href='<?php echo site_url("furniture/$query_id/living-room/post_date/desc")?>' class="filter liv">Living room</a>
									<a href='<?php echo site_url("furniture/$query_id/bathroom/post_date/desc")?>' class="filter bath active">Bathroom</a>
									<a href='<?php echo site_url("furniture/$query_id/dining-room/post_date/desc")?>' class="filter din">Dining room</a>
									<a href='<?php echo site_url("furniture/$query_id/kitchen/post_date/desc")?>' class="filter kit">Kitchen</a>
									<a href='<?php echo site_url("furniture/$query_id/miscellaneous/post_date/desc")?>' class="filter mis">Miscellaneous</a>
								</div>
							<?php } ?>
						<?php }else if($this->uri->segment(3)=='dining-room'){ ?>
							<?php if($this->uri->segment(4)=='') { ?>
								<div class="filter-list">
									<a href='<?php echo site_url("furniture/$query_id/bedroom/ID/desc")?>' class="filter bed">Bedroom</a>
									<a href='<?php echo site_url("furniture/$query_id/living-room/ID/desc")?>' class="filter liv">Living room</a>
									<a href='<?php echo site_url("furniture/$query_id/bathroom/ID/desc")?>' class="filter bath">Bathroom</a>
									<a href='<?php echo site_url("furniture/$query_id/dining-room/ID/desc")?>' class="filter din active">Dining room</a>
									<a href='<?php echo site_url("furniture/$query_id/kitchen/ID/desc")?>' class="filter kit">Kitchen</a>
									<a href='<?php echo site_url("furniture/$query_id/miscellaneous/ID/desc")?>' class="filter mis">Miscellaneous</a>
								</div>
							<?php } else if($this->uri->segment(4)=='ID') { ?>
								<div class="filter-list">
									<a href='<?php echo site_url("furniture/$query_id/bedroom/ID/desc")?>' class="filter bed">Bedroom</a>
									<a href='<?php echo site_url("furniture/$query_id/living-room/ID/desc")?>' class="filter liv">Living room</a>
									<a href='<?php echo site_url("furniture/$query_id/bathroom/ID/desc")?>' class="filter bath">Bathroom</a>
									<a href='<?php echo site_url("furniture/$query_id/dining-room/ID/desc")?>' class="filter din active">Dining room</a>
									<a href='<?php echo site_url("furniture/$query_id/kitchen/ID/desc")?>' class="filter kit">Kitchen</a>
									<a href='<?php echo site_url("furniture/$query_id/miscellaneous/ID/desc")?>' class="filter mis">Miscellaneous</a>
								</div>
							<?php } else if($this->uri->segment(4)=='post_price') { ?>
								<?php if($this->uri->segment(5)=='') {?>
									<div class="filter-list">
										<a href='<?php echo site_url("furniture/$query_id/bedroom/post_price/asc")?>' class="filter bed">Bedroom</a>
										<a href='<?php echo site_url("furniture/$query_id/living-room/post_price/asc")?>' class="filter liv">Living room</a>
										<a href='<?php echo site_url("furniture/$query_id/bathroom/post_price/asc")?>' class="filter bath">Bathroom</a>
										<a href='<?php echo site_url("furniture/$query_id/dining-room/post_price/asc")?>' class="filter din active">Dining room</a>
										<a href='<?php echo site_url("furniture/$query_id/kitchen/post_price/asc")?>' class="filter kit">Kitchen</a>
										<a href='<?php echo site_url("furniture/$query_id/miscellaneous/post_price/asc")?>' class="filter mis">Miscellaneous</a>
									</div>
								<?php } else if($this->uri->segment(5)=='asc') {?>
									<div class="filter-list">
										<a href='<?php echo site_url("furniture/$query_id/bedroom/post_price/asc")?>' class="filter bed">Bedroom</a>
										<a href='<?php echo site_url("furniture/$query_id/living-room/post_price/asc")?>' class="filter liv">Living room</a>
										<a href='<?php echo site_url("furniture/$query_id/bathroom/post_price/asc")?>' class="filter bath">Bathroom</a>
										<a href='<?php echo site_url("furniture/$query_id/dining-room/post_price/asc")?>' class="filter din active">Dining room</a>
										<a href='<?php echo site_url("furniture/$query_id/kitchen/post_price/asc")?>' class="filter kit">Kitchen</a>
										<a href='<?php echo site_url("furniture/$query_id/miscellaneous/post_price/asc")?>' class="filter mis">Miscellaneous</a>
									</div>
								<?php } else if($this->uri->segment(5)=='desc') {?>
									<div class="filter-list">
										<a href='<?php echo site_url("furniture/$query_id/bedroom/post_price/desc")?>' class="filter bed">Bedroom</a>
										<a href='<?php echo site_url("furniture/$query_id/living-room/post_price/desc")?>' class="filter liv">Living room</a>
										<a href='<?php echo site_url("furniture/$query_id/bathroom/post_price/desc")?>' class="filter bath">Bathroom</a>
										<a href='<?php echo site_url("furniture/$query_id/dining-room/post_price/desc")?>' class="filter din active">Dining room</a>
										<a href='<?php echo site_url("furniture/$query_id/kitchen/post_price/desc")?>' class="filter kit">Kitchen</a>
										<a href='<?php echo site_url("furniture/$query_id/miscellaneous/post_price/desc")?>' class="filter mis">Miscellaneous</a>
									</div>
								<?php } ?>
							<?php } else if($this->uri->segment(4)=='post_date') { ?>
								<div class="filter-list">
									<a href='<?php echo site_url("furniture/$query_id/bedroom/post_date/desc")?>' class="filter bed">Bedroom</a>
									<a href='<?php echo site_url("furniture/$query_id/living-room/post_date/desc")?>' class="filter liv">Living room</a>
									<a href='<?php echo site_url("furniture/$query_id/bathroom/post_date/desc")?>' class="filter bath">Bathroom</a>
									<a href='<?php echo site_url("furniture/$query_id/dining-room/post_date/desc")?>' class="filter din active">Dining room</a>
									<a href='<?php echo site_url("furniture/$query_id/kitchen/post_date/desc")?>' class="filter kit">Kitchen</a>
									<a href='<?php echo site_url("furniture/$query_id/miscellaneous/post_date/desc")?>' class="filter mis">Miscellaneous</a>
								</div>
							<?php } ?>
						<?php }else if($this->uri->segment(3)=='kitchen'){ ?>
							<?php if($this->uri->segment(4)=='') { ?>
								<div class="filter-list">
									<a href='<?php echo site_url("furniture/$query_id/bedroom/ID/desc")?>' class="filter bed">Bedroom</a>
									<a href='<?php echo site_url("furniture/$query_id/living-room/ID/desc")?>' class="filter liv">Living room</a>
									<a href='<?php echo site_url("furniture/$query_id/bathroom/ID/desc")?>' class="filter bath">Bathroom</a>
									<a href='<?php echo site_url("furniture/$query_id/dining-room/ID/desc")?>' class="filter din">Dining room</a>
									<a href='<?php echo site_url("furniture/$query_id/kitchen/ID/desc")?>' class="filter kit active">Kitchen</a>
									<a href='<?php echo site_url("furniture/$query_id/miscellaneous/ID/desc")?>' class="filter mis">Miscellaneous</a>
								</div>
							<?php } else if($this->uri->segment(4)=='ID') { ?>
								<div class="filter-list">
									<a href='<?php echo site_url("furniture/$query_id/bedroom/ID/desc")?>' class="filter bed">Bedroom</a>
									<a href='<?php echo site_url("furniture/$query_id/living-room/ID/desc")?>' class="filter liv">Living room</a>
									<a href='<?php echo site_url("furniture/$query_id/bathroom/ID/desc")?>' class="filter bath">Bathroom</a>
									<a href='<?php echo site_url("furniture/$query_id/dining-room/ID/desc")?>' class="filter din">Dining room</a>
									<a href='<?php echo site_url("furniture/$query_id/kitchen/ID/desc")?>' class="filter kit active">Kitchen</a>
									<a href='<?php echo site_url("furniture/$query_id/miscellaneous/ID/desc")?>' class="filter mis">Miscellaneous</a>
								</div>
							<?php } else if($this->uri->segment(4)=='post_price') { ?>
								<?php if($this->uri->segment(5)=='') {?>
									<div class="filter-list">
										<a href='<?php echo site_url("furniture/$query_id/bedroom/post_price/asc")?>' class="filter bed">Bedroom</a>
										<a href='<?php echo site_url("furniture/$query_id/living-room/post_price/asc")?>' class="filter liv">Living room</a>
										<a href='<?php echo site_url("furniture/$query_id/bathroom/post_price/asc")?>' class="filter bath">Bathroom</a>
										<a href='<?php echo site_url("furniture/$query_id/dining-room/post_price/asc")?>' class="filter din">Dining room</a>
										<a href='<?php echo site_url("furniture/$query_id/kitchen/post_price/asc")?>' class="filter kit active">Kitchen</a>
										<a href='<?php echo site_url("furniture/$query_id/miscellaneous/post_price/asc")?>' class="filter mis">Miscellaneous</a>
									</div>
								<?php } else if($this->uri->segment(5)=='asc') {?>
									<div class="filter-list">
										<a href='<?php echo site_url("furniture/$query_id/bedroom/post_price/asc")?>' class="filter bed">Bedroom</a>
										<a href='<?php echo site_url("furniture/$query_id/living-room/post_price/asc")?>' class="filter liv">Living room</a>
										<a href='<?php echo site_url("furniture/$query_id/bathroom/post_price/asc")?>' class="filter bath">Bathroom</a>
										<a href='<?php echo site_url("furniture/$query_id/dining-room/post_price/asc")?>' class="filter din">Dining room</a>
										<a href='<?php echo site_url("furniture/$query_id/kitchen/post_price/asc")?>' class="filter kit active">Kitchen</a>
										<a href='<?php echo site_url("furniture/$query_id/miscellaneous/post_price/asc")?>' class="filter mis">Miscellaneous</a>
									</div>
								<?php } else if($this->uri->segment(5)=='desc') {?>
									<div class="filter-list">
										<a href='<?php echo site_url("furniture/$query_id/bedroom/post_price/desc")?>' class="filter bed">Bedroom</a>
										<a href='<?php echo site_url("furniture/$query_id/living-room/post_price/desc")?>' class="filter liv">Living room</a>
										<a href='<?php echo site_url("furniture/$query_id/bathroom/post_price/desc")?>' class="filter bath">Bathroom</a>
										<a href='<?php echo site_url("furniture/$query_id/dining-room/post_price/desc")?>' class="filter din">Dining room</a>
										<a href='<?php echo site_url("furniture/$query_id/kitchen/post_price/desc")?>' class="filter kit active">Kitchen</a>
										<a href='<?php echo site_url("furniture/$query_id/miscellaneous/post_price/desc")?>' class="filter mis">Miscellaneous</a>
									</div>
								<?php } ?>
							<?php } else if($this->uri->segment(4)=='post_date') { ?>
								<div class="filter-list">
									<a href='<?php echo site_url("furniture/$query_id/bedroom/post_date/desc")?>' class="filter bed">Bedroom</a>
									<a href='<?php echo site_url("furniture/$query_id/living-room/post_date/desc")?>' class="filter liv">Living room</a>
									<a href='<?php echo site_url("furniture/$query_id/bathroom/post_date/desc")?>' class="filter bath">Bathroom</a>
									<a href='<?php echo site_url("furniture/$query_id/dining-room/post_date/desc")?>' class="filter din">Dining room</a>
									<a href='<?php echo site_url("furniture/$query_id/kitchen/post_date/desc")?>' class="filter kit active">Kitchen</a>
									<a href='<?php echo site_url("furniture/$query_id/miscellaneous/post_date/desc")?>' class="filter mis">Miscellaneous</a>
								</div>
							<?php } ?>
						<?php }else if($this->uri->segment(3)=='miscellaneous'){ ?>
							<?php if($this->uri->segment(4)=='') { ?>
								<div class="filter-list">
									<a href='<?php echo site_url("furniture/$query_id/bedroom/ID/desc")?>' class="filter bed">Bedroom</a>
									<a href='<?php echo site_url("furniture/$query_id/living-room/ID/desc")?>' class="filter liv">Living room</a>
									<a href='<?php echo site_url("furniture/$query_id/bathroom/ID/desc")?>' class="filter bath">Bathroom</a>
									<a href='<?php echo site_url("furniture/$query_id/dining-room/ID/desc")?>' class="filter din">Dining room</a>
									<a href='<?php echo site_url("furniture/$query_id/kitchen/ID/desc")?>' class="filter kit">Kitchen</a>
									<a href='<?php echo site_url("furniture/$query_id/miscellaneous/ID/desc")?>' class="filter mis active">Miscellaneous</a>
								</div>
							<?php } else if($this->uri->segment(4)=='ID') { ?>
								<div class="filter-list">
									<a href='<?php echo site_url("furniture/$query_id/bedroom/ID/desc")?>' class="filter bed">Bedroom</a>
									<a href='<?php echo site_url("furniture/$query_id/living-room/ID/desc")?>' class="filter liv">Living room</a>
									<a href='<?php echo site_url("furniture/$query_id/bathroom/ID/desc")?>' class="filter bath">Bathroom</a>
									<a href='<?php echo site_url("furniture/$query_id/dining-room/ID/desc")?>' class="filter din">Dining room</a>
									<a href='<?php echo site_url("furniture/$query_id/kitchen/ID/desc")?>' class="filter kit">Kitchen</a>
									<a href='<?php echo site_url("furniture/$query_id/miscellaneous/ID/desc")?>' class="filter mis active">Miscellaneous</a>
								</div>
							<?php } else if($this->uri->segment(4)=='post_price') { ?>
								<?php if($this->uri->segment(5)=='') {?>
									<div class="filter-list">
										<a href='<?php echo site_url("furniture/$query_id/bedroom/post_price/asc")?>' class="filter bed">Bedroom</a>
										<a href='<?php echo site_url("furniture/$query_id/living-room/post_price/asc")?>' class="filter liv">Living room</a>
										<a href='<?php echo site_url("furniture/$query_id/bathroom/post_price/asc")?>' class="filter bath">Bathroom</a>
										<a href='<?php echo site_url("furniture/$query_id/dining-room/post_price/asc")?>' class="filter din">Dining room</a>
										<a href='<?php echo site_url("furniture/$query_id/kitchen/post_price/asc")?>' class="filter kit">Kitchen</a>
										<a href='<?php echo site_url("furniture/$query_id/miscellaneous/post_price/asc")?>' class="filter mis active">Miscellaneous</a>
									</div>
								<?php } else if($this->uri->segment(5)=='asc') {?>
									<div class="filter-list">
										<a href='<?php echo site_url("furniture/$query_id/bedroom/post_price/asc")?>' class="filter bed">Bedroom</a>
										<a href='<?php echo site_url("furniture/$query_id/living-room/post_price/asc")?>' class="filter liv">Living room</a>
										<a href='<?php echo site_url("furniture/$query_id/bathroom/post_price/asc")?>' class="filter bath">Bathroom</a>
										<a href='<?php echo site_url("furniture/$query_id/dining-room/post_price/asc")?>' class="filter din">Dining room</a>
										<a href='<?php echo site_url("furniture/$query_id/kitchen/post_price/asc")?>' class="filter kit">Kitchen</a>
										<a href='<?php echo site_url("furniture/$query_id/miscellaneous/post_price/asc")?>' class="filter mis active">Miscellaneous</a>
									</div>
								<?php } else if($this->uri->segment(5)=='desc') {?>
									<div class="filter-list">
										<a href='<?php echo site_url("furniture/$query_id/bedroom/post_price/desc")?>' class="filter bed">Bedroom</a>
										<a href='<?php echo site_url("furniture/$query_id/living-room/post_price/desc")?>' class="filter liv">Living room</a>
										<a href='<?php echo site_url("furniture/$query_id/bathroom/post_price/desc")?>' class="filter bath">Bathroom</a>
										<a href='<?php echo site_url("furniture/$query_id/dining-room/post_price/desc")?>' class="filter din">Dining room</a>
										<a href='<?php echo site_url("furniture/$query_id/kitchen/post_price/desc")?>' class="filter kit">Kitchen</a>
										<a href='<?php echo site_url("furniture/$query_id/miscellaneous/post_price/desc")?>' class="filter mis active">Miscellaneous</a>
									</div>
								<?php } ?>
							<?php } else if($this->uri->segment(4)=='post_date') { ?>
								<div class="filter-list">
									<a href='<?php echo site_url("furniture/$query_id/bedroom/post_date/desc")?>' class="filter bed">Bedroom</a>
									<a href='<?php echo site_url("furniture/$query_id/living-room/post_date/desc")?>' class="filter liv">Living room</a>
									<a href='<?php echo site_url("furniture/$query_id/bathroom/post_date/desc")?>' class="filter bath">Bathroom</a>
									<a href='<?php echo site_url("furniture/$query_id/dining-room/post_date/desc")?>' class="filter din">Dining room</a>
									<a href='<?php echo site_url("furniture/$query_id/kitchen/post_date/desc")?>' class="filter kit">Kitchen</a>
									<a href='<?php echo site_url("furniture/$query_id/miscellaneous/post_date/desc")?>' class="filter mis active">Miscellaneous</a>
								</div>
							<?php } ?>
						<?php } ?>
					<?php } else { ?>
						<div class="filter-list">
							<a href='<?php echo site_url("furniture/$query_id/bedroom/ID/desc")?>' class="filter bed">Bedroom</a>
							<a href='<?php echo site_url("furniture/$query_id/living-room/ID/desc")?>' class="filter liv">Living room</a>
							<a href='<?php echo site_url("furniture/$query_id/bathroom/ID/desc")?>' class="filter bath">Bathroom</a>
							<a href='<?php echo site_url("furniture/$query_id/dining-room/ID/desc")?>' class="filter din">Dining room</a>
							<a href='<?php echo site_url("furniture/$query_id/kitchen/ID/desc")?>' class="filter kit">Kitchen</a>
							<a href='<?php echo site_url("furniture/$query_id/miscellaneous/ID/desc")?>' class="filter mis">Miscellaneous</a>
						</div>
					<?php } ?>
					
					<?php echo form_open('search'); ?>
						<div class="search-edu"><?php echo form_input('post_title', set_value('post_title'), 'Placeholder="Search"'); ?><input type="hidden" name="post_type" value="furniture"><input type="submit" style="position: absolute; left: -9999px"/><div class="search-icon"></div></div>
					<?php echo form_close(); ?>
				</div>
				<div class="furniture-listing clearfix">
					<div class="furniture-item-list">
						<?php foreach($records as $key) { ?>
							<div class="furniture-item-list">
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
											          'title' => $key->post_title,
												);
											?>
											<?php echo img($attached_image);?>
											<?php if($key->post_featured == 1){ ?><div class="featured-listing-text">Featured Listing</div> <?php } ?>
									</div>
								</a>
								<?php $date = date_create($key->post_date); ?>
								<div class="featured-listing-name"><?php echo $key->post_title;?></div>
								<div class="featured-listing-price"><?php echo round($key->post_price);?> QR</div>
								<div class="featured-listing-date"><?php echo date_format($date, 'F j, Y');?></div>
								<a class="featured-listing-view" href="<?php echo site_url('furniture/'.$key->post_slug);?>">View Details</a>
							</div>
						<?php } ?>
					</div>
				</div>
				<?php if (strlen($pagination)): ?>
				<div class="pagination">
					<ul><?php echo $pagination; ?></ul>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
