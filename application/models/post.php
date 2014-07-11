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
      'post_featured' => $post_featured == 'no' || $post_featured == '' ? '0' : '1',
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
     $this->db->where('post_status','0');
     $this->db->order_by("ID", "desc");
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
     $this->db->where('post_status','0');
     $this->db->order_by("ID", "desc"); 
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
     $this->db->where('post_status','0');
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
  function show_post_by_ID($ID){
     $this->db->select('*');
     $this->db->from('fsbo_post');
     $this->db->where_in('post_type', $names = array('property', 'furniture', 'education'));
     $this->db->where("ID", $ID);
     $this->db->where('post_status','0'); 
     $query = $this->db->get();
     if($query->num_rows()){
        return $query->result();
     }else{
       return false;
     }
  }
  function modify_education(
  $ID,
  $post_education_type = '',
  $post_education_age = '',
  $post_education_gender = '',
  $post_price = '',
  $post_education_community = '',
  $post_education_principle = '' ,
  $post_education_phone = '',
  $post_education_fax = '',
  $post_education_email = '',
  $post_education_website = '',
  $post_title = '',
  $post_description = '',
  $post_featured = '',
  $post_seo_title = '',
  $post_seo_keywords = '',
  $post_seo_description = ''
  ){
     $data = array(
        'post_education_type' => $post_education_type,
        'post_education_age' => $post_education_age,
        'post_education_gender' => $post_education_gender,
        'post_price' => $post_price,
        'post_education_community' => $post_education_community,
        'post_education_principle' => $post_education_principle,
        'post_education_phone' => $post_education_phone,
        'post_education_fax' => $post_education_fax,
        'post_education_email' => $post_education_email,
        'post_education_website' => $post_education_website,
        'post_title' => $post_title,
        'post_description' => $post_description,
        'post_featured' => $post_featured == 'no' ? '0' : '1',
        'post_seo_title' => $post_seo_title,
        'post_seo_keywords' => $post_seo_keywords,
        'post_seo_description' => $post_seo_description,
        'post_modified' => date("Y-m-d H:i:s"),
      );
    $this->db->where('ID', $ID);
    $this->db->update('fsbo_post', $data);
  }

  function modify_furniture(
  $ID,
  $post_furniture_type = '',
  $post_title = '',
  $post_price = '',
  $post_description = '',
  $post_featured = '',
  $post_seo_title = '',
  $post_seo_keywords = '',
  $post_seo_description = ''
  ){
    $data = array(
        'post_furniture_type' => $post_furniture_type,
        'post_title' => $post_title,
        'post_price' => $post_price,
        'post_description' => $post_description,
        'post_featured' => $post_featured == 'no' ? '0' : '1',
        'post_seo_title' => $post_seo_title,
        'post_seo_keywords' => $post_seo_keywords,
        'post_seo_description' => $post_seo_description,
        'post_modified' => date("Y-m-d H:i:s"),
      );
    $this->db->where('ID', $ID);
    $this->db->update('fsbo_post', $data);
  }

  function modify_property(
  $ID,
  $post_property_catergory = '',
  $post_property_type = '',
  $post_price = '',
  $post_property_size = '',
  $post_property_floor = '',
  $post_property_bedrooms = '' ,
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
  $post_featured = '',
  $post_seo_title = '',
  $post_seo_keywords = '',
  $post_seo_description = ''
  ){
    $data = array(
        'post_property_catergory' => $post_property_catergory,
        'post_property_type' => $post_property_type,
        'post_price' => $post_price,
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
        'post_featured' => $post_featured == 'no' ? '0' : '1',
        'post_seo_title' => $post_seo_title,
        'post_seo_keywords' => $post_seo_keywords,
        'post_seo_description' => $post_seo_description,
        'post_modified' => date("Y-m-d H:i:s"),
      );
    $this->db->where('ID', $ID);
    $this->db->update('fsbo_post', $data);
  }
  function find_slug($post_slug){
    $this->db->like('post_slug',$post_slug, 'after'); 
    $this->db->from('fsbo_post');
    return $this->db->count_all_results();
  }
  function delete_post($ID){
    $data = array(
        'post_status' => '1',
        'post_modified' => date("Y-m-d H:i:s"),
      );
    $this->db->where('ID', $ID);
    $this->db->update('fsbo_post', $data);
  }

  function show_property(){
     $this->db->select('*');
     $this->db->from('fsbo_post');
     $this->db->where_in('post_type', $names = array('property'));
     $this->db->where('post_status','0');
     $this->db->order_by("ID", "desc");
     $query = $this->db->get();
     if($query->num_rows()){
        return $query->result();
     }else{
       return false;
     }
  }
  function show_education(){
     $this->db->select('*');
     $this->db->from('fsbo_post');
     $this->db->where_in('post_type', $names = array('education'));
     $this->db->where('post_status','0');
     $this->db->order_by("ID", "desc");
     $query = $this->db->get();
     if($query->num_rows()){
        return $query->result();
     }else{
       return false;
     }
  }
  function show_furniture(){
     $this->db->select('*');
     $this->db->from('fsbo_post');
     $this->db->where_in('post_type', $names = array('furniture'));
     $this->db->where('post_status','0');
     $this->db->order_by("ID", "desc");
     $query = $this->db->get();
     if($query->num_rows()){
        return $query->result();
     }else{
       return false;
     }
  }
  function show_two_property_feature($ID_1,$ID_2){
     $query = $this->db->query("SELECT * FROM fsbo_post WHERE ID=$ID_1 AND post_status='0'
UNION ALL
SELECT * FROM fsbo_post WHERE ID=$ID_2 AND post_status='0'");
    if($query->num_rows()){
      return $query->result();
    }else{
     return false;
    }
  }
  function show_center_property_feature($ID){
    $this->db->select('*');
    $this->db->from('fsbo_post');
    $this->db->where_in('ID', $ID = array($ID));
    $this->db->where('post_status','0');
    $query = $this->db->get();
    if($query->num_rows()){
      return $query->result();
    }else{
     return false;
    }
  }
  function show_three_feature($ID_1,$ID_2,$ID_3){
     $query = $this->db->query("SELECT * FROM fsbo_post WHERE ID=$ID_1 AND post_status='0'
UNION ALL
SELECT * FROM fsbo_post WHERE ID=$ID_2 AND post_status='0'
UNION ALL
SELECT * FROM fsbo_post WHERE ID=$ID_3 AND post_status='0'");
    if($query->num_rows()){
      return $query->result();
    }else{
     return false;
    }
  }
}
?>