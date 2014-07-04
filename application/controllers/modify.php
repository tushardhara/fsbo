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
    		if($this->session->userdata('logged_in')['user_type'] == 'user'){
	     		redirect('profile/user');
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
}

/* End of file front_page.php */
/* Location: ./application/controllers/welcome.php */