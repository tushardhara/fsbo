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
    $post_furniture_type = ''
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
      'post_status' => '0'
    );
    $check=$this->db->insert('fsbo_post', $data);
    if($check){
      return $this->db->insert_id();
    }else{
      return false;
    }
  }
}
?>