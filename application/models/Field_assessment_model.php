<?php
/* 
 * Generated by CRUDigniter v1.3 Beta 
 * www.crudigniter.com
 */
 
class Field_assessment_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * get field_assessment by assessment_id
     */
    function get_field_assessment($assessment_id)
    {
        return $this->db->get_where('field_assessment',array('assessment_id'=>$assessment_id))->row_array();
    }
    
        /*
     * get field_assessment by assessment_id
     */
    function get_field_assessment_by_general_id($generalid)
    {
        return $this->db->get_where('field_assessment',array('general_details_id'=>$generalid))->result_array();
        
    }

   function get_od_tp_field_assessment_by_general_id($generalid)
    {
        return $this->db->get_where('field_assessment_tp',array('general_details_id'=>$generalid))->result_array();
        
    }

	/* get field assessment by tp*/
	function get_field_assessment_tp_by_general_id($generalid){
		return $this->db->get_where('field_assessment_tp',array('general_details_id'=>$generalid))->result_array();

	}
	/* Get field assessment count */
	function get_total_number_of_field_assessment($generalid){
		//$query = $this->db->query('SELECT * FROM field_assessment WHERE general_details_id ='.$generalid.';');		
		$this->db->select('count(*) cnt');
 		$this->db->from('field_assessment');
		$this->db->where('general_details_id',$generalid);
		$query = $this->db->get();
 		return $query->row_array();	
	}		
    
	function get_number_of_second_field_assessment($generalid){
		//$query = $this->db->query('SELECT * FROM field_assessment WHERE general_details_id ='.$generalid.';');		
		$this->db->select('count(*) cnt');
 		$this->db->from('second_od_field_assessment');
		$this->db->where('general_details_id',$generalid);
		$query = $this->db->get();
 		return $query->row_array();	
	}	

	function get_second_od_tp_tp_field_assessment_count($generalid){
		$this->db->select('count(*) cnt');
 		$this->db->from('second_tp_field_assessment');
		$this->db->where('general_details_id',$generalid);
		$query = $this->db->get();
 		return $query->row_array();	
	}

	function get_third_od_tp_tp_field_assessment_count($generalid){
		$this->db->select('count(*) cnt');
 		$this->db->from('third_tp_field_assessment');
		$this->db->where('general_details_id',$generalid);
		$query = $this->db->get();
 		return $query->row_array();	
	}

	function get_second_od_tp_tp_field_assessment_info($generalid){
		$this->db->select('*');
 		$this->db->from('second_tp_field_assessment');
		$this->db->where('general_details_id',$generalid);
		$query = $this->db->get();
 		return $query->result_array();	
	}

	function get_third_od_tp_tp_field_assessment_info($generalid){
		$this->db->select('*');
 		$this->db->from('third_tp_field_assessment');
		$this->db->where('general_details_id',$generalid);
		$query = $this->db->get();
 		return $query->row_array();	
	}



	function get_total_number_of_tp_field_assessment($generalid){
		//$query = $this->db->query('SELECT * FROM field_assessment WHERE general_details_id ='.$generalid.';');		
		$this->db->select('count(*) cnt');
 		$this->db->from('field_assessment_tp');
		$this->db->where('general_details_id',$generalid);
		$query = $this->db->get();
 		return $query->row_array();	
	}

	function get_second_tp_field_assessment($generalid){
			$this->db->select('count(*) cnt');
		 	$this->db->from('second_od_field_assessment');
			$this->db->where('general_details_id',$generalid);
			$query = $this->db->get();
		 	return $query->row_array();
			
	}

	function get_final_tp_field_assessment($generalid){
			$this->db->select('count(*) cnt');
		 	$this->db->from('third_od_field_assessment');
			$this->db->where('general_details_id',$generalid);
			$query = $this->db->get();
		 	return $query->row_array();
			
	}

	function get_od_tp_field_assessment_count_od($generalid){
			$this->db->select('count(*) cnt');
		 	$this->db->from('field_assessment');
			$this->db->where('general_details_id',$generalid);
			$query = $this->db->get();
		 	return $query->row_array();
			
	}

	function get_od_tp_field_assessment_count_tp($generalid){
			$this->db->select('count(*) cnt');
		 	$this->db->from('field_assessment_tp');
			$this->db->where('general_details_id',$generalid);
			$query = $this->db->get();
		 	return $query->row_array();
			
	}

	function get_first_od_field_assessment_by_general_id($generalid){
			$this->db->select('*');
		 	$this->db->from('field_assessment');
			$this->db->where('general_details_id',$generalid);
			$query = $this->db->get();
		 	return $query->result_array();
	}

	
	function get_second_od_field_assessment_info_by_general_id($generalid){
			$this->db->select('*');
		 	$this->db->from('second_od_field_assessment');
			$this->db->where('general_details_id',$generalid);
			$query = $this->db->get();
		 	return $query->row_array();
			
	}


	function get_second_tp_field_assessment_info_by_generalid($generalid){
			$this->db->select('*');
		 	$this->db->from('second_od_field_assessment');
			$this->db->where('general_details_id',$generalid);
			$query = $this->db->get();
		 	return $query->result_array();
			
	}
	

	function get_second_od_field_assessment_info_by_generalid($generalid){
			$this->db->select('*');
		 	$this->db->from('second_od_field_assessment');
			$this->db->where('general_details_id',$generalid);
			$query = $this->db->get();
		 	return $query->row_array();
		        //return $this->db->get('second_od_field_assessment',array('general_details_id'=>$generalid))->result_array();

	}
	
	function get_second_od_field_assessment_by_assessmentId($generalid){
		        return $this->db->get('second_od_field_assessment',array('assessment_id'=>$generalid))->row_array();

	}
	
	function get_final_od_field_assessment_by_general_id($generalid){
			$this->db->select('*');
		 	$this->db->from('third_od_field_assessment');
			$this->db->where('general_details_id',$generalid);
			$query = $this->db->get();
		 	return $query->result_array();
		        		        
			//return $this->db->get('third_od_field_assessment',array('general_details_id'=>$generalid))->result_array();

	}

	function get_final_od_field_assessment_by_assessmentId($generalid){
		        return $this->db->get('third_od_field_assessment',array('assessment_id'=>$generalid))->result_array();

	}
