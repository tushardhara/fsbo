	<div class="home-main clearfix">
		<div class="container">
			<?php include('tab/tab-area.php');?>
			<div class="message-settings no clearfix">
				<div class="search-edu"><input	type="text" placeholder="Search Location"><div class="search-icon"></div></div>
				<div class="delete-area"><span class="icon-delete"></span><span class="text">Delete</span></div>	
				<div class="compare-area"><div class="compare active"></div><span>Compose</span></div>
				<div class="compare-area"><div class="compare active"></div><span>Sent</span></div>
				<div class="compare-area"><div class="compare active"></div><span>Resived</span></div>
			</div>
			<div class="message-list clearfix">
				<input	type="text" placeholder="TO">
				<input  type="text" placeholder="Subject">
				<textarea name="editor1" id="editor1" rows="10" cols="80">
                This is my textarea to be replaced with CKEditor.
	            </textarea>
	            <script>
	                // Replace the <textarea id="editor1"> with a CKEditor
	                // instance, using default configuration.
	                CKEDITOR.replace( 'editor1' );
	            </script>
	            <input type="submit" value="Send">
			</div>
		</div>
	</div>
