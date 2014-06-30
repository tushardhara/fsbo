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
			$content = 'content/content';
		}
		$this->load->view('header');
		$this->load->view($content);
		$this->load->view('footer');
	}
}

/* End of file front_page.php */
/* Location: ./application/controllers/welcome.php */