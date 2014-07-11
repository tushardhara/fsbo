<?php
Class Option extends CI_Model{
  function __construct()
  {
    // Call the Model constructor
    parent::__construct();
  }
  function modify_option($option_data){
    $data = array(
        'option_data' => $option_data,
      );
    $this->db->where('ID','1');
    $this->db->update('fsbo_option', $data);
  }
  function show_option_data(){
    $this->db->select('option_data');
    $this->db->from('fsbo_option');
    $this->db->where("ID", "1");
    $query = $this->db->get();
    if($query->num_rows()){
      return $query->result();
    }else{
      return false;
    }
  }
}
?>