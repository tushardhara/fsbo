<?php
Class Post extends CI_Model{
  function __construct()
  {
    // Call the Model constructor
    parent::__construct();
  }
  function add(
    $post_type,
    $post_user_id,
    $post_user_type,
    $post_property_catergory = '',
    $post_property_type = '',
    $post_price = '',
    $post_property_size = '',
    $post_property_floor = '',
    $post_property_bedrooms = '',
    $post_property_bathroom = '',
    $post_property_area_reference = '',
    $post_property_area_city = '',
    $post_property_area_community = '',
    $post_property_area_address = '',
    $post_property_area_lat = '',
    $post_property_area_log = '',
    $post_property_build_floor = '',
    $post_property_build_apartment_per_floor = '',
    $post_property_build_elevators = '',
    $post_title = '',
    $post_description = '',
    $post_seo_title = '',
    $post_seo_keywords = '',
    $post_seo_description = '',
    $post_slug = '',
    $post_furniture_type = '',
    $post_featured = '',
    $post_education_type = '',
    $post_education_age = '',
    $post_education_gender = '',
    $post_education_community = '',
    $post_education_principle = '',
    $post_education_phone = '',
    $post_education_fax = '',
    $post_education_email = '',
    $post_education_website = ''
  ){
    $data = array(
      'post_type' => $post_type,
      'post_user_id' =>$post_user_id,
      'post_user_type' =>$post_user_type,
      'post_property_catergory' =>$post_property_catergory,
      'post_property_type' =>$post_property_type,
      'post_price' =>$post_price,
      'post_property_size' => $post_property_size,
      'post_property_floor' => $post_property_floor,
      'post_property_bedrooms' => $post_property_bedrooms,
      'post_property_bathroom' => $post_property_bathroom,
      'post_property_area_reference' => $post_property_area_reference,
      'post_property_area_city' => $post_property_area_city,
      'post_property_area_community' => $post_property_area_community,
      'post_property_area_address' => $post_property_area_address,
      'post_property_area_lat' => $post_property_area_lat,
      'post_property_area_log' => $post_property_area_log,
      'post_property_build_floor' => $post_property_build_floor,
      'post_property_build_apartment_per_floor' => $post_property_build_apartment_per_floor,
      'post_property_build_elevators' => $post_property_build_elevators,
      'post_title' => $post_title,
      'post_description' => $post_description,
      'post_seo_title' => $post_seo_title,
      'post_seo_keywords' => $post_seo_keywords,
      'post_seo_description' => $post_seo_description,
      'post_slug' => $post_slug,
      'post_furniture_type' => $post_furniture_type,
      'post_date' => date("Y-m-d H:i:s"),
      'post_status' => '0',
      'post_featured' => $post_featured == 'no' ? '0' : '1',
      'post_education_type' => $post_education_type,
      'post_education_age' => $post_education_age,
      'post_education_gender' => $post_education_gender,
      'post_education_community' => $post_education_community,
      'post_education_principle' => $post_education_principle,
      'post_education_phone' => $post_education_phone,
      'post_education_fax' => $post_education_fax,
      'post_education_email' => $post_education_email,
      'post_education_website' => $post_education_website,
    );
    $check=$this->db->insert('fsbo_post', $data);
    if($check){
      return $this->db->insert_id();
    }else{
      return false;
    }
  }
  function show_admin_all(){
     $this->db->select('*');
     $this->db->from('fsbo_post');
     $this->db->where_in('post_type', $names = array('property', 'furniture', 'education'));
     $query = $this->db->get();
     if($query->num_rows()){
        return $query->result();
     }else{
       return false;
     }
  }
  function show_user_all($ID){
     $this->db->select('*');
     $this->db->from('fsbo_post');
     $this->db->where_in('post_type', $names = array('property', 'furniture'));
     $this->db->where('post_user_id', $ID);
     $query = $this->db->get();
     if($query->num_rows()){
        return $query->result();
     }else{
       return false;
     }
  }
  function get_post_type($ID){
     $this->db->select('post_type');
     $this->db->from('fsbo_post');
     $this->db->where_in('post_type', $names = array('property', 'furniture', 'education'));
     $this->db->where('ID', $ID);
     if($this->session->userdata('logged_in')['user_type'] == 'admin' || $this->session->userdata('logged_in')['user_type'] == 'moderator'){

     }else{
        $this->db->where('post_user_id', $this->session->userdata('logged_in')['ID']);
     }
     $query = $this->db->get();
     if($query->num_rows()){
        return $query->result();
     }else{
       return false;
     }
  }
}
?>