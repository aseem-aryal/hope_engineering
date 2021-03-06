<?php
/* 
 * Generated by CRUDigniter v1.3 Beta 
 * www.crudigniter.com
 */
 
class Status_of_file_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * get status_of_file by status_of_file_id
     */
    function get_status_of_file($status_of_file_id)
    {
        return $this->db->get_where('status_of_file',array('status_of_file_id'=>$status_of_file_id))->row_array();
    }
    
    /*
     * get all status_of_file
     */
    function get_all_status_of_file()
    {
        return $this->db->get('status_of_file')->result_array();
    }
    
    /*
     * function to add status_of_file
     */
    function add_status_of_file($params)
    {
        $this->db->insert('status_of_file',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update status_of_file
     */
    function update_status_of_file($status_of_file_id,$params)
    {
        $this->db->where('status_of_file_id',$status_of_file_id);
        $this->db->update('status_of_file',$params);
    }
    
    /*
     * function to delete status_of_file
     */
    function delete_status_of_file($status_of_file_id)
    {
        $this->db->delete('status_of_file',array('status_of_file_id'=>$status_of_file_id));
    }
}