/*
	function get_second_tp_field_assessment_info_by_generalid($generalid){
			$this->db->select('*');
		 	$this->db->from('second_od_field_assessment');
			$this->db->where('general_details_id',$generalid);
			$query = $this->db->get();
		 	return $query->row_array();
		        //return $this->db->get('second_od_field_assessment',array('general_details_id'=>$generalid))->result_array();

	}
*/	
	function get_final_tp_field_assessment_info_by_general_id($generalid){
			$this->db->select('*');
		 	$this->db->from('third_od_field_assessment');
			$this->db->where('general_details_id',$generalid);
			$query = $this->db->get();
		 	return $query->row_array();
		        //return $this->db->get('second_od_field_assessment',array('general_details_id'=>$generalid))->result_array();

	}
    /*
     * get all field_assessment
     */
    function get_all_field_assessment()
    {
        return $this->db->get('field_assessment')->result_array();
    }
    
    /*
     * function to add field_assessment
     */
    function add_field_assessment($params)
    {
        $this->db->insert('field_assessment',$params);
        return $this->db->insert_id();
    }

    function add_od_tp_field_assessment($params)
    {
        $this->db->insert('field_assessment_tp',$params);
        return $this->db->insert_id();
    }
    
   /*Add tp field assessment details */
   function add_tp_field_assessment($params)
    {
        $this->db->insert('field_assessment_tp',$params);
        return $this->db->insert_id();
    }

/* add second field assessment for OD */
    function add_second_od_field_assessment($second_params)
    {	
	$this->db->insert('second_od_field_assessment',$second_params);
        return $this->db->insert_id();
    }
//Add final OD field assessment
    function add_final_od_field_assessment($second_params)
    {	
	$this->db->insert('third_od_field_assessment',$second_params);
        return $this->db->insert_id();
    }
//Add to field assessment tp table
function add_to_field_assessment_tp($params){
	$this->db->insert('field_assessment_tp',$params);
        return $this->db->insert_id();
}

//add second and final tp details to table
    function add_second_tp_field_assessment($second_params)
    {	
	$this->db->insert('second_tp_field_assessment',$second_params);
        return $this->db->insert_id();
    }

    function add_final_tp_field_assessment($second_params)
    {	
	$this->db->insert('third_tp_field_assessment',$second_params);
        return $this->db->insert_id();
    }
    /*
     * function to update field_assessment
     */
    function update_field_assessment($assessment_id,$params)
    {
        $this->db->where('assessment_id',$assessment_id);
        $this->db->update('field_assessment',$params);
    }

   function update_tp_field_assessment($assessment_id,$params)
    {
        $this->db->where('assessment_id',$assessment_id);
        $this->db->update('field_assessment_tp',$params);
    }

function update_second_od_field_assessment($assessment_id,$params)
    {
        $this->db->where('assessment_id',$assessment_id);
        $this->db->update('second_od_field_assessment',$params);
    }
    
function update_final_od_field_assessment($assessment_id,$params)
    {
        $this->db->where('assessment_id',$assessment_id);
        $this->db->update('third_od_field_assessment',$params);
    }
    /*
     * function to delete field_assessment
     */
    function delete_field_assessment($assessment_id)
    {
        $this->db->delete('field_assessment',array('assessment_id'=>$assessment_id));
    }

    function delete_second_field_assessment($assessment_id)
    {
        $this->db->delete('second_od_field_assessment',array('assessment_id'=>$assessment_id));
    }

function delete_final_field_assessment($assessment_id)
    {
        $this->db->delete('third_od_field_assessment',array('assessment_id'=>$assessment_id));
    }

    function get_type_by_generalid($generalid){
	$this->db->select('type_of_case');
 	$this->db->from('general_details');
	$this->db->where('general_details_id',$generalid);
	$query = $this->db->get();
 	return $query->row_array();	
   }

   function get_type_by_general_id($generalid){
	$this->db->select('type_of_case');
 	$this->db->from('general_details');
	$this->db->where('general_details_id',$generalid);
	$query = $this->db->get();
 	return $query->row_array();	
   }
}
