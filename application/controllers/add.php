<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add extends CI_Controller {

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
        $this->load->model('post');
        $this->load->library('MY_Upload');
    }
    public function add_property(){
    	
    	try {
    		$return_add_id=$this->post->add(
    			'property',
    			$this->session->userdata('logged_in')['ID'],
    			$this->session->userdata('logged_in')['user_type'],
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
		     	$this->input->post('post_seo_title'),
		     	$this->input->post('post_seo_keywords'),
		     	$this->input->post('post_seo_description'),
		     	$this->sanitize($this->input->post('post_title')),
		     	'',
		     	$this->input->post('post_featured'),
		     	'',
		     	'',
		     	'',
		     	'',
		     	'',
		     	'',
		     	'',
		     	'',
		     	''
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
				    $temp_image_data['post_image_id'] = $return_add_id;
				    $temp_image_data['post_image_url'] = $key['file_name'];
				    $temp_image_data['post_status'] = '0';
				    $temp_image_data['post_date'] = date("Y-m-d H:i:s");
				    array_push($image_data,$temp_image_data);
	            } 
	          	$this->post->add_batch_image($image_data);
	        }else{
	        	echo $this->upload->display_errors();
	        }
			if($this->session->userdata('logged_in')['user_type'] == 'user'){
	     		redirect("profile/user/edit/$return_add_id");
	     	}else if($this->session->userdata('logged_in')['user_type'] == 'agent'){
	     		redirect("profile/agent/edit/$return_add_id");
	     	}else if($this->session->userdata('logged_in')['user_type'] == 'moderator') {
	     		redirect("profile/moderator/edit/$return_add_id");
	     	}else if($this->session->userdata('logged_in')['user_type'] == 'admin') {
	     		redirect("profile/admin/edit/$return_add_id");
	     	}
    	} catch (Exception $e) {
    		echo $e->getMessage();
    	}
    	
    }
    public function add_furniture(){	
    	try {
	     	$return_add_id=$this->post->add(
    			'furniture',
    			$this->session->userdata('logged_in')['ID'],
    			$this->session->userdata('logged_in')['user_type'],
    			'',
		     	'',
		     	$this->input->post('post_price'),
		     	'',
		     	'',
		     	'',
		     	'',
		     	'',
		     	'',
		     	'',
		     	'',
		     	'',
		     	'',
		     	'',
		     	'',
		     	'',
		     	'',
		     	'',
		     	'',
		     	'',
		     	'',
		     	'',
		     	'',
		     	'',
		     	'',
		     	'',
		     	$this->input->post('post_title'),
		     	$this->input->post('post_description'),
		     	$this->input->post('post_seo_title'),
		     	$this->input->post('post_seo_keywords'),
		     	$this->input->post('post_seo_description'),
		     	$this->sanitize($this->input->post('post_title')),
		     	$this->input->post('post_furniture_type'),
		     	$this->input->post('post_featured'),
		     	'',
		     	'',
		     	'',
		     	'',
		     	'',
		     	'',
		     	'',
		     	'',
		     	''
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
				    $temp_image_data['post_image_id'] = $return_add_id;
				    $temp_image_data['post_image_url'] = $key['file_name'];
				    $temp_image_data['post_status'] = '0';
				    $temp_image_data['post_date'] = date("Y-m-d H:i:s");
				    array_push($image_data,$temp_image_data);
	            } 
	          	$this->post->add_batch_image($image_data);
	        }else{
	        	echo $this->upload->display_errors();
	        }
    		if($this->session->userdata('logged_in')['user_type'] == 'user'){
	     		redirect("profile/user/edit/$return_add_id");
	     	}else if($this->session->userdata('logged_in')['user_type'] == 'agent'){
	     		redirect("profile/agent/edit/$return_add_id");
	     	}else if($this->session->userdata('logged_in')['user_type'] == 'moderator') {
	     		redirect("profile/moderator/edit/$return_add_id");
	     	}else if($this->session->userdata('logged_in')['user_type'] == 'admin') {
	     		redirect("profile/admin/edit/$return_add_id");
	     	}
    	} catch (Exception $e) {
    		echo $e->getMessage();
    	}
    	
    }
    public function add_education(){	
    	try {
	     	$return_add_id=$this->post->add(
    			'education',
    			$this->session->userdata('logged_in')['ID'],
    			$this->session->userdata('logged_in')['user_type'],
    			'',
		     	'',
		     	$this->input->post('post_price'),
		     	'',
		     	'',
		     	'',
		     	'',
		     	'',
		     	'',
		     	'',
		     	'',
		     	'',
		     	'',
		     	'',
		     	'',
		     	'',
		     	'',
		     	'',
		     	'',
		     	'',
		     	'',
		     	'',
		     	'',
		     	'',
		     	'',
		     	'',
		     	$this->input->post('post_title'),
		     	$this->input->post('post_description'),
		     	$this->input->post('post_seo_title'),
		     	$this->input->post('post_seo_keywords'),
		     	$this->input->post('post_seo_description'),
		     	$this->sanitize($this->input->post('post_title')),
		     	'',
		     	$this->input->post('post_featured'),
		     	$this->input->post('post_education_type'),
			    $this->input->post('post_education_age'),
			    $this->input->post('post_education_gender'),
			    $this->input->post('post_education_community'),
			    $this->input->post('post_education_principle'),
			    $this->input->post('post_education_phone'),
			    $this->input->post('post_education_fax'),
			    $this->input->post('post_education_email'),
			    $this->input->post('post_education_website')
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
				    $temp_image_data['post_image_id'] = $return_add_id;
				    $temp_image_data['post_image_url'] = $key['file_name'];
				    $temp_image_data['post_status'] = '0';
				    $temp_image_data['post_date'] = date("Y-m-d H:i:s");
				    array_push($image_data,$temp_image_data);
	            } 
	          	$this->post->add_batch_image($image_data);
	        }else{
	        	echo $this->upload->display_errors();
	        }
			if($this->session->userdata('logged_in')['user_type'] == 'user'){
	     		redirect("profile/user/edit/$return_add_id");
	     	}else if($this->session->userdata('logged_in')['user_type'] == 'agent'){
	     		redirect("profile/agent/edit/$return_add_id");
	     	}else if($this->session->userdata('logged_in')['user_type'] == 'moderator') {
	     		redirect("profile/moderator/edit/$return_add_id");
	     	}else if($this->session->userdata('logged_in')['user_type'] == 'admin') {
	     		redirect("profile/admin/edit/$return_add_id");
	     	}
    	} catch (Exception $e) {
    		echo $e->getMessage();
    	}
    	
    }
    public function add_slider(){
    	$max=$this->db->query("SELECT MAX(order_id) as max FROM fsbo_slider")->result();
    	$max_order=$max[0]->max;
    	$this->upload->initialize(array(
            "upload_path"   => "upload/",
            "allowed_types" => "gif|jpg|png",
            "max_size" => "10240"
        ));
        if($this->upload->do_multi_upload("files")){
        	$this->load->library('image_lib');
        	$config['image_library'] = 'gd2';
        	$config['quality'] = '100%';
        	$config['create_thumb'] = TRUE;
        	$config['maintain_ratio'] = TRUE;
        	$image_data=array();
        	$max_order++;
        	foreach ($this->upload->get_multi_upload_data() as $key) {
        		$config['source_image'] = $key['full_path'];
			    $this->image_lib->clear();
			    $this->image_lib->initialize($config);
			    $this->image_lib->resize();

			    $temp_image_data['sider_pic'] = $key['file_name'];
			    $temp_image_data['order_id'] = $max_order;
			    $max_order++;
			    array_push($image_data,$temp_image_data);
			}
			$this->post->add_slider($image_data);
		}else{
        	echo $this->upload->display_errors();
        }
		redirect('profile/admin/settings/slider');
    }
    public function add_wishlist(){
    	if($this->session->userdata('logged_in')){
    		try {
	    			$return_add_id=$this->post->add_wishlist(
		    			'wishlist',
		    			$this->session->userdata('logged_in')['ID'],
		    			$this->session->userdata('logged_in')['user_type'],
		    			$this->input->get('ID')
    				);
    				if($this->session->userdata('logged_in')['user_type'] == 'user'){
			     		redirect("profile/user/wishlist");
			     	}else if($this->session->userdata('logged_in')['user_type'] == 'agent'){
			     		redirect("profile/agent/wishlist");
			     	}else if($this->session->userdata('logged_in')['user_type'] == 'moderator') {
			     		redirect("profile/moderator/wishlist");
			     	}else if($this->session->userdata('logged_in')['user_type'] == 'admin') {
			     		redirect("profile/admin/wishlist");
			     	}
    			} catch (Exception $e) {
	    			echo $e->getMessage();
	    		}
    	}else{
    		redirect('login');
    	}
    }
	//taken from wordpress
	function utf8_uri_encode( $utf8_string, $length = 0 ) {
	    $unicode = '';
	    $values = array();
	    $num_octets = 1;
	    $unicode_length = 0;

	    $string_length = strlen( $utf8_string );
	    for ($i = 0; $i < $string_length; $i++ ) {

	        $value = ord( $utf8_string[ $i ] );

	        if ( $value < 128 ) {
	            if ( $length && ( $unicode_length >= $length ) )
	                break;
	            $unicode .= chr($value);
	            $unicode_length++;
	        } else {
	            if ( count( $values ) == 0 ) $num_octets = ( $value < 224 ) ? 2 : 3;

	            $values[] = $value;

	            if ( $length && ( $unicode_length + ($num_octets * 3) ) > $length )
	                break;
	            if ( count( $values ) == $num_octets ) {
	                if ($num_octets == 3) {
	                    $unicode .= '%' . dechex($values[0]) . '%' . dechex($values[1]) . '%' . dechex($values[2]);
	                    $unicode_length += 9;
	                } else {
	                    $unicode .= '%' . dechex($values[0]) . '%' . dechex($values[1]);
	                    $unicode_length += 6;
	                }

	                $values = array();
	                $num_octets = 1;
	            }
	        }
	    }

	    return $unicode;
	}

	//taken from wordpress
	function seems_utf8($str) {
	    $length = strlen($str);
	    for ($i=0; $i < $length; $i++) {
	        $c = ord($str[$i]);
	        if ($c < 0x80) $n = 0; # 0bbbbbbb
	        elseif (($c & 0xE0) == 0xC0) $n=1; # 110bbbbb
	        elseif (($c & 0xF0) == 0xE0) $n=2; # 1110bbbb
	        elseif (($c & 0xF8) == 0xF0) $n=3; # 11110bbb
	        elseif (($c & 0xFC) == 0xF8) $n=4; # 111110bb
	        elseif (($c & 0xFE) == 0xFC) $n=5; # 1111110b
	        else return false; # Does not match any model
	        for ($j=0; $j<$n; $j++) { # n bytes matching 10bbbbbb follow ?
	            if ((++$i == $length) || ((ord($str[$i]) & 0xC0) != 0x80))
	                return false;
	        }
	    }
	    return true;
	}

	//function sanitize_title_with_dashes taken from wordpress
	function sanitize($title) {
	    $title = strip_tags($title);
	    // Preserve escaped octets.
	    $title = preg_replace('|%([a-fA-F0-9][a-fA-F0-9])|', '---$1---', $title);
	    // Remove percent signs that are not part of an octet.
	    $title = str_replace('%', '', $title);
	    // Restore octets.
	    $title = preg_replace('|---([a-fA-F0-9][a-fA-F0-9])---|', '%$1', $title);

	    $title = strtolower($title);
	    $title = preg_replace('/&.+?;/', '', $title); // kill entities
	    $title = str_replace('.', '-', $title);
	    $title = preg_replace('/[^%a-z0-9 _-]/', '', $title);
	    $title = preg_replace('/\s+/', '-', $title);
	    $title = preg_replace('|-+|', '-', $title);
	    $title = trim($title, '-');

	    $count = $this->post->find_slug($title);
	    if($count == 0){
	    	return $title;
	    }else if($count >= 1){
	    	return $title = $title.'-'.$count;
	    }
	}
}

/* End of file front_page.php */
/* Location: ./application/controllers/welcome.php */