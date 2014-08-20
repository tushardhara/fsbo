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
        $this->load->model('user');
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
	   			$this->sanitize($this->input->post('user_login')),
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
	function ajax_register()
	{
   		$register = $this->user->ajax_register(
   			$this->input->post('user_login'),
   			$this->input->post('user_pass'),
   			$this->input->post('user_email'),
   			$this->input->post('user_fname'),
   			$this->input->post('user_lname'),
   			'',
   			'',
   			'',
   			'',
   			'',
   			$this->sanitize($this->input->post('user_login')),
   			'',
   			'',
   			$this->input->post('user_type'),
   			'Fsbo'
   		);
	   	redirect('profile/admin/settings/user');	
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

	    $count = $this->user->find_slug($title);
	    if($count == 0){
	    	return $title;
	    }else if($count >= 1){
	    	return $title = $title.'-'.$count;
	    }
	}
}

/* End of file front_page.php */
/* Location: ./application/controllers/welcome.php */