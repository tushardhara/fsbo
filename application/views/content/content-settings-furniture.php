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
					<a href="<?php echo site_url('profile/admin/settings/slider')?>"><div class="tab <?php echo $this->uri->segment(4) == 'slider' ? 'active':''; ?>"><span class="text u">Slider</span></div></a>
					<a href="<?php echo site_url('profile/admin/settings/user')?>"><div class="tab <?php echo $this->uri->segment(4) == 'user' ? 'active':''; ?>"><span class="text u">User</span></div></a>
				<?php } ?>
			</div>
			<div class="upload-area clearfix">
				<h1>Furniture Type</h1>
				<form method="post" action="<?php echo site_url('main/add_furniture_type'); ?>">
					<input type="text" placeholder="Furniture Type" name="name">
					<input type="submit" value="Submit">
				</form>
				<div class="fsbotable" >
	                <table >
	                    <tr>
	                        <td width="30px">ID</td>
	                        <td width="900px">Furniture Type</td>
	                        <td width="210px">Option</td>
	                    </tr>
	                    <?php if(isset($furniture_type)){ ?>
	                    	<?php  if(!empty($furniture_type)) { ?>
	                    		<?php foreach ($furniture_type as $key) { ?>
	                    			<tr>
				                        <td ><?php echo $key->id; ?></td>
				                        <td ><?php echo $key->name; ?></td>
				                        <td >
				                        	<?php if($key->name == 'Bedroom' || $key->name == 'Living room' || $key->name == 'Bathroom' || $key->name == 'Dining room' || $key->name == 'Kitchen') { ?>
				                        		<?php echo "This is system variable" ?>
				                        	<?php } else {?>
				                        	<a class="delete" href="<?php echo site_url('main/delete_furniture_type/'.$key->id); ?>">Delete</a>
				                        	<a class="edit" data-id="<?php echo $key->id; ?>" data-name="<?php echo $key->name; ?>" href="#">Edit</a>
				                        	<?php } ?>
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
			$('.delete').on('click',function(){
				if (confirm("Are you really want to delete this?") == true) {
			        return;
			    } else {
			       event.preventDefault();
			    }
			});
			$(document).on('click','.edit',function(){
				var person = prompt("Edit your furniture type", $(this).attr('data-name'))
				if ( person != null) {
						var id=$(this).attr('data-id');
						//console.log(person);
			       		$.ajax({
						  url: "<?php echo site_url('main/edit_furniture_type/')?>",
						  type: "POST",
						  data: { id: id, name: person }
						}).done(function( data ) {
						    $(document).find('div[class=fsbotable]').replaceWith($(data).find('div[class=fsbotable]'));
						});
			        event.preventDefault();
			    } else {
			       event.preventDefault();
			    }
			});
		});
	</script>