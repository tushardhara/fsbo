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
				<div style="display:inline-block; float:left; margin-right:10px;">
					<h1>Home Page Options</h1>
					<label>Home Left First Property :</label><br/>
					<select name='option_1'>
						<?php foreach ($post_property as $key) { ?>
						  <option value="<?php echo $key->ID ?>" <?php if($option['option_1']==$key->ID){echo "selected";} ?> ><?php echo $key->post_title ?></option>
						<?php } ?>
					</select>
					<br/><br/>
					<label>Home Left Second Property :</label><br/>
					<select name='option_2'>
						<?php foreach ($post_property as $key) { ?>
						  <option value="<?php echo $key->ID ?>" <?php if($option['option_2']==$key->ID){echo "selected";} ?> ><?php echo $key->post_title ?></option>
						<?php } ?>
					</select>
					<br/><br/>
					<label>Home Center Property :</label><br/>
					<select name='option_3'>
						<?php foreach ($post_property as $key) { ?>
						  <option value="<?php echo $key->ID ?>" <?php if($option['option_3']==$key->ID){echo "selected";} ?> ><?php echo $key->post_title ?></option>
						<?php } ?>
					</select>
					<br/><br/>
					<label>Popular Spots First Property :</label><br/>
					<select name='option_4'>
						<?php foreach ($post_property as $key) { ?>
						  <option value="<?php echo $key->ID ?>" <?php if($option['option_4']==$key->ID){echo "selected";} ?> ><?php echo $key->post_title ?></option>
						<?php } ?>
					</select>
					<br/><br/>
					<label>Popular Spots Second Property :</label><br/>
					<select name='option_5'>
						<?php foreach ($post_property as $key) { ?>
						  <option value="<?php echo $key->ID ?>" <?php if($option['option_5']==$key->ID){echo "selected";} ?> ><?php echo $key->post_title ?></option>
						<?php } ?>
					</select>
					<br/><br/>
					<label>Popular Spots Third Property :</label><br/>
					<select name='option_6'>
						<?php foreach ($post_property as $key) { ?>
						  <option value="<?php echo $key->ID ?>" <?php if($option['option_6']==$key->ID){echo "selected";} ?> ><?php echo $key->post_title ?></option>
						<?php } ?>
					</select>
					<br/><br/>
					<label>Furniture First Property :</label><br/>
					<select name='option_7'>
						<?php foreach ($post_furniture as $key) { ?>
						  <option value="<?php echo $key->ID ?>" <?php if($option['option_7']==$key->ID){echo "selected";} ?> ><?php echo $key->post_title ?></option>
						<?php } ?>
					</select>
					<br/><br/>
					<label>Furniture Second Property :</label><br/>
					<select name='option_8'>
						<?php foreach ($post_furniture as $key) { ?>
						  <option value="<?php echo $key->ID ?>" <?php if($option['option_8']==$key->ID){echo "selected";} ?> ><?php echo $key->post_title ?></option>
						<?php } ?>
					</select>
					<br/><br/>
					<label>Furniture Third Property :</label><br/>
					<select name='option_9'>
						<?php foreach ($post_furniture as $key) { ?>
						  <option value="<?php echo $key->ID ?>" <?php if($option['option_9']==$key->ID){echo "selected";} ?> ><?php echo $key->post_title ?></option>
						<?php } ?>
					</select>
					<br/><br/>
					<label>Education 1 :</label><br/>
					<select name='option_10'>
						<?php foreach ($post_education as $key) { ?>
						  <option value="<?php echo $key->ID ?>" <?php if($option['option_10']==$key->ID){echo "selected";} ?> ><?php echo $key->post_title ?></option>
						<?php } ?>
					</select>
					<br/><br/>
					<label>Education 2 :</label><br/>
					<select name='option_11'>
						<?php foreach ($post_education as $key) { ?>
						  <option value="<?php echo $key->ID ?>" <?php if($option['option_11']==$key->ID){echo "selected";} ?> ><?php echo $key->post_title ?></option>
						<?php } ?>
					</select>
					<br/><br/>
					<label>Education 3 :</label><br/>
					<select name='option_12'>
						<?php foreach ($post_education as $key) { ?>
						  <option value="<?php echo $key->ID ?>" <?php if($option['option_12']==$key->ID){echo "selected";} ?> ><?php echo $key->post_title ?></option>
						<?php } ?>
					</select>
					<br/><br/>
					<label>Education 4 :</label><br/>
					<select name='option_13'>
						<?php foreach ($post_education as $key) { ?>
						  <option value="<?php echo $key->ID ?>" <?php if($option['option_13']==$key->ID){echo "selected";} ?> ><?php echo $key->post_title ?></option>
						<?php } ?>
					</select>
					<br/><br/>
					<label>Education 5 :</label><br/>
					<select name='option_14'>
						<?php foreach ($post_education as $key) { ?>
						  <option value="<?php echo $key->ID ?>" <?php if($option['option_14']==$key->ID){echo "selected";} ?> ><?php echo $key->post_title ?></option>
						<?php } ?>
					</select>
					<br/><br/>
					<label>Education 6 :</label><br/>
					<select name='option_15'>
						<?php foreach ($post_education as $key) { ?>
						  <option value="<?php echo $key->ID ?>" <?php if($option['option_15']==$key->ID){echo "selected";} ?> ><?php echo $key->post_title ?></option>
						<?php } ?>
					</select>
					<br/><br/>
					<label>Education 7 :</label><br/>
					<select name='option_16'>
						<?php foreach ($post_education as $key) { ?>
						  <option value="<?php echo $key->ID ?>" <?php if($option['option_16']==$key->ID){echo "selected";} ?> ><?php echo $key->post_title ?></option>
						<?php } ?>
					</select>
					<br/><br/>
					<label>Education 8 :</label><br/>
					<select name='option_17'>
						<?php foreach ($post_education as $key) { ?>
						  <option value="<?php echo $key->ID ?>" <?php if($option['option_17']==$key->ID){echo "selected";} ?> ><?php echo $key->post_title ?></option>
						<?php } ?>
					</select>
					<br/><br/>
					<label>Education 9 :</label><br/>
					<select name='option_18'>
						<?php foreach ($post_education as $key) { ?>
						  <option value="<?php echo $key->ID ?>" <?php if($option['option_18']==$key->ID){echo "selected";} ?> ><?php echo $key->post_title ?></option>
						<?php } ?>
					</select>
				</div>
				<div style="display:inline-block; float:left; margin-right:10px;">
					<h1>Home Page Ads</h1>
					<label>Header javascript</label><br/>
					<textarea placeholder="Header javascript" name="option_19" rows="10" cols="30"><?php echo $option['option_19'];?></textarea>
					<br/><br/>
					<label>First left Ads Body text</label><br/>
					<textarea placeholder="First left Ads Body text" name="option_20" rows="8" cols="30"><?php echo $option['option_20'];?></textarea>
					<br/><br/>
					<label>Second left Ads Body text</label><br/>
					<textarea placeholder="Second left Ads Body text" name="option_21" rows="8" cols="30"><?php echo $option['option_21'];?></textarea>
					<br/><br/>
					<label>First right Ads Body text</label><br/>
					<textarea placeholder="First right Ads Body text" name="option_22" rows="8" cols="30"><?php echo $option['option_22'];?></textarea>
					<br/><br/>
					<label>Second right Ads Body text</label><br/>
					<textarea placeholder="Second right Ads Body text" name="option_23" rows="8" cols="30"><?php echo $option['option_23'];?></textarea>
					
				</div>
				<div style="display:inline-block; float:left; margin-right:10px;">
					<h1>Property Page Ads</h1>
					<label>Header javascript</label><br/>
					<textarea placeholder="Header javascript" name="option_24" rows="10" cols="30"><?php echo $option['option_24'];?></textarea>
					<br/><br/>
					<label>First  Ads Body text</label><br/>
					<textarea placeholder="First left Ads Body text" name="option_25" rows="8" cols="30"><?php echo $option['option_25'];?></textarea>
					<br/><br/>
					<label>Second Ads Body text</label><br/>
					<textarea placeholder="Second left Ads Body text" name="option_26" rows="8" cols="30"><?php echo $option['option_26'];?></textarea>
				</div>
				<div style="display:inline-block; float:left; margin-right:10px;">
					<h1>Furniture Page Ads</h1>
					<label>Header javascript</label><br/>
					<textarea placeholder="Header javascript" name="option_27" rows="10" cols="30"><?php echo $option['option_27'];?></textarea>
					<br/><br/>
					<label>Ads Body text</label><br/>
					<textarea placeholder="First left Ads Body text" name="option_28" rows="8" cols="30"><?php echo $option['option_28'];?></textarea>			
					<input type="submit" class="submit" value="Submit">
				</div>
				</form>
			</div> 
		</div>
	</div>