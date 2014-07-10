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
    }
    public function add_property(){
    	
    	try {
    		$this->post->add(
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
		     	$this->create_slug($this->input->post('post_title')),
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
    	} catch (Exception $e) {
    		echo $e->getMessage();
    	}
    	
    }
    public function add_furniture(){	
    	try {
	     	$this->post->add(
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
		     	$this->input->post('post_title'),
		     	$this->input->post('post_description'),
		     	$this->input->post('post_seo_title'),
		     	$this->input->post('post_seo_keywords'),
		     	$this->input->post('post_seo_description'),
		     	$this->create_slug($this->input->post('post_title')),
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
    	} catch (Exception $e) {
    		echo $e->getMessage();
    	}
    	
    }
    public function add_education(){	
    	try {
	     	$this->post->add(
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
		     	$this->input->post('post_title'),
		     	$this->input->post('post_description'),
		     	$this->input->post('post_seo_title'),
		     	$this->input->post('post_seo_keywords'),
		     	$this->input->post('post_seo_description'),
		     	$this->create_slug($this->input->post('post_title')),
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
    	} catch (Exception $e) {
    		echo $e->getMessage();
    	}
    	
    }
    public function create_slug($string){
	   $slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
	   return $slug;
	}
}

/* End of file front_page.php */
/* Location: ./application/controllers/welcome.php */