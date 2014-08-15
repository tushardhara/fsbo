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
        $this->load->model('option');
        $this->load->library('pagination');
        $this->load->library('table');
    }
	public function index()
	{	$data_set='';
		$option_data = $this->option->show_option_data();
		$data_set['education_community'] = $this->db->query("SELECT post_education_community FROM fsbo_post WHERE post_type IN ('education') AND post_status='0' GROUP BY post_education_community")->result();
		$data_set['education_type'] = $this->db->query("SELECT post_education_type FROM fsbo_post WHERE post_type IN ('education') AND post_status='0' GROUP BY post_education_type")->result();
		$data_set['price'] = $this->db->query(
        "SELECT MIN(post_price) as min, MAX(post_price) as max FROM fsbo_post WHERE 
          post_type IN('property','furniture','education') AND
          post_status='0'"
      )->result();
		foreach ($option_data as $key) {
			$post_option_data = $key->option_data;
		}
		$i=1;
		foreach (json_decode($post_option_data) as $key => $value) {
			$option[$i] = $value;
			$i++;
		}
		$data_set['data_two_property_feature'] = $this->post->show_two_property_feature($option[1],$option[2]);
		$data_set['data_center_property_feature'] = $this->post->show_center_property_feature($option[3]);
		$data_set['data_three_property_feature'] = $this->post->show_three_feature($option[4],$option[5],$option[6]);
		$data_set['data_three_furniture_feature'] = $this->post->show_three_feature($option[7],$option[8],$option[9]);
		$data_set['data_three_education_feature_1'] = $this->post->show_three_feature($option[10],$option[11],$option[12]);
		$data_set['data_three_education_feature_2'] = $this->post->show_three_feature($option[13],$option[14],$option[15]);
		$data_set['data_three_education_feature_3'] = $this->post->show_three_feature($option[16],$option[17],$option[18]);
		$data_set['user_image_mylist'] = $this->post->show_home_image($option[1],$option[2],$option[3],$option[4],$option[5],$option[6],$option[7],$option[8],$option[9],$option[10],$option[11],$option[12],$option[13],$option[14],$option[15],$option[16],$option[17],$option[18]);
		$this->load->view('header',$data_set);
		$this->load->view('content/content',$data_set);
		$this->load->view('footer',$data_set);
	}
	public function compare($ids)
	{
		//print_r($ids);
		$data_set='';
		$data_set['user_image_mylist'] = $this->post->show_admin_all_image();
		$get_ids=$this->input->get('id');
		if($ids =='ids' && !empty($get_ids)){
			$data_set['records']=$this->db->query("SELECT * FROM `fsbo_post` WHERE post_type = 'property' AND post_status='0' AND ID IN($get_ids)")->result();
			$content = 'content/content-compare';
		} else {
			$content = 'content/content-404';
		}
		$this->load->view('header');
		$this->load->view($content,$data_set);
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
	public function agent($query_id = 0, $sort_type='All',$offset=0)
	{
		$data_set='';
		if(is_numeric($query_id) || $query_id==''){
			$data_set['user_list']=$this->user->user_list($sort_type);
			$content = 'content/content-agent-listing';
		}else{
			$data_set['user_list'] = $this->db->get_where('fsbo_users' ,array('user_slug' => $this->uri->segment(2)))->result();
			$data_set['slug'] = $this->uri->segment(2);
			$data_set['user_image_mylist'] = $this->post->show_admin_all_image();
			$this->input->load_query($this->uri->segment(3));
			$query_array = array(
				'slug' => $this->input->get('slug'),
				'city' => $this->input->get('city'),
				'type' => $this->input->get('type'),
				'bedroom' => $this->input->get('bedroom'),
				'bathroom' => $this->input->get('bathroom'),
				'input_min' => $this->input->get('input_min'),
				'input_max' => $this->input->get('input_max'),
				'sort' => $this->input->get('sort'),
			);
			$data_set['query_id'] = $query_id;
			$limit = 5;
			$offset = $this->uri->segment(4) == '' ? 0:$this->uri->segment(4);
			$results = $this->post->show_user_slug_all($this->uri->segment(2),$offset,$limit,$query_array);
			$data_set['user_mylist'] = $results['rows'];
			$data_set['num_results'] = $results['num_rows'];
			$data_set['num_max'] = $results['max'];
			$data_set['num_min'] = $results['min'];
			$data_set['total_num_max'] = $results['total_max'];
			$data_set['total_num_min'] = $results['total_min'];
			$slug=$this->uri->segment(2);
			$config['base_url'] = site_url("agent/$slug/$query_id");
			$config['total_rows'] = $data_set['num_results'];
			$config['per_page'] = $limit;
			$config['num_links'] = 20;
			$config['uri_segment'] = 4;  
			$config['cur_tag_open'] = ' <a href="'.base_url().$this->uri->uri_string().'" class="current">';
			$config['cur_tag_close'] = '</a>'; 
			$this->pagination->initialize($config);
			$data_set['pagination'] = $this->pagination->create_links();
			$data_set['query_array'] = $query_array;
			$content = 'content/content-agent-detail';
		}
		$this->load->view('header');
		$this->load->view($content,$data_set);
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
			$data_set='';
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
						$data_set['user_mylist'] = $this->post->show_all_wishlist($this->session->userdata('logged_in')['ID']);
						$data_set['user_image_mylist'] = $this->post->show_all_image_wishlist($this->session->userdata('logged_in')['ID']);
						$content = 'content/content-wishlist';
					}else if($type == 'mylist'){
						if($data == 'admin'){
							$data_set['user_mylist'] = $this->post->show_admin_all();
							$data_set['user_image_mylist'] = $this->post->show_admin_all_image();
							$content = 'content/content-my-listing';
						}else if($data == 'moderator'){
							$data_set['user_mylist'] = $this->post->show_admin_all();
							$data_set['user_image_mylist'] = $this->post->show_admin_all_image();
							$content = 'content/content-my-listing';
						}else if($data == 'user'){
							$data_set['user_mylist'] = $this->post->show_user_all($this->session->userdata('logged_in')['ID']);
							$data_set['user_image_mylist'] = $this->post->show_user_all_image($this->session->userdata('logged_in')['ID']);
							$content = 'content/content-my-listing';
						}else if($data == 'agent'){
							$data_set['user_mylist'] = $this->post->show_user_all($this->session->userdata('logged_in')['ID']);
							$data_set['user_image_mylist'] = $this->post->show_user_all_image($this->session->userdata('logged_in')['ID']);
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
								 	$data_set['post_detail'] = $this->post->show_post_by_ID($view);
								 	$data_set['image_list'] = $this->post->show_post_images($view);
									$content = 'content/content-edit-property';
								}else if($post_type == 'furniture') {
									$data_set['post_detail'] = $this->post->show_post_by_ID($view);
									$data_set['image_list'] = $this->post->show_post_images($view);
									$content = 'content/content-edit-furniture';
								}else if($post_type == 'education') {
									$data_set['post_detail'] = $this->post->show_post_by_ID($view);
									$data_set['image_list'] = $this->post->show_post_images($view);
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
					}else if($type == 'settings'){
						if($this->session->userdata('logged_in')['user_type'] == 'admin') {
							if($view=="home"){
								$data_set['post_property'] = $this->post->show_property();
								$data_set['post_furniture'] = $this->post->show_furniture();
								$data_set['post_education'] = $this->post->show_education();
								$data_set['option_data'] = $this->option->show_option_data();
								$content = 'content/content-home-settings';
							}
						}else if($this->session->userdata('logged_in')['user_type'] == 'moderator'){
							if($view=="home"){
								$data_set['post_property'] = $this->post->show_property();
								$data_set['post_furniture'] = $this->post->show_furniture();
								$data_set['post_education'] = $this->post->show_education();
								$data_set['option_data'] = $this->option->show_option_data();
								$content = 'content/content-home-settings';
							}
						}else{
							$content = 'content/content-404';
						}
					}else{
						$content = 'content/content-404';
					}
				}else{
					if($data == 'user'){
						$data_set['user_detail'] = $this->user->check_id($this->session->userdata('logged_in')['ID']);
						$data_set['country_list'] = $this->db->query("SELECT * FROM fsbo_country")->result();
						$content = 'content/content-'.$data.'-profile';
					}else if($data == 'agent'){
						$data_set['user_detail'] = $this->user->check_id($this->session->userdata('logged_in')['ID']);
						$data_set['country_list'] = $this->db->query("SELECT * FROM fsbo_country")->result();
						$content = 'content/content-'.$data.'-profile';
					}else if($data == 'admin'){
						$data_set['user_detail'] = $this->user->check_id($this->session->userdata('logged_in')['ID']);
						$data_set['country_list'] = $this->db->query("SELECT * FROM fsbo_country")->result();
						$content = 'content/content-user-profile';
					}else if($data == 'moderator'){
						$data_set['user_detail'] = $this->user->check_id($this->session->userdata('logged_in')['ID']);
						$data_set['country_list'] = $this->db->query("SELECT * FROM fsbo_country")->result();
						$content = 'content/content-user-profile';
					}else{
						$content = 'content/content-404';
					}	
				}
			}else{
				$content = 'content/content-404';
			}
			$this->load->view('header');
			$this->load->view($content,$data_set);
			$this->load->view('footer');
		}else{
			redirect('login');
		}
	}
	public function education($query_id = 0, $sort_type='All',$sort_by = 'post_title', $sort_order = 'asc', $offset = 0)
	{
		$data_set='';
		$data_set['user_image_mylist'] = $this->post->show_admin_all_image();
		if(is_numeric($query_id) || $query_id==''){
			$data_set['get_all_eduction_type'] = $this->post->get_all_eduction_type();
			$limit = 100;
			$this->input->load_query($query_id);
			$query_array = array(
				'post_type' => 'education',
				'post_title' => $this->input->get('post_title'),
			);
			$data_set['query_id'] = $query_id;
			$results = $this->post->search_edu($query_array, $limit, $offset, $sort_type,$sort_by, $sort_order);
			$data_set['num_results'] = $results['num_rows'];
			$data_set['records'] =$results['rows'];
			// pagination
			$config['base_url'] = site_url("education/$query_id/$sort_type/$sort_by/$sort_order");
			$config['total_rows'] = $data_set['num_results'];
			$config['per_page'] = $limit;
			$config['num_links'] = 20; 
			$config['uri_segment'] = 7;
			$config['cur_tag_open'] = ' <a href="'.base_url().$this->uri->uri_string().'" class="current">';
			$config['cur_tag_close'] = '</a>'; 
			$this->pagination->initialize($config);
			$data_set['pagination'] = $this->pagination->create_links();
			$data_set['sort_by'] = $sort_by;
			$data_set['sort_order'] = $sort_order;
			$data_set['per_page'] =  round($data_set['num_results'] / $config['per_page']);
			$content = 'content/content-education-listing';
		}else{
			$data_set['records'] = $this->db->get_where('fsbo_post' ,array('post_type' => 'education','post_slug' => $this->uri->segment(2)))->result();
			$data_set['user_image_detail'] = $this->post->show_image($this->uri->segment(2));
			if(count ($data_set['records']) == 1){
				$data_set['related'] = $this->db->get_where('fsbo_post' ,array('post_type' => 'education'),8)->result();
				$content = 'content/content-education-detail';
			}else{
				$content = 'content/content-404';
			}
		}
		$this->load->view('header',$data_set);
		$this->load->view($content,$data_set);
		$this->load->view('footer');
	}
	
	public function property($query_id = 0, $sort_by = 'ID', $sort_order = 'asc', $offset = 0)
	{
		$data_set='';
		$data_set['user_image_mylist'] = $this->post->show_admin_all_image();
		if(is_numeric($query_id) || $query_id==''){
			$data_set['community'] = $this->db->query("SELECT post_property_area_community FROM fsbo_post WHERE post_type IN ('property') AND post_status='0' GROUP BY post_property_area_community")->result();
			$limit = 8;
			$this->input->load_query($query_id);
			$query_array = array(
				'page' => 'property',
				'title' => $this->input->get('title'),
				'property_category' => $this->input->get('property_category'),
				'property_type' => $this->input->get('property_type'),
				'user_type' => $this->input->get('user_type'),
				'bedroom_min' => $this->input->get('bedroom_min'),
				'bedroom_max' => $this->input->get('bedroom_max'),
				'bathroom_min' => $this->input->get('bathroom_min'),
				'bathroom_max' => $this->input->get('bathroom_max'),
				'input_min' => $this->input->get('input_min'),
				'input_max' => $this->input->get('input_max'),
				'city' => $this->input->get('city'),
				'community' => $this->input->get('community'),
				'min_sq' => $this->input->get('min_sq'),
				'max_sq' => $this->input->get('max_sq'),
			);
			$data_set['query_id'] = $query_id;
			$results = $this->post->show_property_result($query_array,$sort_by, $sort_order,$limit, $offset);
			$data_set['num_results'] = $results['num_rows'];
			$data_set['records'] =$results['rows'];
			$data_set['num_max'] = $results['max'];
			$data_set['num_min'] = $results['min'];
			$data_set['total_num_max'] = $results['total_max'];
			$data_set['total_num_min'] = $results['total_min'];
			$config['base_url'] = site_url("/property/$query_id/$sort_by/$sort_order");
			$config['total_rows'] = $results['num_rows'];
			$config['per_page'] = $limit;
			$config['num_links'] = 20; 
			$config['uri_segment'] = 6;
			$config['cur_tag_open'] = ' <a href="'.base_url().$this->uri->uri_string().'" class="current">';
			$config['cur_tag_close'] = '</a>'; 
			$this->pagination->initialize($config);
			$data_set['pagination'] = $this->pagination->create_links();
			$data_set['query_array'] = $query_array;
			$content = 'content/content-property-listing';
		}else{
			$data_set['records'] = $this->db->get_where('fsbo_post' ,array('post_type' => 'property','post_slug' => $this->uri->segment(2)))->result();
			$data_set['user_image_detail'] = $this->post->show_image($this->uri->segment(2));
			if(count ($data_set['records']) == 1){
				if($data_set['records'][0]->post_property_type=='Residential property for Sale' || $data_set['records'][0]->post_property_type=='Commercial property for Sale'){
					$data_set['related_price'] = $this->db->get_where('fsbo_post' ,array('post_type' => 'property','post_status' =>'0','post_price >' => $data_set['records'][0]->post_price-25000,'post_price <' => $data_set['records'][0]->post_price+25000),3)->result();
				}else{
					$data_set['related_price'] = $this->db->get_where('fsbo_post' ,array('post_type' => 'property','post_status' =>'0','post_price >' => $data_set['records'][0]->post_price-1000,'post_price <' => $data_set['records'][0]->post_price+1000),3)->result();
				}
				$data_set['related_area'] = $this->db->get_where('fsbo_post' ,array('post_type' => 'property','post_status' =>'0','post_property_area_community' => $data_set['records'][0]->post_property_area_community),3)->result();
				$content = 'content/content-property-detail';
			}else{
				$content = 'content/content-404';
			}
		}
		$this->load->view('header',$data_set);
		$this->load->view($content,$data_set);
		$this->load->view('footer');
	}
	
	public function furniture($query_id = 0, $post_furniture_type = 'all' , $sort_by = 'post_title', $sort_order = 'asc', $offset = 0)
	{	
		$data_set='';
		$data_set['user_image_mylist'] = $this->post->show_admin_all_image();
		if(is_numeric($query_id) || $query_id==''){
			$limit = 8;
			$this->input->load_query($query_id);
			$query_array = array(
				'post_type' => 'furniture',
				'post_title' => $this->input->get('post_title'),
			);
			$data_set['query_id'] = $query_id;
			$results = $this->post->search_e($query_array, $limit, $offset,$post_furniture_type,$sort_by, $sort_order);
			$data_set['num_results'] = $results['num_rows'];
			$data_set['records'] =$results['rows'];
			// pagination
			$config['base_url'] = site_url("furniture/$query_id/$post_furniture_type/$sort_by/$sort_order");
			$config['total_rows'] = $data_set['num_results'];
			$config['per_page'] = $limit;
			$config['num_links'] = 20; 
			$config['uri_segment'] = 7;
			$config['cur_tag_open'] = ' <a href="'.base_url().$this->uri->uri_string().'" class="current">';
			$config['cur_tag_close'] = '</a>'; 
			$this->pagination->initialize($config);
			$data_set['pagination'] = $this->pagination->create_links();
			$data_set['sort_by'] = $sort_by;
			$data_set['sort_order'] = $sort_order;
			$data_set['per_page'] =  round($data_set['num_results'] / $config['per_page']);
			$content = 'content/content-furniture-listing';
		}else{
			$data_set['records'] = $this->db->get_where('fsbo_post' ,array('post_type' => 'furniture','post_slug' => $this->uri->segment(2)))->result();
			$data_set['user_image_detail'] = $this->post->show_image($this->uri->segment(2));
			if(count ($data_set['records']) == 1){
				$data_set['related'] = $this->db->get_where('fsbo_post' ,array('post_type' => 'furniture','post_status' =>'0','post_furniture_type' => $data_set['records'][0]->post_furniture_type),8)->result();
				$content = 'content/content-furniture-detail';
			}else{
				$content = 'content/content-404';
			}
		}
		$this->load->view('header',$data_set);
		$this->load->view($content,$data_set);
		$this->load->view('footer');
	}

	public function adv_search($query_id = 0, $sort_by = 'ID', $sort_order = 'asc', $offset = 0)
	{
		$data_set='';
		$data_set['user_image_mylist'] = $this->post->show_admin_all_image();
		$data_set['community'] = $this->db->query("SELECT post_property_area_community FROM fsbo_post WHERE post_type IN ('property') AND post_status='0' GROUP BY post_property_area_community")->result();
		$data_set['education_community'] = $this->db->query("SELECT post_education_community FROM fsbo_post WHERE post_type IN ('education') AND post_status='0' GROUP BY post_education_community")->result();
		$data_set['education_type'] = $this->db->query("SELECT post_education_type FROM fsbo_post WHERE post_type IN ('education') AND post_status='0' GROUP BY post_education_type")->result();
		$limit = 8;
		$this->input->load_query($query_id);
		$query_array = array(
			'type' => $this->input->get('type'),
			'title' => $this->input->get('title'),
			'property_category' => $this->input->get('property_category'),
			'property_type' => $this->input->get('property_type'),
			'user_type' => $this->input->get('user_type'),
			'bedroom_min' => $this->input->get('bedroom_min'),
			'bedroom_max' => $this->input->get('bedroom_max'),
			'bathroom_min' => $this->input->get('bathroom_min'),
			'bathroom_max' => $this->input->get('bathroom_max'),
			'input_min' => $this->input->get('input_min'),
			'input_max' => $this->input->get('input_max'),
			'city' => $this->input->get('city'),
			'community' => $this->input->get('community'),
			'min_sq' => $this->input->get('min_sq'),
			'max_sq' => $this->input->get('max_sq'),
			'furniture_type' => $this->input->get('furniture_type'),
			'education_type' => $this->input->get('education_type'),
			'education_gender' => $this->input->get('education_gender'),
			'education_community' => $this->input->get('education_community')
		);
		//print_r($query_array);
		$data_set['query_id'] = $query_id;
		$results = $this->post->show_adv_result($query_array,$sort_by, $sort_order,$limit, $offset);
		$data_set['num_results'] = $results['num_rows'];
		$data_set['records'] =$results['rows'];
		$data_set['num_max'] = $results['max'];
		$data_set['num_min'] = $results['min'];
		$data_set['total_num_max'] = $results['total_max'];
		$data_set['total_num_min'] = $results['total_min'];
		$config['base_url'] = site_url("/adv_search/$query_id/$sort_by/$sort_order");
		$config['total_rows'] = $results['num_rows'];
		$config['per_page'] = $limit;
		$config['num_links'] = 20; 
		$config['uri_segment'] = 6;
		$config['cur_tag_open'] = ' <a href="'.base_url().$this->uri->uri_string().'" class="current">';
		$config['cur_tag_close'] = '</a>'; 
		$this->pagination->initialize($config);
		$data_set['pagination'] = $this->pagination->create_links();
		$data_set['query_array'] = $query_array;
		$content = 'content/content-adv-search';
		$this->load->view('header',$data_set);
		$this->load->view($content,$data_set);
		$this->load->view('footer');
	}
	public function search() {
		
		$query_array = array(
			'post_title' => $this->input->post('post_title'),
			'post_type' => $this->input->post('post_type'),
		);
		
		$query_id = $this->input->save_query($query_array);
		
		if($this->input->post('post_type')=='education'){
			redirect("education/$query_id");
		}else if($this->input->post('post_type')=='furniture'){
			redirect("furniture/$query_id");
		}
	}
	public function search_agent($slug) {
		
		$query_array = array(
			'slug' => $slug,
			'city' => $this->input->post('city'),
			'type' => $this->input->post('type'),
			'bedroom' => $this->input->post('bedroom'),
			'bathroom' => $this->input->post('bathroom'),
			'input_min' => $this->input->post('input_min'),
			'input_max' => $this->input->post('input_max'),
			'sort' => $this->input->post('sort'),
		);
		
		$query_id = $this->input->save_query($query_array);
		redirect("agent/$slug/$query_id");
	}
	
	public function search_pro() {
		
		$query_array = array(
			'page' => 'property',
			'title' => $this->input->post('title'),
			'property_category' => $this->input->post('property_category'),
			'property_type' => $this->input->post('property_type'),
			'user_type' => $this->input->post('user_type'),
			'bedroom_min' => $this->input->post('bedroom_min'),
			'bedroom_max' => $this->input->post('bedroom_max'),
			'bathroom_min' => $this->input->post('bathroom_min'),
			'bathroom_max' => $this->input->post('bathroom_max'),
			'input_min' => $this->input->post('input_min'),
			'input_max' => $this->input->post('input_max'),
			'city' => $this->input->post('city'),
			'community' => $this->input->post('community'),
			'min_sq' => $this->input->post('min_sq'),
			'max_sq' => $this->input->post('max_sq'),
		);
		//print_r($query_array);
		$query_id = $this->input->save_query($query_array);
		redirect("property/$query_id");
	}
	public function adv_search_query(){
		$query_array = array(
			'type' => $this->input->post('type'),
			'title' => $this->input->post('title'),
			'property_category' => $this->input->post('property_category'),
			'property_type' => $this->input->post('property_type'),
			'user_type' => $this->input->post('user_type'),
			'bedroom_min' => $this->input->post('bedroom_min'),
			'bedroom_max' => $this->input->post('bedroom_max'),
			'bathroom_min' => $this->input->post('bathroom_min'),
			'bathroom_max' => $this->input->post('bathroom_max'),
			'input_min' => $this->input->post('input_min'),
			'input_max' => $this->input->post('input_max'),
			'city' => $this->input->post('city'),
			'community' => $this->input->post('community'),
			'min_sq' => $this->input->post('min_sq'),
			'max_sq' => $this->input->post('max_sq'),
			'furniture_type' => $this->input->post('furniture_type'),
			'education_type' => $this->input->post('education_type'),
			'education_gender' => $this->input->post('education_gender'),
			'education_community' => $this->input->post('education_community')
		);
		$query_id = $this->input->save_query($query_array);
		//print_r($query_array);
		redirect("adv_search/$query_id");
	}
}

/* End of file front_page.php */
/* Location: ./application/controllers/welcome.php */