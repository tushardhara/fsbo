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
  function register($user_login,$user_pass,$user_email,$user_fname = '',$user_lname = '',$user_phone = '',$user_country = '',$user_city = '',$user_language = '',$user_url = '',$user_title = '',$user_detail ='',$user_type){
    
    $data = array(
     'user_login' => $user_login,
     'user_pass' => $this->encrypt->sha1(MD5($this->salt.$user_pass)),
     'user_email' => $user_email,
     'user_fname' => $user_fname,
     'user_lname' => $user_lname,
     'user_phone' => $user_phone,
     'user_country' => $user_country,
     'user_city' => $user_city,
     'user_language' => $user_language,
     'user_url' => $user_url,
     'user_title' => $user_title,
     'user_detail' => $user_detail,
     'user_type' => $user_type == 1 ? 'user' : 'agent',
     'user_status' => '0',
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
}
?>