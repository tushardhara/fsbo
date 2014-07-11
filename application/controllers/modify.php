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
    }
    public function modify_check(){
    	
    	try {
    		$this->load->model('user');
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
    		if($this->session->userdata('logged_in')['user_type'] == 'admin'){
	     		redirect('profile/admin');
	     	}else if($this->session->userdata('logged_in')['user_type'] == 'agent'){
	     		redirect('profile/agent');
	     	}else if($this->session->userdata('logged_in')['user_type'] == 'moderator') {
	     		redirect('profile/moderator');
	     	}else{
	     		redirect('profile/user');
	     	}
	     	//echo $this->input->post('user_pass');
    	} catch (Exception $e) {
    		echo $e->getMessage();
    	}
    	
    }
    public function modify_education($ID){
    	try {
    		$this->load->model('post');
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
    		$this->load->model('post');
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
    		$this->load->model('post');
    		$this->post->modify_furniture(
    			$ID,
	    		$this->input->post('post_property_catergory'),
	    		$this->input->post('post_property_type'),
	    		$this->input->post('post_price'),
	    		$this->input->post('post_property_size'),
	    		$this->input->post('post_property_floor'),
	    		$this->input->post('post_property_bedrooms'),
	    		$this->input->post('post_property_bathroom'),
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
    		$this->load->model('post');
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
    public function modify_option(){
    	try {
    		$this->load->model('option');
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