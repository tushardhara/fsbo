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
			if($this->session->userdata('logged_in')['user_type'] == 'user'){
	     		redirect('profile/user');
	     	}else if($this->session->userdata('logged_in')['user_type'] == 'agent'){
	     		redirect('profile/agent');
	     	}else if($this->session->userdata('logged_in')['user_type'] == 'moderator') {
	     		redirect('profile/moderator');
	     	}else if($this->session->userdata('logged_in')['user_type'] == 'admin') {
	     		redirect('profile/admin');
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
	public function register_check() {
		$this->form_validation->set_rules('user_login', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('user_pass', 'Password', 'trim|required|matches[user_passc]|xss_clean');
		$this->form_validation->set_rules('user_passc', 'Retype Password','trim|required|xss_clean');
		$this->form_validation->set_rules('user_email', 'Email', 'trim|required|xss_clean|valid_email|callback_check_email');
		$this->form_validation->set_rules('user_fname', 'First Name', 'trim|xss_clean');
		$this->form_validation->set_rules('user_lname', 'Last Name', 'trim|xss_clean');
		$this->form_validation->set_rules('user_phone', 'Phone', 'trim|xss_clean');
		$this->form_validation->set_rules('user_country', 'Country', 'trim|xss_clean');
		$this->form_validation->set_rules('user_city', 'City', 'trim|xss_clean');
		$this->form_validation->set_rules('user_language', 'Language', 'trim|xss_clean');
		$this->form_validation->set_rules('user_url', 'Url', 'trim|xss_clean');
		$this->form_validation->set_rules('user_title', 'Title', 'trim|xss_clean');
		$this->form_validation->set_rules('user_detail', 'Detail', 'trim|xss_clean');
		if($this->form_validation->run()) {
			if($this->session->userdata('logged_in')['user_type'] == 'user'){
	     		redirect('profile/user');
	     	}else if($this->session->userdata('logged_in')['user_type'] == 'agent'){
	     		redirect('profile/agent');
	     	}else if($this->session->userdata('logged_in')['user_type'] == 'moderator') {
	     		redirect('profile/moderator');
	     	}else if($this->session->userdata('logged_in')['user_type'] == 'admin') {
	     		redirect('profile/admin');
	     	}
		} else {
			//$redirect = 'register/'.$this->input->post('user_type') == 0 ? 'user' :'agent'; 
			redirect('register/user');
		}
	}
	function check_email($user_email)
	{
	   	$this->load->model('user');
		$result = $this->user->check_email($user_email);
	   	if(!$result)
	   	{
	   		$register = $this->user->register(
	   			$this->input->post('user_login'),
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
	   			$this->input->post('user_detail'),
	   			$this->input->post('user_type'),
	   			$this->input->post('user_provider')
	   		);
	   		if($register){
	   			$user_data = $this->user->check_id($register);
	   			$sess_array = array();
		    	foreach($user_data as $row)
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
	   		}else{
	   			return false;
	   		}
	   	}
	   	else
	   	{
	    	$this->form_validation->set_message('check_email', 'Email Present');
	    	return false;
	   	}
	}
	public function logout()
	{
	   $this->session->unset_userdata('logged_in');
	   session_destroy();
	   redirect('login');
	}
	public function forgot_check(){
		$this->form_validation->set_rules('user_email', 'Email', 'trim|required|xss_clean|valid_email');
		if($this->form_validation->run()) {
			$this->load->model('user');
			$result = $this->user->check_email($this->input->post('user_email'));
			if($result){
				foreach($result as $row)
		   	  	{
		       		if($row->user_provider){
		       			$data['user_provider'] = $row->user_provider;
		  			}
		     	}
				$content = 'content/content-forgot-result';
				$this->load->view('header');
				$this->load->view($content,$data);
				$this->load->view('footer');
			}
		}else{

		}
	}
}

/* End of file front_page.php */
/* Location: ./application/controllers/welcome.php */