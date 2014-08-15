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
				<h1>Property Category</h1>
				<form method="post" action="<?php echo site_url('main/add_property_category'); ?>">
					<input type="text" placeholder="Property Category" name="name">
					<input type="submit" value="Submit">
				</form>
				<div id="cat" class="fsbotable" >
	                <table >
	                    <tr>
	                        <td width="30px">ID</td>
	                        <td width="900px">Property Category</td>
	                        <td width="210px">Option</td>
	                    </tr>
	                    <?php if(isset($property_category)){ ?>
	                    	<?php  if(!empty($property_category)) { ?>
	                    		<?php foreach ($property_category as $key) { ?>
	                    			<tr>
				                        <td ><?php echo $key->id; ?></td>
				                        <td ><?php echo $key->name; ?></td>
				                        <td >
				                        	<?php if($key->name == 'Residential property for Sale' || $key->name == 'Residential property for Rent' || $key->name == 'Commercial property for Sale' || $key->name == 'Commercial property for Rent' ) { ?>
				                        		<?php echo "This is system variable" ?>
				                        	<?php } else {?>
				                        		<a class="delete_cat" href="<?php echo site_url('main/delete_property_category/'.$key->id); ?>">Delete</a>
				                        		<a class="edit_cat" data-id="<?php echo $key->id; ?>" data-name="<?php echo $key->name; ?>" href="#">Edit</a>
				                        	<?php } ?>
				                        </td>
				                    </tr>
	                    		<?php } ?>
	                    	<?php } ?>
	                    <?php } ?>
	                </table>
	            </div>
        
				<h1>Property Type</h1>
				<form method="post" action="<?php echo site_url('main/add_property_type'); ?>">
					<input type="text" placeholder="Property Type" name="name">
					<input type="submit" value="Submit">
				</form>
				<div id="type" class="fsbotable" >
	                <table >
	                    <tr>
	                        <td width="30px">ID</td>
	                        <td width="1000px">Property Type</td>
	                        <td width="110px">Option</td>
	                    </tr>
	                    <?php if(isset($property_type)){ ?>
	                    	<?php  if(!empty($property_type)) { ?>
	                    		<?php foreach ($property_type as $key) { ?>
	                    			<tr>
				                        <td ><?php echo $key->id; ?></td>
				                        <td ><?php echo $key->name; ?></td>
				                        <td >
				                        	<a class="delete_type" href="<?php echo site_url('main/delete_property_type/'.$key->id); ?>">Delete</a>
				                        	<a class="edit_type" data-id="<?php echo $key->id; ?>" data-name="<?php echo $key->name; ?>" href="#">Edit</a>
				                        </td>
				                    </tr>
	                    		<?php } ?>
	                    	<?php } ?>
	                    <?php } ?>
	                </table>
	            </div>
	            <h1>City</h1>
				<form method="post" action="<?php echo site_url('main/add_property_city'); ?>">
					<input type="text" placeholder="City" name="name">
					<input type="submit" value="Submit">
				</form>
				<div id="city" class="fsbotable" >
	                <table >
	                    <tr>
	                        <td width="30px">ID</td>
	                        <td width="1000px">Name of City</td>
	                        <td width="110px">Option</td>
	                    </tr>
	                    <?php if(isset($property_city)){ ?>
	                    	<?php  if(!empty($property_city)) { ?>
	                    		<?php foreach ($property_city as $key) { ?>
	                    			<tr>
				                        <td ><?php echo $key->id; ?></td>
				                        <td ><?php echo $key->name; ?></td>
				                        <td >
				                        	<a class="delete_city" href="<?php echo site_url('main/delete_property_city/'.$key->id); ?>">Delete</a>
				                        	<a class="edit_city" data-id="<?php echo $key->id; ?>" data-name="<?php echo $key->name; ?>" href="#">Edit</a>
				                        </td>
				                    </tr>
	                    		<?php } ?>
	                    	<?php } ?>
	                    <?php } ?>
	                </table>
	            </div>
			</div> 
		</div>
	</div>

	<script type="text/javascript">
		$(document).ready(function(){
			$('.delete_cat').on('click',function(){
				if (confirm("Are you really want to delete this?") == true) {
			        return;
			    } else {
			       event.preventDefault();
			    }
			});
			$(document).on('click','.edit_cat',function(){
				var person = prompt("Edit your Property Category", $(this).attr('data-name'))
				if ( person != null) {
						var id=$(this).attr('data-id');
						//console.log(person);
			       		$.ajax({
						  url: "<?php echo site_url('main/edit_property_category/')?>",
						  type: "POST",
						  data: { id: id, name: person }
						}).done(function( data ) {
						    $(document).find('div[id=cat]').replaceWith($(data).find('div[id=cat]'));
						});
			        event.preventDefault();
			    } else {
			       event.preventDefault();
			    }
			});
			$('.delete_type').on('click',function(){
				if (confirm("Are you really want to delete this?") == true) {
			        return;
			    } else {
			       event.preventDefault();
			    }
			});
			$(document).on('click','.edit_type',function(){
				var person = prompt("Edit your Property type", $(this).attr('data-name'))
				if ( person != null) {
						var id=$(this).attr('data-id');
						//console.log(person);
			       		$.ajax({
						  url: "<?php echo site_url('main/edit_property_type/')?>",
						  type: "POST",
						  data: { id: id, name: person }
						}).done(function( data ) {
						    $(document).find('div[id=type]').replaceWith($(data).find('div[id=type]'));
						});
			        event.preventDefault();
			    } else {
			       event.preventDefault();
			    }
			});
			$('.delete_city').on('click',function(){
				if (confirm("Are you really want to delete this?") == true) {
			        return;
			    } else {
			       event.preventDefault();
			    }
			});
			$(document).on('click','.edit_city',function(){
				var person = prompt("Edit your city", $(this).attr('data-name'))
				if ( person != null) {
						var id=$(this).attr('data-id');
						//console.log(person);
			       		$.ajax({
						  url: "<?php echo site_url('main/edit_property_city/')?>",
						  type: "POST",
						  data: { id: id, name: person }
						}).done(function( data ) {
						    $(document).find('div[id=city]').replaceWith($(data).find('div[id=city]'));
						});
			        event.preventDefault();
			    } else {
			       event.preventDefault();
			    }
			});
		});
	</script>