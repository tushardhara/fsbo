<?php
Class User extends CI_Model{
  public $salt="6GvGuJMEkOMp";
  function __construct()
  {
    // Call the Model constructor
    parent::__construct();
    $this->load->library('encrypt');
  }
  function login($user_email,$user_pass){
     $this->db->select('*');
     $this->db->from('fsbo_users');
     $this->db->where('user_email', $user_email);
     $this->db->where('user_pass', $this->encrypt->sha1($this->salt.$user_pass));
     $this->db->where('user_status','0');
     $this->db->limit(1);
     $query = $this->db->get();
     if($query->num_rows() == 1){
        return $query->result();
     }else{
       return false;
     }
  }
  function register($user_login,$user_pass,$user_email,$user_fname = '',$user_lname = '',$user_phone = '',$user_country = '',$user_city = '',$user_language = '',$user_url = '',$user_slug = '',$user_title = '',$user_detail ='',$user_type,$user_provider){
    
    $data = array(
     'user_login' => $user_login,
     'user_pass' => $this->encrypt->sha1($this->salt.$user_pass),
     'user_email' => $user_email,
     'user_fname' => $user_fname,
     'user_lname' => $user_lname,
     'user_phone' => $user_phone,
     'user_country' => $user_country,
     'user_city' => $user_city,
     'user_language' => $user_language,
     'user_url' => $user_url,
     'user_slug' => $user_slug,
     'user_title' => $user_title,
     'user_detail' => $user_detail,
     'user_type' => $user_type == 1 ? 'user' : 'agent',
     'user_status' => '0',
     'user_provider' => $user_provider,
     'user_registered' => date("Y-m-d H:i:s"),
    );
    $check=$this->db->insert('fsbo_users', $data);
    if($check){
      return $this->db->insert_id();
    }else{
      return false;
    }
  }
  function ajax_register($user_login,$user_pass,$user_email,$user_fname = '',$user_lname = '',$user_phone = '',$user_country = '',$user_city = '',$user_language = '',$user_url = '',$user_slug = '',$user_title = '',$user_detail ='',$user_type,$user_provider){
    
    $data = array(
     'user_login' => $user_login,
     'user_pass' => $this->encrypt->sha1($this->salt.$user_pass),
     'user_email' => $user_email,
     'user_fname' => $user_fname,
     'user_lname' => $user_lname,
     'user_phone' => $user_phone,
     'user_country' => $user_country,
     'user_city' => $user_city,
     'user_language' => $user_language,
     'user_url' => $user_url,
     'user_slug' => $user_slug,
     'user_title' => $user_title,
     'user_detail' => $user_detail,
     'user_type' => $user_type,
     'user_status' => '0',
     'user_provider' => $user_provider,
     'user_registered' => date("Y-m-d H:i:s"),
    );
    $check=$this->db->insert('fsbo_users', $data);
    if($check){
      return $this->db->insert_id();
    }else{
      return false;
    }
  }
  function check_email($user_email){
     $this->db->select('*');
     $this->db->from('fsbo_users');
     $this->db->where('user_email', $user_email);
     $this->db->limit(1);
     $query = $this->db->get();
     if($query->num_rows() == 1){
        return $query->result();
     }else{
       return false;
     }
  }
  function check_user_login($user_login){
     $this->db->select('*');
     $this->db->from('fsbo_users');
     $this->db->where('user_login', $user_login);
     $this->db->limit(1);
     $query = $this->db->get();
     if($query->num_rows() == 1){
        return $query->result();
     }else{
       return false;
     }
  }
  function check_id($ID){
     $this->db->select('*');
     $this->db->from('fsbo_users');
     $this->db->where('ID', $ID);
     $this->db->limit(1);
     $query = $this->db->get();
     if($query->num_rows() == 1){
        return $query->result();
     }else{
       return false;
     }
  }
  function modify($user_pass = '',$user_email = '',$user_fname = '',$user_lname = '',$user_phone = '',$user_country = '',$user_city = '',$user_language = '',$user_url = '',$user_title = '',$user_detail =''){
    if($user_pass == ''){
      $data = array(
         'user_email' => $user_email,
         'user_fname' => $user_fname,
         'user_lname' => $user_lname,
         'user_phone' => $user_phone,
         'user_country' => $user_country,
         'user_city'  => $user_city,
         'user_language' => $user_language,
         'user_title' => $user_title,
         'user_detail' => $user_detail,
      );
    }else{
       $data = array(
         'user_pass' => $this->encrypt->sha1($this->salt.$user_pass),
         'user_email' => $user_email,
         'user_fname' => $user_fname,
         'user_lname' => $user_lname,
         'user_phone' => $user_phone,
         'user_country' => $user_country,
         'user_city'  => $user_city,
         'user_language' => $user_language,
         'user_title' => $user_title,
         'user_detail' => $user_detail
      );
    }
    $this->db->where('id', $this->session->userdata('logged_in')['ID']);
    $this->db->update('fsbo_users', $data);
  }
  function new_modify($ID,$user_login='',$user_pass = '',$user_email = '',$user_fname = '',$user_lname = '',$user_type = ''){
    if($user_pass == ''){
      $data = array(
         'user_login' => $user_login,
         'user_email' => $user_email,
         'user_fname' => $user_fname,
         'user_lname' => $user_lname,
         'user_type'  => $user_type
      );
    }else{
       $data = array(
         'user_login' => $user_login,
         'user_pass' => $this->encrypt->sha1($this->salt.$user_pass),
         'user_email' => $user_email,
         'user_fname' => $user_fname,
         'user_lname' => $user_lname,
         'user_type'  => $user_type
      );
    }
    $this->db->where('ID', $ID);
    $this->db->update('fsbo_users', $data);
  }
  function add_image($user_pic){
    $data = array(
      'user_pic' => $user_pic
    );
    $this->db->where('id', $this->session->userdata('logged_in')['ID']);
    $this->db->update('fsbo_users', $data);
  }
  function find_slug($user_slug){
    $this->db->like('user_slug',$post_slug, 'after'); 
    $this->db->from('fsbo_users');
    return $this->db->count_all_results();
  }
  function user_list($type='All'){
     if($type=='All'){ 
      $query = $this->db->query("SELECT * FROM fsbo_users WHERE ID IN (SELECT post_user_id FROM fsbo_post WHERE post_type IN ('property', 'furniture', 'education') AND post_status='0' GROUP BY post_user_id) AND user_status='0'");
     }else if($type=='User'){
      $query = $this->db->query("SELECT * FROM fsbo_users WHERE ID IN (SELECT post_user_id FROM fsbo_post WHERE post_type IN ('property', 'furniture', 'education') AND post_status='0' AND post_user_type IN ('admin','moderator','user') GROUP BY post_user_id) AND user_status='0'");
    }else if($type=='Broker'){
      $query = $this->db->query("SELECT * FROM fsbo_users WHERE ID IN (SELECT post_user_id FROM fsbo_post WHERE post_type IN ('property', 'furniture', 'education') AND post_status='0' AND post_user_type IN ('agent') GROUP BY post_user_id) AND user_status='0'");
    }
     if($query->num_rows()){
        return $query->result();
     }else{
       return false;
     }
  }
}
?>