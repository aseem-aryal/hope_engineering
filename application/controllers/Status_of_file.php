<?php
/* 
 * Generated by CRUDigniter v1.3 Beta 
 * www.crudigniter.com
 */
 
class Status_of_file extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Status_of_file_model');
    }
    
    /*
     * Listing of status_of_file
     */
    function index()
    {
        $data['status_of_file'] = $this->Status_of_file_model->get_all_status_of_file();
        $this->load->view('status_of_file/index',$data);
    }
    
    /*
     * Adding new status_of_file
     */
    function add()
    {   
        $this->load->library('form_validation');
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'status' => $this->input->post('status'),
				'description_of_status' => $this->input->post('description_of_status'),
            );
            
            $status_of_file_id = $this->Status_of_file_model->add_status_of_file($params);
            redirect('status_of_file/index');
        }
        else
        {
            $this->load->view('status_of_file/add');
        }
    }
    
    /*
     * Editing status_of_file
     */
    function edit($status_of_file_id)
    {   $this->load->library('form_validation');
        
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'status' => $this->input->post('status'),
				'description_of_status' => $this->input->post('description_of_status'),
            );

            $this->Status_of_file_model->update_status_of_file($status_of_file_id,$params);            
            redirect('status_of_file/index');
        }
        else
        {   
            $data['status_of_file'] = $this->Status_of_file_model->get_status_of_file($status_of_file_id);
            $this->load->view('status_of_file/edit',$data);
        }
    }
    
    /*
     * Deleting status_of_file
     */
    function remove($status_of_file_id)
    {
        $this->Status_of_file_model->delete_status_of_file($status_of_file_id);
        redirect('status_of_file/index');
    }
}
