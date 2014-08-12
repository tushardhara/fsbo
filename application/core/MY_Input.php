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
		for($i=0 ; $i<=sizeof($rows);$i++) {
			if (isset($rows[$i])) {
				parse_str($rows[$i]->query_string, $_GET);		
			}
		}
		/*
		if (isset($rows[0])) {
			parse_str($rows[0]->query_string, $_GET);		
		}
		if (isset($rows[1])) {
			parse_str($rows[1]->query_string, $_GET);		
		}
		if (isset($rows[2])) {
			parse_str($rows[2]->query_string, $_GET);		
		}
		if (isset($rows[3])) {
			parse_str($rows[3]->query_string, $_GET);		
		}
		if (isset($rows[4])) {
			parse_str($rows[4]->query_string, $_GET);		
		}
		if (isset($rows[5])) {
			parse_str($rows[5]->query_string, $_GET);		
		}
		if (isset($rows[6])) {
			parse_str($rows[6]->query_string, $_GET);		
		}
		if (isset($rows[7])) {
			parse_str($rows[7]->query_string, $_GET);		
		}
		if (isset($rows[8])) {
			parse_str($rows[8]->query_string, $_GET);		
		}
		if (isset($rows[9])) {
			parse_str($rows[9]->query_string, $_GET);		
		}
		if (isset($rows[10])) {
			parse_str($rows[10]->query_string, $_GET);		
		}
		if (isset($rows[11])) {
			parse_str($rows[11]->query_string, $_GET);		
		}
		if (isset($rows[12])) {
			parse_str($rows[8]->query_string, $_GET);		
		}
		if (isset($rows[13])) {
			parse_str($rows[13]->query_string, $_GET);		
		}
		if (isset($rows[14])) {
			parse_str($rows[14]->query_string, $_GET);		
		}
		if (isset($rows[15])) {
			parse_str($rows[15]->query_string, $_GET);		
		}
		if (isset($rows[16])) {
			parse_str($rows[16]->query_string, $_GET);		
		}
		if (isset($rows[17])) {
			parse_str($rows[17]->query_string, $_GET);		
		}
		if (isset($rows[18])) {
			parse_str($rows[18]->query_string, $_GET);		
		}
		if (isset($rows[19])) {
			parse_str($rows[19]->query_string, $_GET);		
		}*/
	}
	
}