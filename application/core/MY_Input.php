<?php
class MY_Input extends CI_Input {
	
	
	function save_query($query_array) {
		
		$CI =& get_instance();
		
		$CI->db->insert('fsbo_query', array('query_string' => http_build_query($query_array)));
		
		return $CI->db->insert_id();
	}
	
	function load_query($query_id) {
		
		$CI =& get_instance();
		
		$rows = $CI->db->get_where('fsbo_query', array('id' => $query_id))->result();
		if (isset($rows[0])) {
			parse_str($rows[0]->query_string, $_GET);		
		}
		
	}
	
}