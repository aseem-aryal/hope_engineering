<?php
class All_details extends CI_Model{

	public function get_list(){
		
		$query=$this->db->query("SELECT * FROM all_details"); //$this->ci_phpgrid->example_method(3);
		return $query->result_array();
	}
	
}
?>