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
				<h1>Slider</h1>
				<form id="target" method="post" action="<?php echo site_url('add/add_slider'); ?>" enctype="multipart/form-data">
					
					    <input type="file" name="files[]"  multiple/>
					
					<input type="submit" value="Submit">
				</form>
				<div class="fsbotable" >
	                <table >
	                    <tr>
	                        <td width="30px">ID</td>
	                        <td width="1000px">Image</td>
	                        <td width="110px">Option</td>
	                    </tr>
	                    <?php if(isset($slider)){ ?>
	                    	<?php  if(!empty($slider)) { ?>
	                    		<?php $i=1; ?>
	                    		<?php foreach ($slider as $key) { ?>
		            			<tr>
			                        <td ><?php echo $key->ID?></td>
			                        <td >
			                        	<?php 
			                        	if(!empty($key->sider_pic)) {
												$image_url=$key->sider_pic; 
												$info = pathinfo($image_url);
												$file_name =  basename($image_url,'.'.$info['extension']);
												$file_url = 'upload/'.$file_name.".".$info['extension'];
											}else{
												$file_url = 'images/agent.png';
											}
											$attached_image = array(
										          'src' => $file_url,
										          'alt' => 'fsbo',
										          'title' => 'fsbo',
										          'class' => 'slide_u'
											);
										?>
										<?php echo img($attached_image);?>
			                        </td>
			                        <td >
			                        	<a class="delete" data-id="<?php echo $key->ID?>" href="#">Delete</a>
			                        	<?php if($i!=1) { ?>
			                        	<a class="up" data-id="<?php echo $key->ID?>" data-order="<?php echo $key->order_id ?>" href="#">Up</a>
			                        	<?php } else if(count($slider)!=$i) { ?>
			                        	<a class="down" data-id="<?php echo $key->ID?>" data-order="<?php echo $key->order_id ?>" href="#">Down</a>
			                        	<?php } ?>
			                        </td>
			                    </tr>
	                    		<?php $i++;} ?>
	                    	<?php } ?>
	                    <?php } ?>		
	                </table>
	            </div>
			</div> 
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$(document).on('click','.up',function(event){
				var id=$(this).attr('data-id');
				var order_id=$(this).attr('data-order');
				$.ajax({
				  url: "<?php echo site_url('main/up_slider/')?>",
				  type: "POST",
				  data: { id: id,order_id: order_id}
				}).done(function( data ) {
				    $(document).find('div[class=fsbotable]').replaceWith($(data).find('div[class=fsbotable]'));
				});
				event.preventDefault();
			});
			$(document).on('click','.down',function(event){
				var id=$(this).attr('data-id');
				var order_id=$(this).attr('data-order');
				$.ajax({
				  url: "<?php echo site_url('main/down_slider/')?>",
				  type: "POST",
				  data: { id: id,order_id: order_id}
				}).done(function( data ) {
				    $(document).find('div[class=fsbotable]').replaceWith($(data).find('div[class=fsbotable]'));
				});
				event.preventDefault();
			});
			$(document).on('click','.delete',function(event){
				var id=$(this).attr('data-id');
				$.ajax({
				  url: "<?php echo site_url('main/delete_slider/')?>",
				  type: "POST",
				  data: { id: id}
				}).done(function( data ) {
				    $(document).find('div[class=fsbotable]').replaceWith($(data).find('div[class=fsbotable]'));
				});
				event.preventDefault();
			});
		});
	</script>
	