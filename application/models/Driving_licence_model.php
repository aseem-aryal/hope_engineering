<?php
/* 
 * Generated by CRUDigniter v1.3 Beta 
 * www.crudigniter.com
 */
 
class Driving_licence_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * get driving_licence by driving_licence_id
     */
    function get_driving_licence($driving_licence_id)
    {
        return $this->db->get_where('driving_licence',array('driving_licence_id'=>$driving_licence_id))->row_array();
    }
    
    function get_driving_licence_by_generalid($generalid)
    {
        return $this->db->get_where('driving_licence',array('general_details_id'=>$generalid))->result_array();
    }
    
    function get_driving_licence_by_generalid_od($generalid)
    {
        return $this->db->get_where('driving_licence',array('general_details_id'=>$generalid, 'od_or_tp'=>0))->result_array();
    }
    
        function get_driving_licence_by_generalid_tp($generalid)
    {
        return $this->db->get_where('driving_licence',array('general_details_id'=>$generalid, 'od_or_tp'=>1))->result_array();
    }
    /*
     * get all driving_licence
     */
    function get_all_driving_licence()
    {
        return $this->db->get('driving_licence')->result_array();
    }
    
    /*
     * function to add driving_licence
     */
    function add_driving_licence($params)
    {
        $this->db->insert('driving_licence',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update driving_licence
     */
    function update_driving_licence($driving_licence_id,$params)
    {
        $this->db->where('driving_licence_id',$driving_licence_id);
        $this->db->update('driving_licence',$params);
    }
    
    /*
     * function to delete driving_licence
     */
    function delete_driving_licence($driving_licence_id)
    {
        $this->db->delete('driving_licence',array('driving_licence_id'=>$driving_licence_id));
    }
}
