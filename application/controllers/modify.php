<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Modify extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
    {
        parent::__construct();
        $this->load->model('user');
        $this->load->model('post');
        $this->load->model('option');
        $this->load->library('MY_Upload');
    }
    public function modify_check(){
    	
    	try {
    		$this->user->modify(
	    		$this->input->post('user_pass'),
	    		$this->input->post('user_email'),
	    		$this->input->post('user_fname'),
	    		$this->input->post('user_lname'),
	    		$this->input->post('user_phone'),
	    		$this->input->post('user_country'),
	    		$this->input->post('user_city'),
	    		$this->input->post('user_language'),
	    		$this->input->post('user_url'),
	    		$this->input->post('user_title'),
	    		$this->input->post('user_detail')
    		);
	        $config['upload_path'] = 'upload/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '1024';
			$config['max_width'] = '1024';
			$config['max_height'] = '768';

			$this->upload->initialize($config);
    		$user_pic ='';
	        if($this->upload->do_upload()){
	        	$image_data = $this->upload->data();
	        	$this->load->library('image_lib');
	        	$config['image_library'] = 'gd2';
	        	$config['quality'] = '100%';
	        	$config['create_thumb'] = TRUE;
	        	$config['maintain_ratio'] = TRUE;
	        	$config['source_image'] = $image_data['full_path'];
			    $config['thumb_marker'] ='_100';
			    $config['width']     = 100;
			    $config['height']   = 100;
			    $this->image_lib->clear();
			    $this->image_lib->initialize($config);
			    $this->image_lib->resize();
	            $this->user->add_image($image_data['file_name']);
	        }else{
	        	echo $this->upload->display_errors();
	        }
    		if($this->session->userdata('logged_in')['user_type'] == 'admin'){
	     		redirect('profile/admin');
	     	}else if($this->session->userdata('logged_in')['user_type'] == 'agent'){
	     		redirect('profile/agent');
	     	}else if($this->session->userdata('logged_in')['user_type'] == 'moderator') {
	     		redirect('profile/moderator');
	     	}else{
	     		redirect('profile/user');
	     	}
    	} catch (Exception $e) {
    		echo $e->getMessage();
    	}
    	
    }
    public function modify_education($ID){
    	try {
    		
    		$this->post->modify_education(
    			$ID,
	    		$this->input->post('post_education_type'),
	    		$this->input->post('post_education_age'),
	    		$this->input->post('post_education_gender'),
	    		$this->input->post('post_price'),
	    		$this->input->post('post_education_community'),
	    		$this->input->post('post_education_principle'),
	    		$this->input->post('post_education_phone'),
	    		$this->input->post('post_education_fax'),
	    		$this->input->post('post_education_email'),
	    		$this->input->post('post_education_website'),
	    		$this->input->post('post_title'),
	    		$this->input->post('post_description'),
	    		$this->input->post('post_featured'),
	    		$this->input->post('post_seo_title'),
	    		$this->input->post('post_seo_keywords'),
	    		$this->input->post('post_seo_description')
    		);
    		$this->upload->initialize(array(
		            "upload_path"   => "upload/",
		            "allowed_types" => "gif|jpg|png",
		            "max_size" => "10240"
		        ));
	        //Perform upload.
	        if($this->upload->do_multi_upload("files")){
	        	$this->load->library('image_lib');
	        	$config['image_library'] = 'gd2';
	        	$config['quality'] = '100%';
	        	$config['create_thumb'] = TRUE;
	        	$config['maintain_ratio'] = TRUE;
	        	$image_data=array();
	            foreach ($this->upload->get_multi_upload_data() as $key) {
				    $config['source_image'] = $key['full_path'];
				    $config['thumb_marker'] ='_100';
				    $config['width']     = 100;
				    $config['height']   = 100;
				    $this->image_lib->clear();
				    $this->image_lib->initialize($config);
				    $this->image_lib->resize();

				    $config['source_image'] = $key['full_path'];
				    $config['thumb_marker'] ='_270';
				    $config['width']     = 270;
				    $config['height']   = 200;
				    $this->image_lib->clear();
				    $this->image_lib->initialize($config);
				    $this->image_lib->resize();

				    $config['source_image'] = $key['full_path'];
				    $config['thumb_marker'] ='_538';
				    $config['width']     = 538;
				    $config['height']   = 417;
				    $this->image_lib->clear();
				    $this->image_lib->initialize($config);
				    $this->image_lib->resize();

				    $config['source_image'] = $key['full_path'];
				    $config['thumb_marker'] ='_638';
				    $config['width']     = 638;
				    $config['height']   = 490;
				    $this->image_lib->clear();
				    $this->image_lib->initialize($config);
				    $this->image_lib->resize();

				    $config['source_image'] = $key['full_path'];
				    $config['thumb_marker'] ='_180';
				    $config['width']     = 180;
				    $config['height']   = 164;
				    $this->image_lib->clear();
				    $this->image_lib->initialize($config);
				    $this->image_lib->resize();

				    $config['source_image'] = $key['full_path'];
				    $config['thumb_marker'] ='_307';
				    $config['width']     = 307;
				    $config['height']   = 270;
				    $this->image_lib->clear();
				    $this->image_lib->initialize($config);
				    $this->image_lib->resize();
				    $temp_image_data['post_type'] = 'attachment';
				    $temp_image_data['post_user_id'] = $this->session->userdata('logged_in')['ID'];
				    $temp_image_data['post_user_type'] = $this->session->userdata('logged_in')['user_type'];
				    $temp_image_data['post_image_id'] = $ID;
				    $temp_image_data['post_image_url'] = $key['file_name'];
				    $temp_image_data['post_status'] = '0';
				    $temp_image_data['post_date'] = date("Y-m-d H:i:s");
				    array_push($image_data,$temp_image_data);
	            } 
	          	$this->post->add_batch_image($image_data);
	        }else{
	        	echo $this->upload->display_errors();
	        }
    		if($this->session->userdata('logged_in')['user_type'] == 'admin'){
	     		redirect("profile/admin/edit/$ID");
	     	}else if($this->session->userdata('logged_in')['user_type'] == 'agent'){
	     		redirect("profile/agent/edit/$ID");
	     	}else if($this->session->userdata('logged_in')['user_type'] == 'moderator') {
	     		redirect("profile/moderator/edit/$ID");
	     	}else{
	     		redirect("profile/user/edit/$ID");
	     	}
    	} catch (Exception $e) {
    		echo $e->getMessage();
    	}
    }
    public function modify_furniture($ID){
    	try {
    		
    		$this->post->modify_furniture(
    			$ID,
	    		$this->input->post('post_furniture_type'),
	    		$this->input->post('post_title'),
	    		$this->input->post('post_price'),
	    		$this->input->post('post_description'),
	    		$this->input->post('post_featured'),
	    		$this->input->post('post_seo_title'),
	    		$this->input->post('post_seo_keywords'),
	    		$this->input->post('post_seo_description')
    		);
    		$this->upload->initialize(array(
		            "upload_path"   => "upload/",
		            "allowed_types" => "gif|jpg|png",
		            "max_size" => "10240"
		        ));
	        //Perform upload.
	        if($this->upload->do_multi_upload("files")){
	        	$this->load->library('image_lib');
	        	$config['image_library'] = 'gd2';
	        	$config['quality'] = '100%';
	        	$config['create_thumb'] = TRUE;
	        	$config['maintain_ratio'] = TRUE;
	        	$image_data=array();
	            foreach ($this->upload->get_multi_upload_data() as $key) {
				    $config['source_image'] = $key['full_path'];
				    $config['thumb_marker'] ='_100';
				    $config['width']     = 100;
				    $config['height']   = 100;
				    $this->image_lib->clear();
				    $this->image_lib->initialize($config);
				    $this->image_lib->resize();

				    $config['source_image'] = $key['full_path'];
				    $config['thumb_marker'] ='_270';
				    $config['width']     = 270;
				    $config['height']   = 200;
				    $this->image_lib->clear();
				    $this->image_lib->initialize($config);
				    $this->image_lib->resize();

				    $config['source_image'] = $key['full_path'];
				    $config['thumb_marker'] ='_538';
				    $config['width']     = 538;
				    $config['height']   = 417;
				    $this->image_lib->clear();
				    $this->image_lib->initialize($config);
				    $this->image_lib->resize();

				    $config['source_image'] = $key['full_path'];
				    $config['thumb_marker'] ='_638';
				    $config['width']     = 638;
				    $config['height']   = 490;
				    $this->image_lib->clear();
				    $this->image_lib->initialize($config);
				    $this->image_lib->resize();

				    $config['source_image'] = $key['full_path'];
				    $config['thumb_marker'] ='_180';
				    $config['width']     = 180;
				    $config['height']   = 164;
				    $this->image_lib->clear();
				    $this->image_lib->initialize($config);
				    $this->image_lib->resize();

				    $config['source_image'] = $key['full_path'];
				    $config['thumb_marker'] ='_307';
				    $config['width']     = 307;
				    $config['height']   = 270;
				    $this->image_lib->clear();
				    $this->image_lib->initialize($config);
				    $this->image_lib->resize();
				    $temp_image_data['post_type'] = 'attachment';
				    $temp_image_data['post_user_id'] = $this->session->userdata('logged_in')['ID'];
				    $temp_image_data['post_user_type'] = $this->session->userdata('logged_in')['user_type'];
				    $temp_image_data['post_image_id'] = $ID;
				    $temp_image_data['post_image_url'] = $key['file_name'];
				    $temp_image_data['post_status'] = '0';
				    $temp_image_data['post_date'] = date("Y-m-d H:i:s");
				    array_push($image_data,$temp_image_data);
	            } 
	          	$this->post->add_batch_image($image_data);
	        }else{
	        	echo $this->upload->display_errors();
	        }
    		if($this->session->userdata('logged_in')['user_type'] == 'admin'){
	     		redirect("profile/admin/edit/$ID");
	     	}else if($this->session->userdata('logged_in')['user_type'] == 'agent'){
	     		redirect("profile/agent/edit/$ID");
	     	}else if($this->session->userdata('logged_in')['user_type'] == 'moderator') {
	     		redirect("profile/moderator/edit/$ID");
	     	}else{
	     		redirect("profile/user/edit/$ID");
	     	}
    	} catch (Exception $e) {
    		echo $e->getMessage();
    	}
    }
    public function modify_property($ID){
    	try {
    		
    		$this->post->modify_property(
    			$ID,
	    		$this->input->post('post_property_catergory'),
	    		$this->input->post('post_property_type'),
	    		$this->input->post('post_price'),
	    		$this->input->post('post_property_size'),
	    		$this->input->post('post_property_floor'),
	    		$this->input->post('post_property_bedrooms'),
	    		$this->input->post('post_property_bathroom'),
	    		$this->input->post('post_property_not_furnished'),
			    $this->input->post('post_property_semi_furnished'),
			    $this->input->post('post_property_furnished'),
			    $this->input->post('post_property_gym'),
			    $this->input->post('post_property_storage'),
			    $this->input->post('post_property_parking'),
			    $this->input->post('post_property_security'),
			    $this->input->post('post_property_ac'),
			    $this->input->post('post_property_washer_dryer'),
			    $this->input->post('post_property_electricity'),
	    		$this->input->post('post_property_area_reference'),
	    		$this->input->post('post_property_area_city'),
	    		$this->input->post('post_property_area_community'),
	    		$this->input->post('post_property_area_address'),
	    		$this->input->post('post_property_area_lat'),
	    		$this->input->post('post_property_area_log'),
	    		$this->input->post('post_property_build_floor'),
	    		$this->input->post('post_property_build_apartment_per_floor'),
	    		$this->input->post('post_property_build_elevators'),
	    		$this->input->post('post_title'),
	    		$this->input->post('post_description'),
	    		$this->input->post('post_featured'),
	    		$this->input->post('post_seo_title'),
	    		$this->input->post('post_seo_keywords'),
	    		$this->input->post('post_seo_description')
    		);
			$this->upload->initialize(array(
		            "upload_path"   => "upload/",
		            "allowed_types" => "gif|jpg|png",
		            "max_size" => "10240"
		        ));
	        //Perform upload.
	        if($this->upload->do_multi_upload("files")){
	        	$this->load->library('image_lib');
	        	$config['image_library'] = 'gd2';
	        	$config['quality'] = '100%';
	        	$config['create_thumb'] = TRUE;
	        	$config['maintain_ratio'] = TRUE;
	        	$image_data=array();
	            foreach ($this->upload->get_multi_upload_data() as $key) {
				    $config['source_image'] = $key['full_path'];
				    $config['thumb_marker'] ='_100';
				    $config['width']     = 100;
				    $config['height']   = 100;
				    $this->image_lib->clear();
				    $this->image_lib->initialize($config);
				    $this->image_lib->resize();

				    $config['source_image'] = $key['full_path'];
				    $config['thumb_marker'] ='_270';
				    $config['width']     = 270;
				    $config['height']   = 200;
				    $this->image_lib->clear();
				    $this->image_lib->initialize($config);
				    $this->image_lib->resize();

				    $config['source_image'] = $key['full_path'];
				    $config['thumb_marker'] ='_538';
				    $config['width']     = 538;
				    $config['height']   = 417;
				    $this->image_lib->clear();
				    $this->image_lib->initialize($config);
				    $this->image_lib->resize();

				    $config['source_image'] = $key['full_path'];
				    $config['thumb_marker'] ='_638';
				    $config['width']     = 638;
				    $config['height']   = 490;
				    $this->image_lib->clear();
				    $this->image_lib->initialize($config);
				    $this->image_lib->resize();

				    $config['source_image'] = $key['full_path'];
				    $config['thumb_marker'] ='_180';
				    $config['width']     = 180;
				    $config['height']   = 164;
				    $this->image_lib->clear();
				    $this->image_lib->initialize($config);
				    $this->image_lib->resize();

				    $config['source_image'] = $key['full_path'];
				    $config['thumb_marker'] ='_307';
				    $config['width']     = 307;
				    $config['height']   = 270;
				    $this->image_lib->clear();
				    $this->image_lib->initialize($config);
				    $this->image_lib->resize();
				    $temp_image_data['post_type'] = 'attachment';
				    $temp_image_data['post_user_id'] = $this->session->userdata('logged_in')['ID'];
				    $temp_image_data['post_user_type'] = $this->session->userdata('logged_in')['user_type'];
				    $temp_image_data['post_image_id'] = $ID;
				    $temp_image_data['post_image_url'] = $key['file_name'];
				    $temp_image_data['post_status'] = '0';
				    $temp_image_data['post_date'] = date("Y-m-d H:i:s");
				    array_push($image_data,$temp_image_data);
	            } 
	          	$this->post->add_batch_image($image_data);
	        }else{
	        	echo $this->upload->display_errors();
	        }
    		if($this->session->userdata('logged_in')['user_type'] == 'admin'){
	     		redirect("profile/admin/edit/$ID");
	     	}else if($this->session->userdata('logged_in')['user_type'] == 'agent'){
	     		redirect("profile/agent/edit/$ID");
	     	}else if($this->session->userdata('logged_in')['user_type'] == 'moderator') {
	     		redirect("profile/moderator/edit/$ID");
	     	}else{
	     		redirect("profile/user/edit/$ID");
	     	}
    	} catch (Exception $e) {
    		echo $e->getMessage();
    	}
    }
    public function delete_post($ID){
    	try {
    		
    		$this->post->delete_post($ID);
    		if($this->session->userdata('logged_in')['user_type'] == 'admin'){
	     		redirect("profile/admin/mylist");
	     	}else if($this->session->userdata('logged_in')['user_type'] == 'agent'){
	     		redirect("profile/agent/mylist");
	     	}else if($this->session->userdata('logged_in')['user_type'] == 'moderator') {
	     		redirect("profile/moderator/mylist");
	     	}else{
	     		redirect("profile/user/mylist");
	     	}
    	} catch (Exception $e) {
    		echo $e->getMessage();
    	}
    }
    public function delete_image(){
    	try {
    		$ID=$this->input->get('post_image_id');
    		$this->post->delete_image($this->input->get('ID'),$this->input->get('post_image_id'));
    		if($this->session->userdata('logged_in')['user_type'] == 'admin'){
	     		redirect("profile/admin/edit/$ID");
	     	}else if($this->session->userdata('logged_in')['user_type'] == 'agent'){
	     		redirect("profile/agent/edit/$ID");
	     	}else if($this->session->userdata('logged_in')['user_type'] == 'moderator') {
	     		redirect("profile/moderator/edit/$ID");
	     	}else{
	     		redirect("profile/user/edit/$ID");
	     	}
    	} catch (Exception $e) {
    		echo $e->getMessage();
    	}
    }
    public function modify_option(){
    	try {
    		$option_data = array(
    			'option_1' => $this->input->post('option_1'), 
    			'option_2' => $this->input->post('option_2'), 
    			'option_3' => $this->input->post('option_3'), 
    			'option_4' => $this->input->post('option_4'), 
    			'option_5' => $this->input->post('option_5'), 
    			'option_6' => $this->input->post('option_6'), 
    			'option_7' => $this->input->post('option_7'), 
    			'option_8' => $this->input->post('option_8'), 
    			'option_9' => $this->input->post('option_9'), 
    			'option_10' => $this->input->post('option_10'), 
    			'option_11' => $this->input->post('option_11'), 
    			'option_12' => $this->input->post('option_12'), 
    			'option_13' => $this->input->post('option_13'), 
    			'option_14' => $this->input->post('option_14'), 
    			'option_15' => $this->input->post('option_15'), 
    			'option_16' => $this->input->post('option_16'), 
    			'option_17' => $this->input->post('option_17'), 
    			'option_18' => $this->input->post('option_18'), 
    			'option_19' => $this->input->post('option_19'), 
    			'option_20' => $this->input->post('option_20'), 
    			'option_21' => $this->input->post('option_21'), 
    			'option_22' => $this->input->post('option_22'), 
    			'option_23' => $this->input->post('option_23'), 
    		);
    		$this->option->modify_option(json_encode($option_data));
    		if($this->session->userdata('logged_in')['user_type'] == 'admin'){
	     		redirect("profile/admin/settings/home");
	     	}else if($this->session->userdata('logged_in')['user_type'] == 'moderator') {
	     		redirect("profile/admin/settings/home");
	     	}
    	} catch (Exception $e) {
    		echo $e->getMessage();
    	}
    }
}

/* End of file front_page.php */
/* Location: ./application/controllers/welcome.php */