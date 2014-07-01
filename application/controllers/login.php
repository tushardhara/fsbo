<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

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
	public function login_check() {
		$this->form_validation->set_rules('user_email', 'Email', 'trim|required|xss_clean');
		$this->form_validation->set_rules('user_pass', 'Password', 'trim|required|xss_clean|callback_check_database');
		if($this->form_validation->run()) {
			if($row->user_type == 'user'){
	     		redirect('profile/user');
	     	}else if($row->user_type == 'agent'){
	     		redirect('profile/agent');
	     	}else if($row->user_type == 'moderator') {
	     		redirect('profile/moderator');
	     	}else{
	     		redirect('profile/user');
	     	}
		} else {
			redirect('login');
		}
	}
	function check_database($user_pass)
	{
	   	$this->load->model('user');
		$result = $this->user->login($this->input->post('user_email'),$user_pass);
	   	if($result)
	   	{
	    	$sess_array = array();
	    	foreach($result as $row)
	   	  	{
	       		$sess_array = array(
	         		'ID' => $row->ID,
	         		'user_login' => $row->user_login,
	         		'user_email' => $row->user_email,
	         		'user_type' => $row->user_type,
	       		);
	       		$this->session->set_userdata('logged_in', $sess_array);
	     	}
	     	return TRUE;
	   	}
	   	else
	   	{
	    	$this->form_validation->set_message('check_database', 'Invalid username or password');
	    	return false;
	   	}
	}
	public function logout()
	{
	   $this->session->unset_userdata('logged_in');
	   session_destroy();
	   redirect('login');
	}
}

/* End of file front_page.php */
/* Location: ./application/controllers/welcome.php */