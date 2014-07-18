<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class HAuth extends CI_Controller {

	function __construct()
	{
	    parent::__construct();
	    $this->load->model('user');
	}
	public function index()
	{
		$this->load->view('header');
		$this->load->view('content/content-404');
		$this->load->view('footer');
	}

	public function login($provider)
	{
		log_message('debug', "controllers.HAuth.login($provider) called");

		try
		{
			log_message('debug', 'controllers.HAuth.login: loading HybridAuthLib');
			$this->load->library('HybridAuthLib');

			if ($this->hybridauthlib->providerEnabled($provider))
			{
				log_message('debug', "controllers.HAuth.login: service $provider enabled, trying to authenticate.");
				$service = $this->hybridauthlib->authenticate($provider);

				if ($service->isUserConnected())
				{
					log_message('debug', 'controller.HAuth.login: user authenticated.');

					$user_profile = $service->getUserProfile();

					log_message('info', 'controllers.HAuth.login: user profile:'.PHP_EOL.print_r($user_profile, TRUE));

					$data['user_profile'] = $user_profile;
					if($provider == 'Facebook' || $provider == 'Google'){
						
						$result = $this->user->check_email($user_profile->email);
					   	if($result){
					   		foreach($result as $row){
					       		$sess_array = array(
					         		'ID' => $row->ID,
					         		'user_login' => $row->user_login,
					         		'user_email' => $row->user_email,
					         		'user_type' => $row->user_type,
					       		);
					       		$this->session->set_userdata('logged_in', $sess_array);
					     	}
					     	if($row->user_type == 'user'){
					     		redirect('profile/user');
					     	}else if($row->user_type == 'agent'){
					     		redirect('profile/agent');
					     	}else if($row->user_type == 'moderator') {
					     		redirect('profile/moderator');
					     	}else if($row->user_type == 'admin') {
					     		redirect('profile/admin');
					     	}
					   	}else{
					   		$register = $this->user->register(
					   			$user_profile->displayName,
					   			$this->randomPassword(),
					   			$user_profile->email,
					   			$user_profile->firstName,
					   			$user_profile->lastName,
					   			$user_profile->phone,
					   			$user_profile->country,
					   			$user_profile->city,
					   			$user_profile->language,
					   			$user_profile->webSiteURL,
					   			$this->sanitize($user_profile->displayName),
					   			'',
					   			$user_profile->description,
					   			'1',
					   			$provider
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
						     	if($row->user_type == 'user'){
					     		redirect('profile/user');
						     	}else if($row->user_type == 'agent'){
						     		redirect('profile/agent');
						     	}else if($row->user_type == 'moderator') {
						     		redirect('profile/moderator');
						     	}else if($row->user_type == 'admin'){
						     		redirect('profile/admin');
						     	}
					   		}else{
					   			redirect('login');
					   		}
					   	}
					}else if($provider == 'Twitter'){
						$result = $this->user->check_user_login($user_profile->displayName);
					   	if($result){
					   		foreach($result as $row){
					       		$sess_array = array(
					         		'ID' => $row->ID,
					         		'user_login' => $row->user_login,
					         		'user_email' => $row->user_email,
					         		'user_type' => $row->user_type,
					       		);
					       		$this->session->set_userdata('logged_in', $sess_array);
					     	}
					     	if($row->user_type == 'user'){
					     		redirect('profile/user');
					     	}else if($row->user_type == 'agent'){
					     		redirect('profile/agent');
					     	}else if($row->user_type == 'moderator') {
					     		redirect('profile/moderator');
					     	}else if($row->user_type == 'admin'){
					     		redirect('profile/admin');
					     	}
					   	}else{
					   		$register = $this->user->register(
					   			$user_profile->displayName,
					   			$this->randomPassword(),
					   			'abc@x.com',
					   			$user_profile->firstName,
					   			$user_profile->lastName,
					   			$user_profile->phone,
					   			$user_profile->country,
					   			$user_profile->city,
					   			$user_profile->language,
					   			$user_profile->webSiteURL,
					   			$this->sanitize($user_profile->displayName),
					   			'',
					   			$user_profile->description,
					   			'1',
					   			$provider
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
						     	if($row->user_type == 'user'){
					     		redirect('profile/user');
						     	}else if($row->user_type == 'agent'){
						     		redirect('profile/agent');
						     	}else if($row->user_type == 'moderator') {
						     		redirect('profile/moderator');
						     	}else if($row->user_type == 'moderator'){
						     		redirect('profile/admin');
						     	}
					   		}else{
					   			redirect('login');
					   		}
					   	}
					}
				}
				else // Cannot authenticate user
				{
					show_error('Cannot authenticate user');
				}
			}
			else // This service is not enabled.
			{
				log_message('error', 'controllers.HAuth.login: This provider is not enabled ('.$provider.')');
				show_404($_SERVER['REQUEST_URI']);
			}
		}
		catch(Exception $e)
		{
			$error = 'Unexpected error';
			switch($e->getCode())
			{
				case 0 : $error = 'Unspecified error.'; break;
				case 1 : $error = 'Hybriauth configuration error.'; break;
				case 2 : $error = 'Provider not properly configured.'; break;
				case 3 : $error = 'Unknown or disabled provider.'; break;
				case 4 : $error = 'Missing provider application credentials.'; break;
				case 5 : log_message('debug', 'controllers.HAuth.login: Authentification failed. The user has canceled the authentication or the provider refused the connection.');
				         //redirect();
				         if (isset($service))
				         {
				         	log_message('debug', 'controllers.HAuth.login: logging out from service.');
				         	$service->logout();
				         }
				         show_error('User has cancelled the authentication or the provider refused the connection.');
				         break;
				case 6 : $error = 'User profile request failed. Most likely the user is not connected to the provider and he should to authenticate again.';
				         break;
				case 7 : $error = 'User not connected to the provider.';
				         break;
			}

			if (isset($service))
			{
				$service->logout();
			}

			log_message('error', 'controllers.HAuth.login: '.$error);
			show_error('Error authenticating user.');
		}
	}
	public function logout($provider = "")
	{

		log_message('debug', "controllers.HAuth.logout($provider) called");
		$this->load->library('HybridAuthLib');
		try
		{
			if ($provider == "") {

				log_message('debug', "controllers.HAuth.logout() called, no provider specified. Logging out of all services.");
				$data['service'] = "all";
				$this->hybridauthlib->logoutAllProviders();
			} else {
				if ($this->hybridauthlib->providerEnabled($provider)) {
					log_message('debug', "controllers.HAuth.logout: service $provider enabled, trying to check if user is authenticated.");
					$service = $this->hybridauthlib->authenticate($provider);

					if ($service->isUserConnected()) {
						log_message('debug', 'controller.HAuth.logout: user is authenticated, logging out.');
						$service->logout();
						$data['service'] = $provider;
					} else { // Cannot authenticate user
						show_error('User not authenticated, success.');
						$data['service'] = $provider;
					}

				} else { // This service is not enabled.

					log_message('error', 'controllers.HAuth.login: This provider is not enabled ('.$provider.')');
					show_404($_SERVER['REQUEST_URI']);
				}
			}
			// Redirect back to the main page. We're done with logout
			redirect('login', 'refresh');

		}
		catch(Exception $e)
		{
			$error = 'Unexpected error';
			switch($e->getCode())
			{
			case 0 : $error = 'Unspecified error.'; break;
			case 1 : $error = 'Hybriauth configuration error.'; break;
			case 2 : $error = 'Provider not properly configured.'; break;
			case 3 : $error = 'Unknown or disabled provider.'; break;
			case 4 : $error = 'Missing provider application credentials.'; break;
			case 5 : log_message('debug', 'controllers.HAuth.login: Authentification failed. The user has canceled the authentication or the provider refused the connection.');
				//redirect();
				if (isset($service))
				{
					log_message('debug', 'controllers.HAuth.login: logging out from service.');
					$service->logout();
				}
				show_error('User has cancelled the authentication or the provider refused the connection.');
				break;
			case 6 : $error = 'User profile request failed. Most likely the user is not connected to the provider and he should to authenticate again.';
				break;
			case 7 : $error = 'User not connected to the provider.';
				break;
			}

			if (isset($service))
			{
				$service->logout();
			}

			log_message('error', 'controllers.HAuth.login: '.$error);
			show_error('Error authenticating user.');
		}
	}
	public function endpoint()
	{

		log_message('debug', 'controllers.HAuth.endpoint called.');
		log_message('info', 'controllers.HAuth.endpoint: $_REQUEST: '.print_r($_REQUEST, TRUE));

		if ($_SERVER['REQUEST_METHOD'] === 'GET')
		{
			log_message('debug', 'controllers.HAuth.endpoint: the request method is GET, copying REQUEST array into GET array.');
			$_GET = $_REQUEST;
		}

		log_message('debug', 'controllers.HAuth.endpoint: loading the original HybridAuth endpoint script.');
		require_once APPPATH.'/third_party/hybridauth/index.php';

	}
	public function randomPassword() {
	    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
	    $pass = array(); //remember to declare $pass as an array
	    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
	    for ($i = 0; $i < 8; $i++) {
	        $n = rand(0, $alphaLength);
	        $pass[] = $alphabet[$n];
	    }
	    echo implode($pass); //turn the array into a string
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

/* End of file hauth.php */
/* Location: ./application/controllers/hauth.php */
