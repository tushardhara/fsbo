<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

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
	public function index()
	{
		$this->load->view('header');
		$this->load->view('content/content');
		$this->load->view('footer');
	}
	public function page($data)
	{
		if(!empty($data)){
			$content = 'content/content-'.$data;
		}else{
			$content = 'content/content-404';
		}
		$this->load->view('header');
		$this->load->view($content);
		$this->load->view('footer');
	}
	public function agent($data = '')
	{
		if(!empty($data)){
			$content = 'content/content-agent-detail';
		}else{
			$content = 'content/content-agent-listing';
		}
		$this->load->view('header');
		$this->load->view($content);
		$this->load->view('footer');
	}
	public function register($data){
		if(!empty($data)){
			$content = 'content/content-'.$data.'-register';
		}else{
			$content = 'content/content-404';
		}
		$this->load->view('header');
		$this->load->view($content);
		$this->load->view('footer');
	}
	public function profile($data = '',$type = '',$view = ''){
		if($this->session->userdata('logged_in')){
			if(!empty($data)){
				if(!empty($type)){
					if($type == 'message'){
						if(!empty($view)){
							if($view == 'view'){
								$content = 'content/content-view-message';
							}else if($view == 'compose'){
								$content = 'content/content-compose';
							}else{
								$content = 'content/content-404';
							}	
						}else{
							$content = 'content/content-message';
						}	
					}else if($type == 'wishlist'){
						$content = 'content/content-wishlist';
					}else if($type == 'mylist'){
						$content = 'content/content-my-listing';
					}else{
						$content = 'content/content-404';
					}
				}else{
					if($data == 'user'){
						$content = 'content/content-'.$data.'-profile';
					}else if($data == 'agent'){
						$content = 'content/content-'.$data.'-profile';
					}else{
						$content = 'content/content-404';
					}	
				}
			}else{
				$content = 'content/content-404';
			}
			$this->load->view('header');
			$this->load->view($content);
			$this->load->view('footer');
		}else{
			redirect('login');
		}
	}
	public function education($data = '')
	{
		if(!empty($data)){
			$content = 'content/content-education-detail';
		}else{
			$content = 'content/content-education-listing';
		}
		$this->load->view('header');
		$this->load->view($content);
		$this->load->view('footer');
	}
	public function property($data = '')
	{
		if(!empty($data)){
			$content = 'content/content-property-detail';
		}else{
			$content = 'content/content-property-listing';
		}
		$this->load->view('header');
		$this->load->view($content);
		$this->load->view('footer');
	}
	public function furniture($data = '')
	{
		if(!empty($data)){
			$content = 'content/content-furniture(-detail';
		}else{
			$content = 'content/content-furniture(-listing';
		}
		$this->load->view('header');
		$this->load->view($content);
		$this->load->view('footer');
	}
}

/* End of file front_page.php */
/* Location: ./application/controllers/welcome.php */