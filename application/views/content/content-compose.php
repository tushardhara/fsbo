	<div class="home-main clearfix">
		<div class="container">
			<?php include('tab/tab-area.php');?>
			<div class="message-settings no clearfix">
				<div class="search-edu"><input	type="text" placeholder="Search Location"><div class="search-icon"></div></div>
				<div class="delete-area"><span class="icon-delete"></span><span class="text">Delete</span></div>	
				<div class="compare-area"><a href="<?php echo site_url('profile/admin/message/compose') ?>"><div class="compare active"></div><span>Compose</span></a></div>
				<div class="compare-area"><a href="<?php echo site_url('profile/admin/message/sent') ?>"><div class="compare"></div><span>Sent</span></a></div>
				<div class="compare-area"><a href="<?php echo site_url('profile/admin/message') ?>"><div class="compare"></div><span>Resived</span></a></div>
			</div>
			<div class="message-list clearfix" id="menu-container" style="position:relative; width: 1140px;">
				<form action="<?php echo site_url('main/send_message');?>" method="post">
				<input	type="text" placeholder="TO" id="tags" name="email">
				<input  id="subject" type="text" placeholder="Subject" name="subject">
				<textarea name="message" id="editor1" rows="10" cols="80" placeholder="Type your message here.">
                
	            </textarea>
	            <script>
	                // Replace the <textarea id="editor1"> with a CKEditor
	                // instance, using default configuration.
	                $(document).ready(function(){
	                	CKEDITOR.replace( 'editor1' );
	                });
	            </script>
	            <input type="submit" value="Send" id="send">
	            </form>
			</div>
		</div>
	</div>
	<style type="text/css">
	   .ui-helper-hidden-accessible{
	   	display: none;
	   }
	   .ui-autocomplete {
			position: absolute;
			top: 0;
			left: 0;
			cursor: default;
			width: 100%;
			background: #fff;
		}
		.ui-autocomplete .ui-menu-item {
		position: relative;
		margin: 0;
		padding: 3px 1em 3px .4em;
		cursor: pointer;
		min-height: 0;
		list-style: none;
		}
		.ui-autocomplete .ui-menu-item:hover {
			background: #ffa000;
			color: #fff;
		}
	</style>
	<script>
	  $(function() {
	    /*
	    $.ajax({
          url: "<?php echo site_url('main/list_email');?>",
          success: function( data ) {
            window.availableTags= data;
          }
        });
		*/
	    $( "#tags" ).autocomplete({
		      source: function( request, response ) {
		        $.ajax({
		          type: "POST",
		          url: "<?php echo site_url('main/list_email');?>",
		          dataType:'json',
		          data: {
		            q: request.term
		          },
		          success: function( data ) {
		            response( data );
		          }
		        });
		      },
		      appendTo: '#menu-container'
		});
	  });
  </script>
