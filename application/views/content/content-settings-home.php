	<?php foreach ($option_data as $key) {
			$post_option_data = $key->option_data;
		}
		foreach (json_decode($post_option_data) as $key => $value) {
			$option[$key] = $value;
		}
	?>
	<div class="home-main clearfix">
		<div class="container">
			<?php include('tab/tab-area.php');?>
			<div class="tab-area clearfix">
				<div class="title">Settings</div>
				<?php if($this->session->userdata('logged_in')['user_type'] == 'admin') { ?>
					<a href="<?php echo site_url('profile/admin/settings')?>"><div class="tab <?php echo $this->uri->segment(4) == '' ? 'active':''; ?>"><span class="text u">Property</span></div></a>
					<a href="<?php echo site_url('profile/admin/settings/furniture')?>"><div class="tab <?php echo $this->uri->segment(4) == 'furniture' ? 'active':''; ?>"><span class="text u">Furniture</span></div></a>
					<a href="<?php echo site_url('profile/admin/settings/education')?>"><div class="tab <?php echo $this->uri->segment(4) == 'education' ? 'active':''; ?>"><span class="text u">Education</span></div></a>
					<a href="<?php echo site_url('profile/admin/settings/home')?>"><div class="tab <?php echo $this->uri->segment(4) == 'home' ? 'active':''; ?>"><span class="text u">Home</span></div></a>
					<a href="<?php echo site_url('profile/admin/settings/user')?>"><div class="tab <?php echo $this->uri->segment(4) == 'user' ? 'active':''; ?>"><span class="text u">User</span></div></a>
				<?php } ?>
			</div>
			<div class="upload-area clearfix">
				<form method="post" action="<?php echo site_url('modify_option'); ?>">
				<div class="left">
					<h1>Home Left First Property</h1>
					<div class="filed ex">
						<span class="info">ID : </span><input	type="text" placeholder="Home Left First Property" name='option_1' readonly class="drop" value="<?php echo $option['option_1'];?>">
						<span class="arrow"></span>
						<div class="drop-category">
							<?php foreach ($post_property as $key) { ?>
								<div class="drop-item" item-value="<?php echo $key->ID ?>"><?php echo $key->ID ?></div>
							<?php } ?>
						</div>
					</div>
					<h1>Home Left Second Property</h1>
					<div class="filed ex">
						<span class="info">ID : </span><input	type="text" placeholder="Home Left Second Property" name='option_2' readonly class="drop" value="<?php echo $option['option_2'];?>">
						<span class="arrow"></span>
						<div class="drop-category">
							<?php foreach ($post_property as $key) { ?>
								<div class="drop-item" item-value="<?php echo $key->ID ?>"><?php echo $key->ID ?></div>
							<?php } ?>
						</div>
					</div>
					<h1>Home Center Property</h1>
					<div class="filed ex">
						<span class="info">ID : </span><input	type="text" placeholder="Home Center Property" name='option_3' readonly class="drop" value="<?php echo $option['option_3'];?>">
						<span class="arrow"></span>
						<div class="drop-category">
							<?php foreach ($post_property as $key) { ?>
								<div class="drop-item" item-value="<?php echo $key->ID ?>"><?php echo $key->ID ?></div>
							<?php } ?>
						</div>
					</div>
					<h1>Popular Spots First Property</h1>
					<div class="filed ex">
						<span class="info">ID : </span><input	type="text" placeholder="Popular Spots First Property" name='option_4' readonly class="drop" value="<?php echo $option['option_4'];?>">
						<span class="arrow"></span>
						<div class="drop-category">
							<?php foreach ($post_property as $key) { ?>
								<div class="drop-item" item-value="<?php echo $key->ID ?>"><?php echo $key->ID ?></div>
							<?php } ?>
						</div>
					</div>
					<h1>Popular Spots Second Property</h1>
					<div class="filed ex">
						<span class="info">ID : </span><input	type="text" placeholder="Popular Spots Second Property" name='option_5' readonly class="drop" value="<?php echo $option['option_5'];?>">
						<span class="arrow"></span>
						<div class="drop-category">
							<?php foreach ($post_property as $key) { ?>
								<div class="drop-item" item-value="<?php echo $key->ID ?>"><?php echo $key->ID ?></div>
							<?php } ?>
						</div>
					</div>
					<h1>Popular Spots Third Property</h1>
					<div class="filed ex">
						<span class="info">ID : </span><input	type="text" placeholder="Popular Spots Property" name='option_6' readonly class="drop" value="<?php echo $option['option_6'];?>">
						<span class="arrow"></span>
						<div class="drop-category">
							<?php foreach ($post_property as $key) { ?>
								<div class="drop-item" item-value="<?php echo $key->ID ?>"><?php echo $key->ID ?></div>
							<?php } ?>
						</div>
					</div>
					<h1>Furniture First Property</h1>
					<div class="filed ex">
						<span class="info">ID : </span><input	type="text" placeholder="Furniture First Property" name='option_7' readonly class="drop" value="<?php echo $option['option_7'];?>">
						<span class="arrow"></span>
						<div class="drop-category">
							<?php foreach ($post_furniture as $key) { ?>
								<div class="drop-item" item-value="<?php echo $key->ID ?>"><?php echo $key->ID ?></div>
							<?php } ?>
						</div>
					</div>
					<h1>Furniture Second Property</h1>
					<div class="filed ex">
						<span class="info">ID : </span><input	type="text" placeholder="Furniture Second Property" name='option_8' readonly class="drop" value="<?php echo $option['option_8'];?>">
						<span class="arrow"></span>
						<div class="drop-category">
							<?php foreach ($post_furniture as $key) { ?>
								<div class="drop-item" item-value="<?php echo $key->ID ?>"><?php echo $key->ID ?></div>
							<?php } ?>
						</div>
					</div>
					<h1>Furniture Third Property</h1>
					<div class="filed ex">
						<span class="info">ID : </span><input	type="text" placeholder="Furniture Third Property" name='option_9' readonly class="drop" value="<?php echo $option['option_9'];?>">
						<span class="arrow"></span>
						<div class="drop-category">
							<?php foreach ($post_furniture as $key) { ?>
								<div class="drop-item" item-value="<?php echo $key->ID ?>"><?php echo $key->ID ?></div>
							<?php } ?>
						</div>
					</div>
				</div>
				<div class="right">
					<h1>Education 1</h1>
					<div class="filed ex">
						<span class="info">ID : </span><input	type="text" placeholder="Education 1" name='option_10' readonly class="drop" value="<?php echo $option['option_10'];?>">
						<span class="arrow"></span>
						<div class="drop-category">
							<?php foreach ($post_education as $key) { ?>
								<div class="drop-item" item-value="<?php echo $key->ID ?>"><?php echo $key->ID ?></div>
							<?php } ?>
						</div>
					</div>
					<h1>Education 2</h1>
					<div class="filed ex">
						<span class="info">ID : </span><input	type="text" placeholder="Education 2" name='option_11' readonly class="drop" value="<?php echo $option['option_11'];?>">
						<span class="arrow"></span>
						<div class="drop-category">
							<?php foreach ($post_education as $key) { ?>
								<div class="drop-item" item-value="<?php echo $key->ID ?>"><?php echo $key->ID ?></div>
							<?php } ?>
						</div>
					</div>
					<h1>Education 3</h1>
					<div class="filed ex">
						<span class="info">ID : </span><input	type="text" placeholder="Education 3" name='option_12' readonly class="drop" value="<?php echo $option['option_12'];?>">
						<span class="arrow"></span>
						<div class="drop-category">
							<?php foreach ($post_education as $key) { ?>
								<div class="drop-item" item-value="<?php echo $key->ID ?>"><?php echo $key->ID ?></div>
							<?php } ?>
						</div>
					</div>
					<h1>Education 4</h1>
					<div class="filed ex">
						<span class="info">ID : </span><input	type="text" placeholder="Education 4" name='option_13' readonly class="drop" value="<?php echo $option['option_13'];?>">
						<span class="arrow"></span>
						<div class="drop-category">
							<?php foreach ($post_education as $key) { ?>
								<div class="drop-item" item-value="<?php echo $key->ID ?>"><?php echo $key->ID ?></div>
							<?php } ?>
						</div>
					</div>
					<h1>Education 5</h1>
					<div class="filed ex">
						<span class="info">ID : </span><input	type="text" placeholder="Education 5" name='option_14' readonly class="drop" value="<?php echo $option['option_14'];?>">
						<span class="arrow"></span>
						<div class="drop-category">
							<?php foreach ($post_education as $key) { ?>
								<div class="drop-item" item-value="<?php echo $key->ID ?>"><?php echo $key->ID ?></div>
							<?php } ?>
						</div>
					</div>
					<h1>Education 6</h1>
					<div class="filed ex">
						<span class="info">ID : </span><input	type="text" placeholder="Education 6" name='option_15' readonly class="drop" value="<?php echo $option['option_15'];?>">
						<span class="arrow"></span>
						<div class="drop-category">
							<?php foreach ($post_education as $key) { ?>
								<div class="drop-item" item-value="<?php echo $key->ID ?>"><?php echo $key->ID ?></div>
							<?php } ?>
						</div>
					</div>
					<h1>Education 7</h1>
					<div class="filed ex">
						<span class="info">ID : </span><input	type="text" placeholder="Education 7" name='option_16' readonly class="drop" value="<?php echo $option['option_16'];?>">
						<span class="arrow"></span>
						<div class="drop-category">
							<?php foreach ($post_education as $key) { ?>
								<div class="drop-item" item-value="<?php echo $key->ID ?>"><?php echo $key->ID ?></div>
							<?php } ?>
						</div>
					</div>
					<h1>Education 8</h1>
					<div class="filed ex">
						<span class="info">ID : </span><input	type="text" placeholder="Education 8" name='option_17' readonly class="drop" value="<?php echo $option['option_17'];?>">
						<span class="arrow"></span>
						<div class="drop-category">
							<?php foreach ($post_education as $key) { ?>
								<div class="drop-item" item-value="<?php echo $key->ID ?>"><?php echo $key->ID ?></div>
							<?php } ?>
						</div>
					</div>
					<h1>Education 9</h1>
					<div class="filed ex">
						<span class="info">ID : </span><input	type="text" placeholder="Education 9" name='option_18' readonly class="drop" value="<?php echo $option['option_18'];?>">
						<span class="arrow"></span>
						<div class="drop-category">
							<?php foreach ($post_education as $key) { ?>
								<div class="drop-item" item-value="<?php echo $key->ID ?>"><?php echo $key->ID ?></div>
							<?php } ?>
						</div>
					</div>
					<h1>Header javascript</h1>
					<div class="filed ex">
						<textarea placeholder="Header javascript" name="option_19"><?php echo $option['option_19'];?></textarea>
					</div>
					<h1>First left SEO Body text</h1>
					<div class="filed ex">
						<textarea placeholder="First left SEO Body text" name="option_20"><?php echo $option['option_20'];?></textarea>
					</div>
					<h1>Second left SEO Body text</h1>
					<div class="filed ex">
						<textarea placeholder="Second left SEO Body text" name="option_21"><?php echo $option['option_21'];?></textarea>
					</div>
					<h1>First right SEO Body text</h1>
					<div class="filed ex">
						<textarea placeholder="First right SEO Body text" name="option_22"><?php echo $option['option_22'];?></textarea>
					</div>
					<h1>Second right SEO Body text</h1>
					<div class="filed ex">
						<textarea placeholder="Second right SEO Body text" name="option_23"><?php echo $option['option_23'];?></textarea>
					</div>
					<input type="submit" class="submit" value="Submit">
				</div>
				</form>
			</div> 
		</div>
	</div>