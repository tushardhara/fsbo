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
        $this->load->model('user');
        $this->load->model('post');
    }
	public function index()
	{
		$this->load->view('header');
		$this->load->view('content/content');
		$this->load->view('footer');
	}
	public function login()
	{
		$content = 'content/content-login';
		$this->load->view('header');
		$this->load->view($content);
		$this->load->view('footer');
	}
	public function forgot()
	{
		$content = 'content/content-forgot';
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
						if($data == 'admin'){
							$view['user_mylist'] = $this->post->show_admin_all();
							$content = 'content/content-my-listing';
						}else if($data == 'moderator'){
							$view['user_mylist'] = $this->post->show_admin_all();
							$content = 'content/content-my-listing';
						}else if($data == 'user'){
							$view['user_mylist'] = $this->post->show_user_all($this->session->userdata('logged_in')['ID']);
							$content = 'content/content-my-listing';
						}else if($data == 'agent'){
							$view['user_mylist'] = $this->post->show_user_all($this->session->userdata('logged_in')['ID']);
							$content = 'content/content-my-listing';
						}else{
							$content = 'content/content-404';
						}	
					}else if($type == 'property'){
						$content = 'content/content-upload-property';
					}else if($type == 'furniture'){
						$content = 'content/content-upload-furniture';
					}else if($type == 'education'){
						$content = 'content/content-upload-education';
					}else if($type == 'edit'){
						if(!empty($view)){
							$temp = $this->post->get_post_type($view);
							if(!empty($temp)){
								foreach ($temp as $key) {
									$post_type = $key->post_type;
								}
								if($post_type == 'property'){
									$content = 'content/content-edit-property';
								}else if($post_type == 'furniture') {
									$content = 'content/content-edit-furniture';
								}else if($post_type == 'education') {
									$content = 'content/content-edit-education';
								}else{
									$content = 'content/content-404';
								}
							}else{
								$content = 'content/content-404';
							}
						}else{
							$content = 'content/content-404';
						}
					}
				}else{
					if($data == 'user'){
						$view['user_detail'] = $this->user->check_id($this->session->userdata('logged_in')['ID']);
						$content = 'content/content-'.$data.'-profile';
					}else if($data == 'agent'){
						$view['user_detail'] = $this->user->check_id($this->session->userdata('logged_in')['ID']);
						$content = 'content/content-'.$data.'-profile';
					}else if($data == 'admin'){
						$view['user_detail'] = $this->user->check_id($this->session->userdata('logged_in')['ID']);
						$content = 'content/content-user-profile';
					}else if($data == 'moderator'){
						$view['user_detail'] = $this->user->check_id($this->session->userdata('logged_in')['ID']);
						$content = 'content/content-user-profile';
					}else{
						$content = 'content/content-404';
					}	
				}
			}else{
				$content = 'content/content-404';
			}
			$this->load->view('header');
			$this->load->view($content,$view);
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
			$content = 'content/content-furniture-detail';
		}else{
			$content = 'content/content-furniture-listing';
		}
		$this->load->view('header');
		$this->load->view($content);
		$this->load->view('footer');
	}
}

/* End of file front_page.php */
/* Location: ./application/controllers/welcome.php */