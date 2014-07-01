<?php
Class User extends CI_Model{
  public $salt="6GvGuJMEkOMp";
  function __construct()
  {
    // Call the Model constructor
    parent::__construct();
  }
  function login($email, $password){
  	 $this->load->library('encrypt');
     $this->db->select('*');
     $this->db->from('fsbo_users');
     $this->db->where('user_email', $email);
     $this->db->where('user_pass', $this->encrypt->sha1($this->salt.$password));
     $this->db->where('user_status','0');
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