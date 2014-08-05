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
    $post_property_not_furnished = '',
    $post_property_semi_furnished = '',
    $post_property_furnished = '',
    $post_property_gym = '',
    $post_property_storage = '',
    $post_property_parking = '',
    $post_property_security = '',
    $post_property_ac = '',
    $post_property_washer_dryer = '',
    $post_property_electricity = '',
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
      'post_property_not_furnished' => $post_property_not_furnished  == 'no' || $post_property_not_furnished  == ''  ? '0' : '1',
      'post_property_semi_furnished' => $post_property_semi_furnished  == 'no' || $post_property_semi_furnished  == '' ? '0' : '1',
      'post_property_furnished' => $post_property_furnished  == 'no' || $post_property_furnished  == '' ? '0' : '1',
      'post_property_gym' => $post_property_gym  == 'no' || $post_property_gym  == ''? '0' : '1',
      'post_property_storage' => $post_property_storage  == 'no' || $post_property_storage  == '' ? '0' : '1',
      'post_property_parking' => $post_property_parking  == 'no' || $post_property_parking  == '' ? '0' : '1',
      'post_property_security' => $post_property_security  == 'no' ? '0' : '1',
      'post_property_ac' => $post_property_ac  == 'no' || $post_property_ac  == '' ? '0' : '1',
      'post_property_washer_dryer' => $post_property_washer_dryer  == 'no' || $post_property_washer_dryer  == '' ? '0' : '1',
      'post_property_electricity' => $post_property_electricity  == 'no' || $post_property_electricity  == '' ? '0' : '1',
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
  function show_admin_all_image(){
    $query=$this->db->query("SELECT * FROM fsbo_post WHERE post_image_id IN(SELECT ID FROM fsbo_post WHERE post_type IN ('property', 'furniture', 'education') AND post_status='0' ORDER BY ID DESC) AND post_status='0' GROUP BY post_image_id ORDER BY post_image_id DESC");
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
   function show_user_all_image($ID){
    $query=$this->db->query("SELECT * FROM fsbo_post WHERE post_image_id IN(SELECT ID FROM fsbo_post WHERE post_type IN ('property', 'furniture', 'education') AND post_user_id=$ID AND post_status='0' ORDER BY ID DESC) AND post_status='0' GROUP BY post_image_id ORDER BY post_image_id DESC");
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
  $post_property_not_furnished = '',
  $post_property_semi_furnished = '',
  $post_property_furnished = '',
  $post_property_gym = '',
  $post_property_storage = '',
  $post_property_parking = '',
  $post_property_security = '',
  $post_property_ac = '',
  $post_property_washer_dryer = '',
  $post_property_electricity = '',
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
        'post_property_not_furnished' => $post_property_not_furnished  == 'no' ? '0' : '1',
        'post_property_semi_furnished' => $post_property_semi_furnished  == 'no' ? '0' : '1',
        'post_property_furnished' => $post_property_furnished  == 'no' ? '0' : '1',
        'post_property_gym' => $post_property_gym  == 'no' ? '0' : '1',
        'post_property_storage' => $post_property_storage  == 'no' ? '0' : '1',
        'post_property_parking' => $post_property_parking  == 'no' ? '0' : '1',
        'post_property_security' => $post_property_security  == 'no' ? '0' : '1',
        'post_property_ac' => $post_property_ac  == 'no' ? '0' : '1',
        'post_property_washer_dryer' => $post_property_washer_dryer  == 'no' ? '0' : '1',
        'post_property_electricity' => $post_property_electricity  == 'no' ? '0' : '1',
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
  function show_home_image($ID_1,$ID_2,$ID_3,$ID_4,$ID_5,$ID_6,$ID_7,$ID_8,$ID_9,$ID_10,$ID_11,$ID_12,$ID_13,$ID_14,$ID_15,$ID_16,$ID_17,$ID_18){
     $query = $this->db->query("SELECT * FROM fsbo_post WHERE post_image_id IN($ID_1,$ID_2,$ID_3,$ID_4,$ID_5,$ID_6,$ID_7,$ID_8,$ID_9,$ID_10,$ID_11,$ID_12,$ID_13,$ID_14,$ID_15,$ID_16,$ID_17,$ID_18) AND post_status='0' GROUP BY post_image_id ORDER BY post_image_id DESC");
    if($query->num_rows()){
      return $query->result();
    }else{
     return false;
    }
  }
  function add_wishlist(
    $post_type,
    $post_user_id,
    $post_user_type,
    $wishlist_ID
  ){
    $data = array(
      'post_type' => $post_type,
      'post_user_id' =>$post_user_id,
      'post_user_type' =>$post_user_type,
      'wishlist_ID' =>$wishlist_ID,
      'post_date' => date("Y-m-d H:i:s"),
      'post_status' => '0',
    );
    $check=$this->db->insert('fsbo_post', $data);
    if($check){
      return $this->db->insert_id();
    }else{
      return false;
    }
  }
  function show_all_wishlist($ID){
    $query = $this->db->query("SELECT * FROM fsbo_post WHERE ID IN (SELECT wishlist_ID FROM fsbo_post WHERE post_user_id=$ID and post_type = 'wishlist' and post_status = '0')");
     if($query->num_rows()){
      return $query->result();
    }else{
     return false;
    }
  }
  function show_all_image_wishlist($ID){
    $query = $this->db->query("SELECT * FROM fsbo_post WHERE post_image_id IN(SELECT ID FROM fsbo_post WHERE ID IN (SELECT wishlist_ID FROM fsbo_post WHERE post_user_id=$ID and post_type = 'wishlist' and post_status = '0')) AND post_status='0' GROUP BY post_image_id ORDER BY post_image_id DESC");
     if($query->num_rows()){
      return $query->result();
    }else{
     return false;
    }
  }
  function show_image($slug){
     $query = $this->db->query("SELECT * FROM fsbo_post WHERE post_image_id IN (SELECT ID FROM fsbo_post WHERE post_slug='$slug') AND post_status='0' ORDER BY post_image_id DESC");
     if($query->num_rows()){
        return $query->result();
      }else{
       return false;
      }
  }
  function add_batch_image($data){
    $this->db->insert_batch('fsbo_post', $data); 
  }
  function show_post_images($ID){
     $this->db->select('*');
     $this->db->from('fsbo_post');
     $this->db->where_in('post_type', $names = array('attachment'));
     $this->db->where("post_image_id", $ID);
     $this->db->where('post_status','0'); 
     $query = $this->db->get();
     if($query->num_rows()){
        return $query->result();
     }else{
       return false;
     }
  }
  function delete_image($ID,$post_image_id){
    $data = array(
        'post_status' => '1',
        'post_modified' => date("Y-m-d H:i:s"),
      );
    $this->db->where('post_image_id', $post_image_id);
    $this->db->where('ID', $ID);
    $this->db->update('fsbo_post', $data);
  }
  function get_user_data($ID){
    $query = $this->db->query("SELECT * FROM fsbo_users WHERE ID IN (SELECT post_user_id FROM fsbo_post WHERE ID=$ID)");
    if($query->num_rows()){
        return $query->result();
     }else{
       return false;
     }
  }
  function show_user_slug_all($slug){
    $query = $this->db->query("SELECT * FROM fsbo_post WHERE post_user_id IN (SELECT ID FROM fsbo_users WHERE user_slug='$slug') AND post_type IN('property','furniture','education')  AND post_status='0' ORDER BY ID DESC");
    if($query->num_rows()){
        return $query->result();
     }else{
       return false;
     } 
  }


  function search($query_array, $limit, $offset, $sort_by, $sort_order) {
    $sort_order = ($sort_order == 'desc') ? 'desc' : 'asc';
    $sort_columns = array('ID', 'post_title','post_price');
    $sort_by = (in_array($sort_by, $sort_columns)) ? $sort_by : 'post_title';
    // results query
    $q = $this->db->select('*')
      ->from('fsbo_post')
      ->where('post_status','0')
      ->limit($limit, $offset)
      ->order_by($sort_by, $sort_order); 
    if (strlen($query_array['post_title'])) {
      $q->like('post_title', $query_array['post_title']);
    }
    if (strlen($query_array['post_type'])) {
      $q->where('post_type', $query_array['post_type']);
    }
    $ret['rows'] = $q->get()->result();
    
    // count query
    $q = $this->db->select('COUNT(*) as count', FALSE)
      ->from('fsbo_post')->where('post_status','0');
    if (strlen($query_array['post_title'])) {
      $q->like('post_title', $query_array['post_title']);
    }
    if (strlen($query_array['post_type'])) {
      $q->where('post_type', $query_array['post_type']);
    }
    $tmp = $q->get()->result();
    
    $ret['num_rows'] = $tmp[0]->count;
    
    return $ret;
  }
  function search_e($query_array, $limit, $offset,$post_furniture_type, $sort_by, $sort_order) {
    $sort_order = ($sort_order == 'desc') ? 'desc' : 'asc';
    $sort_columns = array('ID', 'post_title','post_price');
    $sort_by = (in_array($sort_by, $sort_columns)) ? $sort_by : 'post_title';
    // results query
    $q = $this->db->select('*')
      ->from('fsbo_post')
      ->where('post_status','0')
      ->limit($limit, $offset)
      ->order_by($sort_by, $sort_order); 
    if($post_furniture_type== 'bedroom'){   
      $q->where('post_furniture_type', 'Bedroom');
    }
    if($post_furniture_type== 'living-room'){
      
      $q->where('post_furniture_type','Living room');
    }
    if($post_furniture_type== 'bathroom'){
     
      $q->where('post_furniture_type', 'Bathroom');
    }
    if($post_furniture_type== 'dining-room'){
     
      $q->where('post_furniture_type', 'Dining room');
    }
    if($post_furniture_type== 'kitchen'){
     
      $q->where('post_furniture_type', 'Kitchen');
    }
    if($post_furniture_type== 'miscellaneous'){
     
      $q->where('post_furniture_type', 'Miscellaneous');
    }
    if (strlen($query_array['post_title'])) {
      $q->like('post_title', $query_array['post_title']);
    }
    if (strlen($query_array['post_type'])) {
      $q->where('post_type', $query_array['post_type']);
    }
    $ret['rows'] = $q->get()->result();
    
    // count query
    $q = $this->db->select('COUNT(*) as count', FALSE)
      ->from('fsbo_post')->where('post_status','0');
     if($post_furniture_type== 'bedroom'){
      
      $q->where('post_furniture_type', 'Bedroom');
    }
    if($post_furniture_type== 'living-room'){
      
      $q->where('post_furniture_type','Living room');
    }
    if($post_furniture_type== 'bathroom'){
     
      $q->where('post_furniture_type', 'Bathroom');
    }
    if($post_furniture_type== 'dining-room'){
     
      $q->where('post_furniture_type', 'Dining room');
    }
    if($post_furniture_type== 'kitchen'){
     
      $q->where('post_furniture_type', 'Kitchen');
    }
    if($post_furniture_type== 'miscellaneous'){
     
      $q->where('post_furniture_type', 'Miscellaneous');
    }
    if (strlen($query_array['post_title'])) {
      $q->like('post_title', $query_array['post_title']);
    }
    if (strlen($query_array['post_type'])) {
      $q->where('post_type', $query_array['post_type']);
    }
    $tmp = $q->get()->result();
    
    $ret['num_rows'] = $tmp[0]->count;
    
    return $ret;
  }
}
?